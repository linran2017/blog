<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/17
 * Time: 12:22
 */

namespace modules\base\system;


use modules\HdProcessor;
use system\model\BaseContent;

class Processor extends HdProcessor {
    public function handler($contentId){
        //file_put_contents('./ll.php','1111');
        //如果关键词表中有记录就关键词回复，否则是默认回复
        if($contentId){
            //到回复内容表中查询内容并且回复
            $content=BaseContent::find($contentId);
            //没有text文本回复方法，调用父级里的text方法
            $this->text($content['content']);
        }
    }
}