<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class InputMode extends Attribute implements IPredefinedValues
{
    public const string NONE    = 'none';
    public const string TEXT    = 'text';
    public const string DECIMAL = 'decimal';
    public const string NUMERIC = 'numeric';
    public const string TEL     = 'tel';
    public const string SEARCH  = 'search';
    public const string EMAIL   = 'email';
    public const string URL     = 'url';

    #[Override]
    public function name(): string
    {
        return 'inputmode';
    }

    /** @inheritDoc */
    #[Override]
    public function predefinedValues(): array
    {
        return [
            self::NONE,
            self::TEXT,
            self::DECIMAL,
            self::NUMERIC,
            self::TEL,
            self::SEARCH,
            self::EMAIL,
            self::URL,
        ];
    }
}
