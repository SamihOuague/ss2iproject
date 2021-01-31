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

/* mission/mission.html.twig */
class __TwigTemplate_21d1f279ef80282d7c83bdc146d89d09015b4818a52f1560952074d00b9f87fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/mission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mission/mission.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mission/mission.html.twig", 1);
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
        echo "<div class=\"container\" style=\"margin-top: 100px;\">
    ";
        // line 5
        if ((isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "        <div class=\"jumbotron\">
            <h1>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
            echo "</h1>
            <p style=\"margin: 25px;\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 8, $this->source); })()), "describ", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
            <span style=\"margin: 25px; width: 200px; font-size: 18px;\" class=\"alert alert-secondary d-block text-center\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 9, $this->source); })()), "price", [], "any", false, false, false, 9), "html", null, true);
            echo "€ ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 9, $this->source); })()), "inter", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
            ";
            // line 10
            if ((isset($context["postule"]) || array_key_exists("postule", $context) ? $context["postule"] : (function () { throw new RuntimeError('Variable "postule" does not exist.', 10, $this->source); })())) {
                // line 11
                echo "                <a href=\"/mission/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mission"]) || array_key_exists("mission", $context) ? $context["mission"] : (function () { throw new RuntimeError('Variable "mission" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
                echo "/postuler\" class=\"btn btn-outline-primary\">Postuler</a>
            ";
            }
            // line 13
            echo "        </div>
    ";
        }
        // line 15
        echo "</div>
<script>
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
        return "mission/mission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 15,  98 => 13,  92 => 11,  90 => 10,  84 => 9,  80 => 8,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\" style=\"margin-top: 100px;\">
    {% if (mission) %}
        <div class=\"jumbotron\">
            <h1>{{mission.title}}</h1>
            <p style=\"margin: 25px;\">{{mission.describ}}</p>
            <span style=\"margin: 25px; width: 200px; font-size: 18px;\" class=\"alert alert-secondary d-block text-center\">{{mission.price}}€ {{mission.inter}}</span>
            {% if (postule) %}
                <a href=\"/mission/{{mission.id}}/postuler\" class=\"btn btn-outline-primary\">Postuler</a>
            {% endif %}
        </div>
    {% endif %}
</div>
<script>
    \$(\"#nav\").animate({
        backgroundColor: \"rgba(255,255,255,0.7)\"
    });
    \$(\".nav-link\").animate({
        color: \"black\"
    });
    \$(\"#logo\")[0].src = \"/logo.png\";
</script>
{% endblock %}", "mission/mission.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/mission/mission.html.twig");
    }
}
