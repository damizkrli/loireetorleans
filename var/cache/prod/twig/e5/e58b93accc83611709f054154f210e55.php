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

/* @KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig */
class __TwigTemplate_d105b96d6c2417b4716c4e36bebbc3d4 extends Template
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
        // line 7
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
    <span class=\"float-end\">
        ";
        // line 9
        if (($context["sorted"] ?? null)) {
            // line 10
            echo "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 11
                echo "                <i class=\"fa fa-sort-down\"></i>
            ";
            } else {
                // line 13
                echo "                <i class=\"fa fa-sort-up\"></i>
            ";
            }
            // line 15
            echo "        ";
        } else {
            // line 16
            echo "            <i class=\"fa fa-sort\"></i>
        ";
        }
        // line 18
        echo "    </span>
    ";
        // line 19
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
        return "@KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig";
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
        return array (  77 => 19,  74 => 18,  70 => 16,  67 => 15,  63 => 13,  59 => 11,  56 => 10,  54 => 9,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/vendor/knplabs/knp-paginator-bundle/templates/Pagination/bootstrap_v5_fa_sortable_link.html.twig");
    }
}