<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Attribute\Href;
use BenjaminHirsch\Html\Attribute\Target;
use BenjaminHirsch\Html\IRequiresAttribute;
use BenjaminHirsch\Html\IVoidElement;
use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Requirement;
use Override;

final class Base extends Node implements IVoidElement, IRequiresAttribute
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
