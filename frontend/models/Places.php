<?php

namespace frontend\models;

use frontend\controllers\PlacesController;
use Yii;
use yii\web\Response;


class Places extends \common\models\Places
{

    public function init()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
    }

    public function fields()
    {
        return ['id', 'name', 'descriptions', 'image'];
    }

    public function extraFields()
    {
        return ['places_id'];
    }
}
