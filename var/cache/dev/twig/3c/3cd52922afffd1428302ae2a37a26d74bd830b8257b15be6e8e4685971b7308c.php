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

/* home/about.html.twig */
class __TwigTemplate_bd1ed38590adbdac0ec69d650bdbd884f887a8de37fa52ab9eff127457f84486 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
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
            style=\"background-image: linear-gradient(transparent, black), url('/about.jpg'); 
                    height: 650px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;
                    border-radius: 0px 0px 250px 0;\"
                    id=\"headbg\">
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div style=\"background-color: rgba(255, 255, 255, 0.1); padding: 50px 50px;\">
                    <h1 class=\"text-center font-weight-bold text-warning\" style=\"font-size: 62px; font-family: 'Montserrat';\">A PROPOS DE <br/><strong class=\"text-danger\">S2IPartner</strong></h1>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\" id=\"limit\">
            <div class=\"bg-light\" style=\"border-radius: 250px 0px 0px 250px;\">
                <div class=\"container\" style=\"padding: 100px 20px;\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-dark\" style=\"font-family: 'Montserrat'; font-weight: 300; font-size: 23px;\">
                            <h2 class=\"text-success\">Pourquoi <strong class=\"text-danger\">S2IPartner</strong> ?</h2>
                            <p>C’est une entreprise de <strong class=\"font-weight-bold\">services numériques</strong> à taille humaine avec de hautes
                            compétences techniques et une <strong class=\"font-weight-bold\">expertise de plus de 10 ans dans les services IT</strong>.</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-primary text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">Des spécialistes qui répondent à vos besoins</h3>
                            <p class=\"text-justify\" style=\"font-size: 21px;\">Une équipe d’expert à
                                                    votre disposition pour
                                                    gérer chaque de
                                                    demande selon les
                                                    prérogative de votre
                                                    organisation tout en
                                                    assurant une qualité de
                                                    services optimal</p>
                        </div>
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-warning text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">Une fiabilité de service à toutes épreuves</h3>
                            <p class=\"text-justify\" style=\"font-size: 21px;\">Nous faisons de la qualité
                                                    de service une de nos
                                                    principales priorités, c'est
                                                    pour cela que nous
                                                    prenons un grand soin à
                                                    sélectionner et
                                                    qualifier les intervenants
                                                    les plus perspicaces pour
                                                    l'ensemble des projets.</p>
                        </div>
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-success text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">Un processus de continuité</h3>
                            <p class=\"text-justify\" style=\"font-size: 21px;\">Un service continu
                                                    notamment par le suivi, la
                                                    conduite du changement
                                                    et l’accompagnement des
                                                    organisations même
                                                    après la phase de clôture
                                                    du projet initial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bg-light\">
            <div class=\"h-100\" style=\"background-image: linear-gradient(black, transparent, black), url('progress.jpg');
                                        background-size: cover;
                                        border-radius: 0 250px 250px 0;
                                        overflow: hidden;\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-light\" style=\"font-size: 32px; padding: 100px 50px; background-color: rgba(0, 0, 0, 0.4); font-family: 'Montserrat';\">
                            <div class=\"d-flex align-items-center\" style=\"min-height: 150px;\">
                                <h2 class=\"text-center text-success\" style=\"font-size: 42px;\"><strong>S2IPARTNER</strong> en chiffres</h2>
                            </div>
                            <div class=\"d-flex flex-column align-items-center\">
                                <div class=\"alert alert-primary ml-auto\" style=\"font-size: 32px;\">
                                    127000 postes déployés
                                </div>
                                <div class=\"alert alert-secondary mr-auto\" style=\"font-size: 32px;\">
                                    33500 interventions
                                </div>
                                <div class=\"alert alert-warning\" style=\"font-size: 32px;\">
                                    37000 smartphones déployés
                                </div>
                                <div class=\"alert alert-success ml-auto\" style=\"font-size: 32px;\">
                                    160% de taux de progression
                                </div>
                                <div class=\"alert alert-danger mr-auto\" style=\"font-size: 32px;\">
                                    99% de taux de satisfaction
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\">
            <div class=\"bg-light h-100 d-flex align-items-center\" style=\"border-radius: 250px 0 0 0; font-family: 'Montserrat';\">
                <div class=\"container\" style=\"padding: 100px 0;\">
                    <h2 class=\"text-primary\">NOTRE METHODOLOGIE</h4>
                    <div class=\"row\">
                        <div class=\"col-lg-8\" style=\"min-height: 500px; border-bottom: 5px solid #d4edda; margin-top: 50px;\">
                            <img src=\"methodology.png\" width=\"100%\" alt=\"methodologie s2iparnter\"/>
                        </div>
                        <div class=\"col-lg-4\" style=\"min-height: 500px; border-bottom: 5px solid #cce5ff; margin-top: 50px; font-size: 21px;\">
                            <ol>
                                <li>
                                    <h4 class=\"text-success\">Analyse</h4>
                                    <p class=\"text-justify\">Les besoins et processus</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Conception</h4>
                                    <p class=\"text-justify\">étude générale de
                                    conception architecturale du
                                    projet et des spécifications</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Phase pilote</h4>
                                    <p class=\"text-justify\">Éprouver et garantir la
                                    solution et méthode
                                    cible par des test de
                                    simulation</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Validation</h4>
                                    <p class=\"text-justify\">Mesure opérationnelle
                                    par des procédures et
                                    documents</p>
                                    


                                </li>
                                <li>
                                    <h4 class=\"text-success\">Production</h4>
                                    <p class=\"text-justify\">Intégration et
                                    déploiement des
                                    solutions</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Logistique</h4>
                                    <p class=\"text-justify\">Distribution et
                                    logistique</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Suivi</h4>
                                    <p class=\"text-justify\">Accompagnement et
                                    assistance users</p>
                                </li>
                            </ol>
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
        return "home/about.html.twig";
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
            style=\"background-image: linear-gradient(transparent, black), url('/about.jpg'); 
                    height: 650px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;
                    border-radius: 0px 0px 250px 0;\"
                    id=\"headbg\">
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div style=\"background-color: rgba(255, 255, 255, 0.1); padding: 50px 50px;\">
                    <h1 class=\"text-center font-weight-bold text-warning\" style=\"font-size: 62px; font-family: 'Montserrat';\">A PROPOS DE <br/><strong class=\"text-danger\">S2IPartner</strong></h1>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\" id=\"limit\">
            <div class=\"bg-light\" style=\"border-radius: 250px 0px 0px 250px;\">
                <div class=\"container\" style=\"padding: 100px 20px;\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-dark\" style=\"font-family: 'Montserrat'; font-weight: 300; font-size: 23px;\">
                            <h2 class=\"text-success\">Pourquoi <strong class=\"text-danger\">S2IPartner</strong> ?</h2>
                            <p>C’est une entreprise de <strong class=\"font-weight-bold\">services numériques</strong> à taille humaine avec de hautes
                            compétences techniques et une <strong class=\"font-weight-bold\">expertise de plus de 10 ans dans les services IT</strong>.</p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-primary text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">Des spécialistes qui répondent à vos besoins</h3>
                            <p class=\"text-justify\" style=\"font-size: 21px;\">Une équipe d’expert à
                                                    votre disposition pour
                                                    gérer chaque de
                                                    demande selon les
                                                    prérogative de votre
                                                    organisation tout en
                                                    assurant une qualité de
                                                    services optimal</p>
                        </div>
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-warning text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">Une fiabilité de service à toutes épreuves</h3>
                            <p class=\"text-justify\" style=\"font-size: 21px;\">Nous faisons de la qualité
                                                    de service une de nos
                                                    principales priorités, c'est
                                                    pour cela que nous
                                                    prenons un grand soin à
                                                    sélectionner et
                                                    qualifier les intervenants
                                                    les plus perspicaces pour
                                                    l'ensemble des projets.</p>
                        </div>
                        <div class=\"col-lg-4\" style=\"font-family: 'Montserrat';\">
                            <h3 class=\"text-success text-center\" style=\"min-height: 100px; margin: 50px 0 0 0;\">Un processus de continuité</h3>
                            <p class=\"text-justify\" style=\"font-size: 21px;\">Un service continu
                                                    notamment par le suivi, la
                                                    conduite du changement
                                                    et l’accompagnement des
                                                    organisations même
                                                    après la phase de clôture
                                                    du projet initial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bg-light\">
            <div class=\"h-100\" style=\"background-image: linear-gradient(black, transparent, black), url('progress.jpg');
                                        background-size: cover;
                                        border-radius: 0 250px 250px 0;
                                        overflow: hidden;\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-light\" style=\"font-size: 32px; padding: 100px 50px; background-color: rgba(0, 0, 0, 0.4); font-family: 'Montserrat';\">
                            <div class=\"d-flex align-items-center\" style=\"min-height: 150px;\">
                                <h2 class=\"text-center text-success\" style=\"font-size: 42px;\"><strong>S2IPARTNER</strong> en chiffres</h2>
                            </div>
                            <div class=\"d-flex flex-column align-items-center\">
                                <div class=\"alert alert-primary ml-auto\" style=\"font-size: 32px;\">
                                    127000 postes déployés
                                </div>
                                <div class=\"alert alert-secondary mr-auto\" style=\"font-size: 32px;\">
                                    33500 interventions
                                </div>
                                <div class=\"alert alert-warning\" style=\"font-size: 32px;\">
                                    37000 smartphones déployés
                                </div>
                                <div class=\"alert alert-success ml-auto\" style=\"font-size: 32px;\">
                                    160% de taux de progression
                                </div>
                                <div class=\"alert alert-danger mr-auto\" style=\"font-size: 32px;\">
                                    99% de taux de satisfaction
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\">
            <div class=\"bg-light h-100 d-flex align-items-center\" style=\"border-radius: 250px 0 0 0; font-family: 'Montserrat';\">
                <div class=\"container\" style=\"padding: 100px 0;\">
                    <h2 class=\"text-primary\">NOTRE METHODOLOGIE</h4>
                    <div class=\"row\">
                        <div class=\"col-lg-8\" style=\"min-height: 500px; border-bottom: 5px solid #d4edda; margin-top: 50px;\">
                            <img src=\"methodology.png\" width=\"100%\" alt=\"methodologie s2iparnter\"/>
                        </div>
                        <div class=\"col-lg-4\" style=\"min-height: 500px; border-bottom: 5px solid #cce5ff; margin-top: 50px; font-size: 21px;\">
                            <ol>
                                <li>
                                    <h4 class=\"text-success\">Analyse</h4>
                                    <p class=\"text-justify\">Les besoins et processus</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Conception</h4>
                                    <p class=\"text-justify\">étude générale de
                                    conception architecturale du
                                    projet et des spécifications</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Phase pilote</h4>
                                    <p class=\"text-justify\">Éprouver et garantir la
                                    solution et méthode
                                    cible par des test de
                                    simulation</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Validation</h4>
                                    <p class=\"text-justify\">Mesure opérationnelle
                                    par des procédures et
                                    documents</p>
                                    


                                </li>
                                <li>
                                    <h4 class=\"text-success\">Production</h4>
                                    <p class=\"text-justify\">Intégration et
                                    déploiement des
                                    solutions</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Logistique</h4>
                                    <p class=\"text-justify\">Distribution et
                                    logistique</p>
                                </li>
                                <li>
                                    <h4 class=\"text-success\">Suivi</h4>
                                    <p class=\"text-justify\">Accompagnement et
                                    assistance users</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            \$(\"#headbg\").css(\"height\", window.innerHeight);
        </script>
{% endblock %}", "home/about.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/home/about.html.twig");
    }
}
