<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

use function is_string;

final readonly class Target extends Attribute
{
    public function __construct(Attribute\Value\Target|string $target)
    {
        parent::__construct(is_string($target) ? $target : $target->value);
    }

    #[Override]
    public function name(): string
    {
        return 'target';
    }
}
