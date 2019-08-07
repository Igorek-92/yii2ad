<?php
namespace frontend\controllers;

use frontend\models\City;
use yii\rest\ActiveController;

class CityController extends ActiveController
{
    public $modelClass = City::class;
}
