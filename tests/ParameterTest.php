<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:52 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests;

use JsonException;
use Lalcebo\Aws\Params\Parameter;
use PHPUnit\Framework\TestCase;

class ParameterTest extends TestCase
{
    /**
     * @test
     * @throws JsonException
     */
    public function toJsonEncodesTheToArrayResult(): void
    {
        $baseMock = $this->getMockForAbstractClass(Parameter::class);

        self::assertJsonStringEqualsJsonString(
            json_encode($baseMock->toArray()),
            $baseMock->toJson()
        );
    }
}
