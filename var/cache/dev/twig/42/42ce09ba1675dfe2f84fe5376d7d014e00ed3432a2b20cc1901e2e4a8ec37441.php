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

/* home/dashboard.html.twig */
class __TwigTemplate_ca61bbee2ee41eabc2a471dfc0cc9a803c9d8cb121f0433d0b180da98ad1dd6f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/dashboard.html.twig", 1);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3)) {
            // line 4
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "isVerified", [], "any", false, false, false, 4)) {
                // line 5
                echo "        <h2 class=\"text-center\">Cliquer sur le lien envoyer par mail pour verifier votre adresse email et acceder au contenue.</h2>
    ";
            } elseif ((            // line 6
(isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 6, $this->source); })()) || (isset($context["manager"]) || array_key_exists("manager", $context) ? $context["manager"] : (function () { throw new RuntimeError('Variable "manager" does not exist.', 6, $this->source); })()))) {
                // line 7
                echo "        <div class=\"container\" style=\"margin-top: 100px;\">
            <div class=\"d-flex justify-content-between\" style=\"padding-top: 50px;\">
                <a class=\"btn btn-outline-dark\" style=\"margin-bottom: 10px;\" href=\"";
                // line 9
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission");
                echo "\">Publier une nouvelle offre</a>
                ";
                // line 10
                if ((isset($context["manager"]) || array_key_exists("manager", $context) ? $context["manager"] : (function () { throw new RuntimeError('Variable "manager" does not exist.', 10, $this->source); })())) {
                    // line 11
                    echo "                    ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
                    echo "
                        <div class=\"d-flex\">
                            ";
                    // line 13
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "recherche", [], "any", false, false, false, 13), 'row');
                    echo "
                            ";
                    // line 14
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "submit", [], "any", false, false, false, 14), 'row');
                    echo "
                        </div>
                    ";
                    // line 16
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
                    echo "
                ";
                }
                // line 18
                echo "            </div>
            ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                    // line 20
                    echo "                <div class=\"jumbotron\">
                    <h2>";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 21), "html", null, true);
                    echo "</h2>
                    <p>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "describ", [], "any", false, false, false, 22), 0, 250), "html", null, true);
                    echo "...</p>
                    ";
                    // line 23
                    if ((isset($context["manager"]) || array_key_exists("manager", $context) ? $context["manager"] : (function () { throw new RuntimeError('Variable "manager" does not exist.', 23, $this->source); })())) {
                        // line 24
                        echo "                        <a href=\"/candidat/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 24), "html", null, true);
                        echo "\" class=\"btn btn-outline-success\">Candidats : ";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "candidats", [], "any", false, false, false, 24)), "html", null, true);
                        echo "</a>
                    ";
                    }
                    // line 26
                    echo "                    <a href=\"/mission/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 26), "html", null, true);
                    echo "/edit\" class=\"btn btn-outline-primary\">Modifier</a>
                    <a href=\"/mission/";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 27), "html", null, true);
                    echo "/delete\" class=\"btn btn-outline-danger\">Supprimer</a>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "        </div>
    ";
            } elseif (            // line 31
(isset($context["profil"]) || array_key_exists("profil", $context) ? $context["profil"] : (function () { throw new RuntimeError('Variable "profil" does not exist.', 31, $this->source); })())) {
                // line 32
                echo "        <div class=\"container\" style=\"margin-top: 100px;\">
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 33, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                    // line 34
                    echo "                <div class=\"jumbotron\">
                    <h2>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 35), "html", null, true);
                    echo "</h2>
                    <p>
                        ";
                    // line 37
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "describ", [], "any", false, false, false, 37), 0, 250), "html", null, true);
                    echo "...
                        <small>
                            <a href=\"/mission/";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 39), "html", null, true);
                    echo "\">En savoir plus</a>
                        </small>
                    </p>
                    <p class=\"text-muted\">";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "price", [], "any", false, false, false, 42), "html", null, true);
                    echo "€ ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "inter", [], "any", false, false, false, 42), "html", null, true);
                    echo "</p>
                    <p><a href=\"/mission/";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" class=\"btn btn-outline-primary\">En savoir plus</a></p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "        </div>
    ";
            } else {
                // line 48
                echo "        <p>Profil not completed, complet it <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                echo "\">here</p></p>
    ";
            }
        }
        // line 51
        echo "    <script>
        \$(\"#nav\").animate({
            backgroundColor: \"rgba(255,255,255,0.7)\"
        });
        \$(\".nav-link\").animate({
            color: \"black\"
        });
        \$(\"#logo\")[0].src = \"/logo.png\";
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 51,  200 => 48,  196 => 46,  187 => 43,  181 => 42,  175 => 39,  170 => 37,  165 => 35,  162 => 34,  158 => 33,  155 => 32,  153 => 31,  150 => 30,  141 => 27,  136 => 26,  128 => 24,  126 => 23,  122 => 22,  118 => 21,  115 => 20,  111 => 19,  108 => 18,  103 => 16,  98 => 14,  94 => 13,  88 => 11,  86 => 10,  82 => 9,  78 => 7,  76 => 6,  73 => 5,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{% if (app.user) %}
    {% if not app.user.isVerified %}
        <h2 class=\"text-center\">Cliquer sur le lien envoyer par mail pour verifier votre adresse email et acceder au contenue.</h2>
    {% elseif (client or manager) %}
        <div class=\"container\" style=\"margin-top: 100px;\">
            <div class=\"d-flex justify-content-between\" style=\"padding-top: 50px;\">
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
                    <p>{{mission.describ | slice(0, 250)}}...</p>
                    {% if (manager) %}
                        <a href=\"/candidat/{{mission.id}}\" class=\"btn btn-outline-success\">Candidats : {{mission.candidats|length}}</a>
                    {% endif %}
                    <a href=\"/mission/{{mission.id}}/edit\" class=\"btn btn-outline-primary\">Modifier</a>
                    <a href=\"/mission/{{mission.id}}/delete\" class=\"btn btn-outline-danger\">Supprimer</a>
                </div>
            {% endfor %}
        </div>
    {% elseif (profil) %}
        <div class=\"container\" style=\"margin-top: 100px;\">
            {% for mission in missions %}
                <div class=\"jumbotron\">
                    <h2>{{mission.title}}</h2>
                    <p>
                        {{mission.describ | slice(0, 250)}}...
                        <small>
                            <a href=\"/mission/{{mission.id}}\">En savoir plus</a>
                        </small>
                    </p>
                    <p class=\"text-muted\">{{mission.price}}€ {{mission.inter}}</p>
                    <p><a href=\"/mission/{{mission.id}}\" class=\"btn btn-outline-primary\">En savoir plus</a></p>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p>Profil not completed, complet it <a href=\"{{ path('profil') }}\">here</p></p>
    {% endif %}
{% endif %}
    <script>
        \$(\"#nav\").animate({
            backgroundColor: \"rgba(255,255,255,0.7)\"
        });
        \$(\".nav-link\").animate({
            color: \"black\"
        });
        \$(\"#logo\")[0].src = \"/logo.png\";
    </script>
{% endblock %}", "home/dashboard.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/home/dashboard.html.twig");
    }
}
