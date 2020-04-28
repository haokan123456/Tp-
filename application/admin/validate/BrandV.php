<?php
namespace app\admin\validate;

use think\validate;

class BrandV extends validate
{
    protected $rule = [
        'brand_name' => 'require',
        'brand_url' => 'url',
    ];

    protected $message = [
        'brand_name.require' => '品牌名称不能为空',
        'brand_url' => '品牌链接不是有效的URL',
    ];
}
