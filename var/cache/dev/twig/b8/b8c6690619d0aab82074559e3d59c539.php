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

/* admin_profile/index.html.twig */
class __TwigTemplate_04b1b555236ce01d446f17079edfeca4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_profile/index.html.twig"));

        $this->parent = $this->loadTemplate("_layoutAdmin.html.twig", "admin_profile/index.html.twig", 1);
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

        echo "Loire&Orléans | Administrateur | Gestion des profils Ambassadeurs";
        
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
        <div class=\"form w-100\">
            <h1 class=\"my-4 text-center\">Profils des Ambassadeurs</h1>

            <h3 class=\"my-4 text-center\">Profils en attente de validation</h3>
            <table class=\"table table-hover col-10 p-0 mx-auto\">
                <thead class=\"bg-primary\">
                <tr class=\"text-center text-light\">
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Entreprise</th>
                    <th scope=\"col\">Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["waitings"]) || array_key_exists("waitings", $context) ? $context["waitings"] : (function () { throw new RuntimeError('Variable "waitings" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["waiting"]) {
            // line 24
            echo "                        <tr class=\"text-center\">
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["waiting"], "firstname", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["waiting"], "lastname", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["waiting"], "company", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-info\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_show", ["login" => twig_get_attribute($this->env, $this->source, $context["waiting"], "login", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Consulter</a></td>
                        </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['waiting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
            </table>
            <div class=\"d-flex justify-content-center w-100 my-5\">
                ";
        // line 35
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["waitings"]) || array_key_exists("waitings", $context) ? $context["waitings"] : (function () { throw new RuntimeError('Variable "waitings" does not exist.', 35, $this->source); })()));
        echo "
            </div>

            <h3 class=\"my-4 text-center\">Profils Validés</h3>
            <div class=\"d-flex justify-content-center my-4\">
                <div class=\"form-group\">
                    <div class=\"d-flex justify-content-center my-4\">
                        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["class" => "form-inline my-2 my-lg-0 justify-content-center"]]);
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "search", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control mr-sm-2 col-md-7", "placeholder" => "Marc, Pichon, SARL ..."]]);
        echo "
                        <button class=\"btn btn-primary my-2 my-sm-0 mt-4\" type=\"submit\">Rechercher</button>
                        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <table class=\"table table-hover col-10 p-0 mx-auto\">
                <thead class=\"bg-primary\">
                <tr class=\"text-center text-light\">
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Entreprise</th>
                    <th scope=\"col\">Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["validates"]) || array_key_exists("validates", $context) ? $context["validates"] : (function () { throw new RuntimeError('Variable "validates" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["validate"]) {
            // line 60
            echo "                        <tr class=\"text-center\">
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["validate"], "firstname", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["validate"], "lastname", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["validate"], "company", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                            <td><a class=\"btn btn-info\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_show", ["login" => twig_get_attribute($this->env, $this->source, $context["validate"], "login", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Consulter</a></td>
                        </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['validate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tbody>
            </table>
            <div class=\"d-flex justify-content-center w-100 my-5\">
                ";
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["validates"]) || array_key_exists("validates", $context) ? $context["validates"] : (function () { throw new RuntimeError('Variable "validates" does not exist.', 70, $this->source); })()));
        echo "
            </div>
            <div class=\"d-flex align-items-center my-4 flex-column\">
                <a class=\"btn btn-lg btn-primary mt-3\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">Retour gestion</a>
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
        return "admin_profile/index.html.twig";
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
        return array (  238 => 73,  232 => 70,  227 => 67,  218 => 64,  214 => 63,  210 => 62,  206 => 61,  203 => 60,  199 => 59,  182 => 45,  177 => 43,  173 => 42,  163 => 35,  158 => 32,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  133 => 24,  129 => 23,  112 => 8,  102 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layoutAdmin.html.twig' %}

{% block title %}Loire&Orléans | Administrateur | Gestion des profils Ambassadeurs{% endblock %}
 {% block stylesheets %}
     {{ encore_entry_link_tags('adminProfil') }}
 {% endblock %}
{% block body %}
    <section class=\"d-md-flex align-items-center mb-5\">
        <div class=\"form w-100\">
            <h1 class=\"my-4 text-center\">Profils des Ambassadeurs</h1>

            <h3 class=\"my-4 text-center\">Profils en attente de validation</h3>
            <table class=\"table table-hover col-10 p-0 mx-auto\">
                <thead class=\"bg-primary\">
                <tr class=\"text-center text-light\">
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Entreprise</th>
                    <th scope=\"col\">Action</th>
                </tr>
                </thead>
                <tbody>
                {% for waiting in waitings %}
                        <tr class=\"text-center\">
                            <td>{{ waiting.firstname }}</td>
                            <td>{{ waiting.lastname }}</td>
                            <td>{{ waiting.company }}</td>
                            <td><a class=\"btn btn-info\" href=\"{{ path('admin_profile_show', {login: waiting.login}) }}\">Consulter</a></td>
                        </tr>

                {% endfor %}
                </tbody>
            </table>
            <div class=\"d-flex justify-content-center w-100 my-5\">
                {{ knp_pagination_render(waitings) }}
            </div>

            <h3 class=\"my-4 text-center\">Profils Validés</h3>
            <div class=\"d-flex justify-content-center my-4\">
                <div class=\"form-group\">
                    <div class=\"d-flex justify-content-center my-4\">
                        {{ form_start(form, {'attr': {'class': 'form-inline my-2 my-lg-0 justify-content-center'}}) }}
                        {{ form_widget(form.search, {'attr': {'class': 'form-control mr-sm-2 col-md-7', 'placeholder': \"Marc, Pichon, SARL ...\"}}) }}
                        <button class=\"btn btn-primary my-2 my-sm-0 mt-4\" type=\"submit\">Rechercher</button>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
            <table class=\"table table-hover col-10 p-0 mx-auto\">
                <thead class=\"bg-primary\">
                <tr class=\"text-center text-light\">
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Entreprise</th>
                    <th scope=\"col\">Action</th>
                </tr>
                </thead>
                <tbody>
                {% for validate in validates %}
                        <tr class=\"text-center\">
                            <td>{{ validate.firstname }}</td>
                            <td>{{ validate.lastname }}</td>
                            <td>{{ validate.company }}</td>
                            <td><a class=\"btn btn-info\" href=\"{{ path('admin_profile_show', {login: validate.login}) }}\">Consulter</a></td>
                        </tr>
                {% endfor %}
                </tbody>
            </table>
            <div class=\"d-flex justify-content-center w-100 my-5\">
                {{ knp_pagination_render(validates) }}
            </div>
            <div class=\"d-flex align-items-center my-4 flex-column\">
                <a class=\"btn btn-lg btn-primary mt-3\" href=\"{{ path('admin_index') }}\">Retour gestion</a>
            </div>
        </div>

    </section>
{% endblock %}
", "admin_profile/index.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/admin_profile/index.html.twig");
    }
}
