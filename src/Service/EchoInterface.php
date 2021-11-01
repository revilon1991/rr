<?php

namespace App\Service;

use Proto\Echo\Message;
use Spiral\RoadRunner\GRPC\ContextInterface;
use Spiral\RoadRunner\GRPC\ServiceInterface;

interface EchoInterface extends ServiceInterface
{
    public const NAME = 'app.Echo';

    public function Ping(ContextInterface $ctx, Message $in): Message;
}
