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
class __TwigTemplate_63c7e643b07b0dc71339ea5ebfd54426 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_conversation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_conversation/index.html.twig"));

        $this->parent = $this->loadTemplate("_layoutAdmin.html.twig", "admin_conversation/index.html.twig", 1);
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

        echo "Loire&Orléans | Administrateur | Demandes d'information";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "     ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("adminProfil");
        echo "
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 24
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 24)), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24), 0, [], "array", false, false, false, 24) === "ROLE_AMBASSADEUR")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 29), 0, [], "array", false, false, false, 29) === "ROLE_AMBASSADEUR")) {
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
        if (twig_test_empty((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 40, $this->source); })()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 57
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 57)), "user", [], "any", false, false, false, 57), "roles", [], "any", false, false, false, 57), 0, [], "array", false, false, false, 57) === "ROLE_ADMINISTRATEUR")) {
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
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 62), 0, [], "array", false, false, false, 62) === "ROLE_AMBASSADEUR")) {
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  261 => 74,  255 => 70,  249 => 69,  242 => 66,  236 => 65,  230 => 63,  227 => 62,  223 => 61,  219 => 60,  215 => 59,  212 => 58,  209 => 57,  205 => 56,  190 => 43,  186 => 41,  184 => 40,  180 => 38,  173 => 36,  166 => 33,  160 => 32,  154 => 30,  151 => 29,  147 => 28,  143 => 27,  139 => 26,  136 => 25,  133 => 24,  129 => 23,  112 => 8,  102 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layoutAdmin.html.twig' %}

{% block title %}Loire&Orléans | Administrateur | Demandes d'information{% endblock %}
 {% block stylesheets %}
     {{ encore_entry_link_tags('adminProfil') }}
 {% endblock %}
{% block body %}
    <section class=\"d-md-flex align-items-center mb-5\">
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
                {% if  conversations is empty %}
                    <p class=\"text-center\">'Pas de nouveaux messages'</p>
                {% endif %}
            </div>
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
                    {% for conversation in conversations %}
                        {% if conversation.messages|last.user.roles[0] is same as('ROLE_ADMINISTRATEUR') %}
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
            <div class=\"d-flex align-items-center my-4 flex-column\">
                <a class=\"btn btn-lg btn-primary mt-3\" href=\"{{ path('admin_index') }}\">Retour Gestion</a>
            </div>
        </div>

    </section>
{% endblock %}

", "admin_conversation/index.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/admin_conversation/index.html.twig");
    }
}
