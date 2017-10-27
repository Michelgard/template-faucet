<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Your Faucet | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=css_url('bootstrap.min')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=css_url('AdminLTE.min')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=css_url('icheck_blue')?>">
  <link rel="stylesheet" href="<?= assets('font-awesome-4.7.0/css/font-awesome.min.css') ?>">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><?=$param_nom_site?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <div id="infoMessage"><?=$message?></div>

    <?php echo form_open("login");?>
   
        <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-user-circle fa-fw"></i></span>
        <?=form_input(array('name'=>'login','class'=>'form-control', 'placeholder'=>'Name Admin', 'type'=>'text'));?>
        </div>
    
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <?=form_input(array('name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password', 'type'=>'password'));?>
    </div>
    
     <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>Remember me (1 week)
          </div>
        </div>
        <div class="col-xs-4">
            <?php echo form_submit('submit', 'Login', ['class'=>'btn btn-primary btn-block btn-flat']);?>
        </div>
      </div>
    <?php echo form_close();?>

    <!--<a href="#">I forgot my password</a><br>
    <a href="#" class="text-center">Register a new membership</a>-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?=js_url('jquery-3.2.1.min')?>"></script>
<script src="<?=js_url('bootstrap.min')?>"></script>
<script src="<?=js_url('app.min')?>"></script>
<script src="<?=js_url('icheck.min')?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
