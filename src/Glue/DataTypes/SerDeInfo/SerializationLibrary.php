<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:24 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes\SerDeInfo;

/**
 * Athena supports creating tables and querying data from CSV, TSV, custom-delimited,
 * and JSON formats; data from Hadoop-related formats: ORC, Apache Avro and Parquet;
 * logs from Logstash, AWS CloudTrail logs, and Apache WebServer logs.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes\SerDeInfo
 * @see https://docs.aws.amazon.com/athena/latest/ug/supported-serdes.html
 */
class SerializationLibrary
{
    /**
     * Athena does not support using avro.schema.url to specify table schema for
     * security reasons. Use avro.schema.literal. To extract schema from data
     * in the Avro format, use the Apache avro-tools-<version>.jar with the
     * get schema parameter.
     *
     * @var string
     */
    public const AVRO = 'org.apache.hadoop.hive.serde2.avro.AvroSerDe';

    /**
     * The Regex SerDe uses a regular expression (regex) to deserialize data by
     * extracting regex groups into table columns.
     *
     * @var string
     */
    public const REGEX = 'org.apache.hadoop.hive.serde2.RegexSerDe';

    /**
     * AWS CloudTrail is a service that records AWS API calls and events for AWS accounts.
     * CloudTrail generates encrypted logs and stores them in Amazon S3.
     *
     * @var string
     */
    public const CLOUD_TRAIL = 'com.amazon.emr.hive.serde.CloudTrailSerde';

    /**
     * If data contains values enclosed in double quotes ("), you can use the
     * OpenCSV SerDe to deserialize the values in Athena.
     *
     * @var string
     */
    public const OPEN_CSV = 'org.apache.hadoop.hive.serde2.OpenCSVSerde';

    /**
     * The Logstash Grok SerDe is a library with a set of specialized patterns for
     * deserialization of unstructured text data, usually logs. Each Grok pattern
     * is a named regular expression.
     *
     * @var string
     */
    public const GROK = 'com.amazonaws.glue.serde.GrokSerDe';

    /**
     * The Hive JSON SerDe is commonly used to process JSON data like events. These
     * events are represented as blocks of JSON-encoded text separated by a new line.
     *
     * @var string
     */
    public const HIVE_JSON = 'org.apache.hive.hcatalog.data.JsonSerDe';

    /**
     * In addition to the paths property that defines the columns in the table, the OpenX
     * JSON SerDe has the following optional properties that can be useful for addressing
     * inconsistencies in data.
     *
     * @var string
     */
    public const OPENX_JSON = 'org.openx.data.jsonserde.JsonSerDe';

    /**
     * Specifying this SerDe is optional. This is the SerDe for data in CSV, TSV, and
     * custom-delimited formats that Athena uses by default.
     *
     * @var string
     */
    public const LAZY_SIMPLE = 'org.apache.hadoop.hive.serde2.lazy.LazySimpleSerDe';

    /**
     * This is the SerDe class for data in the ORC format. It passes the object from
     * ORC to the reader and from ORC to the writer.
     *
     * @var string
     */
    public const ORC = 'org.apache.hadoop.hive.ql.io.orc.OrcSerde';

    /**
     * ParquetHiveSerDe is used for data stored in Parquet Format.
     *
     * @var string
     */
    public const PARQUET = 'org.apache.hadoop.hive.ql.io.parquet.serde.ParquetHiveSerDe';
}
