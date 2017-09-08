<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreatePptTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'ppt', function ( Blueprint $table ) {
		    //title,url,displayorder,thumb
			$table->increments( 'id' );
			$table->string('title')->comment('幻灯片标题');
			$table->string('url')->comment('链接');
			$table->smallint('displayorder')->comment('显示排序');
			$table->string('thumb')->comment('预览图');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'ppt' );
    }
}