<?php
namespace frontend\controllers;

use frontend\models\User;
use Yii;
use yii\rest\ActiveController;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\web\Response;

class UserController extends ActiveController
{
    public $modelClass = User::class;

}
