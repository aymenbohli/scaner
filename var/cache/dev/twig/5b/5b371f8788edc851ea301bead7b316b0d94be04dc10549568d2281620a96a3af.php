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

/* etudiant/_form.html.twig */
class __TwigTemplate_d4ae17e326f40d2e6646eb13ceaa003109dc7dcda44b9b4fac24d2251d781b23 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/_form.html.twig"));

        // line 1
        echo "


";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
<div class=\"my-custom-class-for-errors\">
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", []), 'label', ["label_attr" => ["class" => ""], "label" => "Nom"]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "prenom", []), 'label', ["label_attr" => ["class" => "col-md-12"], "label" => "Prénom"]);
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "age", []), 'label', ["label_attr" => ["class" => ""], "label" => "Age"]);
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "age", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "sex", []), 'label', ["label_attr" => ["class" => ""], "label" => "Sex"]);
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "sex", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", []), 'label', ["label_attr" => ["class" => ""], "label" => "Email"]);
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "classes", []), 'label', ["label_attr" => ["class" => ""], "label" => "Classe"]);
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "classes", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
<button type=\"submit\" class=\"btn btn-primary mr-2\">";
        // line 32
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
<button class=\"btn btn-light\">Cancel</button>
";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  116 => 32,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  91 => 22,  87 => 21,  81 => 18,  77 => 17,  71 => 14,  67 => 13,  61 => 10,  57 => 9,  51 => 6,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


{{ form_start(form) }}
<div class=\"my-custom-class-for-errors\">
    {{ form_errors(form) }}
</div>
<div class=\"form-group\">
    {{ form_label(form.nom, 'Nom', {'label_attr': {'class': ''}}) }}
    {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    {{ form_label(form.prenom, 'Prénom', {'label_attr': {'class': 'col-md-12'}}) }}
    {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    {{ form_label(form.age, 'Age', {'label_attr': {'class': ''}}) }}
    {{ form_widget(form.age, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    {{ form_label(form.sex, 'Sex', {'label_attr': {'class': ''}}) }}
    {{ form_widget(form.sex, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    {{ form_label(form.email, 'Email', {'label_attr': {'class': ''}}) }}
    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\">
    {{ form_label(form.classes, 'Classe', {'label_attr': {'class': ''}}) }}
    {{ form_widget(form.classes, {'attr': {'class': 'form-control'}}) }}
</div>
<button type=\"submit\" class=\"btn btn-primary mr-2\">{{ button_label|default('Save') }}</button>
<button class=\"btn btn-light\">Cancel</button>
{{ form_end(form) }}
", "etudiant/_form.html.twig", "C:\\wamp64\\www\\my-project\\templates\\etudiant\\_form.html.twig");
    }
}
