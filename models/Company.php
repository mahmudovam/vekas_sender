<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property int $id
 * @property string $name
 * @property string|null $additional_name
 * @property int $active
 * @property string|null $parameters
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'active'], 'required'],
            [['id'], 'integer'],
            [['parameters', 'active'], 'safe'],
            [['name', 'additional_name'], 'string', 'max' => 255],
            [['id'], 'unique'],
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
            'additional_name' => 'Additional Name',
            'active' => 'Active',
            'parameters' => 'Parameters',
        ];
    }
}
