<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class EnterKeyHint extends Attribute implements IPredefinedValues
{
    public const string ENTER    = 'enter';
    public const string DONE     = 'done';
    public const string GO       = 'go';
    public const string NEXT     = 'next';
    public const string PREVIOUS = 'previous';
    public const string SEARCH   = 'search';
    public const string SEND     = 'send';

    #[Override]
    public function name(): string
    {
        return 'enterkeyhint';
    }

    /** @inheritDoc */
    #[Override]
    public function predefinedValues(): array
    {
        return [
            self::ENTER,
            self::DONE,
            self::GO,
            self::NEXT,
            self::PREVIOUS,
            self::SEARCH,
            self::SEND,
        ];
    }
}
