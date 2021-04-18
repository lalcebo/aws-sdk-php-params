<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:23 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\ListMap;
use Lalcebo\Aws\Params\Parameter;

/**
 * A structure used to define a table.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_TableInput.html
 */
class TableInput extends Parameter
{
    /**
     * The table name. For Hive compatibility, this is folded to lowercase when it is stored.
     *
     * @var string
     */
    public $name;

    /**
     * A description of the table.
     *
     * @var string
     */
    public $description;

    /**
     * The last time that the table was accessed.
     *
     * @var int
     */
    public $lastAccessTime;

    /**
     * The last time that column statistics were computed for this table.
     *
     * @var int
     */
    public $lastAnalyzedTime;

    /**
     * The table owner.
     *
     * @var string
     */
    public $owner;

    /**
     * These key-value pairs define properties associated with the table.
     *
     * @var ListMap
     */
    public $parameters;

    /**
     * A list of columns by which the table is partitioned. Only primitive types are supported as partition keys.
     *
     * @var Column[]
     */
    public $partitionKeys;

    /**
     * The retention time for this table.
     *
     * @var int
     */
    public $retention;

    /**
     * A storage descriptor containing information about the physical storage of this table.
     *
     * @var StorageDescriptor
     */
    public $storageDescriptor;

    /**
     * The type of this table (EXTERNAL_TABLE, VIRTUAL_VIEW, etc.).
     *
     * @var string
     */
    public $tableType;

    /**
     * A TableIdentifier structure that describes a target table for resource linking.
     *
     * @var TableIdentifier
     */
    public $targetTable;

    /**
     * If the table is a view, the expanded text of the view; otherwise null.
     *
     * @var string
     */
    public $viewExpandedText;

    /**
     * If the table is a view, the original text of the view; otherwise null.
     *
     * @var string
     */
    public $viewOriginalText;

    /**
     * A structure used to define a table.
     *
     * @param string $name
     * @param string|null $description
     * @param int|null $lastAccessTime
     * @param int|null $lastAnalyzedTime
     * @param string|null $owner
     * @param ListMap|null $parameters
     * @param Column[] $partitionKeys
     * @param int|null $retention
     * @param StorageDescriptor|null $storageDescriptor
     * @param string|null $tableType
     * @param TableIdentifier|null $targetTable
     * @param string|null $viewExpandedText
     * @param string|null $viewOriginalText
     */
    public function __construct(
        string $name,
        string $description = null,
        int $lastAccessTime = null,
        int $lastAnalyzedTime = null,
        string $owner = null,
        ListMap $parameters = null,
        array $partitionKeys = null,
        int $retention = null,
        StorageDescriptor $storageDescriptor = null,
        string $tableType = null,
        TableIdentifier $targetTable = null,
        string $viewExpandedText = null,
        string $viewOriginalText = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->lastAccessTime = $lastAccessTime;
        $this->lastAnalyzedTime = $lastAnalyzedTime;
        $this->owner = $owner;
        $this->parameters = $parameters;
        $this->partitionKeys = $partitionKeys;
        $this->retention = $retention;
        $this->storageDescriptor = $storageDescriptor;
        $this->tableType = $tableType;
        $this->targetTable = $targetTable;
        $this->viewExpandedText = $viewExpandedText;
        $this->viewOriginalText = $viewOriginalText;
    }
}
