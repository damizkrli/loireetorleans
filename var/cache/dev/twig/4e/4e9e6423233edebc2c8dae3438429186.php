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

/* admin/home.html.twig */
class __TwigTemplate_080417af45a4ed676a9d588920d11a18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $this->parent = $this->loadTemplate("_layoutAdmin.html.twig", "admin/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Loire&Orléans | Accueil Administrateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"container\">
            <div class=\"row mt-4 mb-4 flex-column\">
                <h1 class=\"my-4 text-center\">Administration</h1>
                <h3 class=\"my-4 text-center\">Les différentes parties administrables</h3>
            </div>

            <div class=\"row mb-4 justify-content-around mt-4\">
                <div class=\"blur card m-4 col-md-5\">
                    <div class=\"card-body\">
                        <h5 class=\"text-center card-title\">Profil utilisateur</h5>
                        <p class=\"text-center card-text\">Votre profil</p>
                        <div class=\"text-center mt-2\"><a
                                    href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["login" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "login", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\"
                                    class=\"btn btn-primary\">Aller</a></div>
                    </div>
                </div>

                <div class=\"blur card m-4 col-md-5\">
                    <div class=\"card-body\">
                        <h5 class=\"text-center card-title\">Gestion des profils</h5>
                        <p class=\"text-center card-text\">Administrer les profils ambassadeurs</p>
                        <div class=\"text-center mt-2\"><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_index");
        echo "\"
                                                         class=\"btn btn-primary\">Aller</a></div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-4 mb-4 justify-content-around mt-4\">
                <div class=\"blur card m-4 col-md-5\">
                    <div class=\"card-body\">
                        <h5 class=\"text-center card-title\">Demandes d'informations</h5>
                        <p class=\"text-center card-text\">Avoir accès aux différentes informations</p>
                        <div class=\"text-center mt-2\"><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_conversation_index");
        echo "\" class=\"btn align-content-center btn-primary\">Aller</a>
                        </div>
                    </div>
                </div>
                <div class=\"blur card m-4 col-md-5\">
                    <div class=\"card-body \">
                        <h5 class=\"text-center card-title\">Gestions des documents</h5>
                        <p class=\"text-center card-text\">Gérer les documents</p>
                        <div class=\"text-center mt-2\"><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_index");
        echo "\"
                                                         class=\"btn align-content-center btn-primary\">Aller</a>
                        </div>
                    </div>
                </div>
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
        return "admin/home.html.twig";
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
        return array (  163 => 47,  152 => 39,  139 => 29,  127 => 20,  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layoutAdmin.html.twig' %}
{% block title %} Loire&Orléans | Accueil Administrateur{% endblock %}
 {% block stylesheets %}
     {{ encore_entry_link_tags('login') }}
 {% endblock %}
{% block body %}
    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"container\">
            <div class=\"row mt-4 mb-4 flex-column\">
                <h1 class=\"my-4 text-center\">Administration</h1>
                <h3 class=\"my-4 text-center\">Les différentes parties administrables</h3>
            </div>

            <div class=\"row mb-4 justify-content-around mt-4\">
                <div class=\"blur card m-4 col-md-5\">
                    <div class=\"card-body\">
                        <h5 class=\"text-center card-title\">Profil utilisateur</h5>
                        <p class=\"text-center card-text\">Votre profil</p>
                        <div class=\"text-center mt-2\"><a
                                    href=\"{{ path('user_show', {login: app.user.login}) }}\"
                                    class=\"btn btn-primary\">Aller</a></div>
                    </div>
                </div>

                <div class=\"blur card m-4 col-md-5\">
                    <div class=\"card-body\">
                        <h5 class=\"text-center card-title\">Gestion des profils</h5>
                        <p class=\"text-center card-text\">Administrer les profils ambassadeurs</p>
                        <div class=\"text-center mt-2\"><a href=\"{{ path('admin_profile_index') }}\"
                                                         class=\"btn btn-primary\">Aller</a></div>
                    </div>
                </div>
            </div>
            <div class=\"row mb-4 mb-4 justify-content-around mt-4\">
                <div class=\"blur card m-4 col-md-5\">
                    <div class=\"card-body\">
                        <h5 class=\"text-center card-title\">Demandes d'informations</h5>
                        <p class=\"text-center card-text\">Avoir accès aux différentes informations</p>
                        <div class=\"text-center mt-2\"><a href=\"{{ path('admin_conversation_index') }}\" class=\"btn align-content-center btn-primary\">Aller</a>
                        </div>
                    </div>
                </div>
                <div class=\"blur card m-4 col-md-5\">
                    <div class=\"card-body \">
                        <h5 class=\"text-center card-title\">Gestions des documents</h5>
                        <p class=\"text-center card-text\">Gérer les documents</p>
                        <div class=\"text-center mt-2\"><a href=\"{{ path('document_index') }}\"
                                                         class=\"btn align-content-center btn-primary\">Aller</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
{% endblock %}
", "admin/home.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/admin/home.html.twig");
    }
}
