<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class Dir extends Attribute implements GlobalAttribute
{
    public function __construct(Value\Dir $dir)
    {
        parent::__construct($dir->value);
    }

    #[Override]
    public function name(): string
    {
        return 'dir';
    }
}
