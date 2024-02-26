<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

final readonly class ShadowRootMode extends Attribute
{
    public function __construct(Value\ShadowRootMode $shadowRootMode)
    {
        parent::__construct($shadowRootMode->value);
    }

    #[Override]
    public function name(): string
    {
        return 'shadowrootmode';
    }
}
