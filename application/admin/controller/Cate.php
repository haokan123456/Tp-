<?php

namespace app\admin\controller;

use Catetree\Cates;
use think\Controller;

class Cate extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$cts = new Cates();
		$rs = $cts->getCates();
		$this->assign('cates', $rs);
	}

	public function index()
	{
		return $this->fetch('list');
	}

	public function add()
	{
		if (!request()->isPost()) {
			return $this->fetch();
		} else {
			$data = input('param.');
			$pid = $data['pid'];
			$level = db('cate')->field('level')->where('id', $data['pid'])->find();
			$lev = $level['level'] + 1;
			$data['level'] = $lev;
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
		$res = db('cate')->delete($id);
		if ($res) {
			$this->success('删除成功!');
		} else {
			$this->error('删除失败！');
		}
	}

	public function edit()
	{
		if (!request()->isPost()) {
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
