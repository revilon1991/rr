<?php

use App\Service\EchoInterface;
use App\Service\EchoService;
use Spiral\RoadRunner\GRPC\Server;
use Spiral\RoadRunner\Worker;

require_once __DIR__ . '/../vendor/autoload.php';

$server = new Server(null, [
    'debug' => false,
]);

$server->registerService(EchoInterface::class, new EchoService());

$server->serve(Worker::create());
