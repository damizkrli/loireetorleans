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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig */
class __TwigTemplate_c59a616e7ff92f549344b7060eb1fc80 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"float-right\">
        ";
        // line 14
        if (($context["sorted"] ?? null)) {
            // line 15
            echo "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 16
                echo "                <i class=\"material-icons\">expand_more</i>
            ";
            } else {
                // line 18
                echo "                <i class=\"material-icons\">expand_less</i>
            ";
            }
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "            <i class=\"material-icons\">unfold_more</i>
        ";
        }
        // line 23
        echo "    </span>
    ";
        // line 24
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
</a>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig";
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
        return array (  77 => 24,  74 => 23,  70 => 21,  67 => 20,  63 => 18,  59 => 16,  56 => 15,  54 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/vendor/knplabs/knp-paginator-bundle/templates/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig");
    }
}
