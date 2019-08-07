<?php
namespace frontend\models;


use Yii;
use yii\web\Response;

class City extends \common\models\City
{
    public function init()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
    }
    public function fields()
    {
        return ['id_city', 'id_region', 'name'];
    }

    public function extraFields()
    {
        return [];
    }
}