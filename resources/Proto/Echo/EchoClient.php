<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\Echo;

/**
 */
class EchoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\Echo\Message $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Ping(\Proto\Echo\Message $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/app.Echo/Ping',
        $argument,
        ['\Proto\Echo\Message', 'decode'],
        $metadata, $options);
    }

}
