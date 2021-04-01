<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/29/21 12:42 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Glue\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * A structure for a partition index.
 *
 * @package Lalcebo\Aws\Params\Glue\DataTypes
 * @see https://docs.aws.amazon.com/glue/latest/webapi/API_PartitionIndex.html
 */
class PartitionIndex extends Parameter
{
    /**
     * The name of the partition index.
     *
     * @var string
     */
    public $indexName;

    /**
     * @var string[]
     */
    public $keys;

    /**
     * A structure for a partition index.
     *
     * @param string $indexName
     * @param string[] $keys
     */
    public function __construct(string $indexName, array $keys)
    {
        $this->indexName = $indexName;
        $this->keys = $keys;
    }
}
