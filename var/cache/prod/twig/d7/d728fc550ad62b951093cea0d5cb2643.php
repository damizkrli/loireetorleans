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

/* admin_profile/index.html.twig */
class __TwigTemplate_71d7970f60c0c97dc7b42dc8a663992b extends Template
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
        return "_layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_layoutAdmin.html.twig", "admin_profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Administrateur | Gestion des profils Ambassadeurs";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "     ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("adminProfil");
        echo "
 ";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <section class=\"d-md-flex align-items-center mb-5\">
        <div class=\"form w-100\">
            <h1 class=\"my-4 text-center\">Profils des Ambassadeurs</h1>

            <h3 class=\"my-4 text-center\">Profils en attente de validation</h3>
            <table class=\"table table-hover col-10 p-0 mx-auto\">
                <thead class=\"bg-primary\">
                <tr class=\"text-center text-light\">
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Entreprise</th>
                    <th scope=\"col\">Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["waitings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["waiting"]) {
            // line 24
            echo "                        <tr class=\"text-center\">
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["waiting"], "firstname", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["waiting"], "lastname", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["waiting"], "company", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-info\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_show", ["login" => twig_get_attribute($this->env, $this->source, $context["waiting"], "login", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Consulter</a></td>
                        </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['waiting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
            </table>
            <div class=\"d-flex justify-content-center w-100 my-5\">
                ";
        // line 35
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["waitings"] ?? null));
        echo "
            </div>

            <h3 class=\"my-4 text-center\">Profils Validés</h3>
            <div class=\"d-flex justify-content-center my-4\">
                <div class=\"form-group\">
                    <div class=\"d-flex justify-content-center my-4\">
                        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-inline my-2 my-lg-0 justify-content-center"]]);
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control mr-sm-2 col-md-7", "placeholder" => "Marc, Pichon, SARL ..."]]);
        echo "
                        <button class=\"btn btn-primary my-2 my-sm-0 mt-4\" type=\"submit\">Rechercher</button>
                        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <table class=\"table table-hover col-10 p-0 mx-auto\">
                <thead class=\"bg-primary\">
                <tr class=\"text-center text-light\">
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Entreprise</th>
                    <th scope=\"col\">Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["validates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["validate"]) {
            // line 60
            echo "                        <tr class=\"text-center\">
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["validate"], "firstname", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["validate"], "lastname", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["validate"], "company", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-info\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_show", ["login" => twig_get_attribute($this->env, $this->source, $context["validate"], "login", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Consulter</a></td>
                        </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['validate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tbody>
            </table>
            <div class=\"d-flex justify-content-center w-100 my-5\">
                ";
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["validates"] ?? null));
        echo "
            </div>
            <div class=\"d-flex align-items-center my-4 flex-column\">
                <a class=\"btn btn-lg btn-primary mt-3\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">Retour gestion</a>
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
        return "admin_profile/index.html.twig";
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
        return array (  196 => 73,  190 => 70,  185 => 67,  176 => 64,  172 => 63,  168 => 62,  164 => 61,  161 => 60,  157 => 59,  140 => 45,  135 => 43,  131 => 42,  121 => 35,  116 => 32,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  91 => 24,  87 => 23,  70 => 8,  66 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_profile/index.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/admin_profile/index.html.twig");
    }
}
