<?php

declare(strict_types=1);

/* 
 * @package   Gest Book Bundle
 * @author    Diganta Mondal
 * @license   GNU/LGPL
 */

namespace Diganta\GestbookBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Diganta\GestbookBundle\GestbookBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(GestbookBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}