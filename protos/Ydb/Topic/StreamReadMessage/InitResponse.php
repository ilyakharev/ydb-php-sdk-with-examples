<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamReadMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Handshake response.
 *
 * Generated from protobuf message <code>Ydb.Topic.StreamReadMessage.InitResponse</code>
 */
class InitResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Read session identifier for debug purposes.
     *
     * Generated from protobuf field <code>string session_id = 1;</code>
     */
    protected $session_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_id
     *           Read session identifier for debug purposes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Read session identifier for debug purposes.
     *
     * Generated from protobuf field <code>string session_id = 1;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Read session identifier for debug purposes.
     *
     * Generated from protobuf field <code>string session_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InitResponse::class, \Ydb\Topic\StreamReadMessage_InitResponse::class);

