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

/* @Twig/Exception/traces.html.twig */
class __TwigTemplate_adbad4774c77bc282a56346676e9265e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        // line 1
        echo "<div class=\"trace trace-as-html\" id=\"trace-box-";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((isset($context["expand"]) || array_key_exists("expand", $context) ? $context["expand"] : (function () { throw new RuntimeError('Variable "expand" does not exist.', 4, $this->source); })())) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    <span class=\"icon icon-close\">";
        // line 6
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 7
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>

                    <span class=\"trace-namespace\">
                        ";
        // line 10
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 10, $this->source); })()), "class", [], "any", false, false, false, 10), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 11
        echo (((twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 11, $this->source); })()), "class", [], "any", false, false, false, 11), "\\")) > 1)) ? ("\\") : (""));
        echo "
                    </span>
                    ";
        // line 13
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 13, $this->source); })()), "class", [], "any", false, false, false, 13), "\\")), "html", null, true);
        echo "
                </h3>

                ";
        // line 16
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 16, $this->source); })()), "message", [], "any", false, false, false, 16)) && ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 16, $this->source); })()) > 1))) {
            // line 17
            echo "                    <p class=\"break-long-words trace-message\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 17, $this->source); })()), "message", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                ";
        }
        // line 19
        echo "            </span>
        </div>

        <div id=\"trace-html-";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" class=\"sf-toggle-content\">
        ";
        // line 23
        $context["_is_first_user_code"] = true;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 24, $this->source); })()), "trace", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 25
            echo "            ";
            $context["_is_vendor_trace"] = ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 25)) && (twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 25)) || twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 25))));
            // line 26
            echo "            ";
            $context["_display_code_snippet"] = ((isset($context["_is_first_user_code"]) || array_key_exists("_is_first_user_code", $context) ? $context["_is_first_user_code"] : (function () { throw new RuntimeError('Variable "_is_first_user_code" does not exist.', 26, $this->source); })()) &&  !(isset($context["_is_vendor_trace"]) || array_key_exists("_is_vendor_trace", $context) ? $context["_is_vendor_trace"] : (function () { throw new RuntimeError('Variable "_is_vendor_trace" does not exist.', 26, $this->source); })()));
            // line 27
            echo "            ";
            if ((isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new RuntimeError('Variable "_display_code_snippet" does not exist.', 27, $this->source); })())) {
                $context["_is_first_user_code"] = false;
            }
            // line 28
            echo "            <div class=\"trace-line ";
            echo (((isset($context["_is_vendor_trace"]) || array_key_exists("_is_vendor_trace", $context) ? $context["_is_vendor_trace"] : (function () { throw new RuntimeError('Variable "_is_vendor_trace" does not exist.', 28, $this->source); })())) ? ("trace-from-vendor") : (""));
            echo "\">
                ";
            // line 29
            echo twig_include($this->env, $context, "@Twig/Exception/trace.html.twig", ["prefix" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 29, $this->source); })()), "i" => $context["i"], "trace" => $context["trace"], "style" => (((isset($context["_is_vendor_trace"]) || array_key_exists("_is_vendor_trace", $context) ? $context["_is_vendor_trace"] : (function () { throw new RuntimeError('Variable "_is_vendor_trace" does not exist.', 29, $this->source); })())) ? ("compact") : ((((isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new RuntimeError('Variable "_display_code_snippet" does not exist.', 29, $this->source); })())) ? ("expanded") : (""))))], false);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Twig/Exception/traces.html.twig";
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
        return array (  129 => 32,  120 => 29,  115 => 28,  110 => 27,  107 => 26,  104 => 25,  99 => 24,  97 => 23,  93 => 22,  88 => 19,  82 => 17,  80 => 16,  74 => 13,  69 => 11,  67 => 10,  61 => 7,  57 => 6,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"trace trace-as-html\" id=\"trace-box-{{ index }}\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-{{ index }}\" data-toggle-initial=\"{{ expand ? 'display' }}\">
                <h3 class=\"trace-class\">
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>

                    <span class=\"trace-namespace\">
                        {{ exception.class|split('\\\\')|slice(0, -1)|join('\\\\') }}
                        {{- exception.class|split('\\\\')|length > 1 ? '\\\\' }}
                    </span>
                    {{ exception.class|split('\\\\')|last }}
                </h3>

                {% if exception.message is not empty and index > 1 %}
                    <p class=\"break-long-words trace-message\">{{ exception.message }}</p>
                {% endif %}
            </span>
        </div>

        <div id=\"trace-html-{{ index }}\" class=\"sf-toggle-content\">
        {% set _is_first_user_code = true %}
        {% for i, trace in exception.trace %}
            {% set _is_vendor_trace = trace.file is not empty and ('/vendor/' in trace.file or '/var/cache/' in trace.file) %}
            {% set _display_code_snippet = _is_first_user_code and not _is_vendor_trace %}
            {% if _display_code_snippet %}{% set _is_first_user_code = false %}{% endif %}
            <div class=\"trace-line {{ _is_vendor_trace ? 'trace-from-vendor' }}\">
                {{ include('@Twig/Exception/trace.html.twig', { prefix: index, i: i, trace: trace, style: _is_vendor_trace ? 'compact' : _display_code_snippet ? 'expanded' }, with_context = false) }}
            </div>
        {% endfor %}
        </div>
    </div>
</div>
", "@Twig/Exception/traces.html.twig", "/home/vador/Projects/Symfony/Pro/orleans-php-2003-project-loireetorleans/vendor/symfony/twig-bundle/Resources/views/Exception/traces.html.twig");
    }
}
