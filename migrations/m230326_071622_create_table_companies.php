<?php

use app\components\okdesk\Transport;
use app\models\Company;
use yii\db\Migration;

/**
 * Class m230326_071622_create_table_companies
 */
class m230326_071622_create_table_companies extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("companies", [
            "id" => $this->integer(11)->notNull()->unique(),
            "name" => $this->string(255)->notNull(),
            "additional_name" => $this->string(255),
            "active" => $this->boolean()->notNull(),
            "parameters" => $this->json()
        ]);

        $this->seed();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("companies");
    }

    private function seed()
    {
        $transport = new Transport();
        $companies = $transport->getCompanies();

        foreach ($companies as $company)
        {
            $Company = new Company();
            $Company->setAttributes($company);
            $Company->save();
        }
    }
}
