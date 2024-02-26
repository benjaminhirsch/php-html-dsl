<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Test\Elements;

use BenjaminHirsch\Html\Attribute\Data;
use PHPUnit\Framework\TestCase;

use function BenjaminHirsch\Html\base;
use function BenjaminHirsch\Html\target;

final class BaseTest extends TestCase
{
    public function testBase(): void
    {
        self::assertEquals(
            '<base target="_blank" data-foo="bar"/>',
            base(target('_blank'), new Data('foo', 'bar'))->render(),
        );
    }
}
