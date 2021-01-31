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

/* home/privacypolicy.html.twig */
class __TwigTemplate_049726fca61942b3e20b712990f61567c1ec9754e5439398582050c946fce9b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/privacypolicy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/privacypolicy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/privacypolicy.html.twig", 1);
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
        echo "<div class=\"container\" style=\"font-family: 'Montserrat'; margin-top: 50px;\">
<br/>
<br/>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">PRIVACY POLICY</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">Notre site
utilise des cookies. En continuant à naviguer sur ce site, vous
acceptez que nous continuions à utiliser des cookies pour mesurer et
comprendre le mode de visualisation de nos pages Web et pour
améliorer le fonctionnement de notre site. Si vous n'acceptez pas
ces conditions, vous pouvez décider de désactiver les cookies dans
votre navigateur Web, comme indiqué dans notre page Gestion des
cookies.</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\"><br/>
<br/>

</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">Si vous acceptez,
nous collecterons automatiquement certaines informations à partir de
votre navigateur. Ce choix sera stocké dans un cookie. Si vous ne le
souhaitez pas, vous pouvez activer l’option Do Not track de votre
navigateur ou cliquer ici.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">1. Qu’est qu’un
traceur ou cookie ?</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Le terme de cookies,
au sens large, couvre l’ensemble des traceurs déposés et ou lus
par exemple lors d’une consultation d’un site internet, de la
lecture d’un courrier électronique de l’installation ou
l’utilisation d’un logiciel ou d’une application mobile.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"> 
</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">2. Pourquoi S2I
PARTNER utilise des cookies ?</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Les différents
types de cookies qu’S2I PARTNER utilise sur ses sites Internet sont
réparties dans les catégories suivantes :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies techniques :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Ils permettent
d’enregistrer vos choix de paramétrage prédéfinis dans votre
navigateur afin de vous fournir des fonctionnalités améliorées et
plus adaptées à vos usages. Par exemple, un cookie technique peut
prendre en compte votre choix de langue dans votre navigateur. Ces
cookies ne peuvent pas suivre votre activité de navigation sur
d’autres sites Internet et ne recueillent aucune information vous
concernant qui pourrait être utilisée à des fins publicitaires.
Vous pouvez vous opposer à l’utilisation de ces cookies au niveau
de votre navigateur. (cf. chapitre 4) . Toutefois, nous vous
informons que si vous bloquez cette catégorie de cookies qui ne
stocke pas de données à caractère personnel, vous risquez de ne
plus pouvoir accéder au site et/ou services du site.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies de suivi
d’audience :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">activé</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Ils permettent à
S2I PARTNER de recueillir des informations sur la façon dont les
visiteurs utilisent les sites S2I PARTNER telles que les pages les
plus visitées, le nombre de visiteurs. Ces informations sont
utilisées pour mesurer l'activité de ces sites web. Cette analyse
des données d'utilisation d'un service par les internautes permet
d'apporter des améliorations à ce service. Toutes les informations
recueillies par le biais de ces cookies sont anonymes, et collectées
dans le seul but de développer et de suivre les tendances du trafic
sur notre site Internet.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Les cookies
publicitaires :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">activé</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Ils sont parfois
utilisés sur nos sites pour vous contacter à des fins de marketing
correspondant à vos centres d'intérêt. Ils sont notamment utilisés
pour aider à mesurer l'efficacité d'une campagne publicitaire.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies de réseaux
sociaux : 
</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Ils permettent de
partager des contenus de notre site avec d’autres personnes via des
réseaux sociaux. Lorsque vous utilisez les boutons de partage, un
cookie tiers est installé. Si vous êtes connectés à un réseau
social lors de votre navigation sur nos sites, les boutons de partage
permettent de relier les contenus consultés à votre compte
utilisateur sur le réseau social. Ces cookies peuvent être
désactivés en utilisant une des solutions proposées aux
paragraphes suivants.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"> 
</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">3. Information et
opposition concernant les cookies</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Si vous souhaitez
avoir des informations complémentaires sur les principaux cookies
utilisés par S2I PARTNER, vous trouverez ci-après les liens qui
vous permettent d’obtenir ces informations et de vous opposer à
l’utilisation de ces cookies.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies de suivi
d’audience :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Google Analytics</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies réseaux
sociaux :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Facebook</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">LinkedIn</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Twitter</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Viméo</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Youtube</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"> 
</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">4. Gestion des
cookies au niveau des navigateurs</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Vous pouvez
également paramétrer vos cookies au niveau des navigateurs Web. Les
modalités de paramétrage et de suppression des cookies sont
différentes en fonction des navigateurs. Vous trouverez ci-après
ces modalités pour les principaux navigateurs connus :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Firefox;</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Chrome;</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Internet
Explorer;</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Safari;</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Opera&nbsp;;</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\"> 5. Durée de
conservation des cookies</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">Les cookies sont
conservés pour une durée maximale de 13 mois à compter de leur
dépôt sur votre navigateur. À l’expiration de ce délai, votre
consentement sera à nouveau requis.</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">6. Outils de
gestion des cookies</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">Il existe de
nombreux outils simples et gratuits sur le marché qui permettent de
gérer et de bloquer les cookies et autres traceurs en fonction de
vos besoins. 
</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\"> Quelques outils
sont fournis ci-après à titre d’exemple :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><span lang=\"en-US\">YourAdChoices</span></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><span lang=\"en-US\">Ghostery</span></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><span lang=\"en-US\">Disconnect</span></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><span lang=\"en-US\">Your
Online Choices</span></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"> 7. Charte de
protection des données</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">personnelles de S2I
PARTNER pour prendre connaissance de la Charte de protection des
données personnelles du Groupe S2I PARTNER, cliquez ici.</p>
<p style=\"margin-top: 0.42cm; margin-bottom: 0.42cm; line-height: 0.55cm; background: #ffffff\">
<font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Introduction</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Cette charte de
protection des données personnelles vous informe sur les engagements
d’S2I PARTNER quand des informations personnelles vous concernant
sont collectées via son site Web «&nbsp;Corporate&nbsp;» et
l’utilisation qu’S2I PARTNER en fait. Elle s’applique aux seuls
sites Internet d’S2I PARTNER et/ou des sociétés contrôlées par
S2I PARTNER (collectivement S2I PARTNER) qui possèdent un lien avec
le présent texte. Elle ne s’applique pas aux sites Internet d’S2I
PARTNER qui publient leur propre charte de confidentialité.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Données
personnelles qui peuvent<br/>
être collectées via nos sites
Internet</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Vous pouvez
visiter les sites Internet d’S2I PARTNER sans qu’il soit besoin
de communiquer de données personnelles vous concernant.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Toutefois, pour
accéder à certains services disponibles sur les sites comme le
téléchargement de certains documents ou formulaires, ou pour
recevoir des informations, vous abonner à une newsletter, ou encore
dans le cadre d’une autre utilisation spécifique, S2I PARTNER peut
être amenée à vous demander des données personnelles. La
communication de données personnelles dans ce cadre est volontaire.
Si vous ne souhaitez pas les communiquer, vous ne pourrez simplement
pas bénéficier des services disponibles sur le site d’S2I
PARTNER.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER
pourra compléter cette charte par des informations supplémentaires
propres à une interaction spécifique avec vous.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Les données
personnelles collectées sur les sites Internet d’S2I PARTNER sont
:&nbsp;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Pour
nous contacter via le site</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
des informations personnelles telles que votre nom, votre adresse,
votre adresse de courrier électronique, votre fonction ou votre
numéro de téléphone;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Pour
déposer une candidature&nbsp;</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">:
des informations personnelles telles que vos noms, prénoms, adresse
de courrier électronique, votre Curriculum Vitae ou une lettre de
candidature&nbsp;;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Pour
vous inscrire sur notre site&nbsp;</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">:
des informations personnelles telles que votre nom et vos coordonnées
professionnelles, ainsi que d'autres informations relatives à votre
demande qui peuvent être collectées par le biais de formulaires
spécifiques&nbsp;;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Pour
accéder à nos services en ligne</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
des informations personnelles telles que votre nom, prénom, numéro
de téléphone, adresse de courrier électronique, ainsi que d’autres
informations relatives à votre demande qui sont collectées par le
biais de formulaires spécifiques.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Les données
personnelles qui vous sont demandées peuvent l’être à titre
optionnel ou obligatoire.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Comment
sont utilisées vos données personnelles</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Vos données
personnelles ne font l’objet de traitement par S2I PARTNER que si
le traitement est nécessaire à l’exécution d’un contrat,
relève de l’intérêt légitime d’S2I PARTNER ou si vous y avez
consenti de manière expresse.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Ainsi, vos
données personnelles sont utilisées pour&nbsp;:</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Communiquer</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
&nbsp;donner suite à vos demandes, répondre à vos commentaires,
vous envoyer la documentation demandée par courrier électronique.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Recrute</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">r&nbsp;:
utiliser votre curriculum vitae ou votre candidature en ligne pour un
recrutement, ce qui implique que nous pouvons vous contacter par
courrier électronique, par téléphone ou par courrier postal.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>S’inscrire</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
pour recevoir nos publications ou newsletters ou les télécharger à
partir de notre site. Certaines données pourront être demandées
par le biais de formulaires spécifiques dans le cadre d’un
événement particulier. Si l’événement est couvert avec des
partenaires, les informations que vous communiquerez peuvent être
recueillies par ce tiers ou partagées avec lui. Il vous appartient
alors de vérifier la manière dont ce tiers utilise vos
informations. Nous conserverons vos informations pour les futures
interactions potentielles avec vous.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Services
en ligne</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
pour que les clients de l’activité TMF puisse accéder aux
services de déclaration de sinistre en ligne sur le matériel loué
par S2I PARTNER.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Informations
non personnelles collectées automatiquement</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER
s’est engagé à maintenir le caractère confidentiel de l’identité
des visiteurs de son site Web. S2I PARTNER peut fournir des
statistiques globales concernant les visiteurs du site, des données
analysant leur profil et d’autres informations à des tiers
relatives au site. Ces statistiques ne comportent en aucun cas des
informations permettant l’identification des personnes.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Identification
des visiteurs</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER
utilise des cookies et autres traceurs sur ses sites Internet. Pour
en savoir plus sur leur utilisation et pour les paramétrer, veuillez
consulter&nbsp;</font></font><a href=\"https://www.s2ipartner.com/fr/cookies\"><font color=\"#3e0d81\"><font face=\"Montserrat, serif\"><u>notre
politique relative aux cookies</u></font></font></a><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">.&nbsp;</font></font></p>
<p style=\"margin-top: 0.42cm; margin-bottom: 0.42cm; line-height: 0.55cm; background: #ffffff\">
<font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Mineurs</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Aucune
information ne peut être fournie à S2I PARTNER par des personnes
âgées de moins de 16 ans, sans l’accord préalable d’un parent
ou d’un représentant légal.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Sécurité</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER a
mis en place les mesures techniques et organisationnelles nécessaires
pour empêcher tout accès non autorisé, mauvaise utilisation,
divulgation, modification non autorisée, destruction illégale ou
perte accidentelle de vos données personnelles.&nbsp;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Toutefois, le
fait de fournir des données personnelles (que ce soit en direct sur
le site, par téléphone ou par Internet) n’est jamais sans risque
et les systèmes de communication électronique ne peuvent être
totalement protégés contre le « sabotage » ou le « piratage ».
Le réseau Internet est un système ouvert et non sécurisé et S2I
PARTNER ne peut être tenue responsable de la sécurité des
transmissions des données personnelles.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Durée de
conservation des informations personnelles</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER ne
conserve vos données personnelles que dans la mesure où cela est
nécessaire à la finalité du traitement mis en œuvre, en tenant
compte de la nécessité de répondre aux questions ou résoudre les
difficultés, d’améliorer ou de proposer de nouveaux services et
de se conformer à ses obligations légales en la matière (par
exemple, délais de conservation comptables et légaux). Cela
signifie qu’S2I PARTNER est amenée à conserver vos données
personnelles pendant une période raisonnable après la fin du
traitement, conforme aux obligations légales et réglementaires qui
s’appliquent à S2I PARTNER (par exemple, délais de conservation
comptables et légaux) et suffisante pour le règlement des
différends, l’exercice ou la défense des droits d’S2I PARTNER
dans les pays où S2I PARTNER est implantée.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Quand les
données personnelles que nous collectons ne sont plus nécessaires,
S2I PARTNER les détruit ou les efface de manière sécurisée.&nbsp;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>À
qui sont destinées vos données personnelles</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Vos données
personnelles collectées via le site Internet sont destinées à la
seule utilisation d’S2I PARTNER et utilisées dans la mesure
nécessaire à l'accomplissement des finalités indiquées dans la
présente charte.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER ne
vend ni ne communique d’une quelconque façon vos données
personnelles à des tiers.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Compte tenu de
la dimension internationale d’ S2I PARTNER, les données
personnelles collectées par S2I PARTNER peuvent être conservées et
traitées dans, ou transférées entre, n’importe quels pays où la
société S2I PARTNER a une activité. Cependant, S2I PARTNER ne
confère d’accès à vos données personnelles entre les filiales
du Groupe S2I PARTNER que si cela est nécessaire. &nbsp;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Dans le cas où
des données personnelles sont transférées vers des pays situés
hors de l’Espace Economique Européen (EEE) qui n’assurent pas un
niveau de protection adéquate, nous nous assurons que les clauses
contractuelles types visés par la décision de la Commission
Européenne du 5 février 2010 (2010/87/EC), applicables en cas de
transfert de données personnelles à un sous-traitant établi dans
un pays tiers, s’appliquent à l’organisation qui reçoit les
données personnelles.</font></font></p>
<p style=\"margin-top: 0.42cm; margin-bottom: 0.42cm; line-height: 0.55cm; background: #ffffff\">
<font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Comment
exercer vos droits</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Vous disposez&nbsp;à
tout moment&nbsp;d’un droit d’accès à vos informations
personnelles. Vous disposez aussi du droit de demander la
rectification et l’effacement, le droit à la limitation et à
l’opposition au traitement et le droit à la portabilité dans les
conditions prévues par la réglementation applicable.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Si vous avez des
questions sur la charte de confidentialité ou souhaitez exercer vos
droits, il vous suffit de vous connecter à&nbsp;l’adresse
suivante&nbsp;</font></font><font color=\"#0563c1\"><u><a href=\"mailto:info@s2ipartner.com\"><font face=\"Montserrat, serif\">info@s2ipartner.com</font></a></u></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">.
Enfin vous avez le droit d’introduire une réclamation auprès de
la Commission Nationale de l’Informatique et des Libertés (CNIL),
autorité de contrôle en charge du respect des obligations en
matière de données à caractère personnel.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Modifications</b></font></font></p>
<p style=\"margin-bottom: 0cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER se
réserve le droit de modifier la présente charte de confidentialité
ainsi que de modifier ou de supprimer l’accès à ce site ; S2I
PARTNER pourra aussi modifier son contenu à tout moment, avec ou
sans préavis.</font></font></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
</div>
<div class=\"container-fluid\" id=\"contact\" style=\"height: 800px; margin-top: 50px;\">
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
        return "home/privacypolicy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"container\" style=\"font-family: 'Montserrat'; margin-top: 50px;\">
<br/>
<br/>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">PRIVACY POLICY</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">Notre site
utilise des cookies. En continuant à naviguer sur ce site, vous
acceptez que nous continuions à utiliser des cookies pour mesurer et
comprendre le mode de visualisation de nos pages Web et pour
améliorer le fonctionnement de notre site. Si vous n'acceptez pas
ces conditions, vous pouvez décider de désactiver les cookies dans
votre navigateur Web, comme indiqué dans notre page Gestion des
cookies.</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\"><br/>
<br/>

</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">Si vous acceptez,
nous collecterons automatiquement certaines informations à partir de
votre navigateur. Ce choix sera stocké dans un cookie. Si vous ne le
souhaitez pas, vous pouvez activer l’option Do Not track de votre
navigateur ou cliquer ici.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">1. Qu’est qu’un
traceur ou cookie ?</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Le terme de cookies,
au sens large, couvre l’ensemble des traceurs déposés et ou lus
par exemple lors d’une consultation d’un site internet, de la
lecture d’un courrier électronique de l’installation ou
l’utilisation d’un logiciel ou d’une application mobile.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"> 
</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">2. Pourquoi S2I
PARTNER utilise des cookies ?</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Les différents
types de cookies qu’S2I PARTNER utilise sur ses sites Internet sont
réparties dans les catégories suivantes :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies techniques :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Ils permettent
d’enregistrer vos choix de paramétrage prédéfinis dans votre
navigateur afin de vous fournir des fonctionnalités améliorées et
plus adaptées à vos usages. Par exemple, un cookie technique peut
prendre en compte votre choix de langue dans votre navigateur. Ces
cookies ne peuvent pas suivre votre activité de navigation sur
d’autres sites Internet et ne recueillent aucune information vous
concernant qui pourrait être utilisée à des fins publicitaires.
Vous pouvez vous opposer à l’utilisation de ces cookies au niveau
de votre navigateur. (cf. chapitre 4) . Toutefois, nous vous
informons que si vous bloquez cette catégorie de cookies qui ne
stocke pas de données à caractère personnel, vous risquez de ne
plus pouvoir accéder au site et/ou services du site.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies de suivi
d’audience :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">activé</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Ils permettent à
S2I PARTNER de recueillir des informations sur la façon dont les
visiteurs utilisent les sites S2I PARTNER telles que les pages les
plus visitées, le nombre de visiteurs. Ces informations sont
utilisées pour mesurer l'activité de ces sites web. Cette analyse
des données d'utilisation d'un service par les internautes permet
d'apporter des améliorations à ce service. Toutes les informations
recueillies par le biais de ces cookies sont anonymes, et collectées
dans le seul but de développer et de suivre les tendances du trafic
sur notre site Internet.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Les cookies
publicitaires :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">activé</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Ils sont parfois
utilisés sur nos sites pour vous contacter à des fins de marketing
correspondant à vos centres d'intérêt. Ils sont notamment utilisés
pour aider à mesurer l'efficacité d'une campagne publicitaire.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies de réseaux
sociaux : 
</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Ils permettent de
partager des contenus de notre site avec d’autres personnes via des
réseaux sociaux. Lorsque vous utilisez les boutons de partage, un
cookie tiers est installé. Si vous êtes connectés à un réseau
social lors de votre navigation sur nos sites, les boutons de partage
permettent de relier les contenus consultés à votre compte
utilisateur sur le réseau social. Ces cookies peuvent être
désactivés en utilisant une des solutions proposées aux
paragraphes suivants.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"> 
</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">3. Information et
opposition concernant les cookies</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Si vous souhaitez
avoir des informations complémentaires sur les principaux cookies
utilisés par S2I PARTNER, vous trouverez ci-après les liens qui
vous permettent d’obtenir ces informations et de vous opposer à
l’utilisation de ces cookies.</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies de suivi
d’audience :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Google Analytics</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Cookies réseaux
sociaux :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Facebook</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">LinkedIn</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Twitter</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Viméo</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Youtube</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"> 
</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">4. Gestion des
cookies au niveau des navigateurs</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">Vous pouvez
également paramétrer vos cookies au niveau des navigateurs Web. Les
modalités de paramétrage et de suppression des cookies sont
différentes en fonction des navigateurs. Vous trouverez ci-après
ces modalités pour les principaux navigateurs connus :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Firefox;</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Chrome;</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Internet
Explorer;</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Safari;</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">pour Opera&nbsp;;</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\"> 5. Durée de
conservation des cookies</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">Les cookies sont
conservés pour une durée maximale de 13 mois à compter de leur
dépôt sur votre navigateur. À l’expiration de ce délai, votre
consentement sera à nouveau requis.</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">6. Outils de
gestion des cookies</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\">Il existe de
nombreux outils simples et gratuits sur le marché qui permettent de
gérer et de bloquer les cookies et autres traceurs en fonction de
vos besoins. 
</p>
<p style=\"margin-bottom: 0.28cm; line-height: 108%\"> Quelques outils
sont fournis ci-après à titre d’exemple :</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><span lang=\"en-US\">YourAdChoices</span></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><span lang=\"en-US\">Ghostery</span></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><span lang=\"en-US\">Disconnect</span></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><span lang=\"en-US\">Your
Online Choices</span></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"> 7. Charte de
protection des données</p>
<p style=\"margin-bottom: 0cm; line-height: 108%\">personnelles de S2I
PARTNER pour prendre connaissance de la Charte de protection des
données personnelles du Groupe S2I PARTNER, cliquez ici.</p>
<p style=\"margin-top: 0.42cm; margin-bottom: 0.42cm; line-height: 0.55cm; background: #ffffff\">
<font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Introduction</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Cette charte de
protection des données personnelles vous informe sur les engagements
d’S2I PARTNER quand des informations personnelles vous concernant
sont collectées via son site Web «&nbsp;Corporate&nbsp;» et
l’utilisation qu’S2I PARTNER en fait. Elle s’applique aux seuls
sites Internet d’S2I PARTNER et/ou des sociétés contrôlées par
S2I PARTNER (collectivement S2I PARTNER) qui possèdent un lien avec
le présent texte. Elle ne s’applique pas aux sites Internet d’S2I
PARTNER qui publient leur propre charte de confidentialité.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Données
personnelles qui peuvent<br/>
être collectées via nos sites
Internet</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Vous pouvez
visiter les sites Internet d’S2I PARTNER sans qu’il soit besoin
de communiquer de données personnelles vous concernant.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Toutefois, pour
accéder à certains services disponibles sur les sites comme le
téléchargement de certains documents ou formulaires, ou pour
recevoir des informations, vous abonner à une newsletter, ou encore
dans le cadre d’une autre utilisation spécifique, S2I PARTNER peut
être amenée à vous demander des données personnelles. La
communication de données personnelles dans ce cadre est volontaire.
Si vous ne souhaitez pas les communiquer, vous ne pourrez simplement
pas bénéficier des services disponibles sur le site d’S2I
PARTNER.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER
pourra compléter cette charte par des informations supplémentaires
propres à une interaction spécifique avec vous.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Les données
personnelles collectées sur les sites Internet d’S2I PARTNER sont
:&nbsp;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Pour
nous contacter via le site</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
des informations personnelles telles que votre nom, votre adresse,
votre adresse de courrier électronique, votre fonction ou votre
numéro de téléphone;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Pour
déposer une candidature&nbsp;</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">:
des informations personnelles telles que vos noms, prénoms, adresse
de courrier électronique, votre Curriculum Vitae ou une lettre de
candidature&nbsp;;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Pour
vous inscrire sur notre site&nbsp;</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">:
des informations personnelles telles que votre nom et vos coordonnées
professionnelles, ainsi que d'autres informations relatives à votre
demande qui peuvent être collectées par le biais de formulaires
spécifiques&nbsp;;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Pour
accéder à nos services en ligne</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
des informations personnelles telles que votre nom, prénom, numéro
de téléphone, adresse de courrier électronique, ainsi que d’autres
informations relatives à votre demande qui sont collectées par le
biais de formulaires spécifiques.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Les données
personnelles qui vous sont demandées peuvent l’être à titre
optionnel ou obligatoire.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Comment
sont utilisées vos données personnelles</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Vos données
personnelles ne font l’objet de traitement par S2I PARTNER que si
le traitement est nécessaire à l’exécution d’un contrat,
relève de l’intérêt légitime d’S2I PARTNER ou si vous y avez
consenti de manière expresse.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Ainsi, vos
données personnelles sont utilisées pour&nbsp;:</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Communiquer</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
&nbsp;donner suite à vos demandes, répondre à vos commentaires,
vous envoyer la documentation demandée par courrier électronique.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Recrute</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">r&nbsp;:
utiliser votre curriculum vitae ou votre candidature en ligne pour un
recrutement, ce qui implique que nous pouvons vous contacter par
courrier électronique, par téléphone ou par courrier postal.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>S’inscrire</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
pour recevoir nos publications ou newsletters ou les télécharger à
partir de notre site. Certaines données pourront être demandées
par le biais de formulaires spécifiques dans le cadre d’un
événement particulier. Si l’événement est couvert avec des
partenaires, les informations que vous communiquerez peuvent être
recueillies par ce tiers ou partagées avec lui. Il vous appartient
alors de vérifier la manière dont ce tiers utilise vos
informations. Nous conserverons vos informations pour les futures
interactions potentielles avec vous.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">•&nbsp;</font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\"><u>Services
en ligne</u></font></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">&nbsp;:
pour que les clients de l’activité TMF puisse accéder aux
services de déclaration de sinistre en ligne sur le matériel loué
par S2I PARTNER.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Informations
non personnelles collectées automatiquement</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER
s’est engagé à maintenir le caractère confidentiel de l’identité
des visiteurs de son site Web. S2I PARTNER peut fournir des
statistiques globales concernant les visiteurs du site, des données
analysant leur profil et d’autres informations à des tiers
relatives au site. Ces statistiques ne comportent en aucun cas des
informations permettant l’identification des personnes.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Identification
des visiteurs</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER
utilise des cookies et autres traceurs sur ses sites Internet. Pour
en savoir plus sur leur utilisation et pour les paramétrer, veuillez
consulter&nbsp;</font></font><a href=\"https://www.s2ipartner.com/fr/cookies\"><font color=\"#3e0d81\"><font face=\"Montserrat, serif\"><u>notre
politique relative aux cookies</u></font></font></a><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">.&nbsp;</font></font></p>
<p style=\"margin-top: 0.42cm; margin-bottom: 0.42cm; line-height: 0.55cm; background: #ffffff\">
<font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Mineurs</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Aucune
information ne peut être fournie à S2I PARTNER par des personnes
âgées de moins de 16 ans, sans l’accord préalable d’un parent
ou d’un représentant légal.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Sécurité</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER a
mis en place les mesures techniques et organisationnelles nécessaires
pour empêcher tout accès non autorisé, mauvaise utilisation,
divulgation, modification non autorisée, destruction illégale ou
perte accidentelle de vos données personnelles.&nbsp;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Toutefois, le
fait de fournir des données personnelles (que ce soit en direct sur
le site, par téléphone ou par Internet) n’est jamais sans risque
et les systèmes de communication électronique ne peuvent être
totalement protégés contre le « sabotage » ou le « piratage ».
Le réseau Internet est un système ouvert et non sécurisé et S2I
PARTNER ne peut être tenue responsable de la sécurité des
transmissions des données personnelles.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Durée de
conservation des informations personnelles</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER ne
conserve vos données personnelles que dans la mesure où cela est
nécessaire à la finalité du traitement mis en œuvre, en tenant
compte de la nécessité de répondre aux questions ou résoudre les
difficultés, d’améliorer ou de proposer de nouveaux services et
de se conformer à ses obligations légales en la matière (par
exemple, délais de conservation comptables et légaux). Cela
signifie qu’S2I PARTNER est amenée à conserver vos données
personnelles pendant une période raisonnable après la fin du
traitement, conforme aux obligations légales et réglementaires qui
s’appliquent à S2I PARTNER (par exemple, délais de conservation
comptables et légaux) et suffisante pour le règlement des
différends, l’exercice ou la défense des droits d’S2I PARTNER
dans les pays où S2I PARTNER est implantée.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Quand les
données personnelles que nous collectons ne sont plus nécessaires,
S2I PARTNER les détruit ou les efface de manière sécurisée.&nbsp;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>À
qui sont destinées vos données personnelles</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Vos données
personnelles collectées via le site Internet sont destinées à la
seule utilisation d’S2I PARTNER et utilisées dans la mesure
nécessaire à l'accomplissement des finalités indiquées dans la
présente charte.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER ne
vend ni ne communique d’une quelconque façon vos données
personnelles à des tiers.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Compte tenu de
la dimension internationale d’ S2I PARTNER, les données
personnelles collectées par S2I PARTNER peuvent être conservées et
traitées dans, ou transférées entre, n’importe quels pays où la
société S2I PARTNER a une activité. Cependant, S2I PARTNER ne
confère d’accès à vos données personnelles entre les filiales
du Groupe S2I PARTNER que si cela est nécessaire. &nbsp;</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Dans le cas où
des données personnelles sont transférées vers des pays situés
hors de l’Espace Economique Européen (EEE) qui n’assurent pas un
niveau de protection adéquate, nous nous assurons que les clauses
contractuelles types visés par la décision de la Commission
Européenne du 5 février 2010 (2010/87/EC), applicables en cas de
transfert de données personnelles à un sous-traitant établi dans
un pays tiers, s’appliquent à l’organisation qui reçoit les
données personnelles.</font></font></p>
<p style=\"margin-top: 0.42cm; margin-bottom: 0.42cm; line-height: 0.55cm; background: #ffffff\">
<font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Comment
exercer vos droits</b></font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Vous disposez&nbsp;à
tout moment&nbsp;d’un droit d’accès à vos informations
personnelles. Vous disposez aussi du droit de demander la
rectification et l’effacement, le droit à la limitation et à
l’opposition au traitement et le droit à la portabilité dans les
conditions prévues par la réglementation applicable.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">Si vous avez des
questions sur la charte de confidentialité ou souhaitez exercer vos
droits, il vous suffit de vous connecter à&nbsp;l’adresse
suivante&nbsp;</font></font><font color=\"#0563c1\"><u><a href=\"mailto:info@s2ipartner.com\"><font face=\"Montserrat, serif\">info@s2ipartner.com</font></a></u></font><font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">.
Enfin vous avez le droit d’introduire une réclamation auprès de
la Commission Nationale de l’Informatique et des Libertés (CNIL),
autorité de contrôle en charge du respect des obligations en
matière de données à caractère personnel.</font></font></p>
<p style=\"margin-bottom: 0.34cm; line-height: 100%; background: #ffffff\">
<font color=\"#0070c0\">&nbsp;</font><font color=\"#0070c0\"><font face=\"Montserrat, serif\"><b>Modifications</b></font></font></p>
<p style=\"margin-bottom: 0cm; line-height: 100%; background: #ffffff\">
<font color=\"#3c3c3b\"><font face=\"Montserrat, serif\">S2I PARTNER se
réserve le droit de modifier la présente charte de confidentialité
ainsi que de modifier ou de supprimer l’accès à ce site ; S2I
PARTNER pourra aussi modifier son contenu à tout moment, avec ou
sans préavis.</font></font></p>
<p style=\"margin-bottom: 0cm; line-height: 108%\"><br/>

</p>
</div>
<div class=\"container-fluid\" id=\"contact\" style=\"height: 800px; margin-top: 50px;\">
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
        <script>
    \$(\"#nav\").animate({
        backgroundColor: \"rgba(255,255,255,0.7)\"
    });
    \$(\".nav-link\").animate({
        color: \"black\"
    });
    \$(\"#logo\")[0].src = \"/logo.png\";
</script>
{% endblock %}", "home/privacypolicy.html.twig", "/home/souaguen/Bureau/s2ipartner/templates/home/privacypolicy.html.twig");
    }
}
