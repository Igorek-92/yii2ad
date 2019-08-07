<?php
namespace frontend\models;


use Yii;
use yii\web\Response;

class User extends \common\models\User
{
    public function init()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
    }

    public function fields()
    {
        return ['id', 'email', 'username', 'status'];
    }

    public function extraFields()
    {
        return [];
    }
}
