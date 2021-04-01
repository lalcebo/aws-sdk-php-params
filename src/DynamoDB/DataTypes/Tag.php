<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/31/21 9:58 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\DynamoDB\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * Describes a tag. A tag is a key-value pair. You can add up to 50 tags to a single DynamoDB table.
 * AWS-assigned tag names and values are automatically assigned the aws: prefix, which the user cannot
 * assign. AWS-assigned tag names do not count towards the tag limit of 50. User-assigned tag names have
 * the prefix user: in the Cost Allocation Report. You cannot backdate the application of a tag.
 *
 * @package Lalcebo\Aws\Params\DynamoDB\DataTypes
 * @see https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/API_Tag.html
 */
class Tag extends Parameter
{
    /**
     * The key of the tag. Tag keys are case sensitive. Each DynamoDB table can only have up to one tag with
     * the same key. If you try to add an existing tag (same key), the existing tag value will be updated to
     * the new value.
     *
     * @var string
     */
    public $key;

    /**
     * The value of the tag. Tag values are case-sensitive and can be null.
     *
     * @var  string
     */
    public $value;

    /**
     * Describes a tag. A tag is a key-value pair. You can add up to 50 tags to a single DynamoDB table.
     * AWS-assigned tag names and values are automatically assigned the aws: prefix, which the user cannot
     * assign. AWS-assigned tag names do not count towards the tag limit of 50. User-assigned tag names have
     * the prefix user: in the Cost Allocation Report. You cannot backdate the application of a tag.
     *
     * @param  string  $key  The key of the tag. Tag keys are case sensitive. Each DynamoDB table can
     * only have up to one tag with the same key. If you try to add an existing tag (same key), the existing
     * tag value will be updated to the new value.
     * @param  string  $value  The value of the tag. Tag values are case-sensitive and can be null.
     */
    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}
