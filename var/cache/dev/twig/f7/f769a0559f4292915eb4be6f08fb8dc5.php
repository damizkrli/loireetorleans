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

/* trombinoscope/index.html.twig */
class __TwigTemplate_4bab21d1fad7d2baa1b1a679d2218404 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trombinoscope/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trombinoscope/index.html.twig"));

        $this->parent = $this->loadTemplate("_layout.html.twig", "trombinoscope/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        // line 4
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("trombi");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    Loire&Orléans | Trombinoscope
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <section class=\"d-flex flex-column justify-content-center align-items-center\">

        <h1 class=\"text-center my-4\">Trombinoscope</h1>

        <div class=\"d-flex flex-column col-12\">
            <div class=\"d-flex justify-content-center my-4\">
                <div class=\"form-group\">
                    <div class=\"d-flex justify-content-center my-4\">
                        <span class=\"infobulle\"
                              aria-label=\"Veuillez saisir un nom, un prénom, une entreprise, un bassin d'activité ou un mot clé.\">
                            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "form-inline my-2 my-lg-0 justify-content-center"]]);
        echo "
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "search", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control mr-sm-2 col-md-7", "placeholder" => "Marc, Pichon, SARL ..."]]);
        echo "
                            <button class=\"btn btn-primary my-2 my-sm-0 mt-4\" type=\"submit\">Rechercher</button>
                        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
                        </span>
                    </div>
                </div>
            </div>

            <div class=\"row p-0 m-0 justify-content-center w-100\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "                    <div class=\"trombi card my-4 mx-lg-5 col-md-5 col-lg-2 m-2 p-0\">
                        <img class=\"card-img-top\"
                             src=\"";
            // line 38
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["user"], "picture", [], "any", false, false, false, 38))) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img_profil_trombinoscope.png"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["user"], "pictureFile", "App\\Entity\\User"), "html", null, true);
            }
            echo "\"
                             alt=\"Photo Ambassadeur\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 41), "html", null, true);
            echo "</h3>
                            <p class=\"card-title \">
                                <i class=\"far fa-building\"></i>
                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "company", [], "any", false, false, false, 44), "html", null, true);
            echo "
                            </p>
                            <p><small><i><b>Centres d'intêrets :</b> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</i></small></p>
                        </div>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["login" => twig_get_attribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-info mt-2 rounded-0\">En savoir
                            +</a>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                    Aucun Ambassadeur trouvé
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>
        <div class=\"d-flex justify-content-center w-100 my-5\">
            ";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 57, $this->source); })()));
        echo "
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
        return "trombinoscope/index.html.twig";
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
        return array (  207 => 57,  202 => 54,  195 => 52,  186 => 48,  181 => 46,  176 => 44,  168 => 41,  158 => 38,  154 => 36,  149 => 35,  139 => 28,  134 => 26,  130 => 25,  118 => 15,  108 => 14,  97 => 10,  87 => 9,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layout.html.twig' %}
{% block stylesheets %}
    {{ encore_entry_link_tags('app') }}
    {{ encore_entry_link_tags('trombi') }}
{% endblock %}



{% block title %}
    Loire&Orléans | Trombinoscope
{% endblock %}


{% block body %}
    <section class=\"d-flex flex-column justify-content-center align-items-center\">

        <h1 class=\"text-center my-4\">Trombinoscope</h1>

        <div class=\"d-flex flex-column col-12\">
            <div class=\"d-flex justify-content-center my-4\">
                <div class=\"form-group\">
                    <div class=\"d-flex justify-content-center my-4\">
                        <span class=\"infobulle\"
                              aria-label=\"Veuillez saisir un nom, un prénom, une entreprise, un bassin d'activité ou un mot clé.\">
                            {{ form_start(form, {'attr': {'class': 'form-inline my-2 my-lg-0 justify-content-center'}}) }}
                            {{ form_widget(form.search, {'attr': {'class': 'form-control mr-sm-2 col-md-7', 'placeholder': \"Marc, Pichon, SARL ...\"}}) }}
                            <button class=\"btn btn-primary my-2 my-sm-0 mt-4\" type=\"submit\">Rechercher</button>
                        {{ form_end(form) }}
                        </span>
                    </div>
                </div>
            </div>

            <div class=\"row p-0 m-0 justify-content-center w-100\">
                {% for user in users %}
                    <div class=\"trombi card my-4 mx-lg-5 col-md-5 col-lg-2 m-2 p-0\">
                        <img class=\"card-img-top\"
                             src=\"{% if user.picture is empty %}{{ asset('build/img_profil_trombinoscope.png') }}{% else %}{{ vich_uploader_asset(user, 'pictureFile', 'App\\\\Entity\\\\User') }}{% endif %}\"
                             alt=\"Photo Ambassadeur\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">{{ user.firstname }} {{ user.lastname }}</h3>
                            <p class=\"card-title \">
                                <i class=\"far fa-building\"></i>
                                {{ user.company }}
                            </p>
                            <p><small><i><b>Centres d'intêrets :</b> {{ user.description }}</i></small></p>
                        </div>
                        <a href=\"{{ path('user_show', {'login': user.login}) }}\" class=\"btn btn-info mt-2 rounded-0\">En savoir
                            +</a>
                    </div>
                {% else %}
                    Aucun Ambassadeur trouvé
                {% endfor %}
            </div>
        </div>
        <div class=\"d-flex justify-content-center w-100 my-5\">
            {{ knp_pagination_render(users) }}
        </div>
    </section>



{% endblock %}
", "trombinoscope/index.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/trombinoscope/index.html.twig");
    }
}
