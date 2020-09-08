<?php

namespace Junior\Yii2Swagger\controllers;

use yii\helpers\Url;
use yii\web\Controller;
use Yii;
use yii\web\Response;

/**
 * Default controller for the `swagger` module
 */
class DefaultController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions(): array
    {
        if (is_callable($this->module->scanDir)) {
            $scanDir = call_user_func($this->module->scanDir);
        } else {
            $scanDir = $this->module->scanDir;
        }
        return [
            'json' => [
                'class' => 'Junior\Yii2Swagger\actions\OpenAPIRenderer',
                'cache' => null,
                // Тhe list of directories that contains the swagger annotations.
                'scanDir' => $scanDir,
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        \Yii::$app->response->format = Response::FORMAT_HTML;
        $this->layout = false;
        $restUrl = $this->module->jsonUrl ? : Url::to(['default/json']);
        return $this->render('index', [
            'restUrl' => $restUrl,
        ]);
    }
}
