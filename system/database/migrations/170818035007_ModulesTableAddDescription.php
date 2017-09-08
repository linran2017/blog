<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class ModulesTableAddDescription extends Migration {
    //执行
	public function up() {
		Schema::table( 'modules', function ( Blueprint $table ) {
			$table->text('description')->add();
        });
    }

    //回滚
    public function down() {
            //Schema::dropField('modules', 'name');
    }
}