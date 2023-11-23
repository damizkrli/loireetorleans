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
class __TwigTemplate_cad1060372160a24dd9712263bcd7d96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_layout.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Loire&Orléans | Accueil";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "      ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("home");
        echo "
  ";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <section class=\"mb-5\">
        <h1 class=\"text-center my-5\">Les Ambassadeurs de Loire&Orléans</h1>
        <div class=\"row d-flex align-items-top justify-content-center mx-0 \">
            <figure class=\" col-10 col-lg-4 text-center\">
                <img class=\"col-12 rounded p-0\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/work.png"), "html", null, true);
        echo "\" alt=\"work\">
            </figure>
            <div class=\"col-10 col-lg-4\">
                <p>Cette démarche a pour objectif de constituer une communauté d’acteurs économiques loirétains prêts à
                    revendiquer les valeurs de LOIRE&ORLEANS, à participer au rayonnement du territoire sur les plans
                    national et international et à co-construire, avec les élus locaux, les stratégies futures de
                    développement économique.</p>
                <p>L’attrait du département tient à son esprit pionnier, à un sens de l’innovation qui ne date pas
                    d’aujourd’hui : en témoignent le Pont-canal de Briare (premier canal de jonction européen) ou encore
                    l’audacieuse aventure expérimentale de l’aérotrain.<br>
                    Quant au développement durable et aux écotechnologies, ils sont souvent reconnus par des prix
                    nationaux.</p>
                <p>Le département s’appuie sur de solides leviers que sont ses pôles d’excellence économique, ses
                    clusters, ses pépinières d’entreprises généralistes ou technologiques comme le Lab'O...<br>
                    Les acteurs loirétains mettent à l'honneur « l’optimisation du territoire » et ne ménagent pas leurs efforts depuis plusieurs décennies pour proposer
                    toutes les infrastructures susceptibles d’attirer de grands groupes, à l’image d’Amazon qui a
                    implanté son premier entrepôt dans le département, faisant ainsi du Loiret un acteur important
                    de l’e-commerce, ou des grands groupes de la cosmétique qui ont choisi le Loiret pour leurs unités de production et leur R&D.</p>
            </div>
        </div>
        <h2 class=\"text-center my-5\">Qui sont les Ambassadeurs ?</h2>
        <div class=\"row align-items-top d-flex justify-content-center mx-0\">
            <div class=\"col-10 col-lg-4\">
                <p>Un Ambassadeur Loire&Orléans est une personne physique, le plus souvent cadre ou chef d’entreprise,
                    fier de son territoire. Il revendique, comme tous les Loirétains, cet esprit pionner qui a forgé
                    l’histoire économique du Loiret au fil des siècles.<br>
                    Particulièrement tourné vers l’énergie et l’industrie au XXème siècle, le Loiret a démontré sa
                    résilience exceptionnelle face aux crises, la performance de ses entreprises. Notre département propose un envronnement global qui
                    a inspiré plusieurs filières d’excellence comme la pharmacologie, la cosmétique,
                    l’agroalimentaire…</p>
                <p>L’Ambassadeur est porteur de messages, des valeurs de notre tissu économique, il met en lumière la
                    ferveur innovante et l'esprit d'entrepreunariat qui émergent de tous les bassins d’emploi du Loiret avec, en son cœur, une métropole jeune,
                    étudiante, motivante aux côtés des autres territoires. Tout cela dans un environnement où la qualité de vie est source de performance et de
                    sérénité.<br>
                    L’Ambassadeur participe à la création d’une communauté d’acteurs économiques, aux réflexions sur la
                    mise en œuvre d’une stratégie de développement économique et au rayonnement du territoire.<br>
                    Être Ambassadeur est un engagement. En tant que personne physique, au sein d’un collectif
                    diversifié, il s’implique dans les initiatives de la société civile.<br>
                    Il revendique son adhésion à ce collectif et porte fièrement les valeurs qui sont les nôtres
                    (authenticité, courage, audace, responsabilité, transmission)…<br>
                    Vivre bien, vivre beau, vivre bon, telle est la « profession de foi » de l’Ambassadeur Loire&Orléans
                    sur laquelle il s’engage dès son arrivée..</p>
            </div>
            <figure class=\"col-10 col-lg-4 text-center\">
                <img class=\"col-12 rounded p-0\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/amb_picture.png"), "html", null, true);
        echo "\" alt=\"Description\">
                <figcaption class=\"mb-3 font-italic \">
                    Emmanuel Vasseneix, Président de la Laiterie de Saint Denis (LSDH) et Ambassadeur Loire&Orléans.
                    @Didier.Depoorter
                </figcaption>
                <a class=\"btn btn-primary mt-3 col-12\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">
                    Découvrir nos Ambassadeurs
                </a>
            </figure>
            <div class=\"card col-8 mt-2 my-4 pb-3 mx-0\">
                <h3 class=\"text-center my-4\">Quelques mots de nos ambassadeurs <i class=\"far fa-comment-dots\"></i></h3>
                <blockquote class=\"font-italic mt-4 mb-4\">
                    <p>
                        « J’aime voir la surprise sur les visages quand je leur fait découvrir ma ville.»
                    </p>
                    <footer>
                        <cite>Isabelle Pouységur,</cite>
                    </footer>
                    Dirigeante d’Equivivencia.
                </blockquote>
                <blockquote class=\"font-italic text-right mt-4 mb-4\">
                    <p>
                        « J’ai été amené à partager mon expérience pour accompagner des repreneurs dans le département.
                        La démarche Ambassadeur est une suite logique à mon engagement.»
                    </p>
                    <footer>
                        <cite>
                            Christian Siest,
                        </cite>
                    </footer>
                    Président d’Orrion Chemicals Orgaform.
                </blockquote>
                <blockquote class=\"font-italic mt-4 mb-4\">
                    <p>
                        « Je souhaite accompagner l’ambition de positionner Orléans Métropole dans le groupe des métropoles
                        françaises qui comptent.»
                    </p>
                    <footer>
                        <cite>
                            Frédéric Thomas,
                        </cite>
                    </footer>
                    Associé EY.
                </blockquote>
            </div>
        </div>
    </section>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  131 => 60,  123 => 55,  76 => 11,  70 => 7,  66 => 6,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/home/index.html.twig");
    }
}
