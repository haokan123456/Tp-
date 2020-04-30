<?php

namespace app\admin\controller;

use Catetree\Cates;
use think\Controller;

class Cate extends Controller
{

	public function index()
	{
		if(!request()->isPost()){
			$cts = new Cates();
			$rs = $cts->getCates();
			$this->assign('cates', $rs);
			return $this->fetch('list');
		}
		else{
			$data=input('param.');
			$obj=db('cate');
			
			foreach($data['sort'] as $k=>$v){
				$obj->update(['sort'=>$v,'id'=>$k]);
			}
			$data=$obj->order('sort asc')->select();
			$cts=new Cates();
			$dd=$cts->sort($data);
			$this->assign('cates',$dd);
			return $this->fetch('list');
		}
	}

	public function add()
	{
		if (!request()->isPost()) {
			$cts = new Cates();
			$rs = $cts->getCates();
			$this->assign('cates', $rs);
			return $this->fetch();
		} else {			
			$data = input('param.');
			if(in_array($data['pid'],[1,4])){
				$this->error('系统分类不能作为上级分类！');
			}
			if($data['pid']==3){
				$data['cate_type']=2;
			}
			$cateId=db('cate')->field('pid')->find($data['pid']);
			$cateId=$cateId['pid'];
			if($cateId=='3'){
				$this->error('系统分类不能作为上级分类！');
			}

			$pid = $data['pid'];
			$rs = db('cate')->insert($data);
			if ($rs) {
				$this->success('添加成功!');
			} else {
				$this->error('添加失败！');
			}
		}
	}

	public function del()
	{
		$id = input('param.id');
		$ct=new Cates();
		$sonids=$ct->sonids($id);
		$sonids[]=(int)$id;
		// halt($sonids);
		$res = db('cate')->delete($sonids);
		if ($res) {
			$this->success('删除成功!');
		} else {
			$this->error('删除失败！');
		}
	}

	public function edit()
	{
		if (!request()->isPost()) {
			$cts = new Cates();
			$rs = $cts->getCates();
			$this->assign('cates', $rs);
			$id = input('param.id');
			$data = db('cate')->find($id);
			$this->assign('cate', $data);
			return $this->fetch();
		} else {
			$data = input('param.');

			$id = $data['id'];

			unset($data['id']);
			$res = db('cate')->where('id', $id)->update($data);
			if ($res) {
				$this->success('修改成功！');
			} else {
				$this->error('修改失败！');
			}
		}
	}
}
