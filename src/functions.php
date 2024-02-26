<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html
{

    use BenjaminHirsch\Html\Attribute\Autofocus;
    use BenjaminHirsch\Html\Attribute\CssClass;
    use BenjaminHirsch\Html\Attribute\Dir;
    use BenjaminHirsch\Html\Attribute\Href;
    use BenjaminHirsch\Html\Attribute\Target;
    use BenjaminHirsch\Html\Element\Anchor;
    use BenjaminHirsch\Html\Element\Base;
    use BenjaminHirsch\Html\Element\ListItem;
    use BenjaminHirsch\Html\Element\OrderedList;
    use BenjaminHirsch\Html\Element\UnorderedList;

    function ol(Element|Attribute|string ...$attributesOrNodes): OrderedList
    {
        return new OrderedList(...$attributesOrNodes);
    }

    function ul(Element|Attribute|string ...$attributesOrNodes): UnorderedList
    {
        return new UnorderedList(...$attributesOrNodes);
    }

    function li(Element|Attribute|string ...$attributesOrNodes): ListItem
    {
        return new ListItem(...$attributesOrNodes);
    }

    function a(Element|Attribute|string ...$attributesOrNodes): Anchor
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

    function base(Element|Attribute|string ...$attributesOrNodes): Base
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
