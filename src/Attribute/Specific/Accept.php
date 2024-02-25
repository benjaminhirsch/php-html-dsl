<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Specific;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IRequiresAttribute;
use BenjaminHirsch\Html\Requirement;
use Override;

final readonly class Accept extends Attribute implements IRequiresAttribute
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
