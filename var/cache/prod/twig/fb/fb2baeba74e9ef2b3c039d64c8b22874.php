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

/* ambassador/show.html.twig */
class __TwigTemplate_59b65a3d36ff94c55a768792b7232197 extends Template
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
        return "_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_layout.html.twig", "ambassador/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Loire&Orléans | Mon Profil Ambassadeur
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("profil");
        echo "
    ";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"d-flex align-items-center  flex-column my-5 col-12 p-0\">
            ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATEUR")) {
            // line 15
            echo "                <h1 class=\"my-4 text-center\"> Mon Profil Administrateur</h1>
            ";
        } else {
            // line 17
            echo "                <h1 class=\"my-4 text-center\"> Mon Profil Ambassadeur</h1>
            ";
        }
        // line 19
        echo "            <div class=\" profil d-flex col-10 col-md-8 my-3 p-4 justify-content-around flex-column flex-lg-row align-items-center\">
                <div class=\"col-lg-3 col-md-6 my-3\">
                    <img src=\"";
        // line 21
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "picture", [], "any", false, false, false, 21))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img_profil_trombinoscope.png"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(($context["user"] ?? null), "pictureFile", "App\\Entity\\User"), "html", null, true);
        }
        echo "\" class=\"card-img\" alt=\"Photo ambassadeur\">
                </div>

                <div class=\"d-flex col-lg-8 flex-column flex-md-row justify-content-around align-items-start\">
                    <div class=\"d-flex flex-column mx-md-3\">
                        <h3>Général</h3>
                        <div>
                            <p>Nom : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                            <p>Prénom : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                            <p><i class=\"fas fa-phone-alt\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phoneNumber", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                            <p><i class=\"fas fa-at\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                            <p><i class=\"far fa-map\"></i> Description : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                        </div>

                    </div>
                    <div class=\"d-flex flex-column\">
                        <h3>Professionnel</h3>
                        <div >
                            <p>Entreprise : ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "company", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
                            <p>Secteur d'activité : ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "activity", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
                            <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                            <p>Code postal : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "postalCode", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                            <p><i class=\"fas fa-city\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 43), "html", null, true);
        echo "</p></div>
                    </div>
                </div>
            </div>
            <div class=\"d-flex align-items-center my-4 justify-content-center w-100 flex-md-row flex-column\">
                ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATEUR")) {
            // line 49
            echo "                     <a class=\"btn btn-lg btn-primary mx-3 col-lg-2 col-md-4 col-8 my-2\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\">Espace Administration</a>
                ";
        } else {
            // line 51
            echo "                    <a class=\"btn btn-lg btn-primary mx-3 col-lg-2 col-md-4 col-8 my-2\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Retour Trombinoscope</a>
                ";
        }
        // line 53
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53) === ($context["user"] ?? null))) {
            // line 54
            echo "                    <a class=\"btn btn-lg btn-primary mx-3 col-lg-2 col-md-4 col-8 my-2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["login" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "login", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Modifier</a>
                ";
        }
        // line 56
        echo "            </div>
        </div>
    </section>
";
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    <script src=\"https://kit.fontawesome.com/38fc56fe7a.js\" crossorigin=\"anonymous\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ambassador/show.html.twig";
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
        return array (  189 => 62,  185 => 61,  178 => 56,  172 => 54,  169 => 53,  163 => 51,  157 => 49,  155 => 48,  147 => 43,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  121 => 32,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  91 => 21,  87 => 19,  83 => 17,  79 => 15,  77 => 14,  73 => 12,  69 => 11,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ambassador/show.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/ambassador/show.html.twig");
    }
}
