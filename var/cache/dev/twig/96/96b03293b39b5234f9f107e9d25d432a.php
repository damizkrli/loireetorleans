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
class __TwigTemplate_3a8c9b98080500ef036d0a62d85f0837 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/index.html.twig"));

        $this->parent = $this->loadTemplate("_layout.html.twig", "message/index.html.twig", 1);
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

        echo "Loire&Orléans | Mes échanges ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 23
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 23)), "user", [], "any", false, false, false, 23), "roles", [], "any", false, false, false, 23), 0, [], "array", false, false, false, 23) === "ROLE_ADMINISTRATEUR")) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 52
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "messages", [], "any", false, false, false, 52)), "user", [], "any", false, false, false, 52), "roles", [], "any", false, false, false, 52), 0, [], "array", false, false, false, 52) === "ROLE_AMBASSADEUR")) {
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  209 => 65,  200 => 61,  195 => 60,  189 => 57,  185 => 56,  181 => 55,  177 => 54,  174 => 53,  171 => 52,  166 => 51,  149 => 36,  140 => 32,  135 => 31,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  114 => 24,  111 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layout.html.twig' %}

{% block title %}Loire&Orléans | Mes échanges {% endblock %}

{% block body %}

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
                    {% for conversation in conversations %}
                        {% if conversation.messages|last.user.roles[0] is same as('ROLE_ADMINISTRATEUR') %}
                        <tr class=\"text-center\">
                            <td>{{ conversation.document.name }}</td>
                            <td>{{ conversation.messages|last.message }}</td>
                            <td>{{ conversation.messages|last.date|date(\"d/m/Y à H:i\") }}</td>
                            <td><a class=\"btn btn-info\" href=\"{{ path('document_show', {'id':conversation.document.id}) }}\">Consulter</a></td>
                        </tr>
                        {% endif %}
                    {% else %}
                        <tr>
                            <td colspan=\"3\">Aucun message</td>
                        </tr>
                    {% endfor %}
                    </tbody>
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
                    {% for conversation in conversations %}
                        {% if conversation.messages|last.user.roles[0] is same as('ROLE_AMBASSADEUR') %}
                            <tr class=\"text-center\">
                                <td>{{ conversation.document.name }}</td>
                                <td>{{ conversation.messages|last.message }}</td>
                                <td>{{ conversation.messages|last.date|date(\"d/m/Y à H:i\") }}</td>
                                <td><a class=\"btn btn-info\" href=\"{{ path('document_show', {'id':conversation.document.id}) }}\">Consulter</a></td>
                            </tr>
                        {% endif %}
                    {% else %}
                        <tr>
                            <td colspan=\"3\">Aucun message</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </section>

{% endblock %}
", "message/index.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/message/index.html.twig");
    }
}
