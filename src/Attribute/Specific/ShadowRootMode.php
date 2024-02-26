<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Specific;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class ShadowRootMode extends Attribute
{
    public function __construct(Attribute\Value\ShadowRootMode $shadowRootMode)
    {
        parent::__construct($shadowRootMode->value);
    }

    #[Override]
    public function name(): string
    {
        return 'shadowrootmode';
    }
}
