<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

final readonly class PopOverTargetAction extends Attribute
{
    public function __construct(Value\PopOverTargetAction $popOverTargetAction)
    {
        parent::__construct($popOverTargetAction->value);
    }

    #[Override]
    public function name(): string
    {
        return 'popovertargetaction';
    }
}
