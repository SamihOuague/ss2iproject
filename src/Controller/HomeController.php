<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Entity\Customer;
use App\Entity\Client;
use App\Entity\Mission;
use App\Entity\Manager;

class HomeController extends AbstractController
{
    /**
     * @var Security
     */

    private $security;

    public function __construct(Security $security)
    {
       $this->security = $security;
    }
    
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $profil = false;
        $client = false;
        $manager = false;
        $missions = [];
        if ($this->security->getUser()) {
            $profil = $this->getDoctrine()
                        ->getRepository(Customer::class)
                        ->findOneBy(["user" => $this->security->getUser()->getId()]);
            $client = $this->getDoctrine()
                        ->getRepository(Client::class)
                        ->findOneBy(["user" => $this->security->getUser()->getId()]);
            $manager = $this->getDoctrine()
                        ->getRepository(Manager::class)
                        ->findOneBy(["user" => $this->security->getUser()->getId()]);
            
            if ($profil || $manager) {
                $missions = $this->getDoctrine()
                        ->getRepository(Mission::class)
                        ->findAll();
            }
            elseif ($client) {
                $missions = $this->security
                        ->getUser()
                        ->getClient()
                        ->getMissions();
            }
            else {
                return $this->redirectToRoute('profil');
            }
        }
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'profil' => $profil,
            'client' => $client,
            'missions' => $missions,
            'manager' => $manager
        ]);
    }
}
