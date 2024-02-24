<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Test\Attributes;

use PHPUnit\Framework\TestCase;

use function BenjaminHirsch\Html\autofocus;

final class AutofocusTest extends TestCase
{
    public function testAutofocus(): void
    {
        self::assertEquals('autofocus', autofocus()->render());
    }
}
