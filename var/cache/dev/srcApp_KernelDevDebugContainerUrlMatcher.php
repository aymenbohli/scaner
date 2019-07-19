<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
            '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
            '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/classes' => [[['_route' => 'classes_index', '_controller' => 'App\\Controller\\ClassesController::index'], null, ['GET' => 0], null, true, false, null]],
            '/classes/new' => [[['_route' => 'classes_new', '_controller' => 'App\\Controller\\ClassesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/cours' => [[['_route' => 'cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
            '/cours/new' => [[['_route' => 'cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/etudiant' => [[['_route' => 'etudiant_index', '_controller' => 'App\\Controller\\EtudiantController::index'], null, ['GET' => 0], null, true, false, null]],
            '/etudiant/new' => [[['_route' => 'etudiant_new', '_controller' => 'App\\Controller\\EtudiantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/product' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
            '/newproduct' => [[['_route' => 'newproduct', '_controller' => 'App\\Controller\\ProductController::newProduct'], null, null, null, false, false, null]],
            '/question' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, true, false, null]],
            '/question/new' => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
            '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
            '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/c(?'
                        .'|ategory/([^/]++)(?'
                            .'|(*:193)'
                            .'|/edit(*:206)'
                            .'|(*:214)'
                        .')'
                        .'|lasses/([^/]++)(?'
                            .'|(*:241)'
                            .'|/edit(*:254)'
                            .'|(*:262)'
                        .')'
                        .'|ours/([^/]++)(?'
                            .'|(*:287)'
                            .'|/edit(*:300)'
                            .'|(*:308)'
                        .')'
                    .')'
                    .'|/etudiant/([^/]++)(?'
                        .'|(*:339)'
                        .'|/edit(*:352)'
                        .'|(*:360)'
                    .')'
                    .'|/question/([^/]++)(?'
                        .'|(*:390)'
                        .'|/edit(*:403)'
                        .'|(*:411)'
                    .')'
                    .'|/user/([^/]++)(?'
                        .'|(*:437)'
                        .'|/edit(*:450)'
                        .'|(*:458)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            193 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            206 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            214 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            241 => [[['_route' => 'classes_show', '_controller' => 'App\\Controller\\ClassesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            254 => [[['_route' => 'classes_edit', '_controller' => 'App\\Controller\\ClassesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            262 => [[['_route' => 'classes_delete', '_controller' => 'App\\Controller\\ClassesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            287 => [[['_route' => 'cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            300 => [[['_route' => 'cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            308 => [[['_route' => 'cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            339 => [[['_route' => 'etudiant_show', '_controller' => 'App\\Controller\\EtudiantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            352 => [[['_route' => 'etudiant_edit', '_controller' => 'App\\Controller\\EtudiantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            360 => [[['_route' => 'etudiant_delete', '_controller' => 'App\\Controller\\EtudiantController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            390 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            403 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            411 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            437 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            450 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            458 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
