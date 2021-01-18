<?php

namespace App\Controller;

use App\Entity\Customer;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\String\Slugger\SluggerInterface;

class CustomerController extends AbstractController
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
     * @Route("/customer", name="customer")
     */
    public function customer(Request $request, SluggerInterface $slugger): Response
    {
        if (!($this->security->getUser() && !$this->security->getUser()->getClient())) {
            return $this->redirectToRoute('home');
        }
        $profil = $this->security->getUser()->getCustomer();
        $cv = true;
        if (!$profil) {
            $profil = new Customer();
            $cv = false;
        }
        
        $form = $this->createFormBuilder($profil)
                    ->add("lastname", TextType::class, [
                        "label" => false,
                        "required" => true,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Nom de famille",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("firstname", TextType::class, [
                        "label" => false,
                        "required" => true,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Prenom",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("phone", TextType::class, [
                        "label" => false,
                        "required" => true,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Mobile/Tel",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("role", TextType::class, [
                        "label" => false,
                        "required" => true,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Poste rechercher ",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("vehicle", ChoiceType::class, [
                        "label" => false,
                        "choices" => [
                            "Vehicule" => null,
                            "Oui" => true,
                            "Non" => false
                        ],
                        "attr" => [
                            "class" => "form-control",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("gender", ChoiceType::class, [
                        "choices" => [
                            "Homme" => "Homme",
                            "Femme" => "Femme"
                        ],
                        "label" => false,
                        "required" => true,
                        "attr" => [
                            "class" => "form-control",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("zipcode", IntegerType::class, [
                        "label" => false,
                        "required" => true,
                        "attr" => [
                            "class" => "form-control",
                            "placeholder" => "Code postal",
                            "style" => "margin-top: 25px;"
                        ]
                    ])
                    ->add("contract", ChoiceType::class, [
                        "label" => false,
                        "required" => true,
                        "choices" => [
                            "Type de contrat" => null,
                            "CDI" => "CDI",
                            "CDD" => "CDD",
                            "Independant" => "Independant"
                        ],
                        "attr" => [
                            "class" => "form-control",
                            "style" => "margin-top: 25px;",
                        ]
                    ])
                    ->add("siret", TextType::class, [
                        "required" => false,
                        "label" => false,
                        "attr" => [
                            "class" => "form-control d-none",
                            "placeholder" => "Numero de siret",
                            "style" => "margin: 25px 0;",
                        ]
                    ])
                    ->add("cv", FileType::class, [
                        "label" => "Telecharger votre CV :",
                        "required" => false,
                        "mapped" => false,
                        "constraints" => [
                            new File([
                                'maxSize' => '10240k',
                                'mimeTypes' => [
                                    'application/pdf',
                                    'application/x-pdf',
                                ],
                                'mimeTypesMessage' => 'Please upload a valid PDF document',
                            ])
                        ],
                        "attr" => [
                            "class" => "form-control",
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
            $cvFile = $form->get('cv')->getData();
            $data = $form->getData();
            if ($cvFile) {
                $original = pathinfo($cvFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($original);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$cvFile->guessExtension();
                try {
                    $cvFile->move(
                        $this->getParameter('cv_directory'),
                        $newFilename
                    );
                    $data->setCv($newFilename);
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
            }
            $entityManager = $this->getDoctrine()->getManager();
            $this->security->getUser()->setIsVerified(true);
            $profil->setUser($this->security->getUser());
            $entityManager->persist($data);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('customer/customer.html.twig', [
            'controller_name' => 'ProfilController',
            'profilForm' => $form->createView()
        ]);
    }
}