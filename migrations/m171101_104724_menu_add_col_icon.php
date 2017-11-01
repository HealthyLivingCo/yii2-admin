<?php

use yii\db\Migration;
use mdm\admin\components\Configs;

class m171101_104724_menu_add_col_icon extends Migration
{
    public function safeUp()
    {
        $table = Configs::instance()->menuTable;
        $this->addColumn($table, 'icon', $this->string(128));
    }

    public function safeDown()
    {
        $table = Configs::instance()->menuTable;
        $this->dropColumn($table, 'icon');
    }
}
