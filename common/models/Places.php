<?php

namespace common\models;

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
class Places extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'places';
    }
//    public function getBranch() {
//        return $this->hasOne(Branch::className(), ['id'=> 'places_id']);
//    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'descriptions', 'image'], 'required'],
            [['name', 'descriptions', 'image'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'descriptions' => 'Descriptions',
            'image' => 'Image',
        ];
    }

}
