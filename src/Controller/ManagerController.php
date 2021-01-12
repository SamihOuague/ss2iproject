<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ManagerController extends AbstractController
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
     * @Route("/manager", name="manager")
     */
    public function index(): Response
    {
        if (!($this->security->getUser() && $this->security->getUser()->getManager())) {
            return $this->redirectToRoute('home');
        }
        return $this->render('manager/index.html.twig', [
            'controller_name' => 'ManagerController',
        ]);
    }
}
