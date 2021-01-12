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
class __TwigTemplate_3aa6b9b830ea80948fd3fd336b02b2b2fd3273d5ba3aef66db69620ae65e5b35 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div class=\"example-wrapper d-flex justify-content-center align-items-center\" style=\"height: 100%;\">
    <div style=\"width: 450px; margin-top: 100px;\">
        <form method=\"post\" class=\"bg-dark\" style=\"border-radius: 5px; padding: 25px;\">
            ";
        // line 13
        if (($context["error"] ?? null)) {
            // line 14
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 16
        echo "
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "username", [], "any", false, false, false, 19), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                </div>
            ";
        }
        // line 22
        echo "
            <h1 class=\"h3 mb-3 font-weight-normal text-light text-center\">Se connecter</h1>
            <input type=\"email\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" placeholder=\"Adresse e-mail\" id=\"inputEmail\" class=\"form-control\" required autofocus>
            <br/>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Mot de passe\" class=\"form-control\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                   value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >

            ";
        // line 42
        echo "            <br/>
            <div class=\"d-flex justify-content-between align-items-center\">
                <button class=\"btn btn-lg btn-outline-warning\" type=\"submit\">
                    Sign in
                </button>
                <small>
                    <a class=\"text-warning\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Vous n'avez pas encore de compte ?</a>
                </small>
            </div>
        </form>
    </div>
</div>
";
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
        return array (  117 => 48,  109 => 42,  103 => 29,  95 => 24,  91 => 22,  83 => 19,  80 => 18,  78 => 17,  75 => 16,  69 => 14,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/security/login.html.twig");
    }
}
