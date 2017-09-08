<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateLinksTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'links', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string('name')->comment('网站名称');
			$table->string('url')->comment('链接地址');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'links' );
    }
}