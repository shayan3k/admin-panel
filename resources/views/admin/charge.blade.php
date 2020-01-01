<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> پنل|مدیر </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        #userReview td , #userReview th{
            border: none;
            border-bottom: 1px solid #888;
        }
        #userReview th{
            background: rgb(245, 207, 103);
            color: #fff;
        }
        #userReview tr:nth-child(odd){
            background: rgb(253, 238, 173);
        }
        #userReview tr:nth-child(even){
            background: lightyellow;
        }
        .row-btn{
            margin-right: 3px;
            margin-bottom: 30px;
            
        }
        .btn{
           margin-left: 5px;
        }
        .sp-n{
            font-size: 18px;
            font-weight: bold;
            color: rgb(87, 87, 87);
        }
        a{
            color:#fff;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>panel</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">شما4 پیام دارید</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user2-160x160.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                مدیر سایت
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user3-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                کاربر 1
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                کاربر 2
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user3-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                کاربر3
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                کاربر4
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">نمایش همه پیام ها</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">شما 10اطلاعیه دارید</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> امروز 5 نفر ثبت نام کردند
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that
                                            may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> شما پسورد خود را تغییر دادید
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">شما 9وظیفه دارید</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">نمایش همه وظایف</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">مدیر سایت </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    مدیر سایت -وب سایت
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">کاربران</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">پروفایل</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">خروج </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>مدیر سایت </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>داشبورد</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> داشبورد1 </a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>زبان </span>
                        <span class="pull-right-container">
              <span class="label label-primary pull-right">5</span>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="modals.html"><i class="fa fa-circle-o"></i> مدیریت زبان ها </a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i> اضافه کردن عبارت به زبان</a></li>
                        <li><a href="data.html"><i class="fa fa-circle-o"></i> ویرایش عبارت ها</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> ها ویرایش تیم</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> ویرایش لیگ ها</a></li>

                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-th"></i> <span>(تیکت ها(پشتیبانی</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-green">جدید</small>
            </span>
                    </a>
                </li>
              
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>شرط ها </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="if-all.html"><i class="fa fa-circle-o"></i> همه </a></li>

                        <li><a href="if-win.html"><i class="fa fa-circle-o"></i> برد سایت</a></li>
                        <li><a href="if-loss.html"><i class="fa fa-circle-o"></i> باخت سایت</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>مدیریت کاربران</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="register.html"><i class="fa fa-circle-o"></i> مرور و ویرایش کاربران
                        </a></li>
                        <li><a href="userReview.html"><i class="fa fa-circle-o"></i> گروه های کاربری </a></li>
                        <li><a href="ListManager.html"><i class="fa fa-circle-o"></i> اضافه کردن گروه کاربری</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>مالی</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="charge.html"><i class="fa fa-circle-o"></i> شارژ </a></li>
                        <li><a href="bardasht.html"><i class="fa fa-circle-o"></i> برداشت </a></li>
                        <li><a href="pay-day.html"><i class="fa fa-circle-o"></i> پرداخت </a></li>

                    </ul>
                </li>
              

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>مدیریت منو ها</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> هدر</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> هدر صفحه ورزشی و زنده</a></li>

                        <li><a href="#"><i class="fa fa-circle-o"></i> منو عمودی صفحه های ورزشی و زنده</a></li>

                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i> <span>مدیریت رویداد ها</span>
                                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="eventmaneger.html"><i class="fa fa-circle-o"></i> رویداد های تاپ </a></li>

                                <li><a href="eventmaneger-im.html"><i class="fa fa-circle-o"></i> رویداد های مهم</a></li>
                            </ul>
                        </li>
                        <li><a href=""><i class="fa fa-book"></i> <span>مدیریت و ویرایش صفحه راهنما</span></a>
                        </li>
                        <!-- <li class="header">LABELS</li>
                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
                    </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                  مالی
                <small>جدید</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>  شارژ</a></li>
                <!-- <li><a href="#">UI</a></li> -->
                <li class="active">   شارژ روزانه</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="container-fluid" dir="rtl" style="width: 85%;margin-top: 3em;">
            <div class="row">
                <h3>   شارژ</h3>
                <div class="row row-btn">
                    <button class="btn btn-primary"><a href="charge.html" > روزانه</a></button>
                    <button class="btn btn-success"><a href="charge-week.html"> هفتگی </a></button>
                    <button class="btn btn-warning"><a href="charge-mount.html">  ماهانه </a></button>

                </div>
            </div>
            
            <span class="sp-n">  شارژ های  روزانه : 1,250,000 </span>
            <div class="row ">
                <table id="userReview" width="100%" class="table  table-bordered table-hover text-center"
                       style="border:2px solid #888 !important;">
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>ID</th>
                        <th>نام و نام خانوادگی</th>
                        <th>  مبلغ</th>
                        <th>  تاریخ</th>
                        <th>  ساعت</th>
                        <th>  نام درگاه</th>

                        
                        

                        
                       
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>#1</td>
                        <td>رضا رسولی</td>
                        <td>2,000,000</td>
                        <td> 2019/08/20</td>
                        <td>12:00</td>
                        <td>درگاه1</td>

                
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>#2</td>
                        <td>رضا وکیلی</td>
                        <td>3,000,000</td>
                        <td> 2019/04/12</td>
                        <td>8:00</td>
                        <td>درگاه1</td>

                    </tr>

                    <tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>#3</td>
                            <td> ساناز عزیزی</td>
                            <td>5,000,000</td>
                            <td> 2019/09/20</td>
                            <td>14:00</td>
                        <td>درگاه2</td>

                     
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>#4</td>
                            <td> عباس قدیری</td>
                            <td>4,000</td>
                            <td> 2019/10/09</td>
                            <td>10:00</td>
                        <td>درگاه1</td>

            
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>#5</td>
                            <td> سپهر رزاقی</td>
                            <td>300,000</td>
                            <td> 2019/03/20</td>
                            <td>20:00</td>
                        <td>درگاه2</td>

                        </tr>
                     
                </table>
             
            

            </div>
         
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>ورژن</b> 2.4.0
        </div>
        <strong>محفوظ است &copy; 2019 <a href="index.html">f.echresh </a>.</strong> حق کپی و رایت برای
        reserved.
    </footer>

  
            </div>
            <!-- /.tab-pane -->
          
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
