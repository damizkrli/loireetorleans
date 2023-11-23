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

/* document/index.html.twig */
class __TwigTemplate_2da7d9774422c58df16f37c97b981e30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/index.html.twig"));

        $this->parent = $this->loadTemplate("_layout.html.twig", "document/index.html.twig", 1);
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

        echo "Loire&Orléans | Documents à télécharger";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"w-100\">
            ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "roles", [], "any", false, false, false, 6), 0, [], "any", false, false, false, 6) === "ROLE_ADMINISTRATEUR"))) {
            // line 7
            echo "                <h1 class=\"text-center my-4\">Gestion des documents</h1>
            ";
        }
        // line 9
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "roles", [], "any", false, false, false, 9), 0, [], "any", false, false, false, 9) === "ROLE_AMBASSADEUR"))) {
            // line 10
            echo "                <h1 class=\"text-center my-4\">Documents à télécharger</h1>
            ";
        }
        // line 12
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "roles", [], "any", false, false, false, 12), 0, [], "any", false, false, false, 12) === "ROLE_ADMINISTRATEUR"))) {
            // line 13
            echo "                <div class=\"d-flex align-items-center my-4 flex-column\">
                    <a class=\"btn btn-lg btn-primary mt-3\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_new");
            echo "\">Ajouter un document</a>
                </div>
            ";
        }
        // line 17
        echo "            <div class=\"form-group my-5\">
                <div class=\"d-flex justify-content-center my-4\">
                        <span class=\"infobulle\"
                              aria-label=\"Veuillez saisir un titre de document\">
                            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "form-inline my-2 my-lg-0 justify-content-center"]]);
        echo "
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "search", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control mr-sm-2 col-md-7", "placeholder" => "Nom du document"]]);
        echo "
                            <button class=\"btn btn-primary my-2 my-sm-0 mt-4\" type=\"submit\">Rechercher</button>
                        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
                        </span>
                </div>
            </div>
            <div class=\"row m-0 justify-content-center\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 30
            echo "                    <div class=\"blur my-4 mx-5 col-md-4 col-10 p-0 col-lg-2 d-flex flex-column align-items-start\">
                        <div class=\"w-100 p-0 pt-2 text-center mb-auto\">
                            <img class=\"w-50\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/logo_" . twig_get_attribute($this->env, $this->source, $context["document"], "ext", [], "any", false, false, false, 32)) . ".png")), "html", null, true);
            echo "\" alt=\"logo_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "ext", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"pt-2 p-0\">
                            <div class=\"p-1\">
                                <h6 class=\"card-title\">Nom : ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</h6>
                                <p class=\"card-title\">Date d'ajout du document
                                    : ";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["document"], "updatedAt", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "updatedAt", [], "any", false, false, false, 38), "d-m-Y H:i"), "html", null, true))) : (print ("")));
            echo "</p>
                            </div>
                            <div class=\"d-flex flex-column bg-primary\">
                                ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "roles", [], "any", false, false, false, 41), 0, [], "any", false, false, false, 41) === "ROLE_ADMINISTRATEUR"))) {
                // line 42
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\"
                                   class=\"btn mb-1 btn-info rounded-0\">Modifier</a>
                                ";
            }
            // line 45
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["document"], "documentFile", "App\\Entity\\Document"), "html", null, true);
            echo "\"
                                   class=\"btn btn-info rounded-0\">Télécharger</a>
                                ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47), 0, [], "array", false, false, false, 47) === "ROLE_AMBASSADEUR")) {
                // line 48
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_show", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"btn btn-info mt-1 rounded-0\">Envoyer
                                        un message</a>
                                ";
            }
            // line 51
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "roles", [], "any", false, false, false, 51), 0, [], "any", false, false, false, 51) === "ROLE_ADMINISTRATEUR"))) {
                // line 52
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_show", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn btn-info mt-1 rounded-0\">
                                        Mes nouveaux messages</a>
                                ";
            }
            // line 55
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "roles", [], "any", false, false, false, 55), 0, [], "any", false, false, false, 55) === "ROLE_ADMINISTRATEUR"))) {
                // line 56
                echo "                                    ";
                echo twig_include($this->env, $context, "document/_delete_form.html.twig");
                echo "
                                ";
            }
            // line 58
            echo "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 62
            echo "                    'Aucun document trouvé'
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                <div class=\"d-flex justify-content-center w-100 my-5\">
                    ";
        // line 65
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["documents"]) || array_key_exists("documents", $context) ? $context["documents"] : (function () { throw new RuntimeError('Variable "documents" does not exist.', 65, $this->source); })()));
        echo "
                </div>
            </div>
            ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "roles", [], "any", false, false, false, 68), 0, [], "any", false, false, false, 68) === "ROLE_ADMINISTRATEUR"))) {
            // line 69
            echo "                <div class=\"d-flex align-items-center my-4 flex-column\">
                    <a class=\"btn btn-lg btn-primary mt-3\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\">Retour gestion</a>
                </div>
            ";
        } else {
            // line 73
            echo "                <div class=\"d-flex align-items-center my-4 flex-column\">
                    <a class=\"btn btn-lg btn-primary mt-3\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Retour à l'accueil</a>
                </div>
            ";
        }
        // line 77
        echo "        </div>
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
        return "document/index.html.twig";
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
        return array (  277 => 77,  271 => 74,  268 => 73,  262 => 70,  259 => 69,  257 => 68,  251 => 65,  248 => 64,  241 => 62,  225 => 58,  219 => 56,  216 => 55,  209 => 52,  206 => 51,  199 => 48,  197 => 47,  191 => 45,  184 => 42,  182 => 41,  176 => 38,  171 => 36,  162 => 32,  158 => 30,  140 => 29,  132 => 24,  127 => 22,  123 => 21,  117 => 17,  111 => 14,  108 => 13,  105 => 12,  101 => 10,  98 => 9,  94 => 7,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layout.html.twig' %}
{% block title %}Loire&Orléans | Documents à télécharger{% endblock %}
{% block body %}
    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"w-100\">
            {% if app.user and app.user.roles.0 is same as('ROLE_ADMINISTRATEUR') %}
                <h1 class=\"text-center my-4\">Gestion des documents</h1>
            {% endif %}
            {% if app.user and app.user.roles.0 is same as('ROLE_AMBASSADEUR') %}
                <h1 class=\"text-center my-4\">Documents à télécharger</h1>
            {% endif %}
            {% if app.user and app.user.roles.0 is same as('ROLE_ADMINISTRATEUR') %}
                <div class=\"d-flex align-items-center my-4 flex-column\">
                    <a class=\"btn btn-lg btn-primary mt-3\" href=\"{{ path('document_new') }}\">Ajouter un document</a>
                </div>
            {% endif %}
            <div class=\"form-group my-5\">
                <div class=\"d-flex justify-content-center my-4\">
                        <span class=\"infobulle\"
                              aria-label=\"Veuillez saisir un titre de document\">
                            {{ form_start(form, {'attr': {'class': 'form-inline my-2 my-lg-0 justify-content-center'}}) }}
                            {{ form_widget(form.search, {'attr': {'class': 'form-control mr-sm-2 col-md-7', 'placeholder': \"Nom du document\"}}) }}
                            <button class=\"btn btn-primary my-2 my-sm-0 mt-4\" type=\"submit\">Rechercher</button>
                        {{ form_end(form) }}
                        </span>
                </div>
            </div>
            <div class=\"row m-0 justify-content-center\">
                {% for document in documents %}
                    <div class=\"blur my-4 mx-5 col-md-4 col-10 p-0 col-lg-2 d-flex flex-column align-items-start\">
                        <div class=\"w-100 p-0 pt-2 text-center mb-auto\">
                            <img class=\"w-50\" src=\"{{ asset('build/logo_' ~ document.ext ~ '.png' ) }}\" alt=\"logo_{{ document.ext }}\">
                        </div>
                        <div class=\"pt-2 p-0\">
                            <div class=\"p-1\">
                                <h6 class=\"card-title\">Nom : {{ document.name }}</h6>
                                <p class=\"card-title\">Date d'ajout du document
                                    : {{ document.updatedAt ? document.updatedAt|date('d-m-Y H:i') : '' }}</p>
                            </div>
                            <div class=\"d-flex flex-column bg-primary\">
                                {% if app.user and app.user.roles.0 is same as ('ROLE_ADMINISTRATEUR') %}
                                <a href=\"{{ path('document_edit', {'id':document.id}) }}\"
                                   class=\"btn mb-1 btn-info rounded-0\">Modifier</a>
                                {% endif %}
                                <a href=\"{{ vich_uploader_asset(document, 'documentFile', 'App\\\\Entity\\\\Document') }}\"
                                   class=\"btn btn-info rounded-0\">Télécharger</a>
                                {% if app.user.roles[0] is same as ('ROLE_AMBASSADEUR') %}
                                    <a href=\"{{ path('document_show', {'id':document.id}) }}\" class=\"btn btn-info mt-1 rounded-0\">Envoyer
                                        un message</a>
                                {% endif %}
                                {% if app.user and app.user.roles.0 is same as('ROLE_ADMINISTRATEUR') %}
                                    <a href=\"{{ path('document_show', {'id':document.id}) }}\" class=\"btn btn-info mt-1 rounded-0\">
                                        Mes nouveaux messages</a>
                                {% endif %}
                                {% if app.user and app.user.roles.0 is same as('ROLE_ADMINISTRATEUR') %}
                                    {{ include('document/_delete_form.html.twig') }}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    'Aucun document trouvé'
                {% endfor %}
                <div class=\"d-flex justify-content-center w-100 my-5\">
                    {{ knp_pagination_render(documents) }}
                </div>
            </div>
            {% if app.user and app.user.roles.0 is same as('ROLE_ADMINISTRATEUR') %}
                <div class=\"d-flex align-items-center my-4 flex-column\">
                    <a class=\"btn btn-lg btn-primary mt-3\" href=\"{{ path('admin_index') }}\">Retour gestion</a>
                </div>
            {% else %}
                <div class=\"d-flex align-items-center my-4 flex-column\">
                    <a class=\"btn btn-lg btn-primary mt-3\" href=\"{{ path('home') }}\">Retour à l'accueil</a>
                </div>
            {% endif %}
        </div>
    </section>
{% endblock %}
", "document/index.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/document/index.html.twig");
    }
}
