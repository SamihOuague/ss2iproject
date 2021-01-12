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

/* base.html.twig */
class __TwigTemplate_920bb8da71516ad29c5446ee018a09bedf6f587b5382d8bf9b3e02463876ab72 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    </head>
    <body class=\"bg-light\" style=\"min-height: 80%; padding-top: 150px;\">
      <nav class=\"navbar navbar-expand-lg fixed-top navbar-dark bg-dark\">
        <a class=\"navbar-brand font-weight-bold\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
          <img src=\"/logo.png\" alt=\"logo s2ipartner\" width=\"250\"/>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" style=\"width: 80px\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
  
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav ml-auto text-dark\">
            ";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px;\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">CONNEXION</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px;\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">INSCRIPTION</a>
              </li>
            ";
        } else {
            // line 28
            echo "              <li class=\"nav-item\">
                <div class=\"dropdown\">
                  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Menu
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                    <a class=\"dropdown-item\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Home</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Profil</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
                  </div>
                </div>
              </li>
            ";
        }
        // line 41
        echo "          </ul>
        </div>
      </nav>
      ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "      <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 45,  144 => 44,  138 => 7,  131 => 6,  122 => 46,  119 => 45,  117 => 44,  112 => 41,  104 => 36,  100 => 35,  96 => 34,  88 => 28,  82 => 25,  76 => 22,  73 => 21,  71 => 20,  59 => 11,  54 => 8,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/base.html.twig");
    }
}
