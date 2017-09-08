<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateArticleTable extends Migration {
    //执行
	public function up() {
        //title,click,description,content,source(来源),author(作者),
        //orderby,linkurl,keywords,iscommend(是否推荐),
        //ishot(是否热门,thumb,category_cid(和栏目表的关联字段),
        //isrecycle（是否在回收站）
		Schema::create( 'article', function ( Blueprint $table ) {
			$table->increments( 'aid' )->comment('主键');
			$table->char('title')->comment('文章标题');
			$table->smallint('click')->comment('点击数');
			$table->string('description')->comment('描述');
			$table->text('content')->comment('正文');
			$table->string('source')->comment('文章来源');
			$table->string('author',20)->comment('作者');
			$table->smallint('orderby')->comment('排序');
			$table->string('linkurl')->comment('跳转链接');
			$table->string('keywords')->comment('关键字');
			$table->tinyInteger('iscommend')->comment('是否推荐');
			$table->tinyInteger('ishot')->comment('是否热门');
			$table->tinyInteger('isrecycle')->comment('是否在回收站');
			$table->string('thumb')->comment('预览图');
			$table->integer('category_id')->comment('所属栏目id');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'article' );
    }
}