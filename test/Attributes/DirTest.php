<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Test\Attributes;

use BenjaminHirsch\Html\Attribute\Value\Dir;
use PHPUnit\Framework\TestCase;

use function BenjaminHirsch\Html\dir;

final class DirTest extends TestCase
{
    public function testDir(): void
    {
        self::assertEquals('dir="ltr"', dir(Dir::LTR)->render());
    }
}
