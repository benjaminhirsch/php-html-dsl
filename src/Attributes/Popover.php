<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class Popover extends Attribute implements IPredefinedValues
{
    public const string AUTO   = 'AUTO';
    public const string MANUAL = 'MANUAL';

    #[Override]
    public function name(): string
    {
        return 'popover';
    }

    /** @inheritDoc */
    #[Override]
    public function predefinedValues(): array
    {
        return [
            self::AUTO,
            self::MANUAL,
        ];
    }
}
