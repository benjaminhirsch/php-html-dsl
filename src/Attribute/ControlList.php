<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Requirement;
use BenjaminHirsch\Html\RequiresAttribute;
use Override;

final readonly class ControlList extends Attribute implements RequiresAttribute
{
    public function __construct(Value\ControlsList $controlsList)
    {
        parent::__construct($controlsList->value);
    }

    #[Override]
    public function name(): string
    {
        return 'contr';
    }

    /** @inheritDoc */
    #[Override]
    public function requires(): array
    {
        return [Controls::class];
    }

    #[Override]
    public function typeOfRequirement(): Requirement
    {
        return Requirement::ALL;
    }
}
