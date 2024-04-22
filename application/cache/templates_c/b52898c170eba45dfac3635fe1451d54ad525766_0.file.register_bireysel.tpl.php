<?php
/* Smarty version 3.1.29, created on 2020-11-19 22:25:36
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/register_bireysel.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb6c6b0171648_17733576',
  'file_dependency' => 
  array (
    'b52898c170eba45dfac3635fe1451d54ad525766' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/register_bireysel.tpl',
      1 => 1521787546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb6c6b0171648_17733576 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>Lastikkent.com.tr - Bireysel Kayıt Formu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ekko-lightbox.min.css');?>
?v=<?php echo time();?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>
?v=<?php echo time();?>
">

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/g/jquery@2.2.0,bootstrap@3.3.6"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/ekko-lightbox.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url('assets/js/jquery.easy-autocomplete.js');?>
?v=<?php echo time();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url('assets/js/xzoom.min.js');?>
?v=<?php echo time();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url('assets/js/jquery.upload.js');?>
?v=<?php echo time();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-select.js');?>
?v=<?php echo time();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url('assets/js/front_script.js');?>
?v=<?php echo time();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(window).load(function()
        {
            var phones = [{ "mask": "(###) ###-####"}];
            $('#phone').inputmask({
                mask: phones,
                greedy: false,
                definitions: { '#': { validator: "[0-9]", cardinality: 1}} });
            $('#phone2').inputmask({
                mask: phones,
                greedy: false,
                definitions: { '#': { validator: "[0-9]", cardinality: 1}} });
        });
    <?php echo '</script'; ?>
>
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://cdn.polyfill.io/v2/polyfill.min.js"><?php echo '</script'; ?>
><![endif]-->
</head>
<body class="page--sign">
<header class="bg-white">
    <div class="container">
        <nav class="navbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="<?php echo base_url();?>
">
                    <img src="<?php echo base_url("assets/img/logo.png");?>
">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</header>

<div class="container">
    <main class="Sign-up-form">
        <div class="title">
            <i class="fa fa-briefcase"></i>
          <span class="hero">
            <strong>BİREYSEL</strong>
            ÜYELİK OLUŞTUR
          </span>
            <div class="line"></div>
        </div>
        <div class="body">
            <form name="register" class="row" method="post" role="form" data-toggle="validator">
                <input type="hidden" name="status" value="users"/>
                <?php if ($_smarty_tpl->tpl_vars['error']->value["code"] == 2) {?>
                    <div class="alert bg-primary" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['error']->value["msg"];?>
<a href="<?php echo base_url("main/register/bireysel");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                    </div>
                <?php }?>
                <div class="col-md-6 form-group">
                    <label>AD SOYAD <span style="color: #d0202a;font-size: 10px;display: inline-block;vertical-align: text-top;">(*)</span></label>
                    <input type="text" name="name" value="<?php echo $_POST['name'];?>
" class="form-control" required/>
                </div>
                <div class="col-md-6 form-group">
                    <label>E-POSTA <span style="color: #d0202a;font-size: 10px;display: inline-block;vertical-align: text-top;">(*)</span></label>
                    <input type="email" name="email" value="<?php echo $_POST['email'];?>
" class="form-control" required="true"/>
                </div>
                <div class="col-md-6 form-group">
                    <label>ŞİFRE <span style="color: #d0202a;font-size: 10px;display: inline-block;vertical-align: text-top;">(*)</span></label>
                    <input type="password" name="password" value="<?php echo $_POST['password'];?>
" class="form-control" required="true"/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">ADRES <span style="color: #d0202a;font-size: 10px;display: inline-block;vertical-align: text-top;">(*)</span></label>
                    <textarea name="adress" id="adress" cols="30" rows="1" class="form-control"><?php echo $_POST['adress'];?>
</textarea>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">SABİT TELEFON</label>
                    <input type="text" id="phone" placeholder="(212) 222-2222" name="homephone" value="<?php echo $_POST['homephone'];?>
" class="form-control"/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">CEP TELEFONUNUZ</label>
                    <input type="text" id="phone2" placeholder="(535) 222-2222" name="cellphone" value="<?php echo $_POST['cellphone'];?>
" class="form-control"/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">ŞEHİR <span style="color: #d0202a;font-size: 10px;display: inline-block;vertical-align: text-top;">(*)</span></label>
                    <select name="city" id="city" class="form-control">
                        <option value="0">Lütfen Seçiniz</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">İLÇE  <span style="color: #d0202a;font-size: 10px;display: inline-block;vertical-align: text-top;">(*)</span></label>
                    <select name="state" id="state" class="form-control">
                        <option value="0">Lütfen Seçiniz</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
>
                    <div class="g-recaptcha" data-sitekey="6LfcFx4UAAAAAA8MDIlAWameXxJdE-UIn2DYrQHL"></div>
                </div>
                <div class="col-md-6 form-group">
                    <input type="checkbox" id="c2" checked>
                    <label for="c2" class="check"><a href="#" data-toggle="modal" data-target="#myModal">Kullanıcı Sözleşmesi</a>'ni okudum ve kabul ediyorum.</label>
                </div>
                <div class="col-xs-12">
                    <p class="text-right">
                        <button type="submit" class="btn btn-red btn-lg">KAYDI TAMAMLA</button>
                    </p>
                </div>
            </form>
        </div>
    </main>
</div>


<footer class="bg-white">
    <div class="container">
        <p>Telif Hakkı Bildirimi © 2017 Lastikkent.com.tr. Her hakkı saklıdır.</p>
        <p>Alsancak Mahallesi Şehit Hikmet Özer Cad No:182 Etimesgut, Ankara</p>
    </div>
</footer>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="padding: 10px 15px;">Kullanıcı Sözleşmesi</h4>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['contract']->value;?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Evet, Okudum</button>
            </div>
        </div>
    </div>
</div>

</body><?php }
}
