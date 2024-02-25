<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Attribute\Specific\Href;
use BenjaminHirsch\Html\Attribute\Specific\Target;
use BenjaminHirsch\Html\IRequiresAttribute;
use BenjaminHirsch\Html\IVoidElement;
use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Requirement;
use Override;

final class Body extends Node implements IVoidElement, IRequiresAttribute
{
    #[Override]
    public function name(): string
    {
        return 'body';
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
