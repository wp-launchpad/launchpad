## Wiring classes
As the name of this strategy let you understand wiring is done automaticly for most classes.

For that Launchpad framework will use the reflection API to resolve dependencies.
Depending on the dependency the resolver will use a different strategy:
- If it is a class it will use the reflection API to find the class and implement it.
- If it is a basic type or has no type it will search with the name of the parameter inside the container for a value.
- If no value is found then the resolver will search for a default value.

## Biding classes
Some dependencies can be abstract classes or interfaces.

In that case it won't be possible to instantiate them. That's for that reason we introduced class binding.

When you bind a class to another the binded class will be instantiated each type we try to instantiate the original class.

To bind a class you need to override the `` method and use the method `` for each class you want to bind:
```php
<?php

namespace Launchpad;

class ServiceProvider extends Dependencies\LaunchpadAutoresolver\ServiceProvider
{

    /**
     * Define classes.
     *
     * @return void
     * @throws ReflectionException
     */
    protected function define()
    {
      $this->bind(MyInterface::class, MyConcreteClass::class);
      parent::define();
    }
}
```

In some case we need different classes to be binded for different parent classes.

In that case you can use the `$when` parameter on the `bind` method.

For that you just have to put the parent class name in an array that will pass to the `$when` parameter:
```php
$this->bind(MyInterface::class, MyConcreteClass::class, [Parent::class]);
```
Once this is set the concrete class will only be instanciated when the parent class is the one indicated.

## Registering subscribers
