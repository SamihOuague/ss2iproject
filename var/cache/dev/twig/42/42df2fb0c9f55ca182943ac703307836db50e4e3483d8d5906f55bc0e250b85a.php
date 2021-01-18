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

/* registration/registe.html.twig */
class __TwigTemplate_93359f2d1584bcea3010452c45fde177525b25d3c74ab85a33cd2af3673799d2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/registe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        .example-wrapper { 
            margin: 1em auto; 
            max-width: 800px; 
            width: 95%; 
            font: 18px/1.5 sans-serif; 
        }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <div style=\"height: 100%;\" class=\"example-wrapper d-flex justify-content-center align-items-center\">
        <div class=\"bg-dark text-light\" style=\"border-radius: 5px; padding: 25px; width: 450px; margin-top: 100px;\">
            <h1 class=\"text-center text-light\">S'inscrire</h1>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 17
            echo "                <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'row', ["label" => false]);
        // line 22
        echo "
                <br/>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "plainPassword", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), 'row', ["label" => false]);
        // line 26
        echo "
                <br/>
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "plainPassword", [], "any", false, false, false, 28), "second", [], "any", false, false, false, 28), 'row', ["label" => false]);
        // line 30
        echo "
                <br/>
                <p>Le mot de doit contenir au moin :</p>
                <ul>
                    <li>8 à 15 caractères</li>
                    <li>1 chiffre</li>
                    <li>1 majuscule</li>
                    <li>1 caractère spécial</li>
                </ul>
                <br/>
                <div class=\"d-flex align-items-start\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "agreeTerms", [], "any", false, false, false, 41), 'row', ["label" => false]);
        // line 43
        echo "
                    <span style=\"margin-left: 10px;\">J'ai lu et accepté <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo "\">les conditions générales d'utilisation de S2ipartner</a></span>
                </div>
                <br/>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <button class=\"btn btn-lg btn-outline-warning\" type=\"submit\">
                        S'inscrire
                    </button>
                    <small>
                        <a class=\"text-warning\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Vous avez deja un compte ?</a>
                    </small>
                </div>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/registe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 55,  143 => 52,  132 => 44,  129 => 43,  127 => 41,  114 => 30,  112 => 28,  108 => 26,  106 => 24,  102 => 22,  100 => 20,  95 => 19,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <style>
        .example-wrapper { 
            margin: 1em auto; 
            max-width: 800px; 
            width: 95%; 
            font: 18px/1.5 sans-serif; 
        }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <div style=\"height: 100%;\" class=\"example-wrapper d-flex justify-content-center align-items-center\">
        <div class=\"bg-dark text-light\" style=\"border-radius: 5px; padding: 25px; width: 450px; margin-top: 100px;\">
            <h1 class=\"text-center text-light\">S'inscrire</h1>
            {% for flashError in app.flashes('verify_email_error') %}
                <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
            {% endfor %}
            {{ form_start(registrationForm) }}
                {{ form_row(registrationForm.email, {
                    label: false
                }) }}
                <br/>
                {{ form_row(registrationForm.plainPassword.first, {
                    label: false
                }) }}
                <br/>
                {{ form_row(registrationForm.plainPassword.second, {
                    label: false
                }) }}
                <br/>
                <p>Le mot de doit contenir au moin :</p>
                <ul>
                    <li>8 à 15 caractères</li>
                    <li>1 chiffre</li>
                    <li>1 majuscule</li>
                    <li>1 caractère spécial</li>
                </ul>
                <br/>
                <div class=\"d-flex align-items-start\">
                    {{ form_row(registrationForm.agreeTerms, {
                        label: false
                    }) }}
                    <span style=\"margin-left: 10px;\">J'ai lu et accepté <a href=\"{{ path('privacy') }}\">les conditions générales d'utilisation de S2ipartner</a></span>
                </div>
                <br/>
                <div class=\"d-flex justify-content-between align-items-center\">
                    <button class=\"btn btn-lg btn-outline-warning\" type=\"submit\">
                        S'inscrire
                    </button>
                    <small>
                        <a class=\"text-warning\" href=\"{{ path('app_login') }}\">Vous avez deja un compte ?</a>
                    </small>
                </div>
            {{ form_end(registrationForm) }}
        </div>
    </div>
{% endblock %}
", "registration/registe.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/registration/registe.html.twig");
    }
}
