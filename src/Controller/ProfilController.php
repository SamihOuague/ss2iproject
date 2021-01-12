<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Entity\Customer;
use App\Entity\Client;

class ProfilController extends AbstractController
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
     * @Route("/profil", name="profil")
     */
    public function index(): Response
    {
        $user = $this->security->getUser();
        if (!$user)
            return $this->redirectToRoute('home');
        elseif ($user->getClient())
            return $this->redirectToRoute('client');
        elseif ($user->getCustomer())
            return $this->redirectToRoute('customer');
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController'
        ]);
    }
}
