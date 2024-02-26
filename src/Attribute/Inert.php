<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\BooleanAttribute;
use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class Inert extends Attribute implements BooleanAttribute, GlobalAttribute
{
    public function __construct()
    {
        parent::__construct('');
    }

    #[Override]
    public function name(): string
    {
        return 'inert';
    }
}
