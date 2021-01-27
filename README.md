![alt text](https://marshmallow.dev/cdn/media/logo-red-237x46.png "marshmallow.")

# Laravel Nova Styling
This package customizes Laravel Nova with the original Marshmallow styling. Implemented for all multipurpose CMS systems created and developed by Marshmallow.

## We support darkmode 🌙
[![marshmallow-nova-styling-example](https://marshmallow.dev/cdn/readme/nova-custom/custom-styling-darkmode.png)](https://marshmallow.dev)

### Installation
```bash
composer require marshmallow/nova-styling
```

### Vendor Publish
This theme includes adapted Nova blade files and a config file with options based on Nova Responsive Theme. To use them, first publish the config file:
```bash
php artisan vendor:publish --provider="Marshmallow\NovaStyling\ThemeServiceProvider" --tag="config" --force
php artisan vendor:publish --provider="Marshmallow\NovaStyling\ThemeServiceProvider" --tag="views" --force
php artisan vendor:publish --provider="Marshmallow\NovaStyling\ThemeServiceProvider" --tag="styling" --force
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security related issues, please email stef@marshmallow.dev instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

Responsive design is based on Nova Responsive Theme by Gregoriohc.
See https://github.com/gregoriohc/laravel-nova-theme-responsive
- [Gregorio Hernández Caso](https://github.com/gregoriohc)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
