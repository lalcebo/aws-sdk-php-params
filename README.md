# AWS SDK PHP Params

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Workflow][ico-workflow]][link-workflow]
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

#### Examples

```php
# Athena
use Aws\Sdk;
use Lalcebo\Aws\Params\Athena\Actions\StartQueryExecution;
use Lalcebo\Aws\Params\Athena\DataTypes\QueryExecutionContext;
use Lalcebo\Aws\Params\Athena\DataTypes\ResultConfiguration;

try {
    $sdk = new Sdk([
        'region' => 'us-west-2',
        'version' => 'latest'
    ]);
    
    $athenaClient = $sdk->createAthena();
    
    $startQueryExecution = new StartQueryExecution(
        'SELECT * FROM tbl',
        bin2hex(random_bytes(64)),
        new QueryExecutionContext('catalogName', 'dbName'),
        new ResultConfiguration(null, 's3://athena-result-bucket/')
    );
    
    $result = $athenaClient->startQueryExecution($startQueryExecution->toArray());
    print_r($result);
} catch (Throwable $e) {
    echo $e->getMessage();
}
```

```php
# DynamoDB
use Aws\Sdk;
use Lalcebo\Aws\Params\DynamoDB\Actions\CreateTable;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\AttributeDefinition;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\KeySchemaElement;
use Lalcebo\Aws\Params\DynamoDB\DataTypes\ProvisionedThroughput;

try {
    $sdk = new Sdk([
        'endpoint' => 'http://localhost:8000',
        'region' => 'us-west-2',
        'version' => 'latest'
    ]);
    
    $dynamodb = $sdk->createDynamoDb();
    
    $createTable = new CreateTable(
        'Music',
        [
            new AttributeDefinition('Artist', AttributeDefinition\AttributeType::STRING),
            new AttributeDefinition('SongTitle', AttributeDefinition\AttributeType::STRING),
        ],
        [
            new KeySchemaElement('Artist', KeySchemaElement\KeyType::HASH),
            new KeySchemaElement('SongTitle', KeySchemaElement\KeyType::RANGE),
        ],
        null,
        null,
        null,
        new ProvisionedThroughput(10, 5)
    );
    
    $result = $dynamodb->createTable($createTable->toArray());
    print_r($result);
} catch (Throwable $e) {
    echo $e->getMessage();
}
```

## About

I'll try to maintain this project as simple as possible, but pull requests are welcomed!

## License

The MIT License (MIT). Please see [License File][link-license] for more information.

[ico-version]: https://img.shields.io/packagist/v/lalcebo/aws-sdk-php-params.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/lalcebo/aws-sdk-php-params.svg?style=flat-square
[ico-workflow]: https://img.shields.io/github/workflow/status/lalcebo/aws-sdk-php-params/Build?style=flat-square

[link-packagist]: https://packagist.org/packages/lalcebo/aws-sdk-php-params
[link-license]: LICENSE
[link-downloads]: https://packagist.org/packages/lalcebo/aws-sdk-php-params
[link-workflow]: https://github.com/lalcebo/sdk-php-helpers/actions/workflows/build.yml
