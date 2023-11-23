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

/* security/login.html.twig */
class __TwigTemplate_dc7dab8321e1276a5049db24080d8da9 extends Template
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
        $this->parent = $this->loadTemplate("_layout.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Connexion";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "     ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "
 ";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"form w-100\">
            <h1 class=\"my-4 text-center\">Connexion</h1>
            <form method=\"post\" class=\"col-12 d-flex flex-column align-items-center\">
                ";
        // line 12
        if (($context["error"] ?? null)) {
            // line 13
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 15
        echo "
                <div class=\"col-10 col-md-8 d-flex flex-column p-4 align-items-center\">
                    <div class=\"form-group col-md-8 col-11\">
                        <label for=\"inputLogin\">Identifiant (login)</label>
                        <input type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"login\" id=\"inputLogin\" class=\"form-control\" required autofocus>
                    </div>
                    <div class=\"form-group col-md-8 col-11\">
                        <label for=\"inputPassword\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    <div class=\"form-group d-flex flex-row justify-content-around align-items-center col-12\">
                        <div class=\"checkbox \">
                            <label class=\"m-0\">
                                <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                            </label>
                        </div >


                    </div>
                </div>

                <button class=\"btn btn-lg btn-primary mt-3\" type=\"submit\">
                    Connexion
                </button>
            </form>
            <div class=\"d-flex align-items-center my-4 flex-column\">
                <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Créer un compte Ambassadeur</a>
                <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié ?</a>
            </div>

        </div>

    </section>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  123 => 43,  119 => 42,  99 => 25,  90 => 19,  84 => 15,  78 => 13,  76 => 12,  70 => 8,  66 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/security/login.html.twig");
    }
}
