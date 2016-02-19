<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'sas_front_homepage' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'SAS\\FrontBundle\\Controller\\FrontController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sas_front_homepage2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SAS\\FrontBundle\\Controller\\FrontController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sas_front_about' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'SAS\\FrontBundle\\Controller\\FrontController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liip_imagine_filter_runtime' => array (  0 =>   array (    0 => 'filter',    1 => 'hash',    2 => 'path',  ),  1 =>   array (    '_controller' => 'liip_imagine.controller:filterRuntimeAction',  ),  2 =>   array (    'filter' => '[A-z0-9_\\-]*',    'path' => '.+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'hash',    ),    2 =>     array (      0 => 'text',      1 => '/rc',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[A-z0-9_\\-]*',      3 => 'filter',    ),    4 =>     array (      0 => 'text',      1 => '/media/cache/resolve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liip_imagine_filter' => array (  0 =>   array (    0 => 'filter',    1 => 'path',  ),  1 =>   array (    '_controller' => 'liip_imagine.controller:filterAction',  ),  2 =>   array (    'filter' => '[A-z0-9_\\-]*',    'path' => '.+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[A-z0-9_\\-]*',      3 => 'filter',    ),    2 =>     array (      0 => 'text',      1 => '/media/cache/resolve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
