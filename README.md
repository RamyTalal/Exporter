# Exporter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/RamyTalal/Exporter.svg?style=flat-square)](https://packagist.org/packages/RamyTalal/Exporter)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/RamyTalal/Exporter/master.svg?style=flat-square)](https://travis-ci.org/RamyTalal/Exporter)
[![Quality Score](https://img.shields.io/scrutinizer/g/RamyTalal/Exporter.svg?style=flat-square)](https://scrutinizer-ci.com/g/RamyTalal/Exporter)
[![StyleCI](https://styleci.io/repos/54327422/shield?branch=master)](https://styleci.io/repos/80513668)
[![Total Downloads](https://img.shields.io/packagist/dt/RamyTalal/Exporter.svg?style=flat-square)](https://packagist.org/packages/RamyTalal/Exporter)

Export the Laravel environment file to a capable web server format.

## Install

``` bash
composer require RamyTalal/Exporter
```

## Usage

### Laravel

``` bash
php artisan env:export nginx --file=.env
```

### Standalone

``` php
use Talal\Exporter\Exporter;
use Talal\Exporter\Output\Nginx;

$file = file_get_contents('.env');
$exporter = new Exporter(new Nginx($file));

echo $exporter->output();
```

Nginx, Apache, IIS, lighttpd, and bash are supported.


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ramy@thinkquality.nl instead of using the issue tracker.

## Credits

- [Ramy Talal][https://ramy.nl]
- [All Contributors][../../contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
