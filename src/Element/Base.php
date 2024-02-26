<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Attribute\Href;
use BenjaminHirsch\Html\Attribute\Target;
use BenjaminHirsch\Html\Requirement;
use BenjaminHirsch\Html\RequiresAttribute;
use BenjaminHirsch\Html\VoidElement;
use Override;

final class Base extends Element implements VoidElement, RequiresAttribute
{
    #[Override]
    public function name(): string
    {
        return 'base';
    }

    /** @inheritdoc  */
    #[Override]
    public function requires(): array
    {
        return [
            Target::class,
            Href::class,
        ];
    }

    #[Override]
    public function typeOfRequirement(): Requirement
    {
        return Requirement::ALL;
    }
}
