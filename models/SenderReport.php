<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sender_reports".
 *
 * @property int $id
 * @property int $sender_report_type_id
 * @property string $email
 * @property int $company_id
 * @property int $active
 */
class SenderReport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sender_reports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sender_report_type_id', 'email', 'company_id', 'active'], 'required'],
            [['id', 'sender_report_type_id', 'company_id', 'active'], 'integer'],
            [['email'], 'string', 'max' => 255],
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
            'sender_report_type_id' => 'Sender Report Type ID',
            'email' => 'Email',
            'company_id' => 'Company ID',
            'active' => 'Active',
        ];
    }
}
