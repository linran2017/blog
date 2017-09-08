<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/17
 * Time: 12:22
 */

namespace modules\article\system;


use modules\HdProcessor;
use system\model\Article;
use system\model\BaseContent;

class Processor extends HdProcessor {
    public function handler($contentId){
        //如果关键词表中有记录就关键词回复，否则默认回复
        if($contentId){
            //查询的文章必须是不在回收站里，aid为关键词表里对应的content_id
            $where=[
                ['aid',$contentId],
                ['isrecycle',0]
            ];
            $data=Article::where($where)->first();
//            file_put_contents('./l.php',print_r($data),true);
            //如果能检索到文章就图文回复
            if($data){
                $news=array(
                    array(
                        'title'=>$data['title'],
                        'discription'=>$data['discription'],
                        'picurl'=>__ROOT__.'/'.$data['thumb'],
                        'url'=>__ROOT__.'/a_'.$data['aid'].'.html '
                    )
                );
//                file_put_contents('./ss.php',print_r($news,true));
                //没有news图文消息的方法就去父级里找
                $this->news($news);
            }
        }
    }
}