<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 12:00 PM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests;

use InvalidArgumentException;
use Lalcebo\Aws\Params\ListMap;
use PHPUnit\Framework\TestCase;
use ReflectionObject;

class ListMapTest extends TestCase
{
    /**
     * @var array
     */
    protected $providedTestArray = [
        'guid' => 'df777d8b-980d-4d35-8ad1-fdd47601c4e7',
        'isActive' => '1',
        'balance' => '$1,350.10',
        'picture' => 'https://placehold.it/32x32',
        'firstName' => 'Vinson',
        'lastName' => 'Tucker'
    ];

    /** @test */
    public function itemsAreSetByConstructor(): void
    {
        $listMap = new ListMap($this->providedTestArray);
        $objReflection = new ReflectionObject($listMap);
        $objItems = $objReflection->getProperty('items');
        $objItems->setAccessible(true);

        self::assertEquals($this->providedTestArray, $objItems->getValue($listMap));
    }

    /** @test */
    public function getMethodReturnsItem(): void
    {
        $listMap = new ListMap($this->providedTestArray);

        self::assertSame('Vinson', $listMap->get('firstName'));
        self::assertSame('40', $listMap->get('age', '40'));
        self::assertSame('Tucker', $listMap->lastName);
    }

    /**
     * @test
     * @noinspection PhpUndefinedFieldInspection
     */
    public function setMethodReturnsItem(): void
    {
        $listMap = new ListMap($this->providedTestArray);
        $listMap->born = '1980';
        $listMap['country'] = 'New Zealand';

        self::assertSame('df777d8b-980d-4d35-8ad1-fdd47601c4e7', $listMap->guid);
        self::assertSame('1980', $listMap->born);
        self::assertSame('New Zealand', $listMap->country);
    }

    /** @test */
    public function arrayAccessToItems(): void
    {
        $listMap = new ListMap($this->providedTestArray);

        self::assertTrue(isset($listMap['picture']));
        self::assertEquals('https://placehold.it/32x32', $listMap['picture']);
    }

    /** @test */
    public function toArrayReturnsItem(): void
    {
        $listMap = new ListMap($this->providedTestArray);

        self::assertEquals($this->providedTestArray, $listMap->toArray());
    }

    /** @test */
    public function toJsonEncodeTheToArrayResult(): void
    {
        $listMap = new ListMap($this->providedTestArray);
        $results = $listMap->toJson();

        self::assertJsonStringEqualsJsonString(
            json_encode($listMap->toArray()),
            $results
        );
    }

    /** @test */
    public function itShouldThrowArgumentException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Only accepts string offset and value.');

        new ListMap(['year' => 2021]);
    }

    /** @test */
    public function issetMagicMethod(): void
    {
        $listMap = new ListMap($this->providedTestArray);
        self::assertTrue(isset($listMap->isActive));

        unset($listMap->isActive);
        self::assertFalse(isset($fluent->isActive));
    }
}
