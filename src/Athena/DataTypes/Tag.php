<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:48 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Athena\DataTypes;

use Lalcebo\Aws\Params\Parameter;

/**
 * A label that you assign to a resource. In Athena, a resource can be a workgroup or data catalog.
 * Each tag consists of a key and an optional value, both of which you define.
 *
 * @package Lalcebo\Aws\Params\Athena\DataTypes
 * @see https://docs.aws.amazon.com/athena/latest/APIReference/API_Tag.html
 */
class Tag extends Parameter
{
    /**
     * A tag key. The tag key length is from 1 to 128 Unicode characters in UTF-8. You can use letters
     * and numbers representable in UTF-8, and the following characters: + - = . _ : / @.
     * Tag keys are case-sensitive and must be unique per resource.
     *
     * @var string
     */
    public $key;

    /**
     * A tag value. The tag value length is from 0 to 256 Unicode characters in UTF-8. You can use
     * letters and numbers representable in UTF-8, and the following characters: + - = . _ : / @.
     * Tag values are case-sensitive.
     *
     * @var  string
     */
    public $value;

    /**
     * A label that you assign to a resource. In Athena, a resource can be a workgroup or data catalog.
     * Each tag consists of a key and an optional value, both of which you define.
     *
     * @param  string|null  $key  A tag key. The tag key length is from 1 to 128 Unicode characters in UTF-8.
     * You can use letters and numbers representable in UTF-8, and the following characters: + - = . _ : / @.
     * Tag keys are case-sensitive and must be unique per resource.
     * @param  string|null  $value  A tag value. The tag value length is from 0 to 256 Unicode characters in UTF-8.
     * You can use letters and numbers representable in UTF-8, and the following characters: + - = . _ : / @.
     * Tag values are case-sensitive.
     */
    public function __construct(string $key = null, string $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }
}
