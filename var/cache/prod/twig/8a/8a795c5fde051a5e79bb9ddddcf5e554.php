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
class __TwigTemplate_1c20d2ae9e19d48c9598fd2dac317238 extends Template
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
        $this->parent = $this->loadTemplate("_layout.html.twig", "document/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loire&Orléans | Documents à télécharger";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <section class=\"d-flex align-items-center mb-5\">
        <div class=\"w-100\">
            ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "roles", [], "any", false, false, false, 6), 0, [], "any", false, false, false, 6) === "ROLE_ADMINISTRATEUR"))) {
            // line 7
            echo "                <h1 class=\"text-center my-4\">Gestion des documents</h1>
            ";
        }
        // line 9
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "roles", [], "any", false, false, false, 9), 0, [], "any", false, false, false, 9) === "ROLE_AMBASSADEUR"))) {
            // line 10
            echo "                <h1 class=\"text-center my-4\">Documents à télécharger</h1>
            ";
        }
        // line 12
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "roles", [], "any", false, false, false, 12), 0, [], "any", false, false, false, 12) === "ROLE_ADMINISTRATEUR"))) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-inline my-2 my-lg-0 justify-content-center"]]);
        echo "
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control mr-sm-2 col-md-7", "placeholder" => "Nom du document"]]);
        echo "
                            <button class=\"btn btn-primary my-2 my-sm-0 mt-4\" type=\"submit\">Rechercher</button>
                        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </span>
                </div>
            </div>
            <div class=\"row m-0 justify-content-center\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["documents"] ?? null));
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
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41), "roles", [], "any", false, false, false, 41), 0, [], "any", false, false, false, 41) === "ROLE_ADMINISTRATEUR"))) {
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
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47), "roles", [], "any", false, false, false, 47)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) === "ROLE_AMBASSADEUR")) {
                // line 48
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_show", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"btn btn-info mt-1 rounded-0\">Envoyer
                                        un message</a>
                                ";
            }
            // line 51
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "roles", [], "any", false, false, false, 51), 0, [], "any", false, false, false, 51) === "ROLE_ADMINISTRATEUR"))) {
                // line 52
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("document_show", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn btn-info mt-1 rounded-0\">
                                        Mes nouveaux messages</a>
                                ";
            }
            // line 55
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55), "roles", [], "any", false, false, false, 55), 0, [], "any", false, false, false, 55) === "ROLE_ADMINISTRATEUR"))) {
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["documents"] ?? null));
        echo "
                </div>
            </div>
            ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 68) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 68), "roles", [], "any", false, false, false, 68), 0, [], "any", false, false, false, 68) === "ROLE_ADMINISTRATEUR"))) {
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
        return array (  247 => 77,  241 => 74,  238 => 73,  232 => 70,  229 => 69,  227 => 68,  221 => 65,  218 => 64,  211 => 62,  195 => 58,  189 => 56,  186 => 55,  179 => 52,  176 => 51,  169 => 48,  167 => 47,  161 => 45,  154 => 42,  152 => 41,  146 => 38,  141 => 36,  132 => 32,  128 => 30,  110 => 29,  102 => 24,  97 => 22,  93 => 21,  87 => 17,  81 => 14,  78 => 13,  75 => 12,  71 => 10,  68 => 9,  64 => 7,  62 => 6,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "document/index.html.twig", "/home/vador/Projects/Symfony/Pro/loireetorleans/templates/document/index.html.twig");
    }
}
