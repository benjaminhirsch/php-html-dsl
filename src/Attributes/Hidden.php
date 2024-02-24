<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class Hidden extends Attribute implements IPredefinedValues
{
    public const string EMPTY       = '';
    public const string HIDDEN      = 'hidden';
    public const string UNTIL_FOUND = 'until-found';

    #[Override]
    public function name(): string
    {
        return 'hidden';
    }

    /** @inheritDoc */
    #[Override]
    public function predefinedValues(): array
    {
        return [
            self::EMPTY,
            self::HIDDEN,
            self::UNTIL_FOUND,
        ];
    }
}
