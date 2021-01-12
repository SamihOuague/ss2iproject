<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Security\Core\Security;
use App\Entity\Mission;
use App\Entity\Candidat;

class CandidatController extends AbstractController
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
     * @Route("/candidat", name="candidat")
     */
    public function index(): Response
    {
        if (!($this->security->getUser() && $this->security->getUser()->getClient())) {
            return $this->redirectToRoute('home');
        }
        return $this->render('candidat/index.html.twig', [
            'controller_name' => 'CandidatController',
        ]);
    }

    /**
     * @Route("/candidat/{id}/profil")
     */
    public function candidatProfil(int $id) : Response {
        if (!($this->security->getUser() && $this->security->getUser()->getClient())) {
            return $this->redirectToRoute('home');
        }
        $candidat = $this->getDoctrine()
                        ->getRepository(Candidat::class)
                        ->find($id);
        return $this->render('candidat/profil.html.twig', [
            'controller_name' => 'CandidatController',
            'candidat' => $candidat
        ]);
    }
    /**
     * @Route("/candidat/{id}")
     */
    public function candidats(int $id) : Response 
    {
        if (!($this->security->getUser() && $this->security->getUser()->getClient())) {
            return $this->redirectToRoute('home');
        }
        $candidats = $this->getDoctrine()
                        ->getRepository(Mission::class)
                        ->find($id)
                        ->getCandidats();
        return $this->render('candidat/candidats.html.twig', [
            "candidats" => $candidats,
            "mission" => $id
        ]);
    }

    /**
     * @Route("/candidat/{id}/delete")
     */
    public function deleteCandidat(int $id, Request $request) : Response {
        if (!($this->security->getUser() && $this->security->getUser()->getClient())) {
            return $this->redirectToRoute('home');
        }
        $candidat = $this->getDoctrine()
                        ->getRepository(Candidat::class)
                        ->find($id);
        $form = $this->createFormBuilder()
                    ->add("candidatId", HiddenType::class, [
                        "attr" => [
                            "value" => $id
                        ]
                    ])
                    ->add("Supprimer", SubmitType::class, [
                        "attr" => [
                            "class" => "btn btn-danger",
                            "style" => "margin-top: 25px;"
                        ]
                    ])->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            if ($id == $data["candidatId"]) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($candidat);
                $entityManager->flush();
            }
            return $this->redirectToRoute('home');
        }
        return $this->render('candidat/delete.html.twig', [
            'controller_name' => 'CandidatController',
            'deleteForm' => $form->createView(),
        ]);
    }
}
