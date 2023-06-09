<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_import.proto

namespace Ydb\Import;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47; S3
 *
 * Generated from protobuf message <code>Ydb.Import.ImportFromS3Settings</code>
 */
class ImportFromS3Settings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string endpoint = 1 [(.Ydb.required) = true];</code>
     */
    protected $endpoint = '';
    /**
     * HTTPS if not specified
     *
     * Generated from protobuf field <code>.Ydb.Import.ImportFromS3Settings.Scheme scheme = 2;</code>
     */
    protected $scheme = 0;
    /**
     * Generated from protobuf field <code>string bucket = 3 [(.Ydb.required) = true];</code>
     */
    protected $bucket = '';
    /**
     * Generated from protobuf field <code>string access_key = 4 [(.Ydb.required) = true];</code>
     */
    protected $access_key = '';
    /**
     * Generated from protobuf field <code>string secret_key = 5 [(.Ydb.required) = true];</code>
     */
    protected $secret_key = '';
    /**
     * Generated from protobuf field <code>repeated .Ydb.Import.ImportFromS3Settings.Item items = 6 [(.Ydb.size) = {</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>string description = 7 [(.Ydb.length) = {</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>uint32 number_of_retries = 8;</code>
     */
    protected $number_of_retries = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *     @type int $scheme
     *           HTTPS if not specified
     *     @type string $bucket
     *     @type string $access_key
     *     @type string $secret_key
     *     @type array<\Ydb\Import\ImportFromS3Settings\Item>|\Google\Protobuf\Internal\RepeatedField $items
     *     @type string $description
     *     @type int $number_of_retries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbImport::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string endpoint = 1 [(.Ydb.required) = true];</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Generated from protobuf field <code>string endpoint = 1 [(.Ydb.required) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * HTTPS if not specified
     *
     * Generated from protobuf field <code>.Ydb.Import.ImportFromS3Settings.Scheme scheme = 2;</code>
     * @return int
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * HTTPS if not specified
     *
     * Generated from protobuf field <code>.Ydb.Import.ImportFromS3Settings.Scheme scheme = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setScheme($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Import\ImportFromS3Settings\Scheme::class);
        $this->scheme = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bucket = 3 [(.Ydb.required) = true];</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Generated from protobuf field <code>string bucket = 3 [(.Ydb.required) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string access_key = 4 [(.Ydb.required) = true];</code>
     * @return string
     */
    public function getAccessKey()
    {
        return $this->access_key;
    }

    /**
     * Generated from protobuf field <code>string access_key = 4 [(.Ydb.required) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setAccessKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string secret_key = 5 [(.Ydb.required) = true];</code>
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secret_key;
    }

    /**
     * Generated from protobuf field <code>string secret_key = 5 [(.Ydb.required) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setSecretKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Import.ImportFromS3Settings.Item items = 6 [(.Ydb.size) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Import.ImportFromS3Settings.Item items = 6 [(.Ydb.size) = {</code>
     * @param array<\Ydb\Import\ImportFromS3Settings\Item>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Import\ImportFromS3Settings\Item::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 7 [(.Ydb.length) = {</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 7 [(.Ydb.length) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 number_of_retries = 8;</code>
     * @return int
     */
    public function getNumberOfRetries()
    {
        return $this->number_of_retries;
    }

    /**
     * Generated from protobuf field <code>uint32 number_of_retries = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNumberOfRetries($var)
    {
        GPBUtil::checkUint32($var);
        $this->number_of_retries = $var;

        return $this;
    }

}

