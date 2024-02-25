<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class ContentEditable extends Attribute
{
    public function __construct(Attribute\Value\ContentEditable $contentEditable)
    {
        parent::__construct($contentEditable->value);
    }

    #[Override]
    public function name(): string
    {
        return 'contenteditable';
    }
}
