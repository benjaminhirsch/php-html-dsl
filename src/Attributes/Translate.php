<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class Translate extends Attribute implements IPredefinedValues
{
    public const string YES = 'yes';
    public const string NO  = 'no';

    #[Override]
    public function name(): string
    {
        return 'translate';
    }

    /** @inheritDoc */
    #[Override]
    public function predefinedValues(): array
    {
        return [
            self::YES,
            self::NO,
        ];
    }
}
