<?php namespace system\database\seeds;
use houdunwang\database\build\Seeder;
use houdunwang\db\Db;
class CategoryTableSeeder extends Seeder {
    //执行
	public function up() {
        $data=[
            ['catname'=>'娱乐','pid'=>0],
            ['catname'=>'KTV','pid'=>1],
            ['catname'=>'运动','pid'=>0],
            ['catname'=>'足球','pid'=>3],
            ['catname'=>'篮球','pid'=>3],
        ];
        foreach ($data as $v){
            Db::table('category')->insert($v);
        }
    }
    //回滚
    public function down() {

    }
}