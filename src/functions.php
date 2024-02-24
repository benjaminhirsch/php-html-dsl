<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html
{

    use BenjaminHirsch\Html\Attributes\Autofocus;
    use BenjaminHirsch\Html\Attributes\CssClass;
    use BenjaminHirsch\Html\Attributes\Dir;
    use BenjaminHirsch\Html\Attributes\Href;
    use BenjaminHirsch\Html\Attributes\Target;
    use BenjaminHirsch\Html\Elements\Anchor;
    use BenjaminHirsch\Html\Elements\Base;
    use BenjaminHirsch\Html\Elements\ListItem;
    use BenjaminHirsch\Html\Elements\OrderedList;
    use BenjaminHirsch\Html\Elements\UnorderedList;

    function ol(INode|IAttribute|string ...$attributesOrNodes): OrderedList
    {
        return new OrderedList(...$attributesOrNodes);
    }

    function ul(INode|IAttribute|string ...$attributesOrNodes): UnorderedList
    {
        return new UnorderedList(...$attributesOrNodes);
    }

    function li(INode|IAttribute|string ...$attributesOrNodes): ListItem
    {
        return new ListItem(...$attributesOrNodes);
    }

    function a(INode|IAttribute|string ...$attributesOrNodes): Anchor
    {
        return new Anchor(...$attributesOrNodes);
    }

    function className(string $value): CssClass
    {
        return new CssClass($value);
    }

    function href(string $value): Href
    {
        return new Href($value);
    }

    function target(string $value): Target
    {
        return new Target($value);
    }

    function base(INode|IAttribute|string ...$attributesOrNodes): Base
    {
        return new Base(...$attributesOrNodes);
    }

    function dir(string $value): Dir
    {
        return new Dir($value);
    }

    function autofocus(): Autofocus
    {
        return new Autofocus();
    }
}
