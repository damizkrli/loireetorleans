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

/* reset_password/check_email.html.twig */
class __TwigTemplate_5392d92a34164a31bce4d24d85a628c4 extends Template
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
        $this->parent = $this->loadTemplate("_layout.html.twig", "reset_password/check_email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Email de réinitialisation envoyé!";
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
        <div class=\"d-flex flex-column col-12 p-0\">
                <h1 class=\"my-5 text-center\">Mail de réinitialisation envoyé</h1>
                <div class=\" reset_pwd col-10 col-md-8 d-flex flex-column p-4 align-items-center mx-auto \">
                    <p class=\"col-10 p-0\">Un email contenant un lien pour réinitialiser votre mot de passe vous a été envoyé. Ce lien expirera d'ici ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["tokenLifetime"] ?? null), "g"), "html", null, true);
        echo " heure.</p>

                    <div class=\"col-10 d-flex flex-column flex-md-row p-0 align-items-center justify-content-between\">
                        <p class=\"p-0 col-md-8\">Si vous n'avez pas reçu l'email, merci de vérifier vos spams ou <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">essayez à nouveau d'envoyer le mail de réinitialisation</a>.</p>
                        <figure>
                            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo4.png"), "html", null, true);
        echo "\" alt=\"Logo-Ambassadeur\">
                        </figure>
                    </div>
                </div>
            <div class=\"d-flex col-12 justify-content-center\">
                <a class=\"btn btn-lg btn-primary mt-3\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">

                    Accueil
                </a>
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
        return "reset_password/check_email.html.twig";
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
        return array (  95 => 22,  87 => 17,  82 => 15,  76 => 12,  70 => 8,  66 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/check_email.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/reset_password/check_email.html.twig");
    }
}
