# PHP DSL HTML

The idea is to provide a simple and intuitive way to generate HTML with conditional render capabilities in pure php. 

# Warning / Notice
This is just an experiment and nothing serious for now.

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
(new Anchor(new Href('/logout'), 'Logout'))->if(callable|bool)
```
