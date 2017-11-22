<?php

use yii\db\Migration;

/**
 * Class m171122_123328_insert_user_table
 */
class m171122_123328_insert_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('user',array(
            'email'=>'demo@d.d',
            'first_name' =>'Demo',
            'second_name' =>'Demo',
            'age' =>'18',
            'gender' =>'1',
            'photo' => '/web/uploads/1511306020973295.gif',
            'photo_thumb' => '/web/uploads/thumbs/1511306020973295.gif',
            'auth_key' => 'U4aovzA2mm7mPjZOMI3ByHzEFOBdf8eB',
            'status' => '10',
            'created_at' => '1511306727',
            'updated_at' => '1511306727',
            'password_hash' => '$2y$13$Abxi9zIggV8M/XV0YjdtiO1s3uEQGtabg2cVttN9v35jASMuu9KHe',
        ));
        $this->insert('user',array(
            'email'=>'admin@a.a',
            'first_name' =>'Admin',
            'second_name' =>'Admin',
            'age' =>'34',
            'gender' =>'1',
            'photo' => '/web/uploads/1511306020973295.gif',
            'photo_thumb' => '/web/uploads/thumbs/1511306020973295.gif',
            'auth_key' => '6GgUhhRYIVPBdBlpwHKNr7Oww18ekaZ6',
            'status' => '10',
            'created_at' => '1511306028',
            'updated_at' => '1511306028',
            'password_hash' => '$2y$13$VEXvYgM1VjnGVXsOlELnmunBMEe6nrpJcBht5ukrbgKhkpFv5j6Hm',
        ));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171122_123328_insert_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171122_123328_insert_user_table cannot be reverted.\n";

        return false;
    }
    */
}
