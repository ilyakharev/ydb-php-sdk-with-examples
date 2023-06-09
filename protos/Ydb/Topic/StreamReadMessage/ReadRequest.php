<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\StreamReadMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message that represents client readiness for receiving more data.
 *
 * Generated from protobuf message <code>Ydb.Topic.StreamReadMessage.ReadRequest</code>
 */
class ReadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Server and client each keep track of total bytes size of all ReadResponses.
     * When client is ready to receive N more bytes in responses (to increment possible total by N),
     * it sends a ReadRequest with bytes_size = N.
     * bytes_size value must be positive.
     * So in expression 'A = (sum of bytes_size in all ReadRequests) - (sum of bytes_size in all ReadResponses)'
     *   server will keep A (available size for responses) non-negative.
     * But there is an exception. If server receives ReadRequest, and the first message in response exceeds A -
     * then it will still be delivered, and A will become negative until enough additional ReadRequests.
     * Example:
     * 1) Let client have 200 bytes buffer. It sends ReadRequest with bytes_size = 200;
     * 2) Server may return one ReadResponse with bytes_size = 70 and than another 80 bytes response;
     *    now client buffer has 50 free bytes, server is free to send up to 50 bytes in responses.
     * 3) Client processes 100 bytes from buffer, now buffer free space is 150 bytes,
     *    so client sends ReadRequest with bytes_size = 100;
     * 4) Server is free to send up to 50 + 100 = 150 bytes. But the next read message is too big,
     *    and it sends 160 bytes ReadResponse.
     * 5) Let's assume client somehow processes it, and its 200 bytes buffer is free again.
     *    It shoud account for excess 10 bytes and send ReadRequest with bytes_size = 210.
     *
     * Generated from protobuf field <code>int64 bytes_size = 1;</code>
     */
    protected $bytes_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $bytes_size
     *           Server and client each keep track of total bytes size of all ReadResponses.
     *           When client is ready to receive N more bytes in responses (to increment possible total by N),
     *           it sends a ReadRequest with bytes_size = N.
     *           bytes_size value must be positive.
     *           So in expression 'A = (sum of bytes_size in all ReadRequests) - (sum of bytes_size in all ReadResponses)'
     *             server will keep A (available size for responses) non-negative.
     *           But there is an exception. If server receives ReadRequest, and the first message in response exceeds A -
     *           then it will still be delivered, and A will become negative until enough additional ReadRequests.
     *           Example:
     *           1) Let client have 200 bytes buffer. It sends ReadRequest with bytes_size = 200;
     *           2) Server may return one ReadResponse with bytes_size = 70 and than another 80 bytes response;
     *              now client buffer has 50 free bytes, server is free to send up to 50 bytes in responses.
     *           3) Client processes 100 bytes from buffer, now buffer free space is 150 bytes,
     *              so client sends ReadRequest with bytes_size = 100;
     *           4) Server is free to send up to 50 + 100 = 150 bytes. But the next read message is too big,
     *              and it sends 160 bytes ReadResponse.
     *           5) Let's assume client somehow processes it, and its 200 bytes buffer is free again.
     *              It shoud account for excess 10 bytes and send ReadRequest with bytes_size = 210.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Server and client each keep track of total bytes size of all ReadResponses.
     * When client is ready to receive N more bytes in responses (to increment possible total by N),
     * it sends a ReadRequest with bytes_size = N.
     * bytes_size value must be positive.
     * So in expression 'A = (sum of bytes_size in all ReadRequests) - (sum of bytes_size in all ReadResponses)'
     *   server will keep A (available size for responses) non-negative.
     * But there is an exception. If server receives ReadRequest, and the first message in response exceeds A -
     * then it will still be delivered, and A will become negative until enough additional ReadRequests.
     * Example:
     * 1) Let client have 200 bytes buffer. It sends ReadRequest with bytes_size = 200;
     * 2) Server may return one ReadResponse with bytes_size = 70 and than another 80 bytes response;
     *    now client buffer has 50 free bytes, server is free to send up to 50 bytes in responses.
     * 3) Client processes 100 bytes from buffer, now buffer free space is 150 bytes,
     *    so client sends ReadRequest with bytes_size = 100;
     * 4) Server is free to send up to 50 + 100 = 150 bytes. But the next read message is too big,
     *    and it sends 160 bytes ReadResponse.
     * 5) Let's assume client somehow processes it, and its 200 bytes buffer is free again.
     *    It shoud account for excess 10 bytes and send ReadRequest with bytes_size = 210.
     *
     * Generated from protobuf field <code>int64 bytes_size = 1;</code>
     * @return int|string
     */
    public function getBytesSize()
    {
        return $this->bytes_size;
    }

    /**
     * Server and client each keep track of total bytes size of all ReadResponses.
     * When client is ready to receive N more bytes in responses (to increment possible total by N),
     * it sends a ReadRequest with bytes_size = N.
     * bytes_size value must be positive.
     * So in expression 'A = (sum of bytes_size in all ReadRequests) - (sum of bytes_size in all ReadResponses)'
     *   server will keep A (available size for responses) non-negative.
     * But there is an exception. If server receives ReadRequest, and the first message in response exceeds A -
     * then it will still be delivered, and A will become negative until enough additional ReadRequests.
     * Example:
     * 1) Let client have 200 bytes buffer. It sends ReadRequest with bytes_size = 200;
     * 2) Server may return one ReadResponse with bytes_size = 70 and than another 80 bytes response;
     *    now client buffer has 50 free bytes, server is free to send up to 50 bytes in responses.
     * 3) Client processes 100 bytes from buffer, now buffer free space is 150 bytes,
     *    so client sends ReadRequest with bytes_size = 100;
     * 4) Server is free to send up to 50 + 100 = 150 bytes. But the next read message is too big,
     *    and it sends 160 bytes ReadResponse.
     * 5) Let's assume client somehow processes it, and its 200 bytes buffer is free again.
     *    It shoud account for excess 10 bytes and send ReadRequest with bytes_size = 210.
     *
     * Generated from protobuf field <code>int64 bytes_size = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->bytes_size = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReadRequest::class, \Ydb\Topic\StreamReadMessage_ReadRequest::class);

