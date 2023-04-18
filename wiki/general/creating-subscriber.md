
## Create your subscriber

In Launchpad every subscriber needs to implements the interface `Launchpad\Dependencies\LaunchpadCore\EventManagement\SubscriberInterface`.
Due to that your subscriber should look like that:
```php
<?php
namespace Launchpad\Subscriber;

use Launchpad\Dependencies\LaunchpadCore\EventManagement\SubscriberInterface;

/**
 * An event subscriber.
 *
 */
class Subscriber implements SubscriberInterface {
	/**
	 * Return an array of events that this subscriber wants to listen to.
	 *
	 * Each method callback is a public method in this subscriber class.
	 *
	 * @access public
	 *
	 * @return array
	 */
	public static function get_subscribed_events() {
		return [
			'hook_name'   => 'method_callback', // With no parameters for the hook
			'hook_name_2' => [ 'method_callback_2', 10 ], // With the priority parameter
			'hook_name_3' => [ 'method_callback_3', 10, 2 ], // With the priority & number of arguments parameters
			'hook_name_4' => [
			    [ 'method_callback_4' ], // Multiple callbacks can be hooked on the same event with a multidimensional array
			    [ 'method_callback_5' ],
			],
		];
	}
}
```

Once you created the base from your subscriber you will then have to callbacks to the subscriber.
For that inside the `get_subscribed_events` method we will have to return an array containing the mapping between callbacks from the subscriber and events.

## Register your subscriber
Once we created your subscriber we need to then attach it to our plugin as an actual subscriber because for the moment is a simple class for the framework.

For that we will need go register it on a ServiceProvider as a subscriber.
With Launchpad default behavior we have 4 subscriber types:
- Common subscribers: Subscribers that load on any context.
- Administrative subscribers: Subscribers that load only when the admin dashboard is loaded.
- Front-end subscribers: Subscribers that load only on pages visible by regular users.
- Initialisation subscribers: Subscribers loading before other to modify the loading logic.

To define the type from we need to register the subscriber in the method matching the right type:
| Type | Method |
|:----:|:------:|
| common | `get_common_subscribers`   |
| admin  | `get_admin_subscribers`   |
| front  | `get_front_subscribers`   |
| init   | `get_init_subscribers`   |
