<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateCategoryTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'category', function ( Blueprint $table ) {
			$table->increments( 'id' );
            $table->char('catname',20)->comment('栏目名');
            $table->smallint('pid')->comment('父id');
            $table->string('description')->comment('描述');
            $table->string('linkurl')->comment('跳转链接');
            $table->smallint('orderby')->comment('排序字段');
            $table->string('thumb')->comment('预览图');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'category' );
    }
}