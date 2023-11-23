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

/* registration/register.html.twig */
class __TwigTemplate_48437d60c46f07009b85bc7ae3420d98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("_layout.html.twig", "registration/register.html.twig", 1);
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

        echo "Loire&Orléans | Création du profil Ambassadeur";
        
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("register");
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
        <div class=\"w-100 text-center\">
            <div class=\"form\">
                <h1 class=\"text-center my-5\">Créez votre profil ambassadeur</h1>
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "col-12 d-flex flex-column align-items-center p-0"]]);
        echo "
                <div class=\"col-10 col-md-8 d-flex flex-column p-4 align-items-center\">
                    <div class=\"d-flex flex-md-row flex-column col-md-10 p-0\">
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "firstname", [], "any", false, false, false, 15), 'label', ["label" => "Prénom"]);
        echo "
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "firstname", [], "any", false, false, false, 16), 'widget');
        echo "
                            ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "firstname", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17))) {
            // line 18
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 22
        echo "
                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "lastName", [], "any", false, false, false, 25), 'label', ["label" => "Nom"]);
        echo "
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "lastName", [], "any", false, false, false, 26), 'widget');
        echo "
                            ";
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "lastName", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27))) {
            // line 28
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 32
        echo "                        </div>
                    </div>
                    <div class=\"d-flex flex-lg-row flex-column col-md-10 p-0\">
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6 text-truncate\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "pictureFile", [], "any", false, false, false, 36), 'label', ["label" => "Photo"]);
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "pictureFile", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "text-truncate"]]);
        echo "
                            ";
        // line 38
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "pictureFile", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38))) {
            // line 39
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "pictureFile", [], "any", false, false, false, 40), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 43
        echo "                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "company", [], "any", false, false, false, 45), 'label', ["label" => "Entreprise"]);
        echo "
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "company", [], "any", false, false, false, 46), 'widget');
        echo "
                            ";
        // line 47
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "company", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47))) {
            // line 48
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "company", [], "any", false, false, false, 49), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 52
        echo "                        </div>
                    </div>
                    <div class=\"d-flex col-md-10 p-0 flex-column flex-lg-row\">
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6 align-items-center\">
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "activity", [], "any", false, false, false, 56), 'label', ["label" => "Activité"]);
        echo "
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "activity", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "mx-lg-3 w-100"]]);
        echo "
                            ";
        // line 58
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "activity", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "errors", [], "any", false, false, false, 58))) {
            // line 59
            echo "                                <div class=\"mt-2 text-left alert alert-danger w-100\">
                                    ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "activity", [], "any", false, false, false, 60), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 63
        echo "                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6 align-items-center\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "employmentArea", [], "any", false, false, false, 65), 'label', ["label" => "Bassin d'emploi"]);
        echo "
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "employmentArea", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "mx-lg-3 w-100"]]);
        echo "
                            ";
        // line 67
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "employmentArea", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67))) {
            // line 68
            echo "                                <div class=\"mt-2 text-left alert alert-danger w-100\">
                                    ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "employmentArea", [], "any", false, false, false, 69), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 72
        echo "                        </div>
                    </div>
                    <div class=\"d-flex flex-lg-row flex-column col-md-10 p-0\">
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6\">
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'label', ["label" => "Email"]);
        echo "
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'widget');
        echo "
                            ";
        // line 78
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "errors", [], "any", false, false, false, 78))) {
            // line 79
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 83
        echo "                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6\">
                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "phoneNumber", [], "any", false, false, false, 85), 'label', ["label" => "Téléphone"]);
        echo "
                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "phoneNumber", [], "any", false, false, false, 86), 'widget');
        echo "
                            ";
        // line 87
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "phoneNumber", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "errors", [], "any", false, false, false, 87))) {
            // line 88
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "phoneNumber", [], "any", false, false, false, 89), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 92
        echo "                        </div>
                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-md-10\">
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "street", [], "any", false, false, false, 95), 'label', ["label" => "Rue"]);
        echo "
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "street", [], "any", false, false, false, 96), 'widget');
        echo "
                        ";
        // line 97
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "street", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "errors", [], "any", false, false, false, 97))) {
            // line 98
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), "street", [], "any", false, false, false, 99), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 102
        echo "                    </div>
                    <div class=\"d-flex flex-md-row flex-column col-md-10 p-0\">
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "city", [], "any", false, false, false, 105), 'label', ["label" => "Ville"]);
        echo "
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "city", [], "any", false, false, false, 106), 'widget');
        echo "
                            ";
        // line 107
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 107, $this->source); })()), "city", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "errors", [], "any", false, false, false, 107))) {
            // line 108
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), "city", [], "any", false, false, false, 109), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 112
        echo "                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 114, $this->source); })()), "postalCode", [], "any", false, false, false, 114), 'label', ["label" => "Code postal"]);
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), "postalCode", [], "any", false, false, false, 115), 'widget');
        echo "
                            ";
        // line 116
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 116, $this->source); })()), "postalCode", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "errors", [], "any", false, false, false, 116))) {
            // line 117
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 118, $this->source); })()), "postalCode", [], "any", false, false, false, 118), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 121
        echo "                        </div>
                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-md-10\">
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 124, $this->source); })()), "description", [], "any", false, false, false, 124), 'label', ["label" => "Description"]);
        echo "
                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 125, $this->source); })()), "description", [], "any", false, false, false, 125), 'widget', ["attr" => ["rows" => "10"]]);
        echo "
                        ";
        // line 126
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 126, $this->source); })()), "description", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "errors", [], "any", false, false, false, 126))) {
            // line 127
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 128, $this->source); })()), "description", [], "any", false, false, false, 128), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 131
        echo "                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-10 col-lg-6\">
                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 133, $this->source); })()), "login", [], "any", false, false, false, 133), 'label', ["label" => "Identifiant"]);
        echo "
                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 134, $this->source); })()), "login", [], "any", false, false, false, 134), 'widget');
        echo "
                        ";
        // line 135
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 135, $this->source); })()), "login", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "errors", [], "any", false, false, false, 135))) {
            // line 136
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 137, $this->source); })()), "login", [], "any", false, false, false, 137), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 140
        echo "                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-10 col-lg-6\">
                        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 142, $this->source); })()), "password", [], "any", false, false, false, 142), "first", [], "any", false, false, false, 142), 'label', ["label" => "Mot de passe"]);
        echo "
                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 143, $this->source); })()), "password", [], "any", false, false, false, 143), "first", [], "any", false, false, false, 143), 'widget');
        echo "
                        ";
        // line 144
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 144, $this->source); })()), "password", [], "any", false, false, false, 144), "first", [], "any", false, false, false, 144), "vars", [], "any", false, false, false, 144), "errors", [], "any", false, false, false, 144))) {
            // line 145
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 146, $this->source); })()), "password", [], "any", false, false, false, 146), "first", [], "any", false, false, false, 146), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 149
        echo "                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-10 col-lg-6\">
                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 151, $this->source); })()), "password", [], "any", false, false, false, 151), "second", [], "any", false, false, false, 151), 'label', ["label" => "Confirmation mot de passe"]);
        echo "
                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 152, $this->source); })()), "password", [], "any", false, false, false, 152), "second", [], "any", false, false, false, 152), 'widget');
        echo "
                        ";
        // line 153
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 153, $this->source); })()), "password", [], "any", false, false, false, 153), "second", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "errors", [], "any", false, false, false, 153))) {
            // line 154
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 155, $this->source); })()), "password", [], "any", false, false, false, 155), "second", [], "any", false, false, false, 155), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 158
        echo "                    </div>

                    <button type=\"submit\" class=\"btn btn-primary mt-4 col-md-4\">Soumettre</button>
                    ";
        // line 161
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 161, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
            <a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-primary my-4 col-lg-2 col-md-4 col-6\">Retour</a>
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
        return "registration/register.html.twig";
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
        return array (  487 => 164,  481 => 161,  476 => 158,  470 => 155,  467 => 154,  465 => 153,  461 => 152,  457 => 151,  453 => 149,  447 => 146,  444 => 145,  442 => 144,  438 => 143,  434 => 142,  430 => 140,  424 => 137,  421 => 136,  419 => 135,  415 => 134,  411 => 133,  407 => 131,  401 => 128,  398 => 127,  396 => 126,  392 => 125,  388 => 124,  383 => 121,  377 => 118,  374 => 117,  372 => 116,  368 => 115,  364 => 114,  360 => 112,  354 => 109,  351 => 108,  349 => 107,  345 => 106,  341 => 105,  336 => 102,  330 => 99,  327 => 98,  325 => 97,  321 => 96,  317 => 95,  312 => 92,  306 => 89,  303 => 88,  301 => 87,  297 => 86,  293 => 85,  289 => 83,  283 => 80,  280 => 79,  278 => 78,  274 => 77,  270 => 76,  264 => 72,  258 => 69,  255 => 68,  253 => 67,  249 => 66,  245 => 65,  241 => 63,  235 => 60,  232 => 59,  230 => 58,  226 => 57,  222 => 56,  216 => 52,  210 => 49,  207 => 48,  205 => 47,  201 => 46,  197 => 45,  193 => 43,  187 => 40,  184 => 39,  182 => 38,  178 => 37,  174 => 36,  168 => 32,  162 => 29,  159 => 28,  157 => 27,  153 => 26,  149 => 25,  144 => 22,  138 => 19,  135 => 18,  133 => 17,  129 => 16,  125 => 15,  118 => 11,  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_layout.html.twig' %}
{% block title %}Loire&Orléans | Création du profil Ambassadeur{% endblock %}
 {% block stylesheets %}
     {{ encore_entry_link_tags('register') }}
 {% endblock %}
{% block body %}
    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"w-100 text-center\">
            <div class=\"form\">
                <h1 class=\"text-center my-5\">Créez votre profil ambassadeur</h1>
                {{ form_start(registrationForm, {'attr': {'class': 'col-12 d-flex flex-column align-items-center p-0'}}) }}
                <div class=\"col-10 col-md-8 d-flex flex-column p-4 align-items-center\">
                    <div class=\"d-flex flex-md-row flex-column col-md-10 p-0\">
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            {{ form_label(registrationForm.firstname, 'Prénom') }}
                            {{ form_widget(registrationForm.firstname) }}
                            {% if registrationForm.firstname.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger\">
                                    {{ form_errors(registrationForm.firstname) }}
                                </div>
                            {% endif %}

                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            {{ form_label(registrationForm.lastName, 'Nom') }}
                            {{ form_widget(registrationForm.lastName) }}
                            {% if registrationForm.lastName.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger\">
                                    {{ form_errors(registrationForm.lastName) }}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"d-flex flex-lg-row flex-column col-md-10 p-0\">
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6 text-truncate\">
                            {{ form_label(registrationForm.pictureFile, 'Photo') }}
                            {{ form_widget(registrationForm.pictureFile, {'attr': {'class': 'text-truncate'}}) }}
                            {% if registrationForm.pictureFile.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger\">
                                    {{ form_errors(registrationForm.pictureFile) }}
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6\">
                            {{ form_label(registrationForm.company, 'Entreprise') }}
                            {{ form_widget(registrationForm.company) }}
                            {% if registrationForm.company.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger\">
                                    {{ form_errors(registrationForm.company) }}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"d-flex col-md-10 p-0 flex-column flex-lg-row\">
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6 align-items-center\">
                            {{ form_label(registrationForm.activity,'Activité') }}
                            {{ form_widget(registrationForm.activity,{'attr': {'class': 'mx-lg-3 w-100'}}) }}
                            {% if registrationForm.activity.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger w-100\">
                                    {{ form_errors(registrationForm.activity) }}
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6 align-items-center\">
                            {{ form_label(registrationForm.employmentArea, 'Bassin d\\'emploi') }}
                            {{ form_widget(registrationForm.employmentArea,{'attr': {'class': 'mx-lg-3 w-100'}}) }}
                            {% if registrationForm.employmentArea.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger w-100\">
                                    {{ form_errors(registrationForm.employmentArea) }}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"d-flex flex-lg-row flex-column col-md-10 p-0\">
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6\">
                            {{ form_label(registrationForm.email, 'Email') }}
                            {{ form_widget(registrationForm.email) }}
                            {% if registrationForm.email.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger\">
                                    {{ form_errors(registrationForm.email) }}
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6\">
                            {{ form_label(registrationForm.phoneNumber, 'Téléphone') }}
                            {{ form_widget(registrationForm.phoneNumber) }}
                            {% if registrationForm.phoneNumber.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger\">
                                    {{ form_errors(registrationForm.phoneNumber) }}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-md-10\">
                        {{ form_label(registrationForm.street, 'Rue') }}
                        {{ form_widget(registrationForm.street) }}
                        {% if registrationForm.street.vars.errors is not empty %}
                            <div class=\"mt-2 text-left alert alert-danger\">
                                {{ form_errors(registrationForm.street) }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"d-flex flex-md-row flex-column col-md-10 p-0\">
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            {{ form_label(registrationForm.city, 'Ville') }}
                            {{ form_widget(registrationForm.city) }}
                            {% if registrationForm.city.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger\">
                                    {{ form_errors(registrationForm.city) }}
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            {{ form_label(registrationForm.postalCode, 'Code postal') }}
                            {{ form_widget(registrationForm.postalCode) }}
                            {% if registrationForm.postalCode.vars.errors is not empty %}
                                <div class=\"mt-2 text-left alert alert-danger\">
                                    {{ form_errors(registrationForm.postalCode) }}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-md-10\">
                        {{ form_label(registrationForm.description, 'Description') }}
                        {{ form_widget(registrationForm.description, {'attr': {'rows':'10'}}) }}
                        {% if registrationForm.description.vars.errors is not empty %}
                            <div class=\"mt-2 text-left alert alert-danger\">
                                {{ form_errors(registrationForm.description) }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-10 col-lg-6\">
                        {{ form_label(registrationForm.login, 'Identifiant') }}
                        {{ form_widget(registrationForm.login) }}
                        {% if registrationForm.login.vars.errors is not empty %}
                            <div class=\"mt-2 text-left alert alert-danger\">
                                {{ form_errors(registrationForm.login) }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-10 col-lg-6\">
                        {{ form_label(registrationForm.password.first, 'Mot de passe') }}
                        {{ form_widget(registrationForm.password.first) }}
                        {% if registrationForm.password.first.vars.errors is not empty %}
                            <div class=\"mt-2 text-left alert alert-danger\">
                                {{ form_errors(registrationForm.password.first) }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-10 col-lg-6\">
                        {{ form_label(registrationForm.password.second, 'Confirmation mot de passe') }}
                        {{ form_widget(registrationForm.password.second) }}
                        {% if registrationForm.password.second.vars.errors is not empty %}
                            <div class=\"mt-2 text-left alert alert-danger\">
                                {{ form_errors(registrationForm.password.second) }}
                            </div>
                        {% endif %}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary mt-4 col-md-4\">Soumettre</button>
                    {{ form_end(registrationForm) }}
                </div>
            </div>
            <a href=\"{{ path('home') }}\" class=\"btn btn-primary my-4 col-lg-2 col-md-4 col-6\">Retour</a>
        </div>

    </section>
{% endblock %}
", "registration/register.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/registration/register.html.twig");
    }
}
