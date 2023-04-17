
## General
The first when understanding the architecture of a project is to get the general overview of the project and it's purposes.

Unlike most of WordPress plugin if you search inside Launchpad code base you won't be able to find a lot of references to `add_action` or `add_filter` methods which are normally an institution in Wordpress plugins.

This is due to the Subscriber based Architecture of the project instead of adding this function of each piece of our code and have mock it back afterwards during tests, we centralised it in one place and automatically add it.

That why most pieces of logic inside the plugin finish by a subscriber.

## Subscriber loading

To load theses subscribers and to allow us to have IOC we are using league container that is loading inside the `inc/plugin.php` file inside the core.

Inside this class we registers all Services providers from the app that provides any class that are present inside the plugin.

With this service providers we will then load needed subscribers depending of the context.

## Service providers structure 
Each section from the project have it's own service provider.

They are like the pillar sections are build around as they are the link to the container which links classes together.
Theses service providers are structured in 3 parts:
- A declarative part where the service provider declares which IDs (classes) he is providing.
- A part for subscribers where the service providers declares subscribers and their type.
- A part to load and link classes together.

### Wiring strategies

### Subscriber declaration
To declare which subscriber it will provider to the application each provider can use 3 methods returning ids from the subscribers from that type:
- `get_common_subscribers`: Returns the ids of common subscribers.
```php
public function get_common_subscribers(): array {
   return [
      MySubscriber1::class,
      MySubscriber2::class,
   ];
}
``` 
- `get_front_subscribers`: Returns the ids of front subscribers.
```php
public function get_front_subscribers(): array {
   return [
      MySubscriber1::class,
      MySubscriber2::class,
   ];
}
``` 
- `get_admin_subscribers`: Returns the ids of admin subscribers.
```php
public function get_admin_subscribers(): array {
   return [
      MySubscriber1::class,
      MySubscriber2::class,
   ];
}
``` 
