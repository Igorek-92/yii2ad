<?php

namespace frontend\controllers;

use common\models\Branch;
use common\models\Places;
use frontend\models\City;
use yii\rest\ActiveController;

class PlacesController extends ActiveController
{
        public $modelClass = Places::class;

//    public function actionPlaces()
//    {
//        $customer = Branch::find()->all();
//
//        $orders = $customer['name'];
////       $we= Branch::find()->with('id');
//        var_dump($customer);
//        return $this->render('Places');
//   }
}
