<?php

use app\models\SenderReportType;
use yii\db\Migration;

/**
 * Class m230326_122754_create_table_sender_report_type
 */
class m230326_122754_create_table_sender_report_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("sender_report_types", [
            "id" => $this->integer(11)->notNull()->unique(),
            "name" => $this->string(255)->notNull(),
            "active" => $this->boolean()->notNull(),
        ]);

        $this->seed();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("sender_report_types");
    }

    private function seed()
    {
        $types = ["1" => "Ежедневний отчет", "2" => "Ежемесячный отчет"];

        foreach ($types as $id => $type)
        {
            $senderReportType = new SenderReportType();
            $senderReportType->id = $id;
            $senderReportType->name = $type;
            $senderReportType->active = 1;
            $senderReportType->save();
        }
    }
}
