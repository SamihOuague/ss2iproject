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
        echo "        <div class=\"container-fluid\"
            id=\"headbg\"
            style=\"background-image: linear-gradient(transparent, black), url('/bg.jpg'); 
                    min-height: 650px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;
                    border-radius: 0px 0px 250px 0;\">
            
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div id=\"carouselExampleControls\" class=\"carousel slide w-100\" data-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 19, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 20
            echo "                            <div class=\"carousel-item ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20), 1))) {
                echo "active";
            }
            echo "\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    <div class=\"";
            // line 22
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22), 1))) {
                echo "bg-danger";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22), 2))) {
                echo "bg-primary";
            } else {
                echo "bg-success";
            }
            echo "\" 
                                        style=\"width: 450px; padding: 15px; opacity: 0.8;\">
                                        <h2 class=\"text-light\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</h2>
                                        <p class=\"text-dark\">Salaire : ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "price", [], "any", false, false, false, 25), "html", null, true);
            echo "€ ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "inter", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                                        <p class=\"text-light text-justify\">";
            // line 26
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "describ", [], "any", false, false, false, 26), 0, 90), "html", null, true);
            echo "...</p>
                                    </div>
                                </div>
                            </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\" id=\"limit\">
            <div class=\"bg-light\" style=\"border-radius: 250px 0px 0px 250px;\">
                <div class=\"container\" style=\"padding: 50px 20px;\">
                    <div class=\"d-flex justify-content-around flex-wrap\">
                        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"bg-primary d-flex justify-content-center align-items-center\" style=\"box-shadow: 10px 10px 5px #e2e3e5; cursor: pointer; width: 400px; height: 200px; opacity: 0.9; border-radius: 15px; text-decoration: none; margin: 15px 0px;\">
                            <h2 class=\"text-light\" style=\"font-size: 42px;\">Entreprise</h2>
                        </a>
                        <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"bg-success d-flex justify-content-center align-items-center\" style=\"box-shadow: 10px 10px 5px #e2e3e5; cursor: pointer; width: 400px; height: 200px; opacity: 0.9; border-radius: 15px; text-decoration: none; margin: 15px 0px;\">
                            <h2 class=\"text-light\" style=\"font-size: 42px;\">Candidat</h2>
                        </a>
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
        <script>
            \$(\"#headbg\").css(\"height\", window.innerHeight);
        </script>
";
        
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
        return array (  192 => 50,  186 => 47,  168 => 31,  149 => 26,  143 => 25,  139 => 24,  128 => 22,  120 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}S2IPartner{% endblock %}

{% block body %}
        <div class=\"container-fluid\"
            id=\"headbg\"
            style=\"background-image: linear-gradient(transparent, black), url('/bg.jpg'); 
                    min-height: 650px;
                    background-size: cover;
                    background-position: center;
                    margin-top: -40px;
                    background-repeat: no-repeat;
                    border-radius: 0px 0px 250px 0;\">
            
            <div class=\"h-100 d-flex justify-content-center align-items-center\">
                <div id=\"carouselExampleControls\" class=\"carousel slide w-100\" data-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        {% for mission in missions %}
                            <div class=\"carousel-item {% if loop.index == 1 %}active{% endif %}\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    <div class=\"{% if loop.index == 1 %}bg-danger{% elseif loop.index == 2 %}bg-primary{% else %}bg-success{% endif %}\" 
                                        style=\"width: 450px; padding: 15px; opacity: 0.8;\">
                                        <h2 class=\"text-light\">{{ mission.title }}</h2>
                                        <p class=\"text-dark\">Salaire : {{ mission.price }}€ {{ mission.inter }}</p>
                                        <p class=\"text-light text-justify\">{{ mission.describ|slice(0, 90) }}...</p>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div style=\"background-color: black;\" id=\"limit\">
            <div class=\"bg-light\" style=\"border-radius: 250px 0px 0px 250px;\">
                <div class=\"container\" style=\"padding: 50px 20px;\">
                    <div class=\"d-flex justify-content-around flex-wrap\">
                        <a href=\"{{ path('app_register') }}\" class=\"bg-primary d-flex justify-content-center align-items-center\" style=\"box-shadow: 10px 10px 5px #e2e3e5; cursor: pointer; width: 400px; height: 200px; opacity: 0.9; border-radius: 15px; text-decoration: none; margin: 15px 0px;\">
                            <h2 class=\"text-light\" style=\"font-size: 42px;\">Entreprise</h2>
                        </a>
                        <a href=\"{{ path('app_register') }}\" class=\"bg-success d-flex justify-content-center align-items-center\" style=\"box-shadow: 10px 10px 5px #e2e3e5; cursor: pointer; width: 400px; height: 200px; opacity: 0.9; border-radius: 15px; text-decoration: none; margin: 15px 0px;\">
                            <h2 class=\"text-light\" style=\"font-size: 42px;\">Candidat</h2>
                        </a>
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
        <script>
            \$(\"#headbg\").css(\"height\", window.innerHeight);
        </script>
{% endblock %}", "home/index.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/home/index.html.twig");
    }
}
