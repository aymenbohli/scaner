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

/* bundles/KnpPaginator/Pagination/sliding.html.twig */
class __TwigTemplate_6722c9b795673375517e6eea30dc0f1fedd61667959bd7afda0754e6eb7f917e extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/KnpPaginator/Pagination/sliding.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/KnpPaginator/Pagination/sliding.html.twig"));

        // line 2
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 4
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 4, $this->source); })()) > 1)) {
            // line 5
            echo "            <div class=\"pagination\">
                ";
            // line 6
            if (((isset($context["first"]) || array_key_exists("first", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 6, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 6, $this->source); })())))) {
                // line 7
                echo "                    <span class=\"first paginate_button page-item page-link\">
                <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 8, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 8, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 8, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 8, $this->source); })())])), "html", null, true);
                echo "\">&lt;&lt;</a>
            </span>
                ";
            }
            // line 11
            echo "
                ";
            // line 12
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 13
                echo "                    <span class=\"paginate_button page-item previous page-link\">
                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 14, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 14, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 14, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 14, $this->source); })())])), "html", null, true);
                echo "\">&lt;</a>
            </span>
                ";
            }
            // line 17
            echo "
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "                    ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 19, $this->source); })()))) {
                    // line 20
                    echo "                        <span class=\"page paginate_button page-item page-link\">
                    <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 21, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 21, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 21, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </span>
                    ";
                } else {
                    // line 24
                    echo "                        <span class=\"current paginate_button page-item page-link\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                    ";
                }
                // line 26
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
                ";
            // line 28
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 29
                echo "                    <span class=\"next paginate_button page-item page-link\">
                <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 30, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 30, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 30, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 30, $this->source); })())])), "html", null, true);
                echo "\">&gt;</a>
            </span>
                ";
            }
            // line 33
            echo "
                ";
            // line 34
            if (((isset($context["last"]) || array_key_exists("last", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 34, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 34, $this->source); })())))) {
                // line 35
                echo "                    <span class=\"last page-link\">
                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 36, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 36, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 36, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 36, $this->source); })())])), "html", null, true);
                echo "\">&gt;&gt;</a>
            </span>
                ";
            }
            // line 39
            echo "            </div>
        ";
        }
        // line 41
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "bundles/KnpPaginator/Pagination/sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  136 => 39,  130 => 36,  127 => 35,  125 => 34,  122 => 33,  116 => 30,  113 => 29,  111 => 28,  108 => 27,  102 => 26,  96 => 24,  88 => 21,  85 => 20,  82 => 19,  78 => 18,  75 => 17,  69 => 14,  66 => 13,  64 => 12,  61 => 11,  55 => 8,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# default Sliding pagination control implementation #}
<div class=\"row\">
    <div class=\"col-md-12\">
        {% if pageCount > 1 %}
            <div class=\"pagination\">
                {% if first is defined and current != first %}
                    <span class=\"first paginate_button page-item page-link\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">&lt;&lt;</a>
            </span>
                {% endif %}

                {% if previous is defined %}
                    <span class=\"paginate_button page-item previous page-link\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
            </span>
                {% endif %}

                {% for page in pagesInRange %}
                    {% if page != current %}
                        <span class=\"page paginate_button page-item page-link\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                </span>
                    {% else %}
                        <span class=\"current paginate_button page-item page-link\">{{ page }}</span>
                    {% endif %}
                {% endfor %}

                {% if next is defined %}
                    <span class=\"next paginate_button page-item page-link\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
            </span>
                {% endif %}

                {% if last is defined and current != last %}
                    <span class=\"last page-link\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">&gt;&gt;</a>
            </span>
                {% endif %}
            </div>
        {% endif %}

    </div>
</div>
", "bundles/KnpPaginator/Pagination/sliding.html.twig", "C:\\wamp64\\www\\my-project\\templates\\bundles\\knpPaginator\\Pagination\\sliding.html.twig");
    }
}
