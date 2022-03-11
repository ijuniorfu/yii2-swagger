<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii2 Swagger Extension</h1>
    <br>
</p>

[![version](https://img.shields.io/packagist/v/ijuniorfu/yii2-swagger.svg?style=flat-square)](https://packagist.org/packages/ijuniorfu/yii2-swagger)
[![Download](https://img.shields.io/packagist/dt/ijuniorfu/yii2-swagger.svg?style=flat-square)](https://packagist.org/packages/ijuniorfu/yii2-swagger)
[![Issues](https://img.shields.io/github/issues/ijuniorfu/yii2-swagger.svg?style=flat-square)](https://github.com/ijuniorfu/yii2-swagger/issues)

[swagger-php](https://github.com/zircote/swagger-php) intergation with yii2.


Integration [swagger-ui](https://github.com/swagger-api/swagger-ui) with [swagger-php](https://github.com/zircote/swagger-php).


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require ijuniorfu/yii2-swagger
```

or add

```
"ijuniorfu/yii2-swagger": "~3.0.0"
```

to the require section of your `composer.json` file.


Usage
-----

Configure as below:

```
$config['modules']['swagger'] = [
    'class' => 'Junior\Yii2Swagger\Module',
    'scanDir' => [
        '@app/controllers',
        '@app/models',
    ],
];
```



Finally
----
__If there also some confused, you can refer the [Demo](https://github.com/lichunqiang/yii2-swagger-demo).__


License
-------
![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)
