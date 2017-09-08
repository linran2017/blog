<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateKeywordsTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'keywords', function ( Blueprint $table ) {
		    //module(属于什么模块，例如base,student)，
            //content(关键词内容),content_id(关键词需要回复内容，
            //内容是一张独立的表，那必须知道关键词对应的是哪个内容)
            $table->increments( 'id' );
            $table->string('module')->comment('属于什么模块');
            $table->text('content')->comment('关键词内容');
           $table->smallint('content_id')->comment('回复内容编号');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'keywords' );
    }
}