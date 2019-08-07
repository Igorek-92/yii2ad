<?php

namespace common\models;

use Yii;
/**
 * This is the model class for table "branch".
 *
 * @property int $id
 * @property string $name
 * @property int $places_id
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branch';
    }
//    public function getPlaces() {
//        return $this->hasMany(Places::className(), ['places_id'=>'id']);
//    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'places_id'], 'required'],
            [['name'], 'string'],
            [['places_id'], 'integer'],
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
            'places_id' => 'Places ID',
        ];
    }
}
