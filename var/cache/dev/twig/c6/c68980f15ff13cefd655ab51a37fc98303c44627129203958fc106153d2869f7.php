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

/* home/index.html.twig */
class __TwigTemplate_31904c48a88d2e15424bc697ebef084c0f5baee1bda40eea971fc4d743e51166 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "S2IPartner";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "isVerified", [], "any", false, false, false, 7)) {
                // line 8
                echo "            <h2 class=\"text-center\">Cliquer sur le lien envoyer par mail pour verifier votre adresse email et acceder au contenue.</h2>
        ";
            } elseif ((            // line 9
(isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 9, $this->source); })()) || (isset($context["manager"]) || array_key_exists("manager", $context) ? $context["manager"] : (function () { throw new RuntimeError('Variable "manager" does not exist.', 9, $this->source); })()))) {
                // line 10
                echo "            <div class=\"container\">
                <div class=\"d-flex justify-content-between\">
                    <a class=\"btn btn-outline-dark\" style=\"margin-bottom: 10px;\" href=\"";
                // line 12
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission");
                echo "\">Publier une nouvelle offre</a>
                    ";
                // line 13
                if ((isset($context["manager"]) || array_key_exists("manager", $context) ? $context["manager"] : (function () { throw new RuntimeError('Variable "manager" does not exist.', 13, $this->source); })())) {
                    // line 14
                    echo "                        ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
                    echo "
                            <div class=\"d-flex\">
                                ";
                    // line 16
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "recherche", [], "any", false, false, false, 16), 'row');
                    echo "
                                ";
                    // line 17
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "submit", [], "any", false, false, false, 17), 'row');
                    echo "
                            </div>
                        ";
                    // line 19
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
                    echo "
                    ";
                }
                // line 21
                echo "                </div>
                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 22, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                    // line 23
                    echo "                    <div class=\"jumbotron\">
                        <h2>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 24), "html", null, true);
                    echo "</h2>
                        <p>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "describ", [], "any", false, false, false, 25), 0, 100), "html", null, true);
                    echo "...</p>
                        ";
                    // line 26
                    if ((isset($context["manager"]) || array_key_exists("manager", $context) ? $context["manager"] : (function () { throw new RuntimeError('Variable "manager" does not exist.', 26, $this->source); })())) {
                        // line 27
                        echo "                            <a href=\"/candidat/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 27), "html", null, true);
                        echo "\" class=\"btn btn-outline-success\">Candidats : ";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "candidats", [], "any", false, false, false, 27)), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 29
                    echo "                        <a href=\"/mission/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "/edit\" class=\"btn btn-outline-primary\">Modifier</a>
                        <a href=\"/mission/";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 30), "html", null, true);
                    echo "/delete\" class=\"btn btn-outline-danger\">Supprimer</a>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "            </div>
        ";
            } elseif (            // line 34
(isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "            <div class=\"container\">
                ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 36, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                    // line 37
                    echo "                    <div class=\"jumbotron\">
                        <h2>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 38), "html", null, true);
                    echo "</h2>
                        <p>
                            ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "describ", [], "any", false, false, false, 40), 0, 100), "html", null, true);
                    echo "...
                            <small>
                                <a href=\"/mission/";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 42), "html", null, true);
                    echo "\">En savoir plus</a>
                            </small>
                        </p>
                        <p>Duree : ";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "durate", [], "any", false, false, false, 45), "html", null, true);
                    echo " jours</p>
                        <p>Tarif journalier : ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "price", [], "any", false, false, false, 46), "html", null, true);
                    echo " €</p>
                        <p><a href=\"/mission/";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 47), "html", null, true);
                    echo "\" class=\"btn btn-outline-primary\">En savoir plus</a></p>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "            </div>
        ";
            } else {
                // line 52
                echo "            <p>Profil not completed, complet it <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                echo "\">here</p></p>
        ";
            }
            // line 54
            echo "    ";
        } else {
            // line 55
            echo "        <div class=\"container-fluid\" 
            style=\"background-image: linear-gradient(transparent, black), url('/bg.jpg'); 
                    height: 650px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;
                    border-radius: 0px 0px 250px 0;\">
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div style=\"background-color: rgba(255, 255, 255, 0.3); padding: 50px 20px;\">
                    <img src=\"logo.png\" alt=\"logo s2ipartner\" width=\"100%\"/>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\" id=\"about\">
            <div class=\"bg-light\" style=\"border-radius: 250px 0px 0px 250px;\">
                <div class=\"container\" style=\"padding: 50px 20px;\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-dark\" style=\"font-family: 'Montserrat'; font-weight: 300; font-size: 23px;\">
                            <div class=\"d-flex\">
                                <img width=\"250\" style=\"margin: 25px 0;\" src=\"/logo.png\" alt=\"logo s2ipartner\" />
                            </div>
                            <p><strong class=\"font-weight-bold\">S2I PARTNER</strong> est le fournisseur privilégié des petites et moyennes entreprise et un partenaire de choix des intégrateurs et constructeurs dans le cadre de <strong class=\"font-weight-bold\">projets de grandes envergures</strong>.<br/><br/>
                            Offrant une gamme de services étendue dans le domaine de l’<strong class=\"font-weight-bold\">IT</strong> sur tout le territoire national.<br/>
                            Nous prenons en charge tout ou partie des <strong class=\"font-weight-bold\">projets informatiques</strong> de l’étude à la réalisation, jusqu’à la livraison finale.</p>
                            <br/>
                            <p class=\"alert alert-success\">Créée en <strong class=\"font-weight-bold\">2013</strong></p>
                            <p class=\"alert alert-success\">Implantée à <strong class=\"font-weight-bold\">Paris</strong>, avec un service opérationnel basé à <strong class=\"font-weight-bold\">Vélizy-Villacoublay</strong></p>
                            <p class=\"alert alert-success\">Des intervenants et <strong class=\"font-weight-bold\">techniciens expérimentés</strong> et rigoureux</p>
                            <p class=\"alert alert-success\">Une capacité d'intervention sur tout <strong class=\"font-weight-bold\">le territoire et en Belgique Wallon.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bg-light\" id=\"service\">
            <div class=\"h-100\" style=\"background-image: linear-gradient(black, transparent, black), url('pro.jpg');
                                        background-size: cover;
                                        border-radius: 0 250px 250px 0;
                                        overflow: hidden;\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-light\" style=\"font-size: 32px; padding: 100px 50px; background-color: rgba(0, 0, 0, 0.4);\">
                            <div class=\"d-flex align-items-center\" style=\"min-height: 150px;\">
                                <h2 class=\"text-center text-success\" style=\"font-size: 42px; font-family: 'Montserrat';\"><strong>Un interlocuteur unique</strong> pour toutes vos demandes de services </h2>
                            </div>
                            <p>❖ La prise en charge, la gestion, la planification  et le pilotage de vos projets.</p>
                            <p>❖ L’accompagnement de vos unités dans leurs  projets de migration de postes utilisateurs,  mobiles ainsi que la téléphonie.</p>
                            <p>❖ L'intégration de solutions et applications métier Formation des collaborateurs à la prise en main  des applications et solutions Microsoft.</p>
                            <p>❖ Déploiement de service Helpdesk et  support de proximité.</p>
                            <p>❖ Analyse, conseil et reporting, La gestion  efficiente de vos assets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\">
            <div class=\"bg-light h-100 d-flex align-items-center\" style=\"border-radius: 250px 0 0 0;\">
                <div class=\"container\" style=\"padding: 100px 0;\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\" style=\"min-height: 500px; border-bottom: 5px solid #d4edda; margin-top: 50px;\">
                            <h4 class=\"alert alert-success\">End user</h4>
                            <p class=\"text-justify\" style=\"font-size: 21px; font-family: 'Montserrat'; margin: 15px;\">Concentrez-vous sur votre cœur de
                            métier, nous soutenons la
                            productivité de vos unités en
                            prenant en charge la configuration,
                            le déploiement, la gestion des
                            postes de travail ainsi que le
                            support et la proximité
                            informatique auprès de vos
                            collaborateurs.</p>
                        </div>
                        <div class=\"col-lg-4\" style=\"min-height: 500px; border-bottom: 5px solid #cce5ff; margin-top: 50px;\">
                            <h4 class=\"alert alert-primary\">Technologie et infrastructure</h4>
                            <p class=\"text-justify\" style=\"font-size: 21px; font-family: 'Montserrat'; margin: 15px;\">Grâce à nos solutions développées en
                            interne, nous vous permettons de
                            bénéficier de services et technologies
                            puissantes pour l'automatisation, le
                            déploiement et l'exploitation de vos
                            environnements et infrastructure SI.</p>
                        </div>
                        <div class=\"col-lg-4\" style=\"min-height: 500px; border-bottom: 5px solid #fff3cd; margin-top: 50px;\">
                            <h4 class=\"alert alert-warning\">Conseil et management</h4>
                            <p class=\"text-justify\" style=\"font-size: 21px; font-family: 'Montserrat'; margin: 15px;\">Nous accompagnions votre
                            transformation numérique grâce
                            une solide expérience en matière
                            de management des services et
                            projets IT, une forte expertise et
                            des certifications reconnues dans
                            des domaines clés, appuyées par de
                            solides partenariats avec les grands
                            acteurs du monde technologique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\" id=\"contact\" style=\"height: 800px;\">
            <div class=\"row h-100\">
                <div class=\"col-lg-4\" style=\"background-image: url('/louvre.png'); background-position: center;\">
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"row h-100\">
                        <div class=\"col-12 d-flex align-items-center justify-content-center bg-primary\">
                            <div id=\"footer\">
                                <img src=\"/logo.png\" width=\"100%\" alt=\"Logo s2ipartner\"/>
                            </div>
                        </div>
                        <div class=\"col-12 d-flex flex-column justify-content-around\" style=\"background-color: #6A00FF; padding-top: 50px;\">
                            <h2 class=\"text-center text-light\">LA QUALITÉS SANS COMPROMIS</h2>
                            <div class=\"row text-light\">
                                <div class=\"col-sm-6\" style=\"font-size: 21px;\">
                                    <div style=\"border-left: 2px solid white;  padding-left: 20px;\">
                                        <p><strong>Paris</strong><br/>
                                        142 Rue de Rivoli<br/>
                                        75001, Paris<br/>
                                        Tél : 01 47 02 31 46<br/>
                                        Mail : contact@s2ipartner.com</p>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\" style=\"font-size: 21px;\">
                                    <div style=\"border-left: 2px solid white;  padding-left: 20px;\">
                                        <p><strong>Vélizy - Villacoublay</strong><br/>
                                        16, av Morane Saulnier<br/>
                                        78140 Vélzy-Villacoublay<br/>
                                        Tél : 01 83 81 95 62<br/>
                                        Mail : contact@s2ipartner.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 55,  229 => 54,  223 => 52,  219 => 50,  210 => 47,  206 => 46,  202 => 45,  196 => 42,  191 => 40,  186 => 38,  183 => 37,  179 => 36,  176 => 35,  174 => 34,  171 => 33,  162 => 30,  157 => 29,  149 => 27,  147 => 26,  143 => 25,  139 => 24,  136 => 23,  132 => 22,  129 => 21,  124 => 19,  119 => 17,  115 => 16,  109 => 14,  107 => 13,  103 => 12,  99 => 10,  97 => 9,  94 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S2IPartner{% endblock %}

{% block body %}
    {% if (app.user) %}
        {% if not app.user.isVerified %}
            <h2 class=\"text-center\">Cliquer sur le lien envoyer par mail pour verifier votre adresse email et acceder au contenue.</h2>
        {% elseif (client or manager) %}
            <div class=\"container\">
                <div class=\"d-flex justify-content-between\">
                    <a class=\"btn btn-outline-dark\" style=\"margin-bottom: 10px;\" href=\"{{ path('mission') }}\">Publier une nouvelle offre</a>
                    {% if (manager) %}
                        {{form_start(form)}}
                            <div class=\"d-flex\">
                                {{form_row(form.recherche)}}
                                {{form_row(form.submit)}}
                            </div>
                        {{form_end(form)}}
                    {% endif %}
                </div>
                {% for mission in missions %}
                    <div class=\"jumbotron\">
                        <h2>{{mission.title}}</h2>
                        <p>{{mission.describ | slice(0, 100)}}...</p>
                        {% if (manager) %}
                            <a href=\"/candidat/{{mission.id}}\" class=\"btn btn-outline-success\">Candidats : {{mission.candidats|length}}</a>
                        {% endif %}
                        <a href=\"/mission/{{mission.id}}/edit\" class=\"btn btn-outline-primary\">Modifier</a>
                        <a href=\"/mission/{{mission.id}}/delete\" class=\"btn btn-outline-danger\">Supprimer</a>
                    </div>
                {% endfor %}
            </div>
        {% elseif (profil) %}
            <div class=\"container\">
                {% for mission in missions %}
                    <div class=\"jumbotron\">
                        <h2>{{mission.title}}</h2>
                        <p>
                            {{mission.describ | slice(0, 100)}}...
                            <small>
                                <a href=\"/mission/{{mission.id}}\">En savoir plus</a>
                            </small>
                        </p>
                        <p>Duree : {{mission.durate}} jours</p>
                        <p>Tarif journalier : {{mission.price}} €</p>
                        <p><a href=\"/mission/{{mission.id}}\" class=\"btn btn-outline-primary\">En savoir plus</a></p>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>Profil not completed, complet it <a href=\"{{ path('profil') }}\">here</p></p>
        {% endif %}
    {% else %}
        <div class=\"container-fluid\" 
            style=\"background-image: linear-gradient(transparent, black), url('/bg.jpg'); 
                    height: 650px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;
                    border-radius: 0px 0px 250px 0;\">
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div style=\"background-color: rgba(255, 255, 255, 0.3); padding: 50px 20px;\">
                    <img src=\"logo.png\" alt=\"logo s2ipartner\" width=\"100%\"/>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\" id=\"about\">
            <div class=\"bg-light\" style=\"border-radius: 250px 0px 0px 250px;\">
                <div class=\"container\" style=\"padding: 50px 20px;\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-dark\" style=\"font-family: 'Montserrat'; font-weight: 300; font-size: 23px;\">
                            <div class=\"d-flex\">
                                <img width=\"250\" style=\"margin: 25px 0;\" src=\"/logo.png\" alt=\"logo s2ipartner\" />
                            </div>
                            <p><strong class=\"font-weight-bold\">S2I PARTNER</strong> est le fournisseur privilégié des petites et moyennes entreprise et un partenaire de choix des intégrateurs et constructeurs dans le cadre de <strong class=\"font-weight-bold\">projets de grandes envergures</strong>.<br/><br/>
                            Offrant une gamme de services étendue dans le domaine de l’<strong class=\"font-weight-bold\">IT</strong> sur tout le territoire national.<br/>
                            Nous prenons en charge tout ou partie des <strong class=\"font-weight-bold\">projets informatiques</strong> de l’étude à la réalisation, jusqu’à la livraison finale.</p>
                            <br/>
                            <p class=\"alert alert-success\">Créée en <strong class=\"font-weight-bold\">2013</strong></p>
                            <p class=\"alert alert-success\">Implantée à <strong class=\"font-weight-bold\">Paris</strong>, avec un service opérationnel basé à <strong class=\"font-weight-bold\">Vélizy-Villacoublay</strong></p>
                            <p class=\"alert alert-success\">Des intervenants et <strong class=\"font-weight-bold\">techniciens expérimentés</strong> et rigoureux</p>
                            <p class=\"alert alert-success\">Une capacité d'intervention sur tout <strong class=\"font-weight-bold\">le territoire et en Belgique Wallon.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bg-light\" id=\"service\">
            <div class=\"h-100\" style=\"background-image: linear-gradient(black, transparent, black), url('pro.jpg');
                                        background-size: cover;
                                        border-radius: 0 250px 250px 0;
                                        overflow: hidden;\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-light\" style=\"font-size: 32px; padding: 100px 50px; background-color: rgba(0, 0, 0, 0.4);\">
                            <div class=\"d-flex align-items-center\" style=\"min-height: 150px;\">
                                <h2 class=\"text-center text-success\" style=\"font-size: 42px; font-family: 'Montserrat';\"><strong>Un interlocuteur unique</strong> pour toutes vos demandes de services </h2>
                            </div>
                            <p>❖ La prise en charge, la gestion, la planification  et le pilotage de vos projets.</p>
                            <p>❖ L’accompagnement de vos unités dans leurs  projets de migration de postes utilisateurs,  mobiles ainsi que la téléphonie.</p>
                            <p>❖ L'intégration de solutions et applications métier Formation des collaborateurs à la prise en main  des applications et solutions Microsoft.</p>
                            <p>❖ Déploiement de service Helpdesk et  support de proximité.</p>
                            <p>❖ Analyse, conseil et reporting, La gestion  efficiente de vos assets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\">
            <div class=\"bg-light h-100 d-flex align-items-center\" style=\"border-radius: 250px 0 0 0;\">
                <div class=\"container\" style=\"padding: 100px 0;\">
                    <div class=\"row\">
                        <div class=\"col-lg-4\" style=\"min-height: 500px; border-bottom: 5px solid #d4edda; margin-top: 50px;\">
                            <h4 class=\"alert alert-success\">End user</h4>
                            <p class=\"text-justify\" style=\"font-size: 21px; font-family: 'Montserrat'; margin: 15px;\">Concentrez-vous sur votre cœur de
                            métier, nous soutenons la
                            productivité de vos unités en
                            prenant en charge la configuration,
                            le déploiement, la gestion des
                            postes de travail ainsi que le
                            support et la proximité
                            informatique auprès de vos
                            collaborateurs.</p>
                        </div>
                        <div class=\"col-lg-4\" style=\"min-height: 500px; border-bottom: 5px solid #cce5ff; margin-top: 50px;\">
                            <h4 class=\"alert alert-primary\">Technologie et infrastructure</h4>
                            <p class=\"text-justify\" style=\"font-size: 21px; font-family: 'Montserrat'; margin: 15px;\">Grâce à nos solutions développées en
                            interne, nous vous permettons de
                            bénéficier de services et technologies
                            puissantes pour l'automatisation, le
                            déploiement et l'exploitation de vos
                            environnements et infrastructure SI.</p>
                        </div>
                        <div class=\"col-lg-4\" style=\"min-height: 500px; border-bottom: 5px solid #fff3cd; margin-top: 50px;\">
                            <h4 class=\"alert alert-warning\">Conseil et management</h4>
                            <p class=\"text-justify\" style=\"font-size: 21px; font-family: 'Montserrat'; margin: 15px;\">Nous accompagnions votre
                            transformation numérique grâce
                            une solide expérience en matière
                            de management des services et
                            projets IT, une forte expertise et
                            des certifications reconnues dans
                            des domaines clés, appuyées par de
                            solides partenariats avec les grands
                            acteurs du monde technologique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\" id=\"contact\" style=\"height: 800px;\">
            <div class=\"row h-100\">
                <div class=\"col-lg-4\" style=\"background-image: url('/louvre.png'); background-position: center;\">
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"row h-100\">
                        <div class=\"col-12 d-flex align-items-center justify-content-center bg-primary\">
                            <div id=\"footer\">
                                <img src=\"/logo.png\" width=\"100%\" alt=\"Logo s2ipartner\"/>
                            </div>
                        </div>
                        <div class=\"col-12 d-flex flex-column justify-content-around\" style=\"background-color: #6A00FF; padding-top: 50px;\">
                            <h2 class=\"text-center text-light\">LA QUALITÉS SANS COMPROMIS</h2>
                            <div class=\"row text-light\">
                                <div class=\"col-sm-6\" style=\"font-size: 21px;\">
                                    <div style=\"border-left: 2px solid white;  padding-left: 20px;\">
                                        <p><strong>Paris</strong><br/>
                                        142 Rue de Rivoli<br/>
                                        75001, Paris<br/>
                                        Tél : 01 47 02 31 46<br/>
                                        Mail : contact@s2ipartner.com</p>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\" style=\"font-size: 21px;\">
                                    <div style=\"border-left: 2px solid white;  padding-left: 20px;\">
                                        <p><strong>Vélizy - Villacoublay</strong><br/>
                                        16, av Morane Saulnier<br/>
                                        78140 Vélzy-Villacoublay<br/>
                                        Tél : 01 83 81 95 62<br/>
                                        Mail : contact@s2ipartner.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}", "home/index.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/home/index.html.twig");
    }
}
