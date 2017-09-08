<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class ChangeWechatTable extends Migration {
    //执行
	public function up() {
		Schema::table( 'wechat', function ( Blueprint $table ) {
			//$table->string('name', 50)->add();
            $table->text('content')->change();
        });
    }

    //回滚
    public function down() {
            //Schema::dropField('wechat', 'name');
    }
}