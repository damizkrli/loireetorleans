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

/* trombinoscope/index.html.twig */
class __TwigTemplate_e91e44ce085927da7da279cc2960711e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("_layout.html.twig", "trombinoscope/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        // line 4
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("trombi");
        echo "
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    Loire&Orléans | Trombinoscope
";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <section class=\"d-flex flex-column justify-content-center align-items-center\">

        <h1 class=\"text-center my-4\">Trombinoscope</h1>

        <div class=\"d-flex flex-column col-12\">
            <div class=\"d-flex justify-content-center my-4\">
                <div class=\"form-group\">
                    <div class=\"d-flex justify-content-center my-4\">
                        <span class=\"infobulle\"
                              aria-label=\"Veuillez saisir un nom, un prénom, une entreprise, un bassin d'activité ou un mot clé.\">
                            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-inline my-2 my-lg-0 justify-content-center"]]);
        echo "
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control mr-sm-2 col-md-7", "placeholder" => "Marc, Pichon, SARL ..."]]);
        echo "
                            <button class=\"btn btn-primary my-2 my-sm-0 mt-4\" type=\"submit\">Rechercher</button>
                        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </span>
                    </div>
                </div>
            </div>

            <div class=\"row p-0 m-0 justify-content-center w-100\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "                    <div class=\"trombi card my-4 mx-lg-5 col-md-5 col-lg-2 m-2 p-0\">
                        <img class=\"card-img-top\"
                             src=\"";
            // line 38
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["user"], "picture", [], "any", false, false, false, 38))) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img_profil_trombinoscope.png"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["user"], "pictureFile", "App\\Entity\\User"), "html", null, true);
            }
            echo "\"
                             alt=\"Photo Ambassadeur\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 41), "html", null, true);
            echo "</h3>
                            <p class=\"card-title \">
                                <i class=\"far fa-building\"></i>
                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, false, 44), "html", null, true);
            echo "
                            </p>
                            <p><small><i><b>Centres d'intêrets :</b> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</i></small></p>
                        </div>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["login" => twig_get_attribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-info mt-2 rounded-0\">En savoir
                            +</a>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                    Aucun Ambassadeur trouvé
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>
        <div class=\"d-flex justify-content-center w-100 my-5\">
            ";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["users"] ?? null));
        echo "
        </div>
    </section>



";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "trombinoscope/index.html.twig";
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
        return array (  165 => 57,  160 => 54,  153 => 52,  144 => 48,  139 => 46,  134 => 44,  126 => 41,  116 => 38,  112 => 36,  107 => 35,  97 => 28,  92 => 26,  88 => 25,  76 => 15,  72 => 14,  67 => 10,  63 => 9,  57 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "trombinoscope/index.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/trombinoscope/index.html.twig");
    }
}
