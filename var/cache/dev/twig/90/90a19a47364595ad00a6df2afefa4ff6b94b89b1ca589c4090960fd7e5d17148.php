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

/* home/contact.html.twig */
class __TwigTemplate_f69c8e12330444e934a278b2509f7cd21be0274e4f4efe6002bab86750337036 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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
        echo "<h1 class=\"text-center text-muted\" style=\"margin: 50px 0; font-family: 'Montserrat'; font-size: 48px;\">Nous contacter</h1>
<div class=\"container\" style=\"padding: 25px 0;\">
    <div class=\"d-flex justify-content-center\">
        <div class=\"w-75\" style=\"height: 600px;\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form');
        echo "
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<h1 class=\"text-center text-muted\" style=\"margin: 50px 0; font-family: 'Montserrat'; font-size: 48px;\">Nous contacter</h1>
<div class=\"container\" style=\"padding: 25px 0;\">
    <div class=\"d-flex justify-content-center\">
        <div class=\"w-75\" style=\"height: 600px;\">
            {{form(form)}}
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
{% endblock %}", "home/contact.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/home/contact.html.twig");
    }
}