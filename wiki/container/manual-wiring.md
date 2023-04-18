## Wiring classes

## Registering subscribers

With Launchpad default behavior we have 4 subscriber types:
- Common subscribers: Subscribers that load on any context.
- Administrative subscribers: Subscribers that load only when the admin dashboard is loaded.
- Front-end subscribers: Subscribers that load only on pages visible by regular users.
- Initialisation subscribers: Subscribers loading before other to modify the loading logic.

To define the type from we need to register subscribers in the method matching the right type:
| Type | Method |
|:----:|:------:|
| common | `get_common_subscribers`   |
| admin  | `get_admin_subscribers`   |
| front  | `get_front_subscribers`   |
| init   | `get_init_subscribers`   |
