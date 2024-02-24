<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IPredefinedValues;
use Override;

final class Dir extends Attribute implements IPredefinedValues
{
    public const string LTR  = 'ltr';
    public const string RTL  = 'ltr';
    public const string AUTO = 'auto';

    #[Override]
    public function name(): string
    {
        return 'dir';
    }

    /** @inheritdoc  */
    #[Override]
    public function predefinedValues(): array
    {
        return [
            self::LTR,
            self::RTL,
            self::AUTO,
        ];
    }
}
