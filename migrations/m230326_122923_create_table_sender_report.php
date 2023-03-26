<?php

use yii\db\Migration;

/**
 * Class m230326_122923_create_table_sender_report
 */
class m230326_122923_create_table_sender_report extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("sender_reports", [
            "id" => $this->primaryKey(),
            "sender_report_type_id" => $this->integer(11)->notNull(),
            "email" => $this->string(255)->notNull(),
            "company_id" => $this->integer(255)->notNull(),
            "active" => $this->boolean()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("sender_reports");
    }
}
