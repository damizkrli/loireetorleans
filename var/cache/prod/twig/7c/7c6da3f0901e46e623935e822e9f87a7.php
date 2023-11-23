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

/* admin_conversation/index.html.twig */
class __TwigTemplate_19b2df95d726bcc27d83af2dee4df913 extends Template
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
        $this->parent = $this->loadTemplate("_layoutAdmin.html.twig", "admin_conversation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Administrateur | Demandes d'information";
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
        <div class=\"w-100 d-flex flex-column\">
            <h1 class=\"my-4 text-center\">Demandes d'informations</h1>
            <div class=\"d-flex justify-content-center flex-column my-4\">
                <h3 class=\"my-4 text-center\">Nouveaux messages</h3>
                <table class=\"table table-hover col-10 p-0 mx-auto\">
                    <thead class=\"bg-primary\">
                    <tr class=\"text-center text-light\">
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Document</th>
                        <th scope=\"col\">Nom-Prénom-Entreprise</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conversations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 24
            echo "                        ";
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 24)), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                // line 25
                echo "                            <tr class=\"text-center\">
                                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 26)), "date", [], "any", false, false, false, 26), "d/m/Y à H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conversation"], "document", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["conversation"], "users", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 29
                    echo "                                    ";
                    if (((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 29)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                        // line 30
                        echo "                                        <td>";
                        echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 30) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 30)) . " / ") . twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, false, 30)), "html", null, true);
                        echo "</td>
                                    ";
                    }
                    // line 32
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                                <td><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_conversation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">Consulter</a></td>
                            </tr>
                        ";
            }
            // line 36
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </tbody>
                </table>
                ";
        // line 40
        if (twig_test_empty(($context["conversations"] ?? null))) {
            // line 41
            echo "                    <p class=\"text-center\">'Pas de nouveaux messages'</p>
                ";
        }
        // line 43
        echo "            </div>
            <div class=\"d-flex flex-column justify-content-center my-4\">
                <h3 class=\"my-4 text-center\">Messages traités</h3>
                <table class=\"table table-hover col-10 p-0 mx-auto\">
                    <thead class=\"bg-primary\">
                    <tr class=\"text-center text-light\">
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Document</th>
                        <th scope=\"col\">Nom-Prénom-Entreprise</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conversations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 57
            echo "                        ";
            if (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 57)), "user", [], "any", false, false, false, 57), "roles", [], "any", false, false, false, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null) === "ROLE_ADMINISTRATEUR")) {
                // line 58
                echo "                            <tr class=\"text-center\">
                                <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 59)), "date", [], "any", false, false, false, 59), "d/m/Y à H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conversation"], "document", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["conversation"], "users", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 62
                    echo "                                    ";
                    if (((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 62)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                        // line 63
                        echo "                                        <td>";
                        echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 63) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 63)) . " / ") . twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, false, 63)), "html", null, true);
                        echo "</td>
                                    ";
                    }
                    // line 65
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                                <td><a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_conversation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\">Consulter</a></td>
                            </tr>
                        ";
            }
            // line 69
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"d-flex align-items-center my-4 flex-column\">
                <a class=\"btn btn-lg btn-primary mt-3\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">Retour Gestion</a>
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
        return "admin_conversation/index.html.twig";
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
        return array (  219 => 74,  213 => 70,  207 => 69,  200 => 66,  194 => 65,  188 => 63,  185 => 62,  181 => 61,  177 => 60,  173 => 59,  170 => 58,  167 => 57,  163 => 56,  148 => 43,  144 => 41,  142 => 40,  138 => 38,  131 => 36,  124 => 33,  118 => 32,  112 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  94 => 25,  91 => 24,  87 => 23,  70 => 8,  66 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_conversation/index.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/admin_conversation/index.html.twig");
    }
}
