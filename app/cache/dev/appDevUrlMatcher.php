<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/6bc0cc2')) {
            // _assetic_6bc0cc2
            if ($pathinfo === '/css/6bc0cc2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2',);
            }

            if (0 === strpos($pathinfo, '/css/6bc0cc2_')) {
                // _assetic_6bc0cc2_0
                if ($pathinfo === '/css/6bc0cc2_base_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_0',);
                }

                // _assetic_6bc0cc2_1
                if ($pathinfo === '/css/6bc0cc2_layout_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_1',);
                }

                // _assetic_6bc0cc2_2
                if ($pathinfo === '/css/6bc0cc2_grid_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_2',);
                }

                // _assetic_6bc0cc2_3
                if ($pathinfo === '/css/6bc0cc2_elements_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_3',);
                }

                // _assetic_6bc0cc2_4
                if ($pathinfo === '/css/6bc0cc2_yellow_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_4',);
                }

                // _assetic_6bc0cc2_5
                if ($pathinfo === '/css/6bc0cc2_settings_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_5',);
                }

                // _assetic_6bc0cc2_6
                if ($pathinfo === '/css/6bc0cc2_custom_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_6',);
                }

                // _assetic_6bc0cc2_7
                if ($pathinfo === '/css/6bc0cc2_jquery.bxslider_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_7',);
                }

                // _assetic_6bc0cc2_8
                if ($pathinfo === '/css/6bc0cc2_magnific-popup_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_8',);
                }

                // _assetic_6bc0cc2_9
                if ($pathinfo === '/css/6bc0cc2_animate.min_10.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_9',);
                }

                // _assetic_6bc0cc2_10
                if ($pathinfo === '/css/6bc0cc2_YTPlayer_11.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_10',);
                }

                // _assetic_6bc0cc2_11
                if ($pathinfo === '/css/6bc0cc2_wide_12.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_11',);
                }

                // _assetic_6bc0cc2_12
                if ($pathinfo === '/css/6bc0cc2_switcher_13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6bc0cc2',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_6bc0cc2_12',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/6382cb6')) {
            // _assetic_6382cb6
            if ($pathinfo === '/js/6382cb6.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6382cb6',);
            }

            if (0 === strpos($pathinfo, '/js/6382cb6_')) {
                if (0 === strpos($pathinfo, '/js/6382cb6_jquery')) {
                    // _assetic_6382cb6_0
                    if ($pathinfo === '/js/6382cb6_jquery-2.1.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6382cb6_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/6382cb6_jquery.')) {
                        // _assetic_6382cb6_1
                        if ($pathinfo === '/js/6382cb6_jquery.viewport_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_6382cb6_1',);
                        }

                        // _assetic_6382cb6_2
                        if ($pathinfo === '/js/6382cb6_jquery.easing.1.3_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_6382cb6_2',);
                        }

                        // _assetic_6382cb6_3
                        if ($pathinfo === '/js/6382cb6_jquery.simpleplaceholder_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_6382cb6_3',);
                        }

                        // _assetic_6382cb6_4
                        if ($pathinfo === '/js/6382cb6_jquery.fitvids_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_6382cb6_4',);
                        }

                    }

                }

                // _assetic_6382cb6_5
                if ($pathinfo === '/js/6382cb6_animate_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_6382cb6_5',);
                }

                // _assetic_6382cb6_6
                if ($pathinfo === '/js/6382cb6_hoverIntent_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_6382cb6_6',);
                }

                // _assetic_6382cb6_7
                if ($pathinfo === '/js/6382cb6_superfish_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_6382cb6_7',);
                }

                if (0 === strpos($pathinfo, '/js/6382cb6_jquery.')) {
                    if (0 === strpos($pathinfo, '/js/6382cb6_jquery.themepunch.')) {
                        // _assetic_6382cb6_8
                        if ($pathinfo === '/js/6382cb6_jquery.themepunch.tools.min_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_6382cb6_8',);
                        }

                        // _assetic_6382cb6_9
                        if ($pathinfo === '/js/6382cb6_jquery.themepunch.revolution.min_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_6382cb6_9',);
                        }

                    }

                    // _assetic_6382cb6_10
                    if ($pathinfo === '/js/6382cb6_jquery.bxslider.min_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_6382cb6_10',);
                    }

                    // _assetic_6382cb6_11
                    if ($pathinfo === '/js/6382cb6_jquery.magnific-popup.min_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_6382cb6_11',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/6382cb6_i')) {
                    // _assetic_6382cb6_12
                    if ($pathinfo === '/js/6382cb6_imagesloaded.pkgd.min_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_6382cb6_12',);
                    }

                    // _assetic_6382cb6_13
                    if ($pathinfo === '/js/6382cb6_isotope.pkgd.min_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_6382cb6_13',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/6382cb6_j')) {
                    if (0 === strpos($pathinfo, '/js/6382cb6_jquery.')) {
                        // _assetic_6382cb6_14
                        if ($pathinfo === '/js/6382cb6_jquery.parallax.min_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_6382cb6_14',);
                        }

                        if (0 === strpos($pathinfo, '/js/6382cb6_jquery.easy')) {
                            // _assetic_6382cb6_15
                            if ($pathinfo === '/js/6382cb6_jquery.easypiechart.min_16.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_6382cb6_15',);
                            }

                            // _assetic_6382cb6_16
                            if ($pathinfo === '/js/6382cb6_jquery.easytabs.min_17.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_6382cb6_16',);
                            }

                        }

                        // _assetic_6382cb6_17
                        if ($pathinfo === '/js/6382cb6_jquery.validate.min_18.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_6382cb6_17',);
                        }

                        // _assetic_6382cb6_18
                        if ($pathinfo === '/js/6382cb6_jquery.form.min_19.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_6382cb6_18',);
                        }

                    }

                    // _assetic_6382cb6_19
                    if ($pathinfo === '/js/6382cb6_js?sensor=false_20.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_6382cb6_19',);
                    }

                    // _assetic_6382cb6_20
                    if ($pathinfo === '/js/6382cb6_jquery.gmap.min_21.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_6382cb6_20',);
                    }

                }

                // _assetic_6382cb6_21
                if ($pathinfo === '/js/6382cb6_twitterfetcher_22.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_6382cb6_21',);
                }

                // _assetic_6382cb6_22
                if ($pathinfo === '/js/6382cb6_plugins_23.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_6382cb6_22',);
                }

                // _assetic_6382cb6_23
                if ($pathinfo === '/js/6382cb6_scripts_24.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_6382cb6_23',);
                }

                // _assetic_6382cb6_24
                if ($pathinfo === '/js/6382cb6_jquery_cookie_25.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_6382cb6_24',);
                }

                // _assetic_6382cb6_25
                if ($pathinfo === '/js/6382cb6_switcher_26.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6382cb6',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_6382cb6_25',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // sas_front_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sas_front_homepage')), array (  '_controller' => 'SAS\\FrontBundle\\Controller\\FrontController::indexAction',));
        }

        // sas_front_homepage2
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sas_front_homepage2');
            }

            return array (  '_controller' => 'SAS\\FrontBundle\\Controller\\FrontController::indexAction',  '_route' => 'sas_front_homepage2',);
        }

        // sas_front_about
        if (preg_match('#^/(?P<_locale>[^/]++)/about$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sas_front_about')), array (  '_controller' => 'SAS\\FrontBundle\\Controller\\FrontController::aboutAction',));
        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
