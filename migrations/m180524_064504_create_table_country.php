<?php

use yii\db\Migration;

/**
 * Class m180524_064504_create_table_country
 */
class m180524_064504_create_table_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('country',[
            'id'=>$this->primaryKey()->unsigned(),
            'code'=>$this->string(2)->unique(),
            'name'=>$this->string(80),
            'phonecode'=>$this->integer(5),
            'lat'=>$this->string(45)->notNull(),
            'lng'=>$this->string(45)->notNull()
        ]);

        /*$this->insert('country',[
            'code'=>'DE',
            'name'=>'Germany',
            'phonecode'=>'49',
            'lat'=>'11111111',
            'lng'=>'222222'
        ]);*/
        $this->batchInsert('country',['id','code','name','phonecode','lat','lng'],[
            ['1','AF','afghan','93','33.55','67.553'],
            ['2','EU','afghan','93','33.55','67.553'],
            ['3','US','afghan','93','33.55','67.553'],
            ['4','UK','afghan','93','33.55','67.553'],
            ['5','IN','afghan','93','33.55','67.553']
        ]);
    }

    /*
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('country');
       $this->dropTable('country');
    }

    
    // Use up()/down() to run migration code without a transaction.
    /*public function up()
    {
       
    }

    public function down()
    {
        //echo "m180524_064504_create_table_country cannot be reverted.\n";
        
        //return false;
    }*/
    
}
