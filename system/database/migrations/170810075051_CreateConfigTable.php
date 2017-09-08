<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateConfigTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'config', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->text('content')->comment('配置项');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'config' );
    }
}