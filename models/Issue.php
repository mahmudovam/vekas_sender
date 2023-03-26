<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "issues".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property string|null $completed_at
 * @property string|null $deadline_at
 * @property string|null $source
 * @property float|null $spent_time_total
 * @property string|null $planned_reaction_at
 * @property string|null $reacted_at
 * @property string|null $updated_at
 * @property string|null $delayed_to
 * @property int|null $company_id
 * @property int|null $group_id
 * @property int|null $service_object_id
 * @property string $type
 * @property string|null $priority
 * @property string|null $status
 * @property string|null $old_status
 * @property string|null $address
 * @property string|null $observers
 * @property string|null $contact
 * @property string|null $author
 */
class Issue extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'issues';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'description', 'created_at', 'type'], 'required'],
            [['id', 'company_id', 'group_id', 'service_object_id'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'completed_at', 'deadline_at', 'planned_reaction_at', 'reacted_at', 'updated_at', 'delayed_to', 'type', 'priority', 'status', 'old_status', 'observers', 'contact', 'author'], 'safe'],
            [['spent_time_total'], 'number'],
            [['title', 'address'], 'string', 'max' => 255],
            [['source'], 'string', 'max' => 100],
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
            'title' => 'Title',
            'description' => 'Description',
            'created_at' => 'Created At',
            'completed_at' => 'Completed At',
            'deadline_at' => 'Deadline At',
            'source' => 'Source',
            'spent_time_total' => 'Spent Time Total',
            'planned_reaction_at' => 'Planned Reaction At',
            'reacted_at' => 'Reacted At',
            'updated_at' => 'Updated At',
            'delayed_to' => 'Delayed To',
            'company_id' => 'Company ID',
            'group_id' => 'Group ID',
            'service_object_id' => 'Service Object ID',
            'type' => 'Type',
            'priority' => 'Priority',
            'status' => 'Status',
            'old_status' => 'Old Status',
            'address' => 'Address',
            'observers' => 'Observers',
            'contact' => 'Contact',
            'author' => 'Author',
        ];
    }
}
