# Laravel Passport Views

[![Latest Version on Packagist](https://img.shields.io/packagist/v/luigel/laravel-passport-views.svg?style=flat-square)](https://packagist.org/packages/luigel/laravel-passport-views)
[![StyleCI](https://github.styleci.io/repos/310862215/shield?branch=master)](https://github.styleci.io/repos/310862215?branch=master)
[![Quality Score](https://img.shields.io/scrutinizer/g/luigel/laravel-passport-views.svg?style=flat-square)](https://scrutinizer-ci.com/g/luigel/laravel-passport-views)
[![Total Downloads](https://img.shields.io/packagist/dt/luigel/laravel-passport-views.svg?style=flat-square)](https://packagist.org/packages/luigel/laravel-passport-views)

Since Laravel Passport v10.0.1 they removed the vue components in the repository you can check the [Merge Request here.](https://github.com/laravel/passport/pull/1352) So I decided to create a simple package that publishes the Vue component that they created previously.

## Installation

You can install the package via composer:

```bash
composer require luigel/laravel-passport-views
```

## Usage

publish the views in your project.

```bash
php artisan vendor:publish --tag="laravel-passport-views" --force
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

### TODO or Need help.

[ ] Make a gate and it should be customizable.
[ ] Use tailwind instead of bootstrap.
[ ] Improve layout.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email rigel20.kent@gmail.com instead of using the issue tracker.

## Credits

-   [Rigel Kent Carbonel](https://github.com/luigel)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
