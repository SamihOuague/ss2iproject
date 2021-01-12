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
        echo "
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "isVerified", [], "any", false, false, false, 8)) {
                // line 9
                echo "            <h2 class=\"text-center\">Cliquer sur le lien envoyer par mail pour verifier votre adresse email et acceder au contenue.</h2>
        ";
            } elseif ((            // line 10
(isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 10, $this->source); })()) || (isset($context["manager"]) || array_key_exists("manager", $context) ? $context["manager"] : (function () { throw new RuntimeError('Variable "manager" does not exist.', 10, $this->source); })()))) {
                // line 11
                echo "            <div class=\"container\">
                <a class=\"btn btn-outline-dark\" style=\"margin-bottom: 10px;\" href=\"";
                // line 12
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission");
                echo "\">Proposer une mission</a>
                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 13, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                    // line 14
                    echo "                    <div class=\"jumbotron\">
                        <h2>";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 15), "html", null, true);
                    echo "</h2>
                        <p>";
                    // line 16
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "describ", [], "any", false, false, false, 16), 0, 100), "html", null, true);
                    echo "...</p>
                        ";
                    // line 17
                    if ((isset($context["manager"]) || array_key_exists("manager", $context) ? $context["manager"] : (function () { throw new RuntimeError('Variable "manager" does not exist.', 17, $this->source); })())) {
                        // line 18
                        echo "                            <a href=\"/candidat/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 18), "html", null, true);
                        echo "\" class=\"btn btn-outline-success\">Candidats : ";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "candidats", [], "any", false, false, false, 18)), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 20
                    echo "                        <a href=\"/mission/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 20), "html", null, true);
                    echo "/edit\" class=\"btn btn-outline-primary\">Modifier</a>
                        <a href=\"/mission/";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 21), "html", null, true);
                    echo "/delete\" class=\"btn btn-outline-danger\">Supprimer</a>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            </div>
        ";
            } elseif (            // line 25
(isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 25, $this->source); })())) {
                // line 26
                echo "            <div class=\"container\">
                ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 27, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                    // line 28
                    echo "                    <div class=\"jumbotron\">
                        <h2>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 29), "html", null, true);
                    echo "</h2>
                        <p>
                            ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "describ", [], "any", false, false, false, 31), 0, 100), "html", null, true);
                    echo "...
                            <small>
                                <a href=\"/mission/";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 33), "html", null, true);
                    echo "\">En savoir plus</a>
                            </small>
                        </p>
                        <p>Duree : ";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "durate", [], "any", false, false, false, 36), "html", null, true);
                    echo " jours</p>
                        <p>Tarif journalier : ";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "price", [], "any", false, false, false, 37), "html", null, true);
                    echo "\$</p>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "            </div>
        ";
            } else {
                // line 42
                echo "            <p>Profil not completed, complet it <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                echo "\">here</p></p>
        ";
            }
            // line 44
            echo "    ";
        } else {
            // line 45
            echo "        <div class=\"container-fluid\" 
            style=\"background-image: url('/smokebg.png'); 
                    height: 300px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;\">
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div style=\"background-color: rgba(255, 255, 255, 0.4); padding: 20px;\">
                    <img src=\"/logo.png\" width=\"450\" alt=\"Logo s2ipartner\"/>
                </div>
            </div>
        </div>
        <div class=\"container\" style=\"padding-top: 50px;\">
            <h1 class=\"text-center font-weight-bold\" style=\"color: #6A00FF;\">UN SERVICE <br/>A LA HAUTEUR DE VOS EXIGEANCES</h1>
            <div class=\"row\">
                <div class=\"col-lg-6 text-dark\" style=\"font-size: 18px;\">
                    <div class=\"d-flex align-items-center\" style=\"min-height: 150px;\">
                        <img width=\"250\" src=\"/logo.png\" alt=\"logo s2ipartner\" />
                    </div>
                    <p><strong>S2I PARTNER</strong> est le fournisseur privilégié des petites et moyennes entreprise et un partenaire de choix des intégrateurs et constructeurs dans le cadre de <strong>projets de grandes envergures</strong>.<br/>
                    Offrant une gamme de services étendue dans le domaine de l’<strong>IT</strong> sur tout le territoire national.<br/>
                    Nous prenons en charge tout ou partie des <strong>projets informatiques</strong> de l’étude à la réalisation, jusqu’à la livraison finale.</p>
                    <p class=\"alert alert-success\">Créée en <strong>2013</strong></p>
                    <p class=\"alert alert-success\">Implantée à <strong>Paris</strong>, avec un service opérationnel basé à <strong>Vélizy-Villacoublay</strong></p>
                    <p class=\"alert alert-success\">Des intervenants et <strong>techniciens expérimentés</strong> et rigoureux</p>
                    <p class=\"alert alert-success\">Une capacité d'intervention sur tout <strong>le territoire et en Belgique Wallon.</strong></p>
                </div>
                <div class=\"col-lg-6\" style=\"font-size: 21px;\">
                    <div class=\"d-flex align-items-center\" style=\"min-height: 150px;\">
                        <h2 class=\"text-center text-success\" style=\"\"><strong>Un interlocuteur unique</strong> pour toutes vos demandes de services </h2>
                    </div>
                    <p>❖La prise en charge, la gestion, la planification  et le pilotage de vos projets,</p>
                    <p>❖L’accompagnement de vos unités dans leurs  projets de migration de postes utilisateurs,  mobiles ainsi que la téléphonie,</p>
                    <p>❖L'intégration de solutions et applications métier Formation des collaborateurs à la prise en main  des applications et solutions Microsoft,</p>
                    <p>❖Déploiement de service Helpdesk et  support de proximité,</p>
                    <p>❖Analyse, conseil et reporting, La gestion  efficiente de vos assets.</p>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\" style=\"height: 800px; margin-top: 50px;\">
            <div class=\"row h-100\">
                <div class=\"col-lg-4\" style=\"background-image: url('/louvre.png'); background-position: center;\">

                </div>
                <div class=\"col-lg-8\">
                    <div class=\"row h-100\">
                        <div class=\"col-12 d-flex align-items-center justify-content-center bg-primary\">
                            <div id=\"footer\">
                                <img src=\"/logo.png\" width=\"450\" alt=\"Logo s2ipartner\"/>
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
        return array (  204 => 45,  201 => 44,  195 => 42,  191 => 40,  182 => 37,  178 => 36,  172 => 33,  167 => 31,  162 => 29,  159 => 28,  155 => 27,  152 => 26,  150 => 25,  147 => 24,  138 => 21,  133 => 20,  125 => 18,  123 => 17,  119 => 16,  115 => 15,  112 => 14,  108 => 13,  104 => 12,  101 => 11,  99 => 10,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <a class=\"btn btn-outline-dark\" style=\"margin-bottom: 10px;\" href=\"{{ path('mission') }}\">Proposer une mission</a>
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
                        <p>Tarif journalier : {{mission.price}}\$</p>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>Profil not completed, complet it <a href=\"{{ path('profil') }}\">here</p></p>
        {% endif %}
    {% else %}
        <div class=\"container-fluid\" 
            style=\"background-image: url('/smokebg.png'); 
                    height: 300px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;\">
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div style=\"background-color: rgba(255, 255, 255, 0.4); padding: 20px;\">
                    <img src=\"/logo.png\" width=\"450\" alt=\"Logo s2ipartner\"/>
                </div>
            </div>
        </div>
        <div class=\"container\" style=\"padding-top: 50px;\">
            <h1 class=\"text-center font-weight-bold\" style=\"color: #6A00FF;\">UN SERVICE <br/>A LA HAUTEUR DE VOS EXIGEANCES</h1>
            <div class=\"row\">
                <div class=\"col-lg-6 text-dark\" style=\"font-size: 18px;\">
                    <div class=\"d-flex align-items-center\" style=\"min-height: 150px;\">
                        <img width=\"250\" src=\"/logo.png\" alt=\"logo s2ipartner\" />
                    </div>
                    <p><strong>S2I PARTNER</strong> est le fournisseur privilégié des petites et moyennes entreprise et un partenaire de choix des intégrateurs et constructeurs dans le cadre de <strong>projets de grandes envergures</strong>.<br/>
                    Offrant une gamme de services étendue dans le domaine de l’<strong>IT</strong> sur tout le territoire national.<br/>
                    Nous prenons en charge tout ou partie des <strong>projets informatiques</strong> de l’étude à la réalisation, jusqu’à la livraison finale.</p>
                    <p class=\"alert alert-success\">Créée en <strong>2013</strong></p>
                    <p class=\"alert alert-success\">Implantée à <strong>Paris</strong>, avec un service opérationnel basé à <strong>Vélizy-Villacoublay</strong></p>
                    <p class=\"alert alert-success\">Des intervenants et <strong>techniciens expérimentés</strong> et rigoureux</p>
                    <p class=\"alert alert-success\">Une capacité d'intervention sur tout <strong>le territoire et en Belgique Wallon.</strong></p>
                </div>
                <div class=\"col-lg-6\" style=\"font-size: 21px;\">
                    <div class=\"d-flex align-items-center\" style=\"min-height: 150px;\">
                        <h2 class=\"text-center text-success\" style=\"\"><strong>Un interlocuteur unique</strong> pour toutes vos demandes de services </h2>
                    </div>
                    <p>❖La prise en charge, la gestion, la planification  et le pilotage de vos projets,</p>
                    <p>❖L’accompagnement de vos unités dans leurs  projets de migration de postes utilisateurs,  mobiles ainsi que la téléphonie,</p>
                    <p>❖L'intégration de solutions et applications métier Formation des collaborateurs à la prise en main  des applications et solutions Microsoft,</p>
                    <p>❖Déploiement de service Helpdesk et  support de proximité,</p>
                    <p>❖Analyse, conseil et reporting, La gestion  efficiente de vos assets.</p>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\" style=\"height: 800px; margin-top: 50px;\">
            <div class=\"row h-100\">
                <div class=\"col-lg-4\" style=\"background-image: url('/louvre.png'); background-position: center;\">

                </div>
                <div class=\"col-lg-8\">
                    <div class=\"row h-100\">
                        <div class=\"col-12 d-flex align-items-center justify-content-center bg-primary\">
                            <div id=\"footer\">
                                <img src=\"/logo.png\" width=\"450\" alt=\"Logo s2ipartner\"/>
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
