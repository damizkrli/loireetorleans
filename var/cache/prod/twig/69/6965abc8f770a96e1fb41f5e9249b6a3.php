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

/* document/_form.html.twig */
class __TwigTemplate_de8227b0ec1fe7f2cda2e2727ddc2822 extends Template
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
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "col-12 d-flex flex-column align-items-center"]]);
        echo "
<div class=\"col-10 col-md-8 d-flex flex-column p-4 align-items-center\">
    <div class=\"d-flex flex-column col-md-10 p-0\">
        <div class=\"d-flex flex-column my-3\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 5), 'label', ["label" => "Nom du document"]);
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 6), 'widget');
        echo "
            ";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "errors", [], "any", false, false, false, 7))) {
            // line 8
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 9), 'errors');
            echo "
                </div>
            ";
        }
        // line 12
        echo "        </div>
        <div class=\"d-flex flex-column my-3\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "documentFile", [], "any", false, false, false, 14), 'label', ["label" => "Document à charger"]);
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "documentFile", [], "any", false, false, false, 15), 'widget');
        echo "
            ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "documentFile", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "errors", [], "any", false, false, false, 16))) {
            // line 17
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "documentFile", [], "any", false, false, false, 18), 'errors');
            echo "
            </div>
            ";
        }
        // line 21
        echo "        </div>
    </div>
    <button class=\"btn btn-lg btn-primary mt-4 col-md-4\">";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
</div>

";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "document/_form.html.twig";
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
        return array (  96 => 26,  90 => 23,  86 => 21,  80 => 18,  77 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 12,  57 => 9,  54 => 8,  52 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "document/_form.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/document/_form.html.twig");
    }
}
