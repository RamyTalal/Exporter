# Exporter

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Export the Laravel environment file to a capable server format.

## Install

### Composer

``` bash
$ composer require RamyTalal/Exporter
```

### ServiceProvider

Open config/app.php and register the required service provider.

``` php
'providers' => [
    Talal\Exporter\Provider\ServiceProvider::class
]
```

## Usage

``` bash
$ php artisan env:export nginx --file=.env
```

Nginx, Apache, IIS, and lighttpd are supported.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ramy@thinkquality.nl instead of using the issue tracker.

## Credits

- [Ramy Talal][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/RamyTalal/Exporter.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/RamyTalal/Exporter/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/RamyTalal/Exporter.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/RamyTalal/Exporter.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/RamyTalal/Exporter.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/RamyTalal/Exporter
[link-travis]: https://travis-ci.org/RamyTalal/Exporter
[link-scrutinizer]: https://scrutinizer-ci.com/g/RamyTalal/Exporter/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/RamyTalal/Exporter
[link-downloads]: https://packagist.org/packages/RamyTalal/Exporter
[link-author]: https://github.com/RamyTalal
[link-contributors]: ../../contributors
