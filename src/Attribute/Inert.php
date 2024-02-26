<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IBooleanAttribute;
use BenjaminHirsch\Html\IGlobalAttribute;
use Override;

final readonly class Inert extends Attribute implements IBooleanAttribute, IGlobalAttribute
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