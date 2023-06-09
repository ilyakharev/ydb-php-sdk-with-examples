<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_coordination.proto

namespace Ydb\Coordination\SessionResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Used to report a successful graceful termination of the session
 *
 * Generated from protobuf message <code>Ydb.Coordination.SessionResponse.SessionStopped</code>
 */
class SessionStopped extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 session_id = 1;</code>
     */
    protected $session_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $session_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 session_id = 1;</code>
     * @return int|string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Generated from protobuf field <code>uint64 session_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkUint64($var);
        $this->session_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionStopped::class, \Ydb\Coordination\SessionResponse_SessionStopped::class);

