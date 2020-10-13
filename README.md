# Marshmallow Nova Styling
[![marshmallow-transparent-logo](https://cdn.marshmallow-office.com/media/images/logo/marshmallow.transparent.red.png)](https://marshmallow.dev)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marshmallow/nova-styling.svg)](https://packagist.org/packages/marshmallow/nova-styling)
[![Total Downloads](https://img.shields.io/packagist/dt/marshmallow/nova-styling.svg)](https://packagist.org/packages/marshmallow/nova-styling)
[![License](https://img.shields.io/packagist/l/marshmallow/nova-styling.svg)](https://gitlab.com/marshmallowdev)
[![Stars](https://img.shields.io/github/stars/marshmallow-packages/nova-styling?color=yellow&style=plastic)](https://github.com/marshmallow-packages/nova-styling)
[![Forks](https://img.shields.io/github/forks/marshmallow-packages/nova-styling?color=brightgreen&style=plastic)](https://github.com/marshmallow-packages/nova-styling)

This package customizes Laravel Nova with the original Marshmallow styling. Implemented for all multipurpose CMS systems created and developed by Marshmallow.

## Screenshot

Example
------------
[![marshmallow-nova-styling-example](https://marshmallow.dev/cdn/readme/nova-custom/custom-styling.png)](https://marshmallow.dev)

### Installation

```bash
composer require marshmallow/nova-styling
```

This theme includes adapted Nova blade files and a config file with options based on Nova Responsive Theme. To use them, first publish the config file:

```bash
php artisan vendor:publish --provider="Marshmallow\NovaStyling\ThemeServiceProvider" --force
```

- - -

## Credits
Responsive design is based on Nova Responsive Theme by Gregoriohc.
See https://github.com/gregoriohc/laravel-nova-theme-responsive - [Gregorio Hernández Caso](https://github.com/gregoriohc)

Copyright (c) 2020 marshmallow.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
