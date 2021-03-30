# AWS SDK PHP Params

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![CI Workflow][ico-workflow]][link-workflow]
[![Software License][ico-license]][link-license]

## Introduction

The AWS SDK for PHP uses arrays associated with very specific structures as arguments to its methods, this leads to a a great dependency on the documentation to create these arrays, what are the optional keys, their possible values, etc. This package provides objects for building request parameters for AWS low-level API.

## Requirements

This package requires:

- PHP **^7.3** | **^8.0**

## Installation

To get started, install the package through Composer:

```shell
composer require lalcebo/aws-sdk-php-params
```

## About

I'll try to maintain this project as simple as possible, but pull requests are welcomed!

## License

The MIT License (MIT). Please see [License File][link-license] for more information.

[ico-version]: https://img.shields.io/packagist/v/lalcebo/aws-sdk-php-params.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/lalcebo/aws-sdk-php-params.svg?style=flat-square
[ico-workflow]: https://img.shields.io/github/workflow/status/lalcebo/aws-sdk-php-params/CI?style=flat-square

[link-packagist]: https://packagist.org/packages/lalcebo/aws-sdk-php-params
[link-license]: LICENSE
[link-downloads]: https://packagist.org/packages/lalcebo/aws-sdk-php-params
[link-workflow]: https://github.com/lalcebo/aws-sdk-php-params/actions/workflows/ci.yml
