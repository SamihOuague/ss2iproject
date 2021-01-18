<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Form\ContactFormType;
use App\Form\SearchFormType;
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
    public function index(Request $request): Response
    {
        $profil = false;
        $client = false;
        $manager = false;
        $missions = [];
        $form = $this->createForm(SearchFormType::class);
        $form->handleRequest($request);
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
                            ->findBy([], ['id' => 'DESC']);
                if ($form->isSubmitted() && $form->isValid())
                {
                    $missions = $this->getDoctrine()
                        ->getRepository(Mission::class)
                        ->search($form->getData()["recherche"]);
                }
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
            'manager' => $manager,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact(MailerInterface $mailer, Request $request): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $email = (new Email())
            ->from('souaguen96@gmail.com')
            ->to('souaguen96@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            ->replyTo($form->getData()["email"])
            ->priority(Email::PRIORITY_HIGH)
            ->subject($form->getData()["sujet"])
            ->text("email:" . $form->getData()["email"] ."\ntel:". $form->getData()["phone"] ."\nmessage:". $form->getData()["message"])
            ->html("<p>Email : ". $form->getData()["email"] ."</p>
                    <p>Tel :". $form->getData()["phone"] ."</p>
                    <p>". $form->getData()["message"] ."</p>");

            $mailer->send($email);
            return $this->redirectToRoute('home');
        }
        return $this->render("home/contact.html.twig", [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/a-propos", name="about")
     */
    public function about(): Response
    {
        return $this->render("home/about.html.twig");
    }

    /**
     * @Route("/nos-services", name="service")
     */
    public function service(): Response
    {
        return $this->render("home/service.html.twig");
    }

    /**
     * @Route("/privacy-policy", name="privacy")
     */
    public function privacy(): Response
    {
        return $this->render("home/privacypolicy.html.twig");
    }
}