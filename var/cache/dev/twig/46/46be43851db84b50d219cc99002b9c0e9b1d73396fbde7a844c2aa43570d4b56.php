<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/service.html.twig */
class __TwigTemplate_67566a0d21afe2e3d61815c3f048178765f6630b8774e4476bde76cf22030a6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/service.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/service.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/service.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\" 
            style=\"background-image: linear-gradient(transparent, black), url('/service.jpg'); 
                    height: 650px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;
                    border-radius: 0px 0px 250px 0;\"
                    id=\"headbg\">
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div style=\"background-color: rgba(255, 255, 255, 0.1); padding: 50px 50px;\">
                    <h1 class=\"text-center font-weight-bold text-warning\" style=\"font-size: 62px; font-family: 'Montserrat';\">UN SERVICE <br/>A LA HAUTEUR DE VOS EXIGEANCES</h1>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\" id=\"limit\">
            <div class=\"bg-light\" style=\"border-radius: 250px 0px 0px 250px;\">
                <div class=\"container\" style=\"padding: 100px 20px;\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <img src=\"image19.png\" width=\"100%\"/>
                        </div>
                        <div class=\"col-lg-6 text-dark\" style=\"font-family: 'Montserrat'; font-weight: 300; font-size: 23px;\">
                            <h2 class=\"text-primary\">Support DESK</h2>
                            <p class=\"text-justify\">Grâce à son expertise dans
                            les services IT, et ses compétences
                            techniques, S2I PARTNER, est en
                            mesure de vous accompagner dans
                            Cette période, en mettant à disposition un plateau de 450m² de bureau dédié, afin d’accompagner vos collaborateurs dans leurs problématiques avec un support desk dédié, qu’ils soient dans vos bureaux ou en télétravail,
                            grâce à de nouvelles solutions et services certifiées ITIL
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class=\"bg-light\">
            <div class=\"h-100\" style=\"background-image: linear-gradient(black, transparent, black), url('support.jpg');
                                        background-size: cover;
                                        background-position: center;
                                        border-radius: 0 250px 250px 0;
                                        overflow: hidden;\">
                <div class=\"container\">
                    <div class=\"row\" style=\"margin: 50px 0; background-color: rgba(0,0,0,0.4);\">
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-primary text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">SUPPORT N1</h3>
                            <ul class=\"text-light\" style=\"font-size: 21px;\">
                                <li>Gestion des appels & tickets clients</li>
                                <li>Traitement des demandes basiques</li>
                                <li>Résolution d’incident</li>
                                <li>Escalade tickets vers N2 si pas dans le périmètre</li>
                                <li>Relance des tickets ouverts</li>
                            </ul>
                        </div>
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-warning text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">SUPPORT N2</h3>
                            <ul class=\"text-light\" style=\"font-size: 21px;\">
                                <li>Gestion des tickets clients non résolus du 1er niveau</li>
                                <li>Analyse approfondie des incidents</li>
                                <li>Installation/réinstallation</li>
                                <li>Installation des applications métiers (sous procédure)</li>
                                <li>Assistance client non résolue</li>
                            </ul>
                        </div>
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-success text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">SUPPORT N3</h3>
                            <h5 class=\"font-weight-bold text-light\">Trois domaines d’expertises</h5>
                            <ul class=\"text-light\" style=\"font-size: 21px;\">
                                <li>Expertise en Windows</li>                        
                                <li>Expertise en Linux/Unix</li>
                                <li>Expertise en Infrastructure cloud</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\">
            <div class=\"bg-light h-100 d-flex align-items-center\" style=\"border-radius: 250px 0 0 0; font-family: 'Montserrat';\">
                <div class=\"container\" style=\"padding: 100px 0;\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\" style=\"min-height: 500px; border-bottom: 5px solid #d4edda; margin-top: 50px;\">
                            <img src=\"procedure.jpg\" width=\"100%\" alt=\"procedure incident s2iparnter\"/>
                        </div>
                        <div class=\"col-lg-6\" style=\"min-height: 500px; border-bottom: 5px solid #cce5ff; margin-top: 50px; font-size: 21px;\">
                            <p class=\"text-justify\">Toutes les actions effectuées par le
                            support N1 sont procédures et validés par le client sur les applications métiers.</p>
                            <br/>
                            <p class=\"text-justify\">Les cas d’incident hors-procédures fait
                            l’usage d’un remonté vers le client pour
                            avoir un retour pour les futurs cas
                            similaires.</p>
                            <br/>
                            <p class=\"text-justify\">Respect des délais de traitement(SLA)</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <script>
            \$(\"#headbg\").css(\"height\", window.innerHeight);
        </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container-fluid\" 
            style=\"background-image: linear-gradient(transparent, black), url('/service.jpg'); 
                    height: 650px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;
                    border-radius: 0px 0px 250px 0;\"
                    id=\"headbg\">
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div style=\"background-color: rgba(255, 255, 255, 0.1); padding: 50px 50px;\">
                    <h1 class=\"text-center font-weight-bold text-warning\" style=\"font-size: 62px; font-family: 'Montserrat';\">UN SERVICE <br/>A LA HAUTEUR DE VOS EXIGEANCES</h1>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\" id=\"limit\">
            <div class=\"bg-light\" style=\"border-radius: 250px 0px 0px 250px;\">
                <div class=\"container\" style=\"padding: 100px 20px;\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <img src=\"image19.png\" width=\"100%\"/>
                        </div>
                        <div class=\"col-lg-6 text-dark\" style=\"font-family: 'Montserrat'; font-weight: 300; font-size: 23px;\">
                            <h2 class=\"text-primary\">Support DESK</h2>
                            <p class=\"text-justify\">Grâce à son expertise dans
                            les services IT, et ses compétences
                            techniques, S2I PARTNER, est en
                            mesure de vous accompagner dans
                            Cette période, en mettant à disposition un plateau de 450m² de bureau dédié, afin d’accompagner vos collaborateurs dans leurs problématiques avec un support desk dédié, qu’ils soient dans vos bureaux ou en télétravail,
                            grâce à de nouvelles solutions et services certifiées ITIL
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class=\"bg-light\">
            <div class=\"h-100\" style=\"background-image: linear-gradient(black, transparent, black), url('support.jpg');
                                        background-size: cover;
                                        background-position: center;
                                        border-radius: 0 250px 250px 0;
                                        overflow: hidden;\">
                <div class=\"container\">
                    <div class=\"row\" style=\"margin: 50px 0; background-color: rgba(0,0,0,0.4);\">
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-primary text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">SUPPORT N1</h3>
                            <ul class=\"text-light\" style=\"font-size: 21px;\">
                                <li>Gestion des appels & tickets clients</li>
                                <li>Traitement des demandes basiques</li>
                                <li>Résolution d’incident</li>
                                <li>Escalade tickets vers N2 si pas dans le périmètre</li>
                                <li>Relance des tickets ouverts</li>
                            </ul>
                        </div>
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-warning text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">SUPPORT N2</h3>
                            <ul class=\"text-light\" style=\"font-size: 21px;\">
                                <li>Gestion des tickets clients non résolus du 1er niveau</li>
                                <li>Analyse approfondie des incidents</li>
                                <li>Installation/réinstallation</li>
                                <li>Installation des applications métiers (sous procédure)</li>
                                <li>Assistance client non résolue</li>
                            </ul>
                        </div>
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-success text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">SUPPORT N3</h3>
                            <h5 class=\"font-weight-bold text-light\">Trois domaines d’expertises</h5>
                            <ul class=\"text-light\" style=\"font-size: 21px;\">
                                <li>Expertise en Windows</li>                        
                                <li>Expertise en Linux/Unix</li>
                                <li>Expertise en Infrastructure cloud</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\">
            <div class=\"bg-light h-100 d-flex align-items-center\" style=\"border-radius: 250px 0 0 0; font-family: 'Montserrat';\">
                <div class=\"container\" style=\"padding: 100px 0;\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\" style=\"min-height: 500px; border-bottom: 5px solid #d4edda; margin-top: 50px;\">
                            <img src=\"procedure.jpg\" width=\"100%\" alt=\"procedure incident s2iparnter\"/>
                        </div>
                        <div class=\"col-lg-6\" style=\"min-height: 500px; border-bottom: 5px solid #cce5ff; margin-top: 50px; font-size: 21px;\">
                            <p class=\"text-justify\">Toutes les actions effectuées par le
                            support N1 sont procédures et validés par le client sur les applications métiers.</p>
                            <br/>
                            <p class=\"text-justify\">Les cas d’incident hors-procédures fait
                            l’usage d’un remonté vers le client pour
                            avoir un retour pour les futurs cas
                            similaires.</p>
                            <br/>
                            <p class=\"text-justify\">Respect des délais de traitement(SLA)</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <script>
            \$(\"#headbg\").css(\"height\", window.innerHeight);
        </script>
{% endblock %}", "home/service.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/home/service.html.twig");
    }
}
