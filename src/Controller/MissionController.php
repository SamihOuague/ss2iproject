<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Security\Core\Security;
use App\Entity\Mission;
use App\Entity\Candidat;

class MissionController extends AbstractController
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
     * @Route("/mission", name="mission")
     */
    public function index(Request $request): Response
    {
        if (!($this->security->getUser() && $this->security->getUser()->getClient())) {
            return $this->redirectToRoute('home');
        }
        $mission = new Mission();
        $form = $this->createFormBuilder($mission)
                    ->add("title", TextType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Titre ",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("describ", TextareaType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Description",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("place", TextType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Lieu ",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("price", IntegerType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Tarif ",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("durate", IntegerType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Duree (En jour)",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("Complete", SubmitType::class, [
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
            $mission = new Mission();
            $data->setClient($this->security->getUser()->getClient());
            $entityManager->persist($data);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('mission/index.html.twig', [
            'controller_name' => 'MissionController',
            'missionForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/mission/{id}")
     */
    public function getMission(int $id) : Response {
        if (!($this->security->getUser() && $this->security->getUser()->getCustomer())) {
            return $this->redirectToRoute('home');
        }
        $isCandidat = false;
        $mission = $this->getDoctrine()
                        ->getRepository(Mission::class)
                        ->find($id);
        foreach ($mission->getCandidats() as $key => $value) {
            if ($value->getCustomer()->first()->getId() == $this->security->getUser()->getCustomer()->getId())
                $isCandidat = true;
        }
        
        return $this->render("mission/mission.html.twig", [
            'mission' => $mission,
            'postule' => !($isCandidat)
        ]);
    }

    /**
     * @Route("/mission/{id}/postuler")
     */
    public function postuleMission(int $id, Request $request) : Response {
        if (!($this->security->getUser() && $this->security->getUser()->getCustomer())) {
            return $this->redirectToRoute('home');
        }
        $mission = $this->getDoctrine()
                    ->getRepository(Mission::class)
                    ->find($id);
        $form = $this->createFormBuilder()
                    ->add("missionId", HiddenType::class, [
                        "attr" => [
                            "value" => $id
                        ]
                    ])
                    ->add("Postuler", SubmitType::class, [
                        "attr" => [
                            "class" => "btn btn-primary",
                            "style" => "margin-top: 25px;"
                        ]
                    ])->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $candidat = new Candidat();
            $customer = $this->security->getUser()->getCustomer();
            $candidat->addMission($mission);
            $candidat->addCustomer($customer);
            $entityManager->persist($candidat);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('mission/postuler.html.twig', [
            'controller_name' => 'MissionController',
            'postuleForm' => $form->createView(),
            'title' => $mission->getTitle()
        ]);
    }


    /**
     * @Route("/mission/{id}/delete")
     */
    public function deleteMission(int $id, Request $request) : Response {
        if (!($this->security->getUser() && $this->security->getUser()->getClient())) {
            return $this->redirectToRoute('home');
        }
        $mission = $this->getDoctrine()
                    ->getRepository(Mission::class)
                    ->find($id);
        $form = $this->createFormBuilder()
                    ->add("missionId", HiddenType::class, [
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
            if ($id == $data["missionId"]) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($mission);
                $entityManager->flush();
            }
            return $this->redirectToRoute('home');
        }
        return $this->render('mission/delete.html.twig', [
            'controller_name' => 'MissionController',
            'deleteForm' => $form->createView(),
            'title' => $mission->getTitle()
        ]);
    }

    /**
     * @Route("/mission/{id}/edit")
     */
    public function missionEdit(int $id, Request $request): Response {
        if (!($this->security->getUser() && $this->security->getUser()->getClient())) {
            return $this->redirectToRoute('home');
        }
        $mission = $this->getDoctrine()
                        ->getRepository(Mission::class)
                        ->find($id);
        $form = $this->createFormBuilder($mission)
                    ->add("title", TextType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Titre ",
                            "style" => "margin-top: 25px;",
                            "value" => $mission->getTitle()
                        ]
                    ])
                    ->add("describ", TextareaType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Description",
                            "style" => "margin-top: 25px;",
                            "value" => $mission->getDescrib()
                        ]
                    ])
                    ->add("place", TextType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Lieu ",
                            "style" => "margin-top: 25px;",
                            "value" => $mission->getPlace()
                        ]
                    ])
                    ->add("price", IntegerType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Tarif ",
                            "style" => "margin-top: 25px;",
                            "value" => $mission->getPrice()
                        ]
                    ])
                    ->add("durate", IntegerType::class, [
                        "label" => false,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Duree (En jour)",
                            "style" => "margin-top: 25px;",
                            "value" => $mission->getDurate()
                        ]
                    ])
                    ->add("Complete", SubmitType::class, [
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
            $entityManager->persist($data);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('mission/index.html.twig', [
            'controller_name' => 'MissionController',
            'missionForm' => $form->createView()
        ]);
    }
}
