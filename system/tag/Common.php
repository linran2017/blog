<?php namespace system\tag;
use houdunwang\request\Request;
use houdunwang\view\build\TagBase;

class Common extends TagBase {
	/**
	 * 标签声明
	 * @var array
	 */
	public $tags = [
			'prev' => [ 'block' => false ],
            'next' => [ 'block' => false ],
            'links'=> [ 'block' => true, 'level' => 4 ],
			'category'  => [ 'block' => true, 'level' => 4 ],
            'arclist'  => [ 'block' => true, 'level' => 4 ],
	];
	//line 标签
	public function _line( $attr, $content, &$view ) {
		return 'link标签 测试内容';
	}

	//category标签,栏目
	public function _category( $attr, $content, &$view ) {
	    $pid=$attr['pid'];
	    $rows=$attr['rows']?$attr['rows']:10000;
	    //组合页面需要的字符串
        $str=<<<str
<?php
\$data=\system\model\Category::where('pid',$pid)->limit($rows)->get();
\$data=\$data?\$data->toArray():[];
foreach(\$data as \$v):
\$url=\$v['cover']?'/cover_':'/c_';
\$v['url']=\$url.\$v['id'].'.html';
?>
{$content}
<?php
endforeach;
?>
str;

		return $str;
	}

	//文章列表
    public function _arclist($attr,$content,&$view){
	    $rows=$attr['rows']?$attr['rows']:10000;
	    //cid可以不传，表示获取全部文章
        $cid=isset($attr['cid'])?$attr['cid']:0;
        $str=<<<str
<?php
if($cid){
\$where=[
['category_id',$cid],
['isrecycle',0]
];
    \$arcData=\system\model\Article::where(\$where)->limit($rows)->get();
}else{
    \$arcData=\system\model\Article::limit($rows)->get();
}
\$arcData=\$arcData?\$arcData->toArray():[];
foreach (\$arcData as \$v):
\$v['url']='a_'.\$v['aid'].'.html';
?>
{$content}
<?php
endforeach;
?>
str;
        return $str;

    }

    //友情链接
    public function _links($attr,$content,&$view){
        $rows=$attr['rows']?$attr['rows']:10000;
        $str=<<<str
<?php
\$data=\addons\links\model\Links::get();
\$data=\$data?\$data->toArray():[];
foreach(\$data as \$v):
?>
{$content}
<?php
endforeach;
?>
str;
        return $str;
    }

    //上一篇
    public function _prev($attr,$content,&$view){
        //12  3  56
        $aid = Request::get('aid');
        $str = <<<str
<?php
\$prevData = \system\model\Article::where('aid<' . $aid)->orderby('aid','DESC')->first();
if(\$prevData){
	echo "<a href='/a_{\$prevData["aid"]}.html'>{\$prevData['title']}</a>";
}else{
	echo '<span>没有了</span>';
}
?>
str;

        return $str;

    }

    //上一篇
    public function _next($attr,$content,&$view){
        //12  3  56
        $aid = Request::get('aid');
        $str = <<<str
<?php
\$nextData = \system\model\Article::where('aid>' . $aid)->orderby('aid','ASC')->first();
if(\$nextData){
	echo "<a href='/a_{\$nextData["aid"]}.html'>{\$nextData['title']}</a>";
}else{
	echo '<span>没有了</span>';
}
?>
str;

        return $str;

    }
}