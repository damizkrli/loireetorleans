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

/* admin_profile/show.html.twig */
class __TwigTemplate_a28efee7f0d24c555c6167afd3f73983 extends Template
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
        return "_layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_profile/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_profile/show.html.twig"));

        $this->parent = $this->loadTemplate("_layoutAdmin.html.twig", "admin_profile/show.html.twig", 1);
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
        echo "    Loire&Orléans | Administrateur | Gestion de profils | ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "firstname", [], "any", false, false, false, 4) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "lastname", [], "any", false, false, false, 4)), "html", null, true);
        echo "
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("adminProfil");
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
        echo "    <section>
        <div class=\"d-flex flex-column col-12 p-0 align-items-center\">
            <div class=\"col-lg-6 mt-4 d-flex justify-content-center\">
                <div class=\"confirmation col-12 p-0\">
                    <p class=\"d-flex justify-content-center align-items-center mb-3 mt-3\">Utilisateur en attente de confirmation
                        ";
        // line 17
        echo twig_include($this->env, $context, "admin_profile/_form.html.twig");
        echo "
                    </p>
                </div>
                </div>
                <div class=\"d-flex align-items-lg-end align-items-center flex-column flex-lg-row mt-5\">
                    <div class=\"col-lg-4 col-md-8 p-0\">
                        <figure class=\"img_ambassador m-0\">
                            <img src=\"";
        // line 24
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "picture", [], "any", false, false, false, 24))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img_profil_trombinoscope.png"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "pictureFile", "App\\Entity\\User"), "html", null, true);
        }
        echo "\"
                                 class=\"card-img col-lg-12\" alt=\"Photo Ambassadeur\">
                        </figure>
                    </div>
                    <div class=\"col-sm-8 align-items-center mt-5\">
                        <h1 class=\"card-title\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "firstname", [], "any", false, false, false, 29), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "lastname", [], "any", false, false, false, 29), "html", null, true);
        echo "</h1>
                        <div class=\"card-body m-0\">
                            <p><i class=\"fas fa-at\"></i>
                                <u>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "</u>
                            </p>
                            <p>
                                <i class=\"fas fa-phone-alt\"></i>
                                ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "phonenumber", [], "any", false, false, false, 36), "html", null, true);
        echo "
                            </p>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-angle-double-left\"></i>
                                ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
        echo "
                                <i class=\"fas fa-angle-double-right\"></i>
                            </p>
                        </div>
                        <div class=\"card-body mt-3\">
                            <h2 class=\"card-title\">
                                <i class=\"fas fa-building\"></i>
                                ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "company", [], "any", false, false, false, 47), "html", null, true);
        echo "
                            </h2>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                                ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "street", [], "any", false, false, false, 51), "html", null, true);
        echo "
                            </p>
                            <p>
                                <span class=\"ml-3\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "postalCode", [], "any", false, false, false, 54), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "city", [], "any", false, false, false, 54), "html", null, true);
        echo "</span>
                            </p>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-industry\"></i>
                                ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "activity", [], "any", false, false, false, 58), "html", null, true);
        echo "
                            </p>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-map-marked-alt\"></i>
                                ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "employmentArea", [], "any", false, false, false, 62), "html", null, true);
        echo "
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 p-0 d-flex justify-content-center mt-3\">
                    <a class=\"btn btn-primary col-md-2 m-3\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_index");
        echo "\">Retour</a>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
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
        return "admin_profile/show.html.twig";
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
        return array (  242 => 76,  232 => 75,  216 => 68,  207 => 62,  200 => 58,  191 => 54,  185 => 51,  178 => 47,  168 => 40,  161 => 36,  154 => 32,  146 => 29,  134 => 24,  124 => 17,  117 => 12,  107 => 11,  94 => 8,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layoutAdmin.html.twig' %}

{% block title %}
    Loire&Orléans | Administrateur | Gestion de profils | {{ user.firstname ~ ' ' ~ user.lastname }}
{% endblock %}

    {% block stylesheets %}
        {{ encore_entry_link_tags('adminProfil') }}
    {% endblock %}

{% block body %}
    <section>
        <div class=\"d-flex flex-column col-12 p-0 align-items-center\">
            <div class=\"col-lg-6 mt-4 d-flex justify-content-center\">
                <div class=\"confirmation col-12 p-0\">
                    <p class=\"d-flex justify-content-center align-items-center mb-3 mt-3\">Utilisateur en attente de confirmation
                        {{ include('admin_profile/_form.html.twig') }}
                    </p>
                </div>
                </div>
                <div class=\"d-flex align-items-lg-end align-items-center flex-column flex-lg-row mt-5\">
                    <div class=\"col-lg-4 col-md-8 p-0\">
                        <figure class=\"img_ambassador m-0\">
                            <img src=\"{% if user.picture is empty %}{{ asset('build/img_profil_trombinoscope.png') }}{% else %}{{ vich_uploader_asset(user, 'pictureFile', 'App\\\\Entity\\\\User') }}{% endif %}\"
                                 class=\"card-img col-lg-12\" alt=\"Photo Ambassadeur\">
                        </figure>
                    </div>
                    <div class=\"col-sm-8 align-items-center mt-5\">
                        <h1 class=\"card-title\">{{ user.firstname }} {{ user.lastname }}</h1>
                        <div class=\"card-body m-0\">
                            <p><i class=\"fas fa-at\"></i>
                                <u>{{ user.email }}</u>
                            </p>
                            <p>
                                <i class=\"fas fa-phone-alt\"></i>
                                {{ user.phonenumber }}
                            </p>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-angle-double-left\"></i>
                                {{ user.description }}
                                <i class=\"fas fa-angle-double-right\"></i>
                            </p>
                        </div>
                        <div class=\"card-body mt-3\">
                            <h2 class=\"card-title\">
                                <i class=\"fas fa-building\"></i>
                                {{ user.company }}
                            </h2>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                                {{ user.street }}
                            </p>
                            <p>
                                <span class=\"ml-3\">{{ user.postalCode }} {{ user.city }}</span>
                            </p>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-industry\"></i>
                                {{ user.activity }}
                            </p>
                            <p class=\"mb-0\">
                                <i class=\"fas fa-map-marked-alt\"></i>
                                {{ user.employmentArea }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 p-0 d-flex justify-content-center mt-3\">
                    <a class=\"btn btn-primary col-md-2 m-3\" href=\"{{ path('admin_profile_index') }}\">Retour</a>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/38fc56fe7a.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "admin_profile/show.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/admin_profile/show.html.twig");
    }
}
