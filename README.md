# PHP DSL HTML

This library provides a DSL to build HTML in a typesafe, strict and secure way in pure php.
The goal is to provide a simple and intuitive usage and give you the power to generate HTML 
and your own components with conditional render capabilities.

The library will also come with build in checks that you can't produce invalid HTML. The usage 
of non global attributes will be limited to their respective elements. Everything is strictly typed
and backed by enums.

# Under development
This library is under development and not finished yet. Expect major API changes and/or that things aren't 
working as expected

# Example usage
```php
use BenjaminHirsch\Html\Attribute\Href;
use BenjaminHirsch\Html\Element\Anchor;
use BenjaminHirsch\Html\Element\ListItem;
use BenjaminHirsch\Html\Element\OrderedList;

use function BenjaminHirsch\Html\li;
use function BenjaminHirsch\Html\ol;
use function BenjaminHirsch\Html\a;
use function BenjaminHirsch\Html\href;

// Use shorthand functions
ol(
    li('Hello World'), 
    li(a(href('/hello-world'), 'Link label')), 
    li('Another list item')
)->render()

// Use FQNs
(new OrderedList(
    new ListItem('Hello World'),
    new ListItem(new Anchor(new Href('/hello-world')), 'Link label'),
    new ListItem('Another list item')
))->render()

// Produces

<ol>
    <li>Hello World</li>
    <li><a href='/hello-world'>Link label</a></li>
    <li>Another list item</li>
</ol>

// Conditional rendering
(new Anchor('/logout'), 'Logout')->if(callable|bool)
```
