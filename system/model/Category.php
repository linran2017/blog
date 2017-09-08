<?php namespace system\model;
use houdunwang\arr\Arr;
use houdunwang\db\Db;
use houdunwang\model\Model;
class Category extends Model{
	//数据表
	protected $table = "category";

	//允许填充字段
	protected $allowFill = ['*'];

	//禁止填充字段
	protected $denyFill = [ ];

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['catname','required','栏目必填',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['orderby','required','排序必填',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['orderby','regexp:/^\d{1,20}$/ ','排序必须为数字',self::MUST_VALIDATE,self::MODEL_BOTH]
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=true;
	public function getSelectData($id){
	    if($id){
            $categoryData=$this->get();
            $categoryData=$categoryData?$categoryData->toArray():[];
            $son=$this->getSon($categoryData,$id);
            $son[]=$id;
            $data=Db::table('category')->whereNotIn('id',$son)->get();
        }else{
	        $data=$this->get();
	        $data=$data?$data->toArray():[];
        }
	    return Arr::tree($data,'catname','id','pid');
    }

	//获取所有的子集
    public function getSon($data,$id){
        static $son=[];
        foreach ($data as $v){
            if($v['pid']==$id){
                $son[]=$v['id'];
                $this->getSon($data,$v['id']);
            }
        }
        return $son;
    }
}
