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

/* admin_profile/show.html.twig */
class __TwigTemplate_721e955ff8e9ed58f3ad8cd45480dac6 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_layoutAdmin.html.twig", "admin_profile/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Loire&Orléans | Administrateur | Gestion de profils | ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 4) . " ") . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 4)), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("adminProfil");
        echo "
    ";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <section>
        <div class=\"d-flex flex-column col-12 p-0 align-items-center\">
            <div class=\"col-lg-6 mt-4 d-flex justify-content-center\">
                <div class=\"confirmation col-12 p-0\">
                    <p class=\"d-flex justify-content-center align-items-center mb-3 mt-3\">Utilisateur en attente de confirmation
                        ";
        // line 17
        echo twig_include($this->env, $context, "admin_profile/_form.html.twig");
        echo "
                    </p>
                </div>
                </div>
                <div class=\"d-flex align-items-lg-end align-items-center flex-column flex-lg-row mt-5\">
                    <div class=\"col-lg-4 col-md-8 p-0\">
                        <figure class=\"img_ambassador m-0\">
                            <img src=\"";
        // line 24
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "picture", [], "any", false, false, false, 24))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img_profil_trombinoscope.png"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["user"] ?? null), "pictureFile", "App\\Entity\\User"), "html", null, true);
        }
        echo "\"
                                 class=\"card-img col-lg-12\" alt=\"Photo Ambassadeur\">
                        </figure>
                    </div>
                    <div class=\"col-sm-8 align-items-center mt-5\">
                        <h1 class=\"card-title\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 29), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 29), "html", null, true);
        echo "</h1>
                        <div class=\"card-body m-0\">
                            <p><i class=\"fas fa-at\"></i>
                                <u>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "</u>
                            </p>
                            <p>
                                <i class=\"fas fa-phone-alt\"></i>
                                ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phonenumber", [], "any", false, false, false, 36), "html", null, true);
        echo "
                            </p>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-angle-double-left\"></i>
                                ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "description", [], "any", false, false, false, 40), "html", null, true);
        echo "
                                <i class=\"fas fa-angle-double-right\"></i>
                            </p>
                        </div>
                        <div class=\"card-body mt-3\">
                            <h2 class=\"card-title\">
                                <i class=\"fas fa-building\"></i>
                                ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "company", [], "any", false, false, false, 47), "html", null, true);
        echo "
                            </h2>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                                ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street", [], "any", false, false, false, 51), "html", null, true);
        echo "
                            </p>
                            <p>
                                <span class=\"ml-3\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "postalCode", [], "any", false, false, false, 54), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 54), "html", null, true);
        echo "</span>
                            </p>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-industry\"></i>
                                ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "activity", [], "any", false, false, false, 58), "html", null, true);
        echo "
                            </p>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-map-marked-alt\"></i>
                                ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "employmentArea", [], "any", false, false, false, 62), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 p-0 d-flex justify-content-center mt-3\">
                    <a class=\"btn btn-primary col-md-2 m-3\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_index");
        echo "\">Retour</a>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    <script src=\"https://kit.fontawesome.com/38fc56fe7a.js\" crossorigin=\"anonymous\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin_profile/show.html.twig";
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
        return array (  188 => 76,  184 => 75,  174 => 68,  165 => 62,  158 => 58,  149 => 54,  143 => 51,  136 => 47,  126 => 40,  119 => 36,  112 => 32,  104 => 29,  92 => 24,  82 => 17,  75 => 12,  71 => 11,  64 => 8,  60 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_profile/show.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/admin_profile/show.html.twig");
    }
}
