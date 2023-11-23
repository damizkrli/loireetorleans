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

/* _navbar.html.twig */
class __TwigTemplate_422e7f4bbdafc3a03865c8db70273aea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark sticky-top\">
    <a class=\"navbar-brand d-none d-md-block\" href=\"/\"><img class=\"mr-3 rounded\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo4.png"), "html", null, true);
        echo "\" width=\"104\"
                                                            height=\"55\" alt=\"Logo ambassadeur\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-end mr-3\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item mx-4\">
                <a class=\"nav-link \" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <i class=\"fas fa-home\"></i>
                    Accueil
                </a>
            </li>
            <li class=\"nav-item mx-4\">
                <a class=\"nav-link \" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">
                    <i class=\"far fa-address-book\"></i>
                    Trombinoscope
                </a>
            </li>
            ";
        // line 22
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22))) {
            // line 23
            echo "            <li class=\"nav-item mx-4\">
                <a class=\"nav-link\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                    <i class=\"far fa-user-circle\"></i>
                    Créer un compte
                </a>
            </li>
            ";
        }
        // line 30
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "roles", [], "any", false, false, false, 30), 0, [], "any", false, false, false, 30) === "ROLE_USER"))) {
            // line 31
            echo "            <li class=\"nav-item mx-4\">
                <a class=\"nav-link \" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["login" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "login", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                    <i class=\"far fa-address-book\"></i>
                    Mon profil
                </a>
            </li>
            ";
        }
        // line 38
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "roles", [], "any", false, false, false, 38), 0, [], "any", false, false, false, 38) === "ROLE_AMBASSADEUR"))) {
            // line 39
            echo "            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">
                    <i class=\"fas fa-user-tie\"></i>
                    Ambassadeur
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["login" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "login", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">
                        <i class=\"far fa-user\"></i>
                        Mon profil
                    </a>
                    <a class=\"dropdown-item\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\">
                        <i class=\"far fa-envelope\"></i>
                        Mes échanges
                    </a>
                    <a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_index");
            echo "\">
                        <i class=\"fas fa-file-download\"></i>
                        Documents à télécharger
                    </a>
                </div>
            </li>
            ";
        }
        // line 60
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "roles", [], "any", false, false, false, 60), 0, [], "any", false, false, false, 60) === "ROLE_ADMINISTRATEUR"))) {
            // line 61
            echo "                <li class=\"nav-item dropdown bg-primary\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">
                        <i class=\"fas fa-user-cog\"></i>
                        Administrateur
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_index");
            echo "\">
                            <i class=\"far fa-file-word\"></i>
                            Gestion des documents
                        </a>
                        <a class=\"dropdown-item\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_conversation_index");
            echo "\">
                            <i class=\"far fa-envelope\"></i>
                            Mes échanges
                        </a>
                        <a class=\"dropdown-item\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_index");
            echo "\">
                            <i class=\"fas fa-tasks\"></i>
                            Profils Ambassadeur
                        </a>
                        <a class=\"dropdown-item\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["login" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "login", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">
                            <i class=\"far fa-user\"></i>
                            Mon profil
                        </a>
                    </div>
                </li>
            ";
        }
        // line 86
        echo "            <li class=\"nav-item mx-4\">
                ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) {
            // line 88
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        <i class=\"fas fa-unlock-alt\"></i>
                        Se déconnecter
                    </a>
                ";
        } else {
            // line 93
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                        <i class=\"fas fa-lock\"></i>
                        Connexion
                    </a>
                ";
        }
        // line 98
        echo "            </li>
        </ul>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_navbar.html.twig";
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
        return array (  204 => 98,  195 => 93,  186 => 88,  184 => 87,  181 => 86,  171 => 79,  164 => 75,  157 => 71,  150 => 67,  142 => 61,  139 => 60,  129 => 53,  122 => 49,  115 => 45,  107 => 39,  104 => 38,  95 => 32,  92 => 31,  89 => 30,  80 => 24,  77 => 23,  75 => 22,  67 => 17,  58 => 11,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark sticky-top\">
    <a class=\"navbar-brand d-none d-md-block\" href=\"/\"><img class=\"mr-3 rounded\" src=\"{{ asset('build/logo4.png') }}\" width=\"104\"
                                                            height=\"55\" alt=\"Logo ambassadeur\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-end mr-3\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item mx-4\">
                <a class=\"nav-link \" href=\"{{ path('home') }}\">
                    <i class=\"fas fa-home\"></i>
                    Accueil
                </a>
            </li>
            <li class=\"nav-item mx-4\">
                <a class=\"nav-link \" href=\"{{ path('user_index') }}\">
                    <i class=\"far fa-address-book\"></i>
                    Trombinoscope
                </a>
            </li>
            {% if app.user is empty %}
            <li class=\"nav-item mx-4\">
                <a class=\"nav-link\" href=\"{{ path('app_register') }}\">
                    <i class=\"far fa-user-circle\"></i>
                    Créer un compte
                </a>
            </li>
            {% endif %}
            {% if app.user and app.user.roles.0 is same as('ROLE_USER') %}
            <li class=\"nav-item mx-4\">
                <a class=\"nav-link \" href=\"{{ path('user_show', {'login': app.user.login}) }}\">
                    <i class=\"far fa-address-book\"></i>
                    Mon profil
                </a>
            </li>
            {% endif %}
            {% if app.user and app.user.roles.0 is same as('ROLE_AMBASSADEUR') %}
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">
                    <i class=\"fas fa-user-tie\"></i>
                    Ambassadeur
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"{{ path('user_show', {login: app.user.login}) }}\">
                        <i class=\"far fa-user\"></i>
                        Mon profil
                    </a>
                    <a class=\"dropdown-item\" href=\"{{ path('message_index') }}\">
                        <i class=\"far fa-envelope\"></i>
                        Mes échanges
                    </a>
                    <a class=\"dropdown-item\" href=\"{{ path('document_index') }}\">
                        <i class=\"fas fa-file-download\"></i>
                        Documents à télécharger
                    </a>
                </div>
            </li>
            {% endif %}
            {% if app.user and app.user.roles.0 is same as('ROLE_ADMINISTRATEUR') %}
                <li class=\"nav-item dropdown bg-primary\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">
                        <i class=\"fas fa-user-cog\"></i>
                        Administrateur
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"{{ path('document_index') }}\">
                            <i class=\"far fa-file-word\"></i>
                            Gestion des documents
                        </a>
                        <a class=\"dropdown-item\" href=\"{{ path('admin_conversation_index') }}\">
                            <i class=\"far fa-envelope\"></i>
                            Mes échanges
                        </a>
                        <a class=\"dropdown-item\" href=\"{{ path('admin_profile_index') }}\">
                            <i class=\"fas fa-tasks\"></i>
                            Profils Ambassadeur
                        </a>
                        <a class=\"dropdown-item\" href=\"{{ path('user_show', {login: app.user.login}) }}\">
                            <i class=\"far fa-user\"></i>
                            Mon profil
                        </a>
                    </div>
                </li>
            {% endif %}
            <li class=\"nav-item mx-4\">
                {% if app.user %}
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                        <i class=\"fas fa-unlock-alt\"></i>
                        Se déconnecter
                    </a>
                {% else %}
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
                        <i class=\"fas fa-lock\"></i>
                        Connexion
                    </a>
                {% endif %}
            </li>
        </ul>
    </div>
</nav>
", "_navbar.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/_navbar.html.twig");
    }
}
