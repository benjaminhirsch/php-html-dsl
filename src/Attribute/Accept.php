<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Requirement;
use BenjaminHirsch\Html\RequiresAttribute;
use Override;

final readonly class Accept extends Attribute implements RequiresAttribute
{
    #[Override]
    public function name(): string
    {
        return 'accept';
    }

    /** @inheritDoc */
    #[Override]
    public function requires(): array
    {
        return [Type::class];
    }

    #[Override]
    public function typeOfRequirement(): Requirement
    {
        return Requirement::ALL;
    }
}
