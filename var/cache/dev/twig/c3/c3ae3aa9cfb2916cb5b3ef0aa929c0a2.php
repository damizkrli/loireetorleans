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
class __TwigTemplate_6c41cd5145ef9ea0036be07ae8bf7dad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/show.html.twig"));

        $this->parent = $this->loadTemplate("_layout.html.twig", "document/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Document";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("document");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"form w-100 d-flex justify-content-center flex-column align-items-center\">

            <h1 class=\"text-center my-4\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>

            <div class=\"mt-4 d-flex col-6 flex-column p-0 align-items-center\">
                <img class=\"w-25 h-25\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/logo_" . twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 17, $this->source); })()), "ext", [], "any", false, false, false, 17)) . ".png")), "html", null, true);
        echo "\"
                     alt=\"logo_";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 18, $this->source); })()), "ext", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
                <div class=\"text-center mt-4\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo " |
                    Ajouté le : ";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 21, $this->source); })()), "updatedAt", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 21, $this->source); })()), "updatedAt", [], "any", false, false, false, 21), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "
                </div>
            </div>
            ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24), 0, [], "array", false, false, false, 24) === "ROLE_AMBASSADEUR")) {
            // line 25
            echo "                <div class=\"d-flex align-items-center p-0 col-12 flex-column my-4\">
                    <div class=\"text-left col-md-8 p-0\">
                        <h3 class=\"my-4\">Commentaire(s) : </h3>
                    </div>
                    ";
            // line 29
            if ( !twig_test_empty((isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 29, $this->source); })()))) {
                // line 30
                echo "                        <div class=\"col-md-8 p-4 border rounded bg-info\">
                            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 31, $this->source); })()), "messages", [], "any", false, false, false, 31));
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 32), "roles", [], "any", false, false, false, 32), 0, [], "array", false, false, false, 32) === "ROLE_ADMINISTRATEUR")) {
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 56, $this->source); })()), 'form_start', ["attr" => ["class" => "col-12 d-flex flex-column align-items-center p-0"]]);
            echo "
                    <div class=\"col-12 d-flex flex-column text-center m-0 bg-info\">
                        <div class=\"d-flex flex-column\">
                            <div class=\"comment my-3\">
                                <div class=\"form-group d-flex flex-column text-left  font-weight\">
                                    ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 61, $this->source); })()), "message", [], "any", false, false, false, 61), 'label');
            echo "
                                    ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 62, $this->source); })()), "message", [], "any", false, false, false, 62), 'widget', ["attr" => ["rows" => "6"]]);
            echo "
                                </div>
                            </div>
                            ";
            // line 65
            if ((isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 65, $this->source); })())) {
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 74, $this->source); })()), 'form_end');
            echo "
                        </div>
                    </div>
                </div>
            ";
        }
        // line 79
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "roles", [], "any", false, false, false, 79), 0, [], "array", false, false, false, 79) === "ROLE_ADMINISTRATEUR")) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 92, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
                // line 93
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 93)), "user", [], "any", false, false, false, 93), "roles", [], "any", false, false, false, 93), 0, [], "array", false, false, false, 93) === "ROLE_AMBASSADEUR")) {
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
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 98), 0, [], "array", false, false, false, 98) === "ROLE_AMBASSADEUR")) {
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  354 => 111,  351 => 110,  345 => 106,  339 => 105,  332 => 102,  326 => 101,  320 => 99,  317 => 98,  313 => 97,  309 => 96,  305 => 95,  302 => 94,  299 => 93,  295 => 92,  281 => 80,  278 => 79,  269 => 74,  263 => 70,  257 => 66,  255 => 65,  249 => 62,  245 => 61,  237 => 56,  233 => 54,  226 => 51,  212 => 50,  204 => 45,  200 => 44,  195 => 42,  191 => 40,  184 => 36,  180 => 35,  176 => 33,  173 => 32,  156 => 31,  153 => 30,  151 => 29,  145 => 25,  143 => 24,  137 => 21,  133 => 20,  128 => 18,  124 => 17,  118 => 14,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layout.html.twig' %}

{% block title %}Document{% endblock %}

{% block stylesheets %}
    {{ encore_entry_link_tags('document') }}
{% endblock %}

{% block body %}

    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"form w-100 d-flex justify-content-center flex-column align-items-center\">

            <h1 class=\"text-center my-4\">{{ document.name }}</h1>

            <div class=\"mt-4 d-flex col-6 flex-column p-0 align-items-center\">
                <img class=\"w-25 h-25\" src=\"{{ asset('build/logo_' ~ document.ext ~ '.png' ) }}\"
                     alt=\"logo_{{ document.ext }}\">
                <div class=\"text-center mt-4\">
                    {{ document.name }} |
                    Ajouté le : {{ document.updatedAt ? document.updatedAt|date('d-m-Y') : '' }}
                </div>
            </div>
            {% if app.user.roles[0] is same as ('ROLE_AMBASSADEUR') %}
                <div class=\"d-flex align-items-center p-0 col-12 flex-column my-4\">
                    <div class=\"text-left col-md-8 p-0\">
                        <h3 class=\"my-4\">Commentaire(s) : </h3>
                    </div>
                    {% if conversation is not empty %}
                        <div class=\"col-md-8 p-4 border rounded bg-info\">
                            {% for message in conversation.messages %}
                                {% if message.user.roles[0] is same as('ROLE_ADMINISTRATEUR') %}
                                    <div class=\"col-12\">
                                        <div class=\"col-11 d-flex col-md-8 text-wrap p-1 my-3 bg-primary mr-auto\">
                                            <p class=\"p-3 m-0 bg-light overflow-auto text-wrap\">{{ message.message|nl2br }}</p>
                                                <p class=\" p-1 m-0 bg-primary text-right text-light m-0\">{{ message.user.firstname ~ ' ' ~ message.user.lastname ~ ' Le ' ~ message.date|date(\"d/m/Y à H:i\") }}</p>
                                        </div>
                                    </div>
                                {% else %}
                                    <div class=\"col-12\">
                                        <div class=\"col-11 d-flex col-md-8 bg-primary text-wrap p-1 my-3 ml-auto\">
                                            <p class=\"p-3 m-0 bg-light overflow-auto text-wrap\">{{ message.message|nl2br }}</p>
                                            <div class=\"align-items-center pt-1 m-0 bg-primary d-flex justify-content-between\">
                                                {{ include('message/_delete_form.html.twig') }}
                                                <p class=\"text-light text-right m-0\">{{ 'Vous  le ' ~ message.date|date(\"d/m/Y à H:i\") }}</p>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                            {{ include('message/_deleteConversation_form.html.twig') }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"container col-md-8 p-0 col-11 \">
                    {{ form_start(messageForm, {'attr': {'class': 'col-12 d-flex flex-column align-items-center p-0'}}) }}
                    <div class=\"col-12 d-flex flex-column text-center m-0 bg-info\">
                        <div class=\"d-flex flex-column\">
                            <div class=\"comment my-3\">
                                <div class=\"form-group d-flex flex-column text-left  font-weight\">
                                    {{ form_label(messageForm.message) }}
                                    {{ form_widget(messageForm.message, {'attr': {'rows':'6'}}) }}
                                </div>
                            </div>
                            {% if conversation %}
                            <button type=\"submit\" class=\"btn btn-lg btn-primary my-4 col-md-4 align-self-center\">
                                Répondre
                            </button>
                            {% else %}
                            <button type=\"submit\" class=\"btn btn-lg btn-primary my-4 col-md-4 align-self-center\">
                                Envoyer
                            </button>
                            {%  endif %}
                            {{ form_end(messageForm) }}
                        </div>
                    </div>
                </div>
            {% endif %}
            {% if app.user.roles[0] is same as ('ROLE_ADMINISTRATEUR') %}
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
                    {% for conversation in conversations %}
                        {% if conversation.messages|last.user.roles[0] is same as('ROLE_AMBASSADEUR') %}
                            <tr class=\"text-center\">
                                <td>{{ conversation.messages|last.date|date(\"d/m/Y à H:i\") }}</td>
                                <td>{{ conversation.document.name }}</td>
                                {% for user in conversation.users  %}
                                    {% if user.roles[0] is same as('ROLE_AMBASSADEUR') %}
                                        <td>{{ user.firstname ~ ' ' ~ user.lastName ~ ' / ' ~ user.company}}</td>
                                    {% endif %}
                                {% endfor %}
                                <td><a class=\"btn btn-info\" href=\"{{ path('admin_conversation_show', {'id': conversation.id}) }}\">Consulter</a></td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            {% endif %}
            <div class=\"d-flex flex-md-row flex-column col-10 col-md-4 p-0 justify-content-center align-items-center\">
                <a class=\"btn btn-lg btn-primary m-3 col-md-6\" href=\"{{ path('document_index') }}\">Retour</a>
            </div>
        </div>
    </section>
{% endblock %}
", "document/show.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/document/show.html.twig");
    }
}
