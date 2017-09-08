<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/17
 * Time: 16:17
 */

namespace modules;


use system\model\Keywords;

trait Wechat{
    //关键词添加数据
    public function saveKeywords($data){
        $where=[
            ['module',$data['module']],
            ['content_id',$data['content_id']]
        ];
        $keywordsModel=Keywords::where($where)->first()?:new Keywords();
        $keywordsModel->save($data);
    }
}