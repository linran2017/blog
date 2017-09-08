<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateModulesTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'modules', function ( Blueprint $table ) {
			$table->increments( 'id' );
            $table->char('name',20)->comment('模快英文名');
            $table->string('title')->comment('模快名称');
            $table->string('resume')->comment('模块介绍');
            $table->char('author',20)->comment('作者');
            $table->string('preview')->comment('模块预览');
            $table->tinyInteger('is_system')->comment('是否为系统模块');
            $table->tinyInteger('is_wechat')->comment('是否为微信模块');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'modules' );
    }
}