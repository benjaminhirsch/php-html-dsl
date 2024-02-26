<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class ScriptType extends Attribute
{
    public function __construct(Attribute\Value\ScriptType $scriptType)
    {
        parent::__construct($scriptType->value);
    }

    #[Override]
    public function name(): string
    {
        return 'type';
    }
}
