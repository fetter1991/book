<?php
namespace Home\Controller;
use Think\Controller;
use QL\QueryList;

class QueryController extends Controller {
	public function index(){
		//采集某页面所有的图片
		$data = QueryList::Query('http://cms.querylist.cc/bizhi/453.html',['image' => ['img','src']])->data;
		//打印结果
		print_r($data);
	}
}