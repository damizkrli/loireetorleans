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

/* reset_password/reset.html.twig */
class __TwigTemplate_bdb99c274856a8c691945b5ab6906e0f extends Template
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
        $this->parent = $this->loadTemplate("_layout.html.twig", "reset_password/reset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Réinitialisation mot de passe";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "     ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "
 ";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"form w-100\">
            <h1 class=\"my-4 text-center\">Réinitialiser votre mot de passe</h1>

            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["resetForm"] ?? null), 'form_start', ["attr" => ["class" => "col-12 d-flex flex-column align-items-center"]]);
        echo "
            <div class=\"col-10 col-md-8 d-flex flex-column p-4 align-items-center\">
                <div class=\"form-group col-md-8 col-11\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "password", [], "any", false, false, false, 15), "first", [], "any", false, false, false, 15), 'label');
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "password", [], "any", false, false, false, 16), "first", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "col-12"]]);
        echo "
                    ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "password", [], "any", false, false, false, 17), "first", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17))) {
            // line 18
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "password", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), 'errors');
            echo "
                    </div>
                    ";
        }
        // line 22
        echo "                </div>

                <div class=\"form-group col-md-8 col-11\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "password", [], "any", false, false, false, 25), "second", [], "any", false, false, false, 25), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "password", [], "any", false, false, false, 26), "second", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "col-12"]]);
        echo "
                    ";
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "password", [], "any", false, false, false, 27), "second", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27))) {
            // line 28
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "password", [], "any", false, false, false, 29), "second", [], "any", false, false, false, 29), 'errors');
            echo "
                    </div>
                    ";
        }
        // line 32
        echo "                </div>

                <button class=\"btn btn-lg btn-primary mt-3\">Réinitialiser</button>
                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["resetForm"] ?? null), 'form_end');
        echo "
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
        return "reset_password/reset.html.twig";
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
        return array (  130 => 35,  125 => 32,  119 => 29,  116 => 28,  114 => 27,  110 => 26,  106 => 25,  101 => 22,  95 => 19,  92 => 18,  90 => 17,  86 => 16,  82 => 15,  76 => 12,  70 => 8,  66 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/reset.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/reset_password/reset.html.twig");
    }
}
