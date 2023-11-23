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

/* ambassador/show.html.twig */
class __TwigTemplate_8f5c0569cc5c4bbdd2fc72b876396c78 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ambassador/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ambassador/show.html.twig"));

        $this->parent = $this->loadTemplate("_layout.html.twig", "ambassador/show.html.twig", 1);
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

        // line 4
        echo "    Loire&Orléans | Mon Profil Ambassadeur
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("profil");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"d-flex align-items-center  flex-column my-5 col-12 p-0\">
            ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATEUR")) {
            // line 15
            echo "                <h1 class=\"my-4 text-center\"> Mon Profil Administrateur</h1>
            ";
        } else {
            // line 17
            echo "                <h1 class=\"my-4 text-center\"> Mon Profil Ambassadeur</h1>
            ";
        }
        // line 19
        echo "            <div class=\" profil d-flex col-10 col-md-8 my-3 p-4 justify-content-around flex-column flex-lg-row align-items-center\">
                <div class=\"col-lg-3 col-md-6 my-3\">
                    <img src=\"";
        // line 21
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "picture", [], "any", false, false, false, 21))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img_profil_trombinoscope.png"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "pictureFile", "App\\Entity\\User"), "html", null, true);
        }
        echo "\" class=\"card-img\" alt=\"Photo ambassadeur\">
                </div>

                <div class=\"d-flex col-lg-8 flex-column flex-md-row justify-content-around align-items-start\">
                    <div class=\"d-flex flex-column mx-md-3\">
                        <h3>Général</h3>
                        <div>
                            <p>Nom : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "lastName", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                            <p>Prénom : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "firstname", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                            <p><i class=\"fas fa-phone-alt\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "phoneNumber", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                            <p><i class=\"fas fa-at\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                            <p><i class=\"far fa-map\"></i> Description : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                        </div>

                    </div>
                    <div class=\"d-flex flex-column\">
                        <h3>Professionnel</h3>
                        <div >
                            <p>Entreprise : ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "company", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
                            <p>Secteur d'activité : ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "activity", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
                            <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "street", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                            <p>Code postal : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "postalCode", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                            <p><i class=\"fas fa-city\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "city", [], "any", false, false, false, 43), "html", null, true);
        echo "</p></div>
                    </div>
                </div>
            </div>
            <div class=\"d-flex align-items-center my-4 justify-content-center w-100 flex-md-row flex-column\">
                ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATEUR")) {
            // line 49
            echo "                     <a class=\"btn btn-lg btn-primary mx-3 col-lg-2 col-md-4 col-8 my-2\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\">Espace Administration</a>
                ";
        } else {
            // line 51
            echo "                    <a class=\"btn btn-lg btn-primary mx-3 col-lg-2 col-md-4 col-8 my-2\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Retour Trombinoscope</a>
                ";
        }
        // line 53
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53) === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "                    <a class=\"btn btn-lg btn-primary mx-3 col-lg-2 col-md-4 col-8 my-2\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["login" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "login", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Modifier</a>
                ";
        }
        // line 56
        echo "            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script src=\"https://kit.fontawesome.com/38fc56fe7a.js\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ambassador/show.html.twig";
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
        return array (  243 => 62,  233 => 61,  220 => 56,  214 => 54,  211 => 53,  205 => 51,  199 => 49,  197 => 48,  189 => 43,  185 => 42,  181 => 41,  177 => 40,  173 => 39,  163 => 32,  159 => 31,  155 => 30,  151 => 29,  147 => 28,  133 => 21,  129 => 19,  125 => 17,  121 => 15,  119 => 14,  115 => 12,  105 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layout.html.twig' %}

{% block title %}
    Loire&Orléans | Mon Profil Ambassadeur
{% endblock %}

    {% block stylesheets %}
        {{ encore_entry_link_tags('profil') }}
    {% endblock %}

{% block body %}
    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"d-flex align-items-center  flex-column my-5 col-12 p-0\">
            {% if is_granted('ROLE_ADMINISTRATEUR') %}
                <h1 class=\"my-4 text-center\"> Mon Profil Administrateur</h1>
            {% else %}
                <h1 class=\"my-4 text-center\"> Mon Profil Ambassadeur</h1>
            {% endif %}
            <div class=\" profil d-flex col-10 col-md-8 my-3 p-4 justify-content-around flex-column flex-lg-row align-items-center\">
                <div class=\"col-lg-3 col-md-6 my-3\">
                    <img src=\"{% if user.picture is empty %}{{ asset('build/img_profil_trombinoscope.png') }}{% else %}{{ vich_uploader_asset(user, 'pictureFile', 'App\\\\Entity\\\\User') }}{% endif %}\" class=\"card-img\" alt=\"Photo ambassadeur\">
                </div>

                <div class=\"d-flex col-lg-8 flex-column flex-md-row justify-content-around align-items-start\">
                    <div class=\"d-flex flex-column mx-md-3\">
                        <h3>Général</h3>
                        <div>
                            <p>Nom : {{ user.lastName }}</p>
                            <p>Prénom : {{ user.firstname }}</p>
                            <p><i class=\"fas fa-phone-alt\"></i> {{ user.phoneNumber }}</p>
                            <p><i class=\"fas fa-at\"></i> {{ user.email }}</p>
                            <p><i class=\"far fa-map\"></i> Description : {{ user.description }}</p>
                        </div>

                    </div>
                    <div class=\"d-flex flex-column\">
                        <h3>Professionnel</h3>
                        <div >
                            <p>Entreprise : {{ user.company }}</p>
                            <p>Secteur d'activité : {{ user.activity }}</p>
                            <p>{{ user.street }}</p>
                            <p>Code postal : {{ user.postalCode }}</p>
                            <p><i class=\"fas fa-city\"></i> {{ user.city }}</p></div>
                    </div>
                </div>
            </div>
            <div class=\"d-flex align-items-center my-4 justify-content-center w-100 flex-md-row flex-column\">
                {% if is_granted('ROLE_ADMINISTRATEUR') %}
                     <a class=\"btn btn-lg btn-primary mx-3 col-lg-2 col-md-4 col-8 my-2\" href=\"{{ path('admin_index') }}\">Espace Administration</a>
                {% else %}
                    <a class=\"btn btn-lg btn-primary mx-3 col-lg-2 col-md-4 col-8 my-2\" href=\"{{ path('user_index') }}\">Retour Trombinoscope</a>
                {% endif %}
                {% if app.user is same as(user) %}
                    <a class=\"btn btn-lg btn-primary mx-3 col-lg-2 col-md-4 col-8 my-2\" href=\"{{ path('user_edit',  {'login': user.login}) }}\">Modifier</a>
                {% endif %}
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/38fc56fe7a.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "ambassador/show.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/ambassador/show.html.twig");
    }
}
