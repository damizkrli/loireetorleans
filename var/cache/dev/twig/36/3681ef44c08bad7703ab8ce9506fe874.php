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

/* _footer.html.twig */
class __TwigTemplate_ba0a1e61a5abef51abfdc4727f8d1766 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer w-100\">
        <div class=\"row text-center d-flex justify-content-between my-4 w-100 mx-0\">
            <div class=\"col-md-3\">
                <h6 class=\"font-weight-bold m-0\">
                    <a href=\"https://www.loiretorleans-economie.fr/contact/\" target=\"_blank\"
                       class=\"col-6 col-lg-3 \">Contact
                    </a>
                </h6>
            </div>

            <div class=\"col-md-3\">
                <h6 class=\"font-weight-bold m-0\">
                    <a href=\"https://www.loiretorleans-economie.fr/membres-et-partenaires/\" target=\"_blank\"
                       class=\"col-6 col-lg-3\">Partenaires
                    </a>
                </h6>
            </div>

            <div class=\"col-md-3\">
                <h6 class=\"font-weight-bold m-0\">
                    <a class=\"col-lg-6 p-0 text-center\"
                       href=\"https://www.loiretorleans-economie.fr/mentions-legales/\"
                       target=\"_blank\">Mentions légales
                    </a>
                </h6>
            </div>
        </div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer w-100\">
        <div class=\"row text-center d-flex justify-content-between my-4 w-100 mx-0\">
            <div class=\"col-md-3\">
                <h6 class=\"font-weight-bold m-0\">
                    <a href=\"https://www.loiretorleans-economie.fr/contact/\" target=\"_blank\"
                       class=\"col-6 col-lg-3 \">Contact
                    </a>
                </h6>
            </div>

            <div class=\"col-md-3\">
                <h6 class=\"font-weight-bold m-0\">
                    <a href=\"https://www.loiretorleans-economie.fr/membres-et-partenaires/\" target=\"_blank\"
                       class=\"col-6 col-lg-3\">Partenaires
                    </a>
                </h6>
            </div>

            <div class=\"col-md-3\">
                <h6 class=\"font-weight-bold m-0\">
                    <a class=\"col-lg-6 p-0 text-center\"
                       href=\"https://www.loiretorleans-economie.fr/mentions-legales/\"
                       target=\"_blank\">Mentions légales
                    </a>
                </h6>
            </div>
        </div>
</footer>
", "_footer.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/templates/_footer.html.twig");
    }
}
