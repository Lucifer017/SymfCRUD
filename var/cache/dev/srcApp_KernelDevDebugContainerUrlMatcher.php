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
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'text_list', '_controller' => 'App\\Controller\\TextController::index'), null, null, null, false, false, null)),
            '/text/new' => array(array(array('_route' => 'new_text', '_controller' => 'App\\Controller\\TextController::new'), null, null, null, false, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/text/(?'
                        .'|edit/([^/]++)(*:29)'
                        .'|([^/]++)(*:44)'
                        .'|delete/([^/]++)(*:66)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:105)'
                        .'|wdt/([^/]++)(*:125)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:171)'
                                .'|router(*:185)'
                                .'|exception(?'
                                    .'|(*:205)'
                                    .'|\\.css(*:218)'
                                .')'
                            .')'
                            .'|(*:228)'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            29 => array(array(array('_route' => 'edit_text', '_controller' => 'App\\Controller\\TextController::edit'), array('id'), null, null, false, true, null)),
            44 => array(array(array('_route' => 'text_show', '_controller' => 'App\\Controller\\TextController::show'), array('id'), null, null, false, true, null)),
            66 => array(array(array('_route' => 'app_text_delete', '_controller' => 'App\\Controller\\TextController::delete'), array('id'), null, null, false, true, null)),
            105 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            125 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            171 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            185 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            205 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            218 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            228 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
        );
    }
}
