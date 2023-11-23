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

/* message/index.html.twig */
class __TwigTemplate_f7d9fcc2e1d3fb15a0d4ee4de554962b extends Template
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
        return "_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_layout.html.twig", "message/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Mes échanges ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <section class=\"d-md-flex align-items-center mb-5\">
        <div class=\"w-100\">
            <h1 class=\"text-center my-4\">Mes échanges</h1>
            <div class=\"d-flex justify-content-center my-4 flex-column\">
                <h2 class=\"text-center my-4\">Messages Reçus</h2>
                <table class=\"table table-hover col-10 p-0 mx-auto\">
                    <thead class=\"bg-primary\">
                    <tr class=\"text-center text-light\">
                        <th scope=\"col\">Document</th>
                        <th scope=\"col\">Message</th>
                        <th scope=\"col\">Date d'envoi du dernier message</th>
                        <th scope=\"col\">Détails</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conversations"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 23
            echo "                        ";
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 23)), "user", [], "any", false, false, false, 23), "roles", [], "any", false, false, false, 23)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) === "ROLE_ADMINISTRATEUR")) {
                // line 24
                echo "                        <tr class=\"text-center\">
                            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conversation"], "document", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 26)), "message", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                            <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 27)), "date", [], "any", false, false, false, 27), "d/m/Y à H:i"), "html", null, true);
                echo "</td>
                            <td><a class=\"btn btn-info\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conversation"], "document", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Consulter</a></td>
                        </tr>
                        ";
            }
            // line 31
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "                        <tr>
                            <td colspan=\"3\">Aucun message</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-center my-4 flex-column\">
                <h2 class=\"text-center my-4\">Messages Envoyés</h2>
                <table class=\"table table-hover col-10 p-0 mx-auto\">
                    <thead class=\"bg-primary\">
                    <tr class=\"text-center text-light\">
                        <th scope=\"col\">Document</th>
                        <th scope=\"col\">Message</th>
                        <th scope=\"col\">Date d'envoi du dernier message</th>
                        <th scope=\"col\">Détails</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conversations"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 52
            echo "                        ";
            if (((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 52)), "user", [], "any", false, false, false, 52), "roles", [], "any", false, false, false, 52)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                // line 53
                echo "                            <tr class=\"text-center\">
                                <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conversation"], "document", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                                <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 55)), "message", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                                <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 56)), "date", [], "any", false, false, false, 56), "d/m/Y à H:i"), "html", null, true);
                echo "</td>
                                <td><a class=\"btn btn-info\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conversation"], "document", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">Consulter</a></td>
                            </tr>
                        ";
            }
            // line 60
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "                        <tr>
                            <td colspan=\"3\">Aucun message</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </tbody>
                </table>
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
        return "message/index.html.twig";
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
        return array (  179 => 65,  170 => 61,  165 => 60,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  144 => 53,  141 => 52,  136 => 51,  119 => 36,  110 => 32,  105 => 31,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  84 => 24,  81 => 23,  76 => 22,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "message/index.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/message/index.html.twig");
    }
}
