<?php

use yii\db\Migration;

/**
 * Class m180524_120533_create_table_user
 */
class m180524_120533_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180524_120533_create_table_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180524_120533_create_table_user cannot be reverted.\n";

        return false;
    }
    */
}
