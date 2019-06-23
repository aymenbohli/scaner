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

/* base.html.twig */
class __TwigTemplate_b0539d82adb803e6b74203733b55e72045355a5744d2eb21e017cab1d76be5d0 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- base:css -->
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/fonts/materialdesignicons-webfont.woff\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendors/flag-icon-css/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/favicon.png"), "html", null, true);
        echo "\"/>
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "</head>
<body class=\"sidebar-icon-only\">
<div class=\"container-scroller\">
    <!-- partial:../../partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-left navbar-brand-wrapper d-flex align-items-center justify-content-between\">
            <a class=\"navbar-brand brand-logo\" href=\"../../index.html\"><img
                        src=\"http://www.urbanui.com/hiliteui/template/images/logo.svg\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img
                        src=\"http://www.urbanui.com/hiliteui/template/images/logo-mini.svg\" alt=\"logo\"/></a>
            <button class=\"navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                <span class=\"mdi mdi-menu\"></span>
            </button>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown align-items-center d-lg-flex d-none\">
                    <a class=\"dropdown-toggle btn btn-outline-secondary btn-fw\" href=\"#\" data-toggle=\"dropdown\"
                       id=\"appDropdown\">
                        <span class=\"nav-profile-name\">Apps</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"appDropdown\">
                        <a class=\"dropdown-item\">
                            <i class=\"mdi mdi-settings text-primary\"></i>
                            Settings
                        </a>
                        <a class=\"dropdown-item\">
                            <i class=\"mdi mdi-logout text-primary\"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
                <li class=\"nav-item nav-search d-none d-lg-flex\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                <i class=\"mdi mdi-magnify\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\" aria-label=\"search\"
                               aria-describedby=\"search\">
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\"
                       id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"mdi mdi-bell-outline mx-0\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\"
                         aria-labelledby=\"notificationDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-success\">
                                    <i class=\"mdi mdi-information mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-warning\">
                                    <i class=\"mdi mdi-settings mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-info\">
                                    <i class=\"mdi mdi-account-box mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\"
                       id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"mdi mdi-email-outline mx-0\"></i>
                        <p class=\"notification-ripple notification-ripple-bg\">
                            <span class=\"ripple notification-ripple-bg\"></span>
                            <span class=\"ripple notification-ripple-bg\"></span>
                            <span class=\"ripple notification-ripple-bg\"></span>
                        </p>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\"
                         aria-labelledby=\"messageDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/faces/face4.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow\">
                                <h6 class=\"preview-subject ellipsis font-weight-normal\">David Grey
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow\">
                                <h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow\">
                                <h6 class=\"preview-subject ellipsis font-weight-normal\"> Johnson
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-user-icon\">
                    <a class=\"nav-link\" href=\"#\">
                        <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/faces/face28.jpg"), "html", null, true);
        echo "\" alt=\"profile\"/>
                    </a>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\"
                    data-toggle=\"offcanvas\">
                <span class=\"mdi mdi-menu\"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item nav-profile\">
                    <div class=\"nav-link d-flex\">
                        <div class=\"profile-image\">
                            <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/images/faces/face28.png"), "html", null, true);
        echo "\" alt=\"image\">
                        </div>
                        <div class=\"profile-name\">
                            <p class=\"name\">
                                Edwin Harring
                            </p>
                            <p class=\"designation\">
                                Manager
                            </p>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"mdi mdi-shield-check menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_index");
        echo "\">
                        <i class=\"mdi mdi-comment-processing-outline menu-icon\"></i>
                        <span class=\"menu-title\">Question Management</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">
                        <i class=\"mdi mdi-group menu-icon\"></i>
                        <span class=\"menu-title\">Category Management</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                ";
        // line 223
        $this->displayBlock('body', $context, $blocks);
        // line 224
        echo "            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <div class=\"footer-wrapper\">
                <footer class=\"footer\">
                    <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                        <span class=\"text-center text-sm-left d-block d-sm-inline-block\">Copyright &copy; 2019. All rights reserved. </span>
                        <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Designed by: <a
                                    href=\"\" target=\"_blank\">Aymen</a>. </span>
                    </div>
                </footer>
            </div>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>


";
        // line 244
        $this->displayBlock('javascripts', $context, $blocks);
        // line 245
        echo "<!-- container-scroller -->
<!-- base:js -->
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- inject:js -->
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/template.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 223
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 244
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 244,  413 => 223,  396 => 22,  379 => 7,  363 => 254,  359 => 253,  355 => 252,  351 => 251,  347 => 250,  341 => 247,  337 => 245,  335 => 244,  313 => 224,  311 => 223,  298 => 213,  289 => 207,  267 => 188,  246 => 170,  229 => 156,  214 => 144,  199 => 132,  88 => 23,  86 => 22,  82 => 21,  77 => 19,  69 => 14,  65 => 13,  61 => 12,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}{% endblock %}</title>
    <!-- base:css -->
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/fonts/materialdesignicons-webfont.woff\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css\" />
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
    {% block stylesheets %}{% endblock %}
</head>
<body class=\"sidebar-icon-only\">
<div class=\"container-scroller\">
    <!-- partial:../../partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-left navbar-brand-wrapper d-flex align-items-center justify-content-between\">
            <a class=\"navbar-brand brand-logo\" href=\"../../index.html\"><img
                        src=\"http://www.urbanui.com/hiliteui/template/images/logo.svg\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img
                        src=\"http://www.urbanui.com/hiliteui/template/images/logo-mini.svg\" alt=\"logo\"/></a>
            <button class=\"navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                <span class=\"mdi mdi-menu\"></span>
            </button>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown align-items-center d-lg-flex d-none\">
                    <a class=\"dropdown-toggle btn btn-outline-secondary btn-fw\" href=\"#\" data-toggle=\"dropdown\"
                       id=\"appDropdown\">
                        <span class=\"nav-profile-name\">Apps</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"appDropdown\">
                        <a class=\"dropdown-item\">
                            <i class=\"mdi mdi-settings text-primary\"></i>
                            Settings
                        </a>
                        <a class=\"dropdown-item\">
                            <i class=\"mdi mdi-logout text-primary\"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
                <li class=\"nav-item nav-search d-none d-lg-flex\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                <i class=\"mdi mdi-magnify\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\" aria-label=\"search\"
                               aria-describedby=\"search\">
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\"
                       id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"mdi mdi-bell-outline mx-0\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\"
                         aria-labelledby=\"notificationDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-success\">
                                    <i class=\"mdi mdi-information mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-warning\">
                                    <i class=\"mdi mdi-settings mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <div class=\"preview-icon bg-info\">
                                    <i class=\"mdi mdi-account-box mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"preview-item-content\">
                                <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\"
                       id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"mdi mdi-email-outline mx-0\"></i>
                        <p class=\"notification-ripple notification-ripple-bg\">
                            <span class=\"ripple notification-ripple-bg\"></span>
                            <span class=\"ripple notification-ripple-bg\"></span>
                            <span class=\"ripple notification-ripple-bg\"></span>
                        </p>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\"
                         aria-labelledby=\"messageDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"{{ asset('admin/images/faces/face4.jpg') }}\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow\">
                                <h6 class=\"preview-subject ellipsis font-weight-normal\">David Grey
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"{{ asset('admin/images/faces/face2.jpg') }}\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow\">
                                <h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item preview-item\">
                            <div class=\"preview-thumbnail\">
                                <img src=\"{{ asset('admin/images/faces/face3.jpg') }}\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"preview-item-content flex-grow\">
                                <h6 class=\"preview-subject ellipsis font-weight-normal\"> Johnson
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-user-icon\">
                    <a class=\"nav-link\" href=\"#\">
                        <img src=\"{{ asset('admin/images/faces/face28.jpg') }}\" alt=\"profile\"/>
                    </a>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\"
                    data-toggle=\"offcanvas\">
                <span class=\"mdi mdi-menu\"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item nav-profile\">
                    <div class=\"nav-link d-flex\">
                        <div class=\"profile-image\">
                            <img src=\"{{ asset('admin/images/faces/face28.png') }}\" alt=\"image\">
                        </div>
                        <div class=\"profile-name\">
                            <p class=\"name\">
                                Edwin Harring
                            </p>
                            <p class=\"designation\">
                                Manager
                            </p>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"\">
                        <i class=\"mdi mdi-shield-check menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('question_index') }}\">
                        <i class=\"mdi mdi-comment-processing-outline menu-icon\"></i>
                        <span class=\"menu-title\">Question Management</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('category_index') }}\">
                        <i class=\"mdi mdi-group menu-icon\"></i>
                        <span class=\"menu-title\">Category Management</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                {% block body %}{% endblock %}
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <div class=\"footer-wrapper\">
                <footer class=\"footer\">
                    <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                        <span class=\"text-center text-sm-left d-block d-sm-inline-block\">Copyright &copy; 2019. All rights reserved. </span>
                        <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Designed by: <a
                                    href=\"\" target=\"_blank\">Aymen</a>. </span>
                    </div>
                </footer>
            </div>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>


{% block javascripts %}{% endblock %}
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
</html>

", "base.html.twig", "C:\\wamp64\\www\\my-project\\templates\\base.html.twig");
    }
}
