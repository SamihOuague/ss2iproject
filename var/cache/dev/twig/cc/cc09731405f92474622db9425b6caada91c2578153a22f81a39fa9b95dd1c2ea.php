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
class __TwigTemplate_e882f96b31e80edd5240171272742667661cbc5c5541d3ba4353352fe14dee19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\" integrity=\"sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==\" crossorigin=\"anonymous\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap\" rel=\"stylesheet\">
        <script
\t\t\t    src=\"https://code.jquery.com/jquery-3.5.1.js\"
\t\t\t    integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
\t\t\t    crossorigin=\"anonymous\"></script>
        <script
\t\t\t    src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.js\"
\t\t\t    integrity=\"sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=\"
\t\t\t    crossorigin=\"anonymous\"></script>
\t\t
        <title>S2IPartner</title>
        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>
    <body class=\"bg-light\" style=\"min-height: 80%;\">
      <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light fixed-top\">
        <a class=\"navbar-brand font-weight-bold\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
          <img src=\"/logo_white.png\" alt=\"logo s2ipartner\" id=\"logo\" width=\"150\"/>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" style=\"width: 80px\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\"  id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav ml-auto text-center\" style=\"font-family: 'Montserrat'; color: white; font-weight: 600;\">
            ";
        // line 32
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">ACCUEIL</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
            echo "\">QUI SOMMES-NOUS</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service");
            echo "\">NOS SERVICES</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">CONTACT</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fas fa-user\"></i></a>
              </li>
            ";
        } else {
            // line 49
            echo "              ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "admin@s2ipartner.com"))) {
                // line 50
                echo "                <li class=\"nav-item\">
                  <a class=\"nav-link btn btn-outline-success text-success\" href=\"/admin\" style=\"margin: 0px 15px;\">Administation</a>
                </li>
              ";
            }
            // line 54
            echo "              <li class=\"nav-item\">
                <div class=\"dropdown\">
                  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-user\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                    <a class=\"dropdown-item\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Tableau de bord</a>
                    <a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Mon profil</a>
                    <a class=\"dropdown-item text-danger font-weight-bold\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
                  </div>
                </div>
              </li>
            ";
        }
        // line 67
        echo "          </ul>
        </div>
      </nav>
      ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "      <div class=\"container-fluid bg-dark\" style=\"padding: 25px 15px; margin-top: 50px; opacity: 0.8;\" id=\"contact\">
            <div class=\"row text-light\">
              <div class=\"col-lg-4 d-flex justify-content-center align-items-center\">
                <img src=\"/logo_white.png\" alt=\"logo s2ipartner\" id=\"logo\" width=\"50%\" style=\"margin: 25px 0;\"/>
              </div>
              <div class=\"col-lg-4 col-sm-6\" style=\"font-size: 21px;\">
                  <div style=\"border-left: 2px solid white;  padding-left: 20px;\">
                      <p><strong>Paris</strong><br/>
                      142 Rue de Rivoli<br/>
                      75001, Paris<br/>
                      Tél : 01 47 02 31 46<br/>
                      Mail : contact@s2ipartner.com</p>
                  </div>
              </div>
              <div class=\"col-lg-4 col-sm-6\" style=\"font-size: 21px;\">
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
      ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "      <script>
          let black = true;
          \$(window).scroll(() => {
              if (\$(window).scrollTop() >= \$('#limit').position().top && black) {
                  black = false;
                  \$(\"#nav\").animate({
                      backgroundColor: \"rgba(255, 255, 255, 0.6)\"
                  });
                  \$(\".nav-link\").animate({
                      color: \"#343a40\"
                  });
                  \$(\"#logo\")[0].src = \"/logo.png\";
              } else if (\$(window).scrollTop() < \$('#limit').position().top && !black) {
                  black = true;
                  \$(\"#nav\").animate({
                      backgroundColor: \"rgba(255, 255, 255, 0.0)\"
                  });
                  \$(\".nav-link\").animate({
                      color: \"white\"
                  });
                  \$(\"#logo\")[0].src = \"/logo_white.png\";
              }
          });
      </script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  263 => 96,  245 => 70,  227 => 20,  189 => 97,  187 => 96,  160 => 71,  158 => 70,  153 => 67,  145 => 62,  141 => 61,  137 => 60,  129 => 54,  123 => 50,  120 => 49,  114 => 46,  108 => 43,  102 => 40,  96 => 37,  90 => 34,  87 => 33,  85 => 32,  74 => 24,  69 => 21,  67 => 20,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\" integrity=\"sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==\" crossorigin=\"anonymous\" />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap\" rel=\"stylesheet\">
        <script
\t\t\t    src=\"https://code.jquery.com/jquery-3.5.1.js\"
\t\t\t    integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
\t\t\t    crossorigin=\"anonymous\"></script>
        <script
\t\t\t    src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.js\"
\t\t\t    integrity=\"sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=\"
\t\t\t    crossorigin=\"anonymous\"></script>
\t\t
        <title>S2IPartner</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body class=\"bg-light\" style=\"min-height: 80%;\">
      <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light fixed-top\">
        <a class=\"navbar-brand font-weight-bold\" href=\"{{ path('home') }}\">
          <img src=\"/logo_white.png\" alt=\"logo s2ipartner\" id=\"logo\" width=\"150\"/>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" style=\"width: 80px\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\"  id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav ml-auto text-center\" style=\"font-family: 'Montserrat'; color: white; font-weight: 600;\">
            {% if not (app.user) %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"{{ path('home') }}\">ACCUEIL</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"{{ path('about') }}\">QUI SOMMES-NOUS</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"{{ path('service') }}\">NOS SERVICES</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"{{ path('contact') }}\">CONTACT</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" style=\"font-size: 20px; color: white;\" href=\"{{path('app_login')}}\"><i class=\"fas fa-user\"></i></a>
              </li>
            {% else %}
              {% if app.user.email == \"admin@s2ipartner.com\" %}
                <li class=\"nav-item\">
                  <a class=\"nav-link btn btn-outline-success text-success\" href=\"/admin\" style=\"margin: 0px 15px;\">Administation</a>
                </li>
              {% endif %}
              <li class=\"nav-item\">
                <div class=\"dropdown\">
                  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-user\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                    <a class=\"dropdown-item\" href=\"{{ path('home') }}\">Tableau de bord</a>
                    <a class=\"dropdown-item\" href=\"{{ path('profil') }}\">Mon profil</a>
                    <a class=\"dropdown-item text-danger font-weight-bold\" href=\"{{ path('app_logout') }}\">Deconnexion</a>
                  </div>
                </div>
              </li>
            {% endif %}
          </ul>
        </div>
      </nav>
      {% block body %}{% endblock %}
      <div class=\"container-fluid bg-dark\" style=\"padding: 25px 15px; margin-top: 50px; opacity: 0.8;\" id=\"contact\">
            <div class=\"row text-light\">
              <div class=\"col-lg-4 d-flex justify-content-center align-items-center\">
                <img src=\"/logo_white.png\" alt=\"logo s2ipartner\" id=\"logo\" width=\"50%\" style=\"margin: 25px 0;\"/>
              </div>
              <div class=\"col-lg-4 col-sm-6\" style=\"font-size: 21px;\">
                  <div style=\"border-left: 2px solid white;  padding-left: 20px;\">
                      <p><strong>Paris</strong><br/>
                      142 Rue de Rivoli<br/>
                      75001, Paris<br/>
                      Tél : 01 47 02 31 46<br/>
                      Mail : contact@s2ipartner.com</p>
                  </div>
              </div>
              <div class=\"col-lg-4 col-sm-6\" style=\"font-size: 21px;\">
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
      {% block javascripts %}{% endblock %}
      <script>
          let black = true;
          \$(window).scroll(() => {
              if (\$(window).scrollTop() >= \$('#limit').position().top && black) {
                  black = false;
                  \$(\"#nav\").animate({
                      backgroundColor: \"rgba(255, 255, 255, 0.6)\"
                  });
                  \$(\".nav-link\").animate({
                      color: \"#343a40\"
                  });
                  \$(\"#logo\")[0].src = \"/logo.png\";
              } else if (\$(window).scrollTop() < \$('#limit').position().top && !black) {
                  black = true;
                  \$(\"#nav\").animate({
                      backgroundColor: \"rgba(255, 255, 255, 0.0)\"
                  });
                  \$(\".nav-link\").animate({
                      color: \"white\"
                  });
                  \$(\"#logo\")[0].src = \"/logo_white.png\";
              }
          });
      </script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/base.html.twig");
    }
}
