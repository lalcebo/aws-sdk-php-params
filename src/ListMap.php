<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:00 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params;

use ArrayAccess;
use Closure;
use InvalidArgumentException;
use JsonSerializable;
use Lalcebo\Aws\Params\Contracts\Arrayable;
use Lalcebo\Aws\Params\Contracts\Jsonable;

/**
 * This class implements maps using a list-based data structure.
 *
 * @package Lalcebo\Aws\Params
 */
class ListMap implements ArrayAccess, JsonSerializable, Arrayable, Jsonable
{
    /** @var array */
    protected $items = [];

    /**
     * @param  array  $items
     */
    public function __construct(array $items = [])
    {
        array_walk(
            $items,
            function ($value, $key) {
                $this->offsetSet($key, $value);
            }
        );
    }

    /**
     * Get an attribute from the ListMap instance.
     *
     * @param $key
     * @param  null  $default
     * @return mixed|null
     */
    public function get($key, $default = null)
    {
        if (array_key_exists($key, $this->items)) {
            return $this->items[$key];
        }

        return $default instanceof Closure ? $default() : $default;
    }

    /**
     * Dynamically check if an attribute is set.
     *
     * @param $key
     * @return bool
     */
    public function __isset($key): bool
    {
        return $this->offsetExists($key);
    }

    /**
     * Dynamically retrieve the value of an attribute.
     *
     * @param $key
     * @return mixed|null
     */
    public function __get($key)
    {
        return $this->get($key);
    }

    public function __set($key, $value)
    {
        $this->offsetSet($key, $value);
    }

    /**
     * Dynamically unset an attribute.
     *
     * @param $key
     */
    public function __unset($key)
    {
        $this->offsetUnset($key);
    }

    /**
     * Determine if the given offset exists.
     *
     * @param  mixed  $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->items[$offset]);
    }

    /**
     * Get the value for a given offset.
     *
     * @param  mixed  $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    /**
     * Set the value at the given offset.
     *
     * @param  mixed  $offset
     * @param  mixed  $value
     * @return ListMap
     */
    public function offsetSet($offset, $value): self
    {
        if (!is_string($offset) || !is_string($value)) {
            throw new InvalidArgumentException('Only accepts string offset and value.');
        }

        $this->items[$offset] = $value;

        return $this;
    }

    /**
     * Unset the value at the given offset.
     *
     * @param  mixed  $offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->items[$offset]);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->items;
    }

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0): string
    {
        /** @noinspection JsonEncodingApiUsageInspection */
        return json_encode($this->jsonSerialize(), $options);
    }
}
