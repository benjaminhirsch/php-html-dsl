<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class VirtualKeyboardPolicy extends Attribute implements IPredefinedValues
{
    public const string AUTO   = 'auto';
    public const string MANUAL = 'manual';

    #[Override]
    public function name(): string
    {
        return 'virtualkeyboardpolicy';
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
