# Marshmallow Nova Styling
[![marshmallow-transparent-logo](https://cdn.marshmallow-office.com/media/images/logo/marshmallow.transparent.red.png)](https://marshmallow.dev)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marshmallow/nova-styling.svg)](https://packagist.org/packages/marshmallow/nova-styling)
[![Total Downloads](https://img.shields.io/packagist/dt/marshmallow/nova-styling.svg)](https://packagist.org/packages/marshmallow/nova-styling)
[![License](https://img.shields.io/packagist/l/marshmallow/nova-styling.svg)](https://gitlab.com/marshmallowdev)
[![Stars](https://img.shields.io/badge/dynamic/json.svg?label=stars&url=https://gitlab.com/api/v4/projects/17904505&query=$.star_count&colorB=yellow)](https://gitlab.com/marshmallowdev)
[![Forks](https://img.shields.io/badge/dynamic/json.svg?label=forks&url=https://gitlab.com/api/v4/projects/17904505&query=$.forks_count&colorB=brightgreen)](https://gitlab.com/marshmallowdev)

This package customizes Laravel Nova with the original Marshmallow styling. Implemented for all multipurpose CMS systems created and developed by Marshmallow.  

## Screenshot

Example
------------ 
[![marshmallow-nova-styling-example](https://marshmallow.dev/cdn/readme/nova-custom/custom-styling.png)](https://marshmallow.dev)

### Installation

```bash
composer require marshmallow/nova-styling
```

This theme includes adapted Nova blade files and a config file with options based on Nova Responsive Theme . To use them, first publish the config file:

```bash
php artisan vendor:publish --provider="Marshmallow\NovaStyling\ThemeServiceProvider" --force
```

## Responsive
If you wan't to make Nova responsive, please run the artisan command below.
```bash
php artisan vendor:publish --provider="Gregoriohc\LaravelNovaThemeResponsive\ThemeServiceProvider"
```

Configure the options editing the `config/nova-theme-responsive.php` file.

- - -

## Credits
Responsive design is based on Nova Responsive Theme by Gregoriohc.
See https://github.com/gregoriohc/laravel-nova-theme-responsive - [Gregorio Hernández Caso](https://github.com/gregoriohc)

Copyright (c) 2020 marshmallow.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
