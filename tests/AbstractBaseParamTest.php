<?php

/**
 * Created by Jorge P. Hernandez Lalcebo
 * Mail: lalcebo2003@gmail.com
 * Date: 3/28/21 11:52 AM
 */

declare(strict_types=1);

namespace Lalcebo\Aws\Params\Tests;

use JsonException;
use Lalcebo\Aws\Params\AbstractBaseParam;
use PHPUnit\Framework\TestCase;

class AbstractBaseParamTest extends TestCase
{
    /**
     * @test
     * @throws JsonException
     */
    public function toJsonEncodesTheToArrayResult(): void
    {
        $baseMock = $this->getMockForAbstractClass(AbstractBaseParam::class);

        self::assertJsonStringEqualsJsonString(
            json_encode($baseMock->toArray(), JSON_THROW_ON_ERROR),
            $baseMock->toJson()
        );
    }
}
