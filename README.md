<p align="center">
    <img src="https://marshmallow.dev/cdn/media/logo-red-237x46.png">
</p>
<p align="center">
    <a href="https://github.com/Marshmallow-Development">
        <img src="https://img.shields.io/github/issues/Marshmallow-Development/package-novastyling.svg" alt="Issues">
    </a>
    <a href="https://github.com/Marshmallow-Development">
        <img src="https://img.shields.io/github/forks/Marshmallow-Development/package-novastyling.svg" alt="Forks">
    </a>
    <a href="https://github.com/Marshmallow-Development">
        <img src="https://img.shields.io/github/stars/Marshmallow-Development/package-novastyling.svg" alt="Stars">
    </a>
    <a href="https://github.com/Marshmallow-Development">
        <img src="https://img.shields.io/github/license/Marshmallow-Development/package-novastyling.svg" alt="License">
    </a>
</p>

# Marshmallow Nova Styling
Deze package zorgt ervoor dat de Nova installatie de styling van Marshmallow krijgt. Deze implementeren we bij alle CMS systemen die we leveren voor herkenbaarheid.

<img src="https://marshmallow.dev/cdn/readme/nova-custom/custom-styling.png">

### Installatie
```
composer require marshmallow/package-novastyling
```

Na de installatie moeten we alleen nog de assets publishen. Koppieer onderstaande commando en voer deze uit. Let op dat deze nova blade bestanden overschrijft in de resource folder. Hierdoor zullen er wijzigingen in GIT staan.

```
php artisan marshmallow-theme:install
php artisan vendor:publish --provider="Marshmallow\NovaStyling\ThemeServiceProvider"
```

- - -

Copyright (c) 2020 marshmallow
