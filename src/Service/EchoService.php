<?php

namespace App\Service;

use Proto\Echo\Message;
use Spiral\RoadRunner\GRPC\ContextInterface;
use Spiral\RoadRunner\GRPC\Exception\InvokeException;

class EchoService implements EchoInterface
{
    /**
     * @throws InvokeException
     */
    public function Ping(ContextInterface $ctx, Message $in): Message
    {
        $out = new Message();

        return $out->setMsg($in->getMsg());
    }
}
