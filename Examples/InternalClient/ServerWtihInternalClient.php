<?php
/**
 * This is an example of how to use the InternalClientTransportProvider
 *
 * For more information go to:
 * http://voryx.net/creating-internal-client-thruway/
 */

require __DIR__.'/../../vendor/autoload.php';
require 'InternalClient.php';

use Thruway\Peer\Router;
use Thruway\Transport\RatchetTransportProvider;

$router = new Router();

$transportProvider = new RatchetTransportProvider("127.0.0.1", 9090);

$router->addTransportProvider($transportProvider);

$internalTransportProvider = new Thruway\Transport\InternalClientTransportProvider(new \InternalClient());
$router->addTransportProvider($internalTransportProvider);

$router->start();