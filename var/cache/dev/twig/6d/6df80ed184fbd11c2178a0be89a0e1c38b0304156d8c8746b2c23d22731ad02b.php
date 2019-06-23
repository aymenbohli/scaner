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

/* category_cours/index.html.twig */
class __TwigTemplate_50275da71a29be79a7b1b9cb5dad4dac8967d17856b951c23ab9e4c85a896f3f extends \Twig\Template
{
    private $source;

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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category_cours/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category_cours/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category_cours/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CategoryCours index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"row space20\">
        <div class=\"col-12\">
            <a CLASS=\"btn btn-success pull-left\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_cours_new");
        echo "\">Create new</a>
        </div>
    </div>
    <div class=\"row space20\">
        <div class=\"col-12\">
            <div class=\"table-responsive\">

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category_cours"]) || array_key_exists("category_cours", $context) ? $context["category_cours"] : (function () { throw new RuntimeError('Variable "category_cours" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category_cour"]) {
            // line 27
            echo "                        <tr>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_cour"], "id", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_cour"], "name", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_cour"], "photo", []), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_cours_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category_cour"], "id", [])]), "html", null, true);
            echo "\">show</a>
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_cours_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category_cour"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "                        <tr>
                            <td colspan=\"4\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"row space20\">
        <div class=\"col-12\">
            ";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["category_cours"]) || array_key_exists("category_cours", $context) ? $context["category_cours"] : (function () { throw new RuntimeError('Variable "category_cours" does not exist.', 49, $this->source); })()), null, [], ["position" => "centered", "size" => "large", "rounded" => true]);
        // line 53
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category_cours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 53,  162 => 49,  152 => 41,  143 => 37,  134 => 33,  130 => 32,  125 => 30,  121 => 29,  117 => 28,  114 => 27,  109 => 26,  89 => 9,  84 => 6,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CategoryCours index{% endblock %}

{% block body %}

    <div class=\"row space20\">
        <div class=\"col-12\">
            <a CLASS=\"btn btn-success pull-left\" href=\"{{ path('category_cours_new') }}\">Create new</a>
        </div>
    </div>
    <div class=\"row space20\">
        <div class=\"col-12\">
            <div class=\"table-responsive\">

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for category_cour in category_cours %}
                        <tr>
                            <td>{{ category_cour.id }}</td>
                            <td>{{ category_cour.name }}</td>
                            <td>{{ category_cour.photo }}</td>
                            <td>
                                <a href=\"{{ path('category_cours_show', {'id': category_cour.id}) }}\">show</a>
                                <a href=\"{{ path('category_cours_edit', {'id': category_cour.id}) }}\">edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"row space20\">
        <div class=\"col-12\">
            {{ knp_pagination_render(category_cours, null, {}, {
                'position': 'centered',
                'size': 'large',
                'rounded': true,
            }) }}
        </div>
    </div>
{% endblock %}
", "category_cours/index.html.twig", "C:\\wamp64\\www\\my-project\\templates\\category_cours\\index.html.twig");
    }
}
