<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Test\Elements;

use BenjaminHirsch\Html\Attribute\Global\Id;
use BenjaminHirsch\Html\Element\OrderedList;
use PHPUnit\Framework\TestCase;

use function BenjaminHirsch\Html\a;
use function BenjaminHirsch\Html\href;
use function BenjaminHirsch\Html\li;
use function BenjaminHirsch\Html\ol;
use function BenjaminHirsch\Html\target;

final class OrderedListTest extends TestCase
{
    public function testOrderedList(): void
    {
        // Test empty list
        self::assertEquals('<ol></ol>', ol()->render());

        // Test list with 3 empty children
        self::assertEquals('<ol><li></li><li></li><li></li></ol>', ol(li(), li(), li())->render());
    }

    public function testDefault(): void
    {
        $ol = ol(
            li('Hello Word'),
            li(li('Nested List')),
            li(
                new Id('id1'),
                a(
                    new Id('id2'),
                    href('/foo'),
                    target('_blank'),
                    'Just a link',
                ),
            )->if(false),
        );

        self::assertInstanceOf(OrderedList::class, $ol);

        echo $ol->render();
    }

//    public function testUl()
//    {
//        echo ul()->render();
//    }
}
