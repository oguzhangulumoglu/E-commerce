<?php
/* Smarty version 3.1.29, created on 2020-11-21 11:38:50
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb8d21a6b8d18_96565389',
  'file_dependency' => 
  array (
    '8c6fa8b70803e2da77bafe6eeab8492e02a4fc83' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/login.tpl',
      1 => 1504792075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb8d21a6b8d18_96565389 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>
" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/datepicker3.css');?>
" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>
" rel="stylesheet">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/html5shiv.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/respond.min.js');?>
"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
       <?php if ($_smarty_tpl->tpl_vars['error']->value == 1) {?>
           <div class="alert bg-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 <a href="<?php echo base_url("admin/login");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
           </div>
       <?php }?>
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Giriş Yap</div>
            <div class="panel-body">
                <form role="form" method="post" action="">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Kullanıcı adınız" name="username" type="text" autocomplete="off" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Şifreniz" name="password" autocomplete="off" type="password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="1">Beni Hatırla
                            </label>
                        </div>
                        <button class="btn btn-primary">Giriş Yap</button> 
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/jquery-1.11.1.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/bootstrap.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/script.js?v=_');
echo mktime();?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
