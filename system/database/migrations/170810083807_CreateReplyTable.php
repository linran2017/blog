<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateReplyTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'base_content', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->text('content')->comment('回复内容');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'reply' );
    }
}