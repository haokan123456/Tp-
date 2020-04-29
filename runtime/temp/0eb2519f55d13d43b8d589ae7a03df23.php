<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\phpStudy\WWW\TpShop\public/../application/admin\view\brand\index.html";i:1587088620;s:62:"D:\phpStudy\WWW\TpShop\application\admin\view\common\head.html";i:1587084504;s:62:"D:\phpStudy\WWW\TpShop\application\admin\view\common\left.html";i:1587641499;s:62:"D:\phpStudy\WWW\TpShop\application\admin\view\common\foot.html";i:1587088294;}*/ ?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>童老师ThinkPHP交流群：484519446</title>

        <meta name="description" content="Dashboard">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--Basic Styles-->
        <link href="/tpshop/public/static/admin/style/bootstrap.css" rel="stylesheet">
        <link href="/tpshop/public/static/admin/style/font-awesome.css" rel="stylesheet">
        <link href="/tpshop/public/static/admin/style/weather-icons.css" rel="stylesheet">

        <!--Beyond styles-->
        <link id="beyond-link" href="/tpshop/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
        <link href="/tpshop/public/static/admin/style/demo.css" rel="stylesheet">
        <link href="/tpshop/public/static/admin/style/typicons.css" rel="stylesheet">
        <link href="/tpshop/public/static/admin/style/animate.css" rel="stylesheet">

    </head>

    <body>
        <!-- 头部 -->
        <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/tpshop/public/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/tpshop/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>


        <!-- /头部 -->

        <div class="main-container container-fluid">
            <div class="page-container">
                <!-- Page Sidebar -->
                <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->


        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    商品管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商品列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            添加商品 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Brand/index'); ?>">
                        <span class="menu-text">
                            商品品牌 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商品分类 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商品类型 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商品回收站 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    促销管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            团购活动 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            积分商城 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            优惠券 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    订单管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            订单列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            订单查询 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    会员管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            会员列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            会员等级 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            会员留言 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="https://chuanke.baidu.com/s2260700.html" target="_blank">
                <i class="menu-icon fa fa-film"></i>

                <span class="menu-text">
                    权限管理</span>

                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    系统设置 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            商店设置 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            会员注册项设置 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            支付方式设置 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    数据库管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            数据备份 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    短信管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            发送短信 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            短信签名 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>

                <!-- /Page Sidebar -->
                <!-- Page Content -->
                <div class="page-content">
                    <!-- Page Breadcrumb -->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumb">
                            <li class="active">控制面板>商品品牌</li>
                        </ul>
                    </div>
                    <!-- /Page Breadcrumb -->

                    <!-- Page Body -->
                    <div class="page-body">
                        <div class="col-xs-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    商品品牌
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>
                                                id
                                            </th>
                                            <th>
                                                品牌名称
                                            </th>
                                            <th>
                                                品牌链接
                                            </th>
                                            <th>
                                                缩略图
                                            </th>
                                            <th>
                                                操作
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($brand as $v): ?>
                                        <tr>
                                            <td>
                                                <?php echo $v['id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $v['brand_name']; ?>
                                            </td>
                                            <td>
                                                <?php if($v['brand_url']!=""): ?>
                                                <a href="<?php echo $v['brand_url']; ?>" target="__blank"><?php echo $v['brand_url']; ?></a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($v['brand_img']!=""): ?>
                                                <img src="/tpshop/public/static/uploads/<?php echo $v['brand_img']; ?>" alt="" height='35'>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo url('edit',array('bid'=>$v['id'])); ?>"
                                                    class="btn btn-primary">编辑</a>
                                                <a href="javascript:void(0);"
                                                    onclick="warning('是否真的要删除？','<?php echo url('del',array('bid'=>$v['id'])); ?>')"
                                                    class="btn btn-default shiny">删除</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>


                            </div>

                        </div>
                    </div>


                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        </div>

        <!--Basic Scripts-->
<script src="/tpshop/public/static/admin/style/jquery_002.js"></script>
<script src="/tpshop/public/static/admin/style/bootstrap.js"></script>
<script src="/tpshop/public/static/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="/tpshop/public/static/admin/style/beyond.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
<script src="/tpshop/public/static/admin/style/layer.js"></script>


<script>
    function warning(str, url) {
        var n = confirm(str);
        if (n) {
            window.location.href = url;
        }
    }

</script>




    </body>

</html>
