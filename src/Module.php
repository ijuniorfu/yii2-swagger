<?php

namespace Junior\Yii2Swagger;

/**
 * swagger module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'Junior\Yii2Swagger\controllers';

    public $scanDir;

    public $jsonUrl;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        // custom initialization code goes here
    }
}
