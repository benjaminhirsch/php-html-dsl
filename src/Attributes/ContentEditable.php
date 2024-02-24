<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class ContentEditable extends Attribute implements IPredefinedValues
{
    public const string TRUE           = 'true';
    public const string FALSE          = 'false';
    public const string PLAINTEXT_ONLY = 'plaintext-only';

    #[Override]
    public function name(): string
    {
        return 'contenteditable';
    }

    /** @inheritDoc */
    #[Override]
    public function predefinedValues(): array
    {
        return [
            self::TRUE,
            self::FALSE,
            self::PLAINTEXT_ONLY,
        ];
    }
}
