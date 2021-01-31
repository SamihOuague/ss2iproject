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

/* security/login.html.twig */
class __TwigTemplate_c54a634d079235116b6dc3d8f45f074e00661c5e661537d5884e4e429b8fd3e3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"example-wrapper d-flex justify-content-center align-items-center\" id=\"headbg\">
    <div style=\"width: 450px; margin-top: 100px;\">
        <form method=\"post\" class=\"bg-dark\" style=\"border-radius: 5px; padding: 25px;\">
            ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 14
        echo "
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "username", [], "any", false, false, false, 17), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                </div>
            ";
        }
        // line 20
        echo "            <input type=\"email\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" placeholder=\"Adresse e-mail\" id=\"inputEmail\" class=\"form-control\" required autofocus>
            <br/>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Mot de passe\" class=\"form-control\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                   value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >

            ";
        // line 38
        echo "            <br/>
            <div class=\"d-flex justify-content-between align-items-center\">
                <button class=\"btn btn-lg btn-outline-warning\" type=\"submit\" style=\"margin-right: 15px;\">
                    Se connecter
                </button>
                <small>
                    <a class=\"btn btn-outline-primary\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">S'inscrire</a>
                </small>
            </div>
        </form>
    </div>
</div>
<script>
    \$(\".nav-link\").animate({
        color: \"#343a40\"
    });
    \$(\"#logo\")[0].src = \"/logo.png\";
    \$(\"#headbg\").css(\"height\", window.innerHeight - 250);
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  116 => 38,  110 => 25,  101 => 20,  93 => 17,  90 => 16,  88 => 15,  85 => 14,  79 => 12,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"example-wrapper d-flex justify-content-center align-items-center\" id=\"headbg\">
    <div style=\"width: 450px; margin-top: 100px;\">
        <form method=\"post\" class=\"bg-dark\" style=\"border-radius: 5px; padding: 25px;\">
            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            {% endif %}
            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" placeholder=\"Adresse e-mail\" id=\"inputEmail\" class=\"form-control\" required autofocus>
            <br/>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Mot de passe\" class=\"form-control\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                   value=\"{{ csrf_token('authenticate') }}\"
            >

            {#
                Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                See https://symfony.com/doc/current/security/remember_me.html

                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                    </label>
                </div>
            #}
            <br/>
            <div class=\"d-flex justify-content-between align-items-center\">
                <button class=\"btn btn-lg btn-outline-warning\" type=\"submit\" style=\"margin-right: 15px;\">
                    Se connecter
                </button>
                <small>
                    <a class=\"btn btn-outline-primary\" href=\"{{ path('app_register') }}\">S'inscrire</a>
                </small>
            </div>
        </form>
    </div>
</div>
<script>
    \$(\".nav-link\").animate({
        color: \"#343a40\"
    });
    \$(\"#logo\")[0].src = \"/logo.png\";
    \$(\"#headbg\").css(\"height\", window.innerHeight - 250);
</script>
{% endblock %}
", "security/login.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/security/login.html.twig");
    }
}
