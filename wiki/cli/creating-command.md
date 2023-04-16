
## Creating a command

Every command in the application are all a child from the `LaunchpadCLI\Commands\Command` class.

To create a command you will have to extend from it.

Once this is done the next step is to implement methods on the class:
- `__construct`: Create the command and load dependencies.
- `interact`: Interact with the user to get missing data.
- `execute`: Execute the actual command.

## Linking it to the CLI

Once the command is created we will have to link it to the CLI. To do that we will have to create a service provider for that command and attach it to the CLI.

First we will have to create the service provider itself by creating a class extending `LaunchpadCLI\ServiceProviders\ServiceProviderInterface` interface:
```php
class ServiceProvider implements LaunchpadCLI\ServiceProviders\ServiceProviderInterface {
     /**
     * Attach commands from the service provider to the cli.
     *
     * @param App $app cli.
     *
     * @return App
     */
    public function attach_commands(App $app): App {
      return $app;
    }

}
```
If needed every service provider will receive 3 parameters in their constructor:
- `Configurations $configs`: Configurations from the project.
- `Filesystem $filesystem`: Filesystem initalized at the root from the project.
- `string $app_dir`: path from the application directory.

Then inside the `attach_commands` method you can register by using the method `add` on `$app` as following:

```php
$app->add(new Command());
```

Finally the last step is to register the serivce provider into the CLI.
