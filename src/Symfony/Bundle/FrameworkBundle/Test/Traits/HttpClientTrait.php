<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Test\Traits;

use Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector;

trait HttpClientTrait
{
    public static function getHttpClientDataCollector(): HttpClientDataCollector
    {
        $container = static::getContainer();
        if ($container->has('data_collector.http_client')) {
            return $container->get('data_collector.http_client');
        }

        static::fail('"http_client" in config/packages/framework.yaml must be setup to make http client assertions.');
    }
}
