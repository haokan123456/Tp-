<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"D:\phpStudy\WWW\TpShop\public/../application/admin\view\brand\edit.html";i:1588206545;s:62:"D:\phpStudy\WWW\TpShop\application\admin\view\common\head.html";i:1588206545;s:62:"D:\phpStudy\WWW\TpShop\application\admin\view\common\left.html";i:1588206545;s:62:"D:\phpStudy\WWW\TpShop\application\admin\view\common\foot.html";i:1588206545;}*/ ?>
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
        <link href="/tpshop/public/static/admin/style/beyond.min.css" rel="stylesheet">
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
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                <span class="menu-text">
                    文章管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/index'); ?>">
                        <span class="menu-text">
                            文章分类 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin/document/index.html">
                        <span class="menu-text">
                            文章管理 </span>
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
                            <li class="active">控制面板>新增品牌</li>
                        </ul>
                    </div>
                    <!-- /Page Breadcrumb -->

                    <!-- Page Body -->
                    <div class="page-body">
                        <form role="form" class='form-horizontal' action="" method='POST' enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $brand['id']; ?>">
                            <div class="form-group">
                                <label for="definpu" class='col-sm-2 control-label'>商品品牌</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="brand_name" name='brand_name'
                                        placeholder="" value="<?php echo $brand['brand_name']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="definpu" class='col-sm-2 control-label'>品牌网址</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="brand_url" name='brand_url'
                                        placeholder="" value="<?php echo $brand['brand_url']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="definpu" class='col-sm-2 control-label'>品牌logo</label>
                                <div class="col-sm-8">
                                    <input type="file" class="" id="brand_img" placeholder="" name='brand_img'
                                        style='float:left'>
                                    <?php if($brand['brand_img']!=""): ?>
                                    <img src="/tpshop/public/static/uploads/<?php echo $brand['brand_img']; ?>" alt="" height='35'>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="definpu" class='col-sm-2 control-label'>品牌描述</label>
                                <div class="col-sm-8">
                                    <textarea name="brand_description" id="brand_description" cols="30" rows="10"
                                        style='width: 100%;resize:none;'><?php echo $brand['brand_description']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="definpu" class='col-sm-2 control-label'>品牌状态</label>
                                <div class="col-sm-8">
                                    <div class="radio">
                                        <label>
                                            <input name="status" type="radio" class="colored-blue" value="1" <?php if($brand['status']==1): ?>checked<?php endif; ?>> <span class="text">显示</span>
                                        </label>
                                        <label>
                                            <input name="status" type="radio" class="colored-blue" value='0' <?php if($brand['status']==0): ?>checked<?php endif; ?>> <span class="text">隐藏</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-sm-2"></span>
                                <div class="col-sm-8">
                                    <input class='btn btn-success shiny' type="submit" value="保存信息">
                                    <a class='btn btn-primary shiny' href="<?php echo url('index'); ?>">　返回　</a>
                                </div>
                            </div>
                        </form>
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
