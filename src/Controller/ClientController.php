<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use App\Entity\Client;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends AbstractController
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
     * @Route("/client", name="client")
     */
    public function client(Request $request): Response
    {
        if (!($this->security->getUser() && !$this->security->getUser()->getCustomer())) {
            return $this->redirectToRoute('home');
        }

        $profil = $this->security->getUser()->getClient();
        if (!$profil)
            $profil = new Client();
        
        $form = $this->createFormBuilder($profil)
                    ->add("lastname", TextType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Nom",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("firstname", TextType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Prenom",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("phone", TextType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Numero de telephone",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("poste", TextType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Poste occupe",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("email", EmailType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Adresse e-mail",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("society", TextType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Societe",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("Completer", SubmitType::class, [
                        "attr" => [
                            "class" => "btn btn-outline-success form-control",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $profil->setUser($this->security->getUser());
            $profil->setIsVerified(true);
            $entityManager->persist($data);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('client/client.html.twig', [
            'controller_name' => 'ClientController',
            'profilForm' => $form->createView()
        ]);
    }
}
