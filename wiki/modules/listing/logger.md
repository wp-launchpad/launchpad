## Description
This module intent to offer a logging library respecting PSR-3 standard and that you can extend easily.

## Install 
To install the library run the following command: `composer require wp-launchpad/logger-take-off`
## Structure 
On install the module creates new parameters into `configs/parameters.php`:
```php
 'log_enabled' => false,
 'log_handlers' => [
  \Launchpad\Dependencies\Monolog\MonologHandler::class,  
 ],
 'logger_name' => 'launchpad',
 'log_file_name' => 'launchpad.log',
 'log_path' => '',
 'log_debug_interval' => 0,
```

- `log_enabled`: Enable or disable log.
- `log_handlers`: Handlers used in the logger.
- `logger_name`: 
- `log_file_name`: 
- `log_path`: 
- `log_debug_interval`: 
