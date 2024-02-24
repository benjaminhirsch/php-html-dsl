<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Test\Elements;

use PHPUnit\Framework\TestCase;

use function BenjaminHirsch\Html\li;
use function BenjaminHirsch\Html\ol;

final class OrderedListTest extends TestCase
{
    public function testOrderedList(): void
    {
        // Test empty list
        self::assertEquals('<ol></ol>', ol()->render());

        // Test list with 3 empty children
        self::assertEquals('<ol><li></li><li></li><li></li></ol>', ol(li(), li(), li())->render());
    }

//    public function testDefault(): void
//    {
//        $ol = ol(
//            className('omg list'),
//            li(className('foo bar')),
//            li(className('muha')),
//            li(
//                li(
//                    className('Foo1'),
//                    a(
//                        href('/foo'),
//                        target('_blank'),
//                        'Iam a link',
//                    ),
//                ),
//            ),
//        );
//
//        self::assertInstanceOf(OrderedList::class, $ol);
//
//        echo $ol->render();
//    }
//
//    public function testUl()
//    {
//        echo ul()->render();
//    }
}
