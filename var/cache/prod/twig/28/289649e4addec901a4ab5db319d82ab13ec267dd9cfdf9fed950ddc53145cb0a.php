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
class __TwigTemplate_2e1dcd8ac5ce76db23ee85c371c927a87d4a5c475cf280dd5858463ec0fc2c62 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "S2IPartner";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        ";
            if ((($context["client"] ?? null) || ($context["manager"] ?? null))) {
                // line 9
                echo "            <div class=\"container\">
                <a class=\"btn btn-outline-dark\" style=\"margin-bottom: 10px;\" href=\"";
                // line 10
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mission");
                echo "\">Proposer une mission</a>
                ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["missions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                    // line 12
                    echo "                    <div class=\"jumbotron\">
                        <h2>";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 13), "html", null, true);
                    echo "</h2>
                        <p>";
                    // line 14
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "describ", [], "any", false, false, false, 14), 0, 100), "html", null, true);
                    echo "...</p>
                        ";
                    // line 15
                    if (($context["manager"] ?? null)) {
                        // line 16
                        echo "                            <a href=\"/candidat/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 16), "html", null, true);
                        echo "\" class=\"btn btn-outline-success\">Candidats : ";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "candidats", [], "any", false, false, false, 16)), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 18
                    echo "                        <a href=\"/mission/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 18), "html", null, true);
                    echo "/edit\" class=\"btn btn-outline-primary\">Modifier</a>
                        <a href=\"/mission/";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 19), "html", null, true);
                    echo "/delete\" class=\"btn btn-outline-danger\">Supprimer</a>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            </div>
        ";
            } elseif (            // line 23
($context["profil"] ?? null)) {
                // line 24
                echo "            <div class=\"container\">
                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["missions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                    // line 26
                    echo "                    <div class=\"jumbotron\">
                        <h2>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 27), "html", null, true);
                    echo "</h2>
                        <p>
                            ";
                    // line 29
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "describ", [], "any", false, false, false, 29), 0, 100), "html", null, true);
                    echo "...
                            <small>
                                <a href=\"/mission/";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "id", [], "any", false, false, false, 31), "html", null, true);
                    echo "\">En savoir plus</a>
                            </small>
                        </p>
                        <p>Duree : ";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "durate", [], "any", false, false, false, 34), "html", null, true);
                    echo " jours</p>
                        <p>Tarif journalier : ";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mission"], "price", [], "any", false, false, false, 35), "html", null, true);
                    echo "\$</p>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            </div>
        ";
            } else {
                // line 40
                echo "            <p>Profil not completed, complet it <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                echo "\">here</p></p>
        ";
            }
            // line 42
            echo "    ";
        } else {
            // line 43
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
        return array (  169 => 43,  166 => 42,  160 => 40,  156 => 38,  147 => 35,  143 => 34,  137 => 31,  132 => 29,  127 => 27,  124 => 26,  120 => 25,  117 => 24,  115 => 23,  112 => 22,  103 => 19,  98 => 18,  90 => 16,  88 => 15,  84 => 14,  80 => 13,  77 => 12,  73 => 11,  69 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/home/index.html.twig");
    }
}
