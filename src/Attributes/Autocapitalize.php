<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class Autocapitalize extends Attribute implements IPredefinedValues
{
    public const string NONE       = 'none';
    public const string SENTENCES  = 'sentences';
    public const string WORDS      = 'words';
    public const string CHARACTERS = 'characters';

    #[Override]
    public function name(): string
    {
        return 'autocapitalize';
    }

    /** @inheritdoc  */
    #[Override]
    public function predefinedValues(): array
    {
        return [
            self::NONE,
            self::SENTENCES,
            self::WORDS,
            self::CHARACTERS,
        ];
    }
}
