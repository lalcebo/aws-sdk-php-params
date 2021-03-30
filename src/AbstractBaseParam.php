<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:55 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params;

use JsonSerializable;
use Lalcebo\Aws\Params\Contracts\Arrayable;
use Lalcebo\Aws\Params\Contracts\Jsonable;
use Lalcebo\Helpers\Arr;
use ReflectionClass;
use ReflectionProperty;

/**
 * This is the base class for all parameters classes.
 *
 * @package Lalcebo\Aws\Params
 */
abstract class AbstractBaseParam implements Arrayable, Jsonable, JsonSerializable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @param int $options
     * @return string
     */
    public function toJson($options = 0): string
    {
        /** @noinspection JsonEncodingApiUsageInspection */
        return json_encode($this->jsonSerialize(), $options);
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    /**
     * Specify data which should be serialized to JSON.
     *
     * @return mixed|void
     */
    public function jsonSerialize(): array
    {
        $properties = (new ReflectionClass($this))
            ->getProperties(ReflectionProperty::IS_PUBLIC);

        $params = array_reduce(
            $properties,
            function ($carry, ReflectionProperty $item) {
                $value = $this->{$item->name};

                if (is_array($value)) {
                    foreach ($value as $key => $val) {
                        $value[$key] = $this->transformValue($val);
                    }
                }

                $carry[ucfirst($item->name)] = $this->transformValue($value);

                return $carry;
            }
        );

        return Arr::filterRecursive(
            !empty($params) ? $params : [],
            static function ($value) {
                return $value !== null;
            }
        );
    }

    /**
     * Transform the data of element.
     *
     * @param mixed $item
     * @return mixed
     */
    private function transformValue($item)
    {
        return $item instanceof Arrayable ? $item->toArray() : $item;
    }
}
