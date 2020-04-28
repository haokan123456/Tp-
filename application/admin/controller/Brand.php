<?php

namespace app\admin\controller;

use think\Controller;



class Brand extends Controller
{
    public function index()
    {
        $data = db('brand')->select();        
        $this->assign('brand', $data);
        return $this->fetch('list');
    }

    public function add()
    {
        if (!request()->isPost()) {
            return $this->fetch();
        } else {
            $data = input('param.');
            $bnd = validate('Brand_v');

            if ($bnd->check($data)) {                
                $data['brand_img'] = $this->uploads();
                $res = db('brand')->insert($data);
                if ($res) {
                    $this->success('添加成功！','index');
                } else {
                    $this->error('添加失败！','index');
                }
            } else {
                $this->error($bnd->getError());
            }
        }
    }

    public function del()
    {
        $id = input('param.id');
        $res = db('brand')->delete($id);
        if ($res) {
            $this->success("删除成功！");
        } else {
            $this->error('删除失败！');
        }
    }

    public function edit()
    {
        if (request()->isPost()) {
            $data=input('param.');
            if($_FILES['brand_img']['tmp_name']){                
                $this->del_thumb($data['id']);
                $data['brand_img']=$this->uploads();
            }
            $id=$data['id'];
            unset($data['id']);
            $res=db('brand')->where('id',$id)->update($data);
            if($res!==false){
                $this->success('修改成功！','index');
            }
            else{
                $this->error('修改失败！','index');
            }
        } else {
            $bid = input('param.id');
            $data = db('brand')->where('id', $bid)->find();
            $this->assign('brand', $data);
            return $this->fetch();
        }
    }

    /**
     * 上传图片
     */
    public function uploads()
    {
        $file = request()->file('brand_img');

        if ($file) {
            $info = $file->move(IMG_UPLOADS);
            return $info->getSaveName();
        }
    }

    /**
     * 删除缩略图
     */
    public function del_thumb($id)
    {
        $pic=db('brand')->field('brand_img')->find($id);        
        $img=IMG_UPLOADS.'/'.$pic['brand_img'];
        if(is_file($img) and file_exists($img)){            
            @unlink($img);
        }
    }
}
