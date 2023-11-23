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

/* document/show.html.twig */
class __TwigTemplate_657e864ed5917bd7cd5c1f12d43507a1 extends Template
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
        $this->parent = $this->loadTemplate("_layout.html.twig", "document/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Document";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("document");
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"form w-100 d-flex justify-content-center flex-column align-items-center\">

            <h1 class=\"text-center my-4\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>

            <div class=\"mt-4 d-flex col-6 flex-column p-0 align-items-center\">
                <img class=\"w-25 h-25\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/logo_" . twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "ext", [], "any", false, false, false, 17)) . ".png")), "html", null, true);
        echo "\"
                     alt=\"logo_";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "ext", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                <div class=\"text-center mt-4\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo " |
                    Ajouté le : ";
        // line 21
        ((twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "updatedAt", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["document"] ?? null), "updatedAt", [], "any", false, false, false, 21), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "
                </div>
            </div>
            ";
        // line 24
        if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
            // line 25
            echo "                <div class=\"d-flex align-items-center p-0 col-12 flex-column my-4\">
                    <div class=\"text-left col-md-8 p-0\">
                        <h3 class=\"my-4\">Commentaire(s) : </h3>
                    </div>
                    ";
            // line 29
            if ( !twig_test_empty(($context["conversation"] ?? null))) {
                // line 30
                echo "                        <div class=\"col-md-8 p-4 border rounded bg-info\">
                            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["conversation"] ?? null), "messages", [], "any", false, false, false, 31));
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
                    // line 32
                    echo "                                ";
                    if (((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 32), "roles", [], "any", false, false, false, 32)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null) === "ROLE_ADMINISTRATEUR")) {
                        // line 33
                        echo "                                    <div class=\"col-12\">
                                        <div class=\"col-11 d-flex col-md-8 text-wrap p-1 my-3 bg-primary mr-auto\">
                                            <p class=\"p-3 m-0 bg-light overflow-auto text-wrap\">";
                        // line 35
                        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 35), "html", null, true));
                        echo "</p>
                                                <p class=\" p-1 m-0 bg-primary text-right text-light m-0\">";
                        // line 36
                        echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 36), "firstname", [], "any", false, false, false, 36) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 36), "lastname", [], "any", false, false, false, 36)) . " Le ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 36), "d/m/Y à H:i")), "html", null, true);
                        echo "</p>
                                        </div>
                                    </div>
                                ";
                    } else {
                        // line 40
                        echo "                                    <div class=\"col-12\">
                                        <div class=\"col-11 d-flex col-md-8 bg-primary text-wrap p-1 my-3 ml-auto\">
                                            <p class=\"p-3 m-0 bg-light overflow-auto text-wrap\">";
                        // line 42
                        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 42), "html", null, true));
                        echo "</p>
                                            <div class=\"align-items-center pt-1 m-0 bg-primary d-flex justify-content-between\">
                                                ";
                        // line 44
                        echo twig_include($this->env, $context, "message/_delete_form.html.twig");
                        echo "
                                                <p class=\"text-light text-right m-0\">";
                        // line 45
                        echo twig_escape_filter($this->env, ("Vous  le " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 45), "d/m/Y à H:i")), "html", null, true);
                        echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 50
                    echo "                            ";
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
                // line 51
                echo "                            ";
                echo twig_include($this->env, $context, "message/_deleteConversation_form.html.twig");
                echo "
                        </div>
                    ";
            }
            // line 54
            echo "                </div>
                <div class=\"container col-md-8 p-0 col-11 \">
                    ";
            // line 56
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["messageForm"] ?? null), 'form_start', ["attr" => ["class" => "col-12 d-flex flex-column align-items-center p-0"]]);
            echo "
                    <div class=\"col-12 d-flex flex-column text-center m-0 bg-info\">
                        <div class=\"d-flex flex-column\">
                            <div class=\"comment my-3\">
                                <div class=\"form-group d-flex flex-column text-left  font-weight\">
                                    ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["messageForm"] ?? null), "message", [], "any", false, false, false, 61), 'label');
            echo "
                                    ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["messageForm"] ?? null), "message", [], "any", false, false, false, 62), 'widget', ["attr" => ["rows" => "6"]]);
            echo "
                                </div>
                            </div>
                            ";
            // line 65
            if (($context["conversation"] ?? null)) {
                // line 66
                echo "                            <button type=\"submit\" class=\"btn btn-lg btn-primary my-4 col-md-4 align-self-center\">
                                Répondre
                            </button>
                            ";
            } else {
                // line 70
                echo "                            <button type=\"submit\" class=\"btn btn-lg btn-primary my-4 col-md-4 align-self-center\">
                                Envoyer
                            </button>
                            ";
            }
            // line 74
            echo "                            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["messageForm"] ?? null), 'form_end');
            echo "
                        </div>
                    </div>
                </div>
            ";
        }
        // line 79
        echo "            ";
        if (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 79), "roles", [], "any", false, false, false, 79)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null) === "ROLE_ADMINISTRATEUR")) {
            // line 80
            echo "            <div class=\"d-flex justify-content-center flex-column my-4\">
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
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["conversations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
                // line 93
                echo "                        ";
                if (((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 93)), "user", [], "any", false, false, false, 93), "roles", [], "any", false, false, false, 93)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                    // line 94
                    echo "                            <tr class=\"text-center\">
                                <td>";
                    // line 95
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 95)), "date", [], "any", false, false, false, 95), "d/m/Y à H:i"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["conversation"], "document", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96), "html", null, true);
                    echo "</td>
                                ";
                    // line 97
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["conversation"], "users", [], "any", false, false, false, 97));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 98
                        echo "                                    ";
                        if (((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 98)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                            // line 99
                            echo "                                        <td>";
                            echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 99) . " ") . twig_get_attribute($this->env, $this->source, $context["user"], "lastName", [], "any", false, false, false, 99)) . " / ") . twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, false, 99)), "html", null, true);
                            echo "</td>
                                    ";
                        }
                        // line 101
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "                                <td><a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_conversation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                    echo "\">Consulter</a></td>
                            </tr>
                        ";
                }
                // line 105
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                    </tbody>
                </table>
            </div>
            ";
        }
        // line 110
        echo "            <div class=\"d-flex flex-md-row flex-column col-10 col-md-4 p-0 justify-content-center align-items-center\">
                <a class=\"btn btn-lg btn-primary m-3 col-md-6\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_index");
        echo "\">Retour</a>
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
        return "document/show.html.twig";
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
        return array (  312 => 111,  309 => 110,  303 => 106,  297 => 105,  290 => 102,  284 => 101,  278 => 99,  275 => 98,  271 => 97,  267 => 96,  263 => 95,  260 => 94,  257 => 93,  253 => 92,  239 => 80,  236 => 79,  227 => 74,  221 => 70,  215 => 66,  213 => 65,  207 => 62,  203 => 61,  195 => 56,  191 => 54,  184 => 51,  170 => 50,  162 => 45,  158 => 44,  153 => 42,  149 => 40,  142 => 36,  138 => 35,  134 => 33,  131 => 32,  114 => 31,  111 => 30,  109 => 29,  103 => 25,  101 => 24,  95 => 21,  91 => 20,  86 => 18,  82 => 17,  76 => 14,  70 => 10,  66 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "document/show.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/document/show.html.twig");
    }
}
