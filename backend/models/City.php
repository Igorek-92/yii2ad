<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property string $id_city
 * @property string $id_region
 * @property string $id_country
 * @property string $name
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_region', 'id_country'], 'required'],
            [['id_region', 'id_country'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_city' => 'Id City',
            'id_region' => 'Id Region',
            'id_country' => 'Id Country',
            'name' => 'Name',
        ];
    }
}
