<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Preload extends Attribute
{
    public function __construct(Attribute\Value\Preload $preload)
    {
        parent::__construct($preload->value);
    }

    #[Override]
    public function name(): string
    {
        return 'preload';
    }
}
