<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;
use houdunwang\database\Schema;
class CreateUserTable extends Migration {
    //执行
	public function up() {
		Schema::create( 'user', function ( Blueprint $table ) {
			$table->increments( 'uid' )->comment('主键');
			$table->char('username')->comment('用户名');
			$table->char('password')->comment('密码');
            $table->timestamps();
        });
    }

    //回滚
    public function down() {
        Schema::drop( 'user' );
    }
}