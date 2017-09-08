<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class ArticleTableAddKeywords extends Migration {
    //执行
	public function up() {
		Schema::table( 'article', function ( Blueprint $table ) {
			//$table->string('name', 50)->add();
            $table->string('wechat_keyword')->add();
        });
    }

    //回滚
    public function down() {
            //Schema::dropField('article', 'name');
    }
}