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

/* ambassador/edit.html.twig */
class __TwigTemplate_d96e58bdc4468344a11bb819a35c24a1 extends Template
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
        $this->parent = $this->loadTemplate("_layout.html.twig", "ambassador/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Mon profil Ambassadeur | Modification";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "     ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("register");
        echo "
 ";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"w-100 text-center\">
            <div class=\"form\">
                <h1 class=\"text-center my-5\">Créez votre profil ambassadeur</h1>
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start', ["attr" => ["class" => "col-12 d-flex flex-column align-items-center p-0"]]);
        echo "
                <div class=\"col-10 col-md-8 d-flex flex-column p-4 align-items-center\">
                    <div class=\"d-flex flex-md-row flex-column col-md-10 p-0\">
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstname", [], "any", false, false, false, 15), 'label', ["label" => "Prénom"]);
        echo "
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstname", [], "any", false, false, false, 16), 'widget');
        echo "
                            ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstname", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17))) {
            // line 18
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstname", [], "any", false, false, false, 19), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "lastName", [], "any", false, false, false, 25), 'label', ["label" => "Nom"]);
        echo "
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "lastName", [], "any", false, false, false, 26), 'widget');
        echo "
                            ";
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "lastName", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27))) {
            // line 28
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "lastName", [], "any", false, false, false, 29), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "pictureFile", [], "any", false, false, false, 36), 'label', ["label" => "Photo"]);
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "pictureFile", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "text-truncate"]]);
        echo "
                            ";
        // line 38
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "pictureFile", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38))) {
            // line 39
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "pictureFile", [], "any", false, false, false, 40), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 43
        echo "                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "company", [], "any", false, false, false, 45), 'label', ["label" => "Entreprise"]);
        echo "
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "company", [], "any", false, false, false, 46), 'widget');
        echo "
                            ";
        // line 47
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "company", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47))) {
            // line 48
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "company", [], "any", false, false, false, 49), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "activity", [], "any", false, false, false, 56), 'label', ["label" => "Activité"]);
        echo "
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "activity", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "mx-lg-3 w-100"]]);
        echo "
                            ";
        // line 58
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "activity", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "errors", [], "any", false, false, false, 58))) {
            // line 59
            echo "                                <div class=\"mt-2 text-left alert alert-danger w-100\">
                                    ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "activity", [], "any", false, false, false, 60), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 63
        echo "                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6 align-items-center\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "employmentArea", [], "any", false, false, false, 65), 'label', ["label" => "Bassin d'emploi"]);
        echo "
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "employmentArea", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "mx-lg-3 w-100"]]);
        echo "
                            ";
        // line 67
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "employmentArea", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67))) {
            // line 68
            echo "                                <div class=\"mt-2 text-left alert alert-danger w-100\">
                                    ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "employmentArea", [], "any", false, false, false, 69), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 76), 'label', ["label" => "Email"]);
        echo "
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 77), 'widget');
        echo "
                            ";
        // line 78
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "errors", [], "any", false, false, false, 78))) {
            // line 79
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 80), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 83
        echo "                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-lg-6\">
                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phoneNumber", [], "any", false, false, false, 85), 'label', ["label" => "Téléphone"]);
        echo "
                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phoneNumber", [], "any", false, false, false, 86), 'widget');
        echo "
                            ";
        // line 87
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phoneNumber", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "errors", [], "any", false, false, false, 87))) {
            // line 88
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phoneNumber", [], "any", false, false, false, 89), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "street", [], "any", false, false, false, 95), 'label', ["label" => "Rue"]);
        echo "
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "street", [], "any", false, false, false, 96), 'widget');
        echo "
                        ";
        // line 97
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "street", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "errors", [], "any", false, false, false, 97))) {
            // line 98
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "street", [], "any", false, false, false, 99), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 105), 'label', ["label" => "Ville"]);
        echo "
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 106), 'widget');
        echo "
                            ";
        // line 107
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "errors", [], "any", false, false, false, 107))) {
            // line 108
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 109), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 112
        echo "                        </div>
                        <div class=\"form-group d-flex flex-column my-3 col-md-6\">
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "postalCode", [], "any", false, false, false, 114), 'label', ["label" => "Code postal"]);
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "postalCode", [], "any", false, false, false, 115), 'widget');
        echo "
                            ";
        // line 116
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "postalCode", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "errors", [], "any", false, false, false, 116))) {
            // line 117
            echo "                                <div class=\"mt-2 text-left alert alert-danger\">
                                    ";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "postalCode", [], "any", false, false, false, 118), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "description", [], "any", false, false, false, 124), 'label', ["label" => "Description"]);
        echo "
                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "description", [], "any", false, false, false, 125), 'widget', ["attr" => ["rows" => "10"]]);
        echo "
                        ";
        // line 126
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "description", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "errors", [], "any", false, false, false, 126))) {
            // line 127
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "description", [], "any", false, false, false, 128), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 131
        echo "                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-10 col-lg-6\">
                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "login", [], "any", false, false, false, 133), 'label', ["label" => "Identifiant"]);
        echo "
                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "login", [], "any", false, false, false, 134), 'widget');
        echo "
                        ";
        // line 135
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "login", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "errors", [], "any", false, false, false, 135))) {
            // line 136
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "login", [], "any", false, false, false, 137), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 140
        echo "                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-10 col-lg-6\">
                        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 142), "first", [], "any", false, false, false, 142), 'label', ["label" => "Mot de passe"]);
        echo "
                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 143), "first", [], "any", false, false, false, 143), 'widget');
        echo "
                        ";
        // line 144
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 144), "first", [], "any", false, false, false, 144), "vars", [], "any", false, false, false, 144), "errors", [], "any", false, false, false, 144))) {
            // line 145
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 146), "first", [], "any", false, false, false, 146), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 149
        echo "                    </div>
                    <div class=\"form-group d-flex flex-column my-3 col-10 col-lg-6\">
                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 151), "second", [], "any", false, false, false, 151), 'label', ["label" => "Confirmation mot de passe"]);
        echo "
                        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 152), "second", [], "any", false, false, false, 152), 'widget');
        echo "
                        ";
        // line 153
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 153), "second", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "errors", [], "any", false, false, false, 153))) {
            // line 154
            echo "                            <div class=\"mt-2 text-left alert alert-danger\">
                                ";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "password", [], "any", false, false, false, 155), "second", [], "any", false, false, false, 155), 'errors');
            echo "
                            </div>
                        ";
        }
        // line 158
        echo "                    </div>

                    <button type=\"submit\" class=\"btn btn-primary mt-4 col-md-4\">Soumettre</button>
                    ";
        // line 161
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ambassador/edit.html.twig";
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
        return array (  445 => 164,  439 => 161,  434 => 158,  428 => 155,  425 => 154,  423 => 153,  419 => 152,  415 => 151,  411 => 149,  405 => 146,  402 => 145,  400 => 144,  396 => 143,  392 => 142,  388 => 140,  382 => 137,  379 => 136,  377 => 135,  373 => 134,  369 => 133,  365 => 131,  359 => 128,  356 => 127,  354 => 126,  350 => 125,  346 => 124,  341 => 121,  335 => 118,  332 => 117,  330 => 116,  326 => 115,  322 => 114,  318 => 112,  312 => 109,  309 => 108,  307 => 107,  303 => 106,  299 => 105,  294 => 102,  288 => 99,  285 => 98,  283 => 97,  279 => 96,  275 => 95,  270 => 92,  264 => 89,  261 => 88,  259 => 87,  255 => 86,  251 => 85,  247 => 83,  241 => 80,  238 => 79,  236 => 78,  232 => 77,  228 => 76,  222 => 72,  216 => 69,  213 => 68,  211 => 67,  207 => 66,  203 => 65,  199 => 63,  193 => 60,  190 => 59,  188 => 58,  184 => 57,  180 => 56,  174 => 52,  168 => 49,  165 => 48,  163 => 47,  159 => 46,  155 => 45,  151 => 43,  145 => 40,  142 => 39,  140 => 38,  136 => 37,  132 => 36,  126 => 32,  120 => 29,  117 => 28,  115 => 27,  111 => 26,  107 => 25,  102 => 22,  96 => 19,  93 => 18,  91 => 17,  87 => 16,  83 => 15,  76 => 11,  70 => 7,  66 => 6,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ambassador/edit.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/ambassador/edit.html.twig");
    }
}
