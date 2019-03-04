
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admin/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/static/admin/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admin/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admin/css/fonts/icomoon/style.css" media="screen">


<link rel="stylesheet" type="text/css" href="/static/admin/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admin/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admin/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/admin/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/admin/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admin/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/admin/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admin/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admin/css/page_page.css" media="screen">
<title>MWS Admin - Dashboard</title>

</head>

<body>

    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/static/admin/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            
            
         
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/static/admin/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        你好, 管理员
                    </div>
                    <ul>
                        <li><a href="#">头像</a></li>
                        <li><a href="#">更换密码</a></li>
                        <li><a href="index.html">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-users"></i> 用户管理</a>
                        <ul>
                            <li><a href="/admin/users">用户列表</a></li>
                            <li><a href="/admin/users/create">用户添加</a></li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="icon-th-list"></i> 类别管理</a>
                        <ul>
                            <li><a href="/cates">类别列表</a></li>
                            <li><a href="/cates/create">类别添加</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-lollipop"></i> 商品管理</a>
                        <ul>
                            <li><a href="/goods">商品列表</a></li>
                            <li><a href="/goods/create">商品添加</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-cd"></i> 轮播图管理</a>
                        <ul>
                            <li><a href="/lbts">轮播图列表</a></li>
                            <li><a href="/lbts/create">轮播图添加</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-globe"></i> 推荐位管理</a>
                        <ul>
                            <li><a href="/tjws">推荐位列表</a></li>
                            <li><a href="/tjws/create">推荐位添加</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-tools"></i> 网站配置管理</a>
                        <ul>
                            <li><a href="/sets">网站信息列表</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- 内容 开始 -->
        <div id="mws-container" class="clearfix">
            <!-- 显示错误消息 开始 -->
            @if (session('success'))
                <div class="mws-form-message success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mws-form-message error">
                    {{ session('error') }}
                </div>
            @endif
             <!-- 显示错误消息 结束 -->
             
            @section('content')

            @show
        </div>
        <!-- 内容 结束 -->
           
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/static/admin/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/static/admin/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/static/admin/js/libs/jquery.placeholder.min.js"></script>
    <script src="/static/admin/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/static/admin/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/static/admin/jui/jquery-ui.custom.min.js"></script>
    <script src="/static/admin/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/static/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/static/admin/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/static/admin/plugins/flot/jquery.flot.min.js"></script>
    <script src="/static/admin/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/static/admin/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/static/admin/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/static/admin/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/static/admin/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/static/admin/plugins/validate/jquery.validate-min.js"></script>
    <script src="/static/admin/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/static/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/admin/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/static/admin/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/static/admin/js/demo/demo.dashboard.js"></script>

</body>
</html>