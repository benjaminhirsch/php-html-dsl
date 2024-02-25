<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html
{

    use BenjaminHirsch\Html\Attribute\Global\Autofocus;
    use BenjaminHirsch\Html\Attribute\Global\CssClass;
    use BenjaminHirsch\Html\Attribute\Global\Dir;
    use BenjaminHirsch\Html\Attribute\Specific\Href;
    use BenjaminHirsch\Html\Attribute\Specific\Target;
    use BenjaminHirsch\Html\Element\Anchor;
    use BenjaminHirsch\Html\Element\Base;
    use BenjaminHirsch\Html\Element\ListItem;
    use BenjaminHirsch\Html\Element\OrderedList;
    use BenjaminHirsch\Html\Element\UnorderedList;

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

    function dir(Attribute\Value\Dir $value): Dir
    {
        return new Dir($value);
    }

    function autofocus(): Autofocus
    {
        return new Autofocus();
    }
}
