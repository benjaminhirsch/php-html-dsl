<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class ContentEditable extends Attribute implements GlobalAttribute
{
    public function __construct(Value\ContentEditable $contentEditable)
    {
        parent::__construct($contentEditable->value);
    }

    #[Override]
    public function name(): string
    {
        return 'contenteditable';
    }
}
