<?php

use yii\db\Migration;

/**
 * Class m230326_065956_create_table_issues
 */
class m230326_065956_create_table_issues extends Migration
{
    public function safeUp()
    {
        $this->createTable("issues", [
            "id" => $this->integer(11)->notNull()->unique(),
            "title" => $this->string(255)->notNull(),
            "description" => $this->text()->notNull(),
            "created_at" => $this->dateTime()->notNull(),
            "completed_at" => $this->dateTime(),
            "deadline_at" => $this->dateTime(),
            "source" => $this->string(100),
            "spent_time_total" => $this->decimal(25,15),
            "planned_reaction_at" => $this->dateTime(),
            "reacted_at" => $this->dateTime(),
            "updated_at" => $this->dateTime(),
            "delayed_to" => $this->dateTime(),
            "company_id" => $this->integer(11),
            "group_id" => $this->integer(11),
            "service_object_id" => $this->integer(11),
            "type" => $this->json()->notNull(),
            "priority" => $this->json(),
            "status" => $this->json(),
            "old_status" => $this->json(),
            "address" => $this->string(),
            "observers" => $this->json(),
            "contact" => $this->json(),
            "author" => $this->json(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("issues");
    }
}
