<?php

namespace frontend\models;

use frontend\controllers\PlacesController;
use Yii;
use yii\web\Response;

/**
 * This is the model class for table "places".
 *
 * @property int $id
 * @property string $name
 * @property string $descriptions
 * @property string $image
 */
class Branch extends \common\models\Branch
{

    public function init()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
    }

    public function fields()
    {
        return ['id', 'name', 'places_id'];
    }

    public function extraFields()
    {
        return [];
    }
}