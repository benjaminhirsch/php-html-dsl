<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class Draggable extends Attribute implements IPredefinedValues
{
    public const string TRUE  = 'true';
    public const string FALSE = 'false';

    #[Override]
    public function name(): string
    {
        return 'draggable';
    }

    /** @inheritDoc */
    #[Override]
    public function predefinedValues(): array
    {
        return [
            self::TRUE,
            self::FALSE,
        ];
    }
}
