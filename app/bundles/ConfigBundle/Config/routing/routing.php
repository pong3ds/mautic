<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('mautic_config_index', new Route('/config',
    array(
        '_controller' => 'MauticConfigBundle:Config:index'
    )
));

$collection->add('mautic_config_action', new Route('/config/{objectAction}',
    array(
        '_controller' => 'MauticConfigBundle:Config:execute'
    )
));

return $collection;
