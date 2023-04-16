
## Creating a command

Every command in the application are all a child from the `LaunchpadCLI\Commands\Command` class.

To create a command you will have to extend from it.

Once this is done the next step is to implement methods on the class:
- `__construct`: Create the command and load dependencies.
- `interact`: Interact with the user to get missing data.
- `execute`: Execute the actual command.

## Linking it to the CLI
