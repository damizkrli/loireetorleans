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

/* message/new.html.twig */
class __TwigTemplate_fded00558f79474c430e3870f0452e51 extends Template
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
        $this->parent = $this->loadTemplate("_layout.html.twig", "message/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Mes échanges | Ajouter un commentaire";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "     ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("addComment");
        echo "
 ";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    <h1 class=\"text-center my-5\">Ajouter un commentaire</h1>
    <div class=\"container\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["messageForm"] ?? null), 'form_start', ["attr" => ["class" => "col-12 d-flex flex-column align-items-center p-0"]]);
        echo "
        <div class=\"col-10 col-md-8 d-flex flex-column text-center\">
            <div class=\"d-flex flex-column\">
                <div class=\"comment mt-4 mb-4\">
                        <div class=\"form-group d-flex flex-column my-1 text-left  font-weight\">
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["messageForm"] ?? null), "message", [], "any", false, false, false, 16), 'label');
        echo "
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["messageForm"] ?? null), "message", [], "any", false, false, false, 17), 'widget', ["attr" => ["rows" => "6"]]);
        echo "
                        </div>
                </div>
                <button type=\"submit\" class=\"btn btn-lg btn-primary m-2 col-md-4 align-self-center\">Soumettre</button>
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["messageForm"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-center\">
        <a class=\"btn btn-primary my-4 \" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_index");
        echo "\">Retour aux documents</a>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "message/new.html.twig";
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
        return array (  102 => 26,  94 => 21,  87 => 17,  83 => 16,  75 => 11,  70 => 8,  66 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "message/new.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/message/new.html.twig");
    }
}
