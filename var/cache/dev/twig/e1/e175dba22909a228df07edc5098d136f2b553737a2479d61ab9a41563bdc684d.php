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
class __TwigTemplate_c4851c626d4871168c3185f337f31e6939a9c804fe9fb4e10e887304172f649e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!-- Mirrored from www.urbanui.com/hiliteui/template/demo/vertical-icon-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2019 16:45:40 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Login Admin</title>
    <!-- base:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendors/flag-icon-css/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/favicon.png"), "html", null, true);
        echo "\"/>
</head>
<body class=\"sidebar-icon-only\">
<div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth px-0\">
            <div class=\"row w-100 mx-0\">
                <div class=\"col-lg-4 mx-auto\">
                    <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
                        <div class=\"brand-logo\">
                            <img src=\"http://www.urbanui.com/hiliteui/template/images/logo.svg\" alt=\"logo\">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class=\"font-weight-light\">Sign in to continue.</h6>
                            <form method=\"post\">
                                ";
        // line 34
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "messageData", []), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 37
        echo "
                                <div class=\"form-group\">

                                    <input type=\"email\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\"
                                           class=\"form-control form-control-lg\" placeholder=\"Email\" required autofocus>
                                </div>
                                <div class=\"form-group\">

                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\"
                                       placeholder=\"Password\" required>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                <div class=\"mt-3\">
                                    <button type=\"submit\"
                                            class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">
                                        SIGN IN
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- inject:js -->
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/template.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
</body>
<!-- Mirrored from www.urbanui.com/hiliteui/template/demo/vertical-icon-menu/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2019 16:49:09 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 74,  155 => 73,  151 => 72,  147 => 71,  143 => 70,  137 => 67,  116 => 49,  104 => 40,  99 => 37,  93 => 35,  91 => 34,  73 => 19,  68 => 17,  60 => 12,  56 => 11,  52 => 10,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<!-- Mirrored from www.urbanui.com/hiliteui/template/demo/vertical-icon-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2019 16:45:40 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Login Admin</title>
    <!-- base:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/vendors/css/vendor.bundle.base.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css') }}\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('admin/css/vertical-layout-light/style.css') }}\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"{{ asset('admin/images/favicon.png') }}\"/>
</head>
<body class=\"sidebar-icon-only\">
<div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
        <div class=\"content-wrapper d-flex align-items-center auth px-0\">
            <div class=\"row w-100 mx-0\">
                <div class=\"col-lg-4 mx-auto\">
                    <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
                        <div class=\"brand-logo\">
                            <img src=\"http://www.urbanui.com/hiliteui/template/images/logo.svg\" alt=\"logo\">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class=\"font-weight-light\">Sign in to continue.</h6>
                            <form method=\"post\">
                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}

                                <div class=\"form-group\">

                                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\"
                                           class=\"form-control form-control-lg\" placeholder=\"Email\" required autofocus>
                                </div>
                                <div class=\"form-group\">

                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg\"
                                       placeholder=\"Password\" required>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"{{ csrf_token('authenticate') }}\">
                                <div class=\"mt-3\">
                                    <button type=\"submit\"
                                            class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">
                                        SIGN IN
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<script src=\"{{ asset('admin/vendors/js/vendor.bundle.base.js') }}\"></script>
<!-- endinject -->
<!-- inject:js -->
<script src=\"{{ asset('admin/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('admin/js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset('admin/js/template.js') }}\"></script>
<script src=\"{{ asset('admin/js/settings.js') }}\"></script>
<script src=\"{{ asset('admin/js/todolist.js') }}\"></script>
<!-- endinject -->
</body>
<!-- Mirrored from www.urbanui.com/hiliteui/template/demo/vertical-icon-menu/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2019 16:49:09 GMT -->
</html>
", "security/login.html.twig", "C:\\wamp64\\www\\my-project\\templates\\security\\login.html.twig");
    }
}
