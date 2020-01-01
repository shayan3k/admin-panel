<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> مدیر |  پنل</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
  .register-box{
    width: 500px;
    direction: rtl;
  }
</style>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>ویرایش</b>کاربر</a>
  </div>

  <div class="register-box-body" >
    <!-- <p class="login-box-msg">Register a new membership</p> -->

    <form action="../../index.html" method="post">
      <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="نام ">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="نام خانوادگی ">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="نام کاربری ">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="ایمیل">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <!-- <div class="form-group has-feedback"> -->
        <select  class="form-control" placeholder="کد کشور" >
          <option value="+66"> +60</option>
          <option value="+66">کد کشور</option>
          <option value="+45">+45</option>
          <option value="+32">+32</option>
          </select>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <br>
      
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="موبایل ">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <select  class="form-control" placeholder="واحد پول" >
          <option value="+66">واحد پول</option>
          <option value="+60">usr</option>
          <option value="+45">drm</option>
          <option value="+32">lir</option>
          </select>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <br>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="شماره شبا ">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="بانک ">
              <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <select  class="form-control" placeholder=" گروه کاربری" >
                <option value="+66"> گروه کاربری</option>
                <option value="+60">1</option>
                <option value="+45">2</option>
                <option value="+32">3</option>
                </select>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              <br>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> با ذخیره تغییرات  <a href="#">موافقم</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">ذخیره</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div> -->

    <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
