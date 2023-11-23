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

/* admin_conversation/show.html.twig */
class __TwigTemplate_dc474f7cc05cb99e6794948b722cc0e4 extends Template
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
        $this->parent = $this->loadTemplate("_layoutAdmin.html.twig", "admin_conversation/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Administrateur | Demande d'information de ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["conversation"] ?? null), "users", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 3)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 3) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 3)) . " / ") . twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, false, 3)), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        <div class=\"w-100 d-flex justify-content-center flex-column\">
            <h1 class=\"my-4 text-center\">Demande d'information sur ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["conversation"] ?? null), "document", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "
                de ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["conversation"] ?? null), "users", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 11)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 11) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 11)) . " / ") . twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, false, 11)), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h1>
            <div class=\"d-flex align-items-center flex-column my-4\">
                <h3 class=\"my-4 text-center\">Message(s)</h3>
                <div class=\"col-md-8 p-4 border rounded bg-info\">
                    <div class=\"text-right p-0 col-12\">
                        <a class=\"btn btn-primary\"
                           href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, ($context["conversation"] ?? null), "document", [], "any", false, false, false, 17), "documentFile", "App\\Entity\\Document"), "html", null, true);
        echo "\">Télécharger le Document
                        </a>
                    </div>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["conversation"] ?? null), "messages", [], "any", false, false, false, 20));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "                        ";
            if (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 21), "roles", [], "any", false, false, false, 21)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                // line 22
                echo "                            <div class=\"col-12 \">
                                <div class=\"col-11 col-md-8 text-break p-1 my-3 bg-primary mr-auto\">
                                    <p class=\"p-3 m-0 bg-light\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>
                                        <p class=\" p-1 m-0 bg-primary text-right text-light m-0\">";
                // line 25
                echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 25), "firstname", [], "any", false, false, false, 25) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 25), "lastname", [], "any", false, false, false, 25)) . " Le ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 25), "d/m/Y à H:i")), "html", null, true);
                echo "</p>
                                </div>
                            </div>

                        ";
            } else {
                // line 30
                echo "                            <div class=\"col-12 \">
                                <div class=\"col-11 col-md-8 bg-primary text-break p-1 my-3 ml-auto\">
                                    <p class=\"p-3 m-0 bg-light\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 32), "html", null, true);
                echo "</p>
                                    <div class=\"align-items-center pt-1 m-0 bg-primary d-flex justify-content-between\">
                                        ";
                // line 34
                echo twig_include($this->env, $context, "message/_delete_form.html.twig");
                echo "
                                        <p class=\"text-light text-right m-0\">";
                // line 35
                echo twig_escape_filter($this->env, ("Vous  le " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 35), "d/m/Y à H:i")), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 40
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </div>
            </div>
            <div class=\"container col-md-8 p-0 col-11 \">
                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["messageForm"] ?? null), 'form_start', ["attr" => ["class" => "col-12 d-flex flex-column align-items-center p-0"]]);
        echo "
                <div class=\"col-12 d-flex flex-column text-center m-0 bg-info\">
                    <div class=\"d-flex flex-column\">
                        <div class=\"comment my-3\">
                            <div class=\"form-group d-flex flex-column text-left  font-weight\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["messageForm"] ?? null), "message", [], "any", false, false, false, 49), 'label');
        echo "
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["messageForm"] ?? null), "message", [], "any", false, false, false, 50), 'widget', ["attr" => ["rows" => "6"]]);
        echo "
                            </div>
                        </div>
                        <button type=\"submit\" class=\"btn btn-lg btn-primary my-4 col-md-4 align-self-center\">Répondre
                        </button>
                        ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["messageForm"] ?? null), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"d-flex align-items-center my-4 flex-column\">
                <a class=\"btn btn-lg btn-primary mt-3\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_conversation_index");
        echo "\">Retour
                    Conversation</a>
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
        return "admin_conversation/show.html.twig";
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
        return array (  216 => 60,  208 => 55,  200 => 50,  196 => 49,  188 => 44,  183 => 41,  169 => 40,  161 => 35,  157 => 34,  152 => 32,  148 => 30,  140 => 25,  136 => 24,  132 => 22,  129 => 21,  112 => 20,  106 => 17,  88 => 11,  84 => 10,  80 => 8,  76 => 7,  69 => 5,  65 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin_conversation/show.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/admin_conversation/show.html.twig");
    }
}
