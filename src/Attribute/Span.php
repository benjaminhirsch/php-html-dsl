<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Span extends Attribute
{
    public function __construct(int $value)
    {
        parent::__construct((string) $value);
    }

    #[Override]
    public function name(): string
    {
        return 'span';
    }
}
