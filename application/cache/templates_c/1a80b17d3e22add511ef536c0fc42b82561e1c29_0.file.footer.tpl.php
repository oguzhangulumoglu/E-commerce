<?php
/* Smarty version 3.1.29, created on 2020-11-19 14:28:04
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb656c4710056_40067828',
  'file_dependency' => 
  array (
    '1a80b17d3e22add511ef536c0fc42b82561e1c29' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/footer.tpl',
      1 => 1521051754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb656c4710056_40067828 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_page')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_page.php';
?>
<a data-text="Bu lastiği gördün mü ?" data-link="<?php echo base_url(uri_string());?>
" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large hidden">Hemen Paylaş</a>
<footer>
    <div class="container">
        <div class="row" style="margin-bottom: 30px">
            <div class="col-sm-3 text-center">
                <a href="#" class="footer-logo"><img src="<?php echo base_url('assets/img/logo.png');?>
" alt="" class="img-responsive center-block"></a>
                <dl>
                    <dd>Lastik Kent San. Tic. Ltd. Şt.</dd>
                    <dd class="phone"><strong><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</strong></dd>
                </dl>
                <dl>
                    <dd><?php echo $_smarty_tpl->tpl_vars['adresss']->value;?>
</dd>
                </dl>
                <dl>
                    <dd><?php echo $_smarty_tpl->tpl_vars['email_sistem']->value;?>
</dd>
                    <dd><?php echo $_smarty_tpl->tpl_vars['email_sales']->value;?>
</dd>
                </dl>
                <a href="#" class="map-link"><i>Google Map'te konum almak için lütfen tıklayınız.</i></a>
            </div>
            <div class="col-sm-2">
                <ul>
                    <li class="list-header">Kurumsal</li>
                    <?php
$_from = $_smarty_tpl->tpl_vars['pages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_page_0_saved_item = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page'] : false;
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$__foreach_page_0_saved_local_item = $_smarty_tpl->tpl_vars['page'];
?>
                        <li><a href="<?php echo base_url("main/page/");?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value->uri;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->subject;?>
</a></li>
                    <?php
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_0_saved_local_item;
}
if ($__foreach_page_0_saved_item) {
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_0_saved_item;
}
?>
                </ul>
            </div>
            <div class="col-sm-2">
                <ul>
                    <li class="list-header">Mevzuat</li>
                    <?php
$_from = smarty_modifier_get_page(3);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_page_1_saved_item = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page'] : false;
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$__foreach_page_1_saved_local_item = $_smarty_tpl->tpl_vars['page'];
?>
                        <li><a href="<?php echo base_url("main/page/");?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value->uri;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->subject;?>
</a></li>
                    <?php
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_1_saved_local_item;
}
if ($__foreach_page_1_saved_item) {
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_1_saved_item;
}
?>
                </ul>
            </div>
            <div class="col-sm-2">
                <ul>
                    <li class="list-header">Hizmetler</li>
                    <?php
$_from = $_smarty_tpl->tpl_vars['pages2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_page2_2_saved_item = isset($_smarty_tpl->tpl_vars['page2']) ? $_smarty_tpl->tpl_vars['page2'] : false;
$_smarty_tpl->tpl_vars['page2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['page2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page2']->value) {
$_smarty_tpl->tpl_vars['page2']->_loop = true;
$__foreach_page2_2_saved_local_item = $_smarty_tpl->tpl_vars['page2'];
?>
                        <li><a id="link<?php echo $_smarty_tpl->tpl_vars['page2']->value->uri;?>
" href="<?php echo base_url("main/page/");?>
/<?php echo $_smarty_tpl->tpl_vars['page2']->value->uri;?>
"><?php echo $_smarty_tpl->tpl_vars['page2']->value->subject;?>
</a></li>
                    <?php
$_smarty_tpl->tpl_vars['page2'] = $__foreach_page2_2_saved_local_item;
}
if ($__foreach_page2_2_saved_item) {
$_smarty_tpl->tpl_vars['page2'] = $__foreach_page2_2_saved_item;
}
?>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="bulletin">
                    <li class="list-header">E-Posta Servisi</li>
                    <li>Kampanya haberlerimizi kaçırmamak için <strong>e-posta listemize kaydolun!</strong></li>
                </ul>
                <form action="<?php echo base_url("main/addmailing");?>
" method="post" class="bulletin-form">
                    <div class="form-group">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" name="email" class="form-control" placeholder="e-posta adresiniz">
                    </div>
                    <button class="btn btn-red" style="border-radius: 5px">KAYDI OLUŞTUR</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8">
                    <div class="copyright">
                        <span>Copyright &copy; 2016 LastikKent</span> Tüm Hakları Saklıdır. İzinsiz Kopyalanamaz veya Çoğaltılamaz.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 text-xs-center">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <img id="img_logo" src="<?php echo base_url("/assets/img/logo.png");?>
">
            </div>

            <!-- Begin # DIV Form -->
            <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" method="post" action="<?php echo base_url("/main/login?redict=");
echo base64_encode(current_url());?>
">
                    <div class="modal-body">
                        <div id="div-login-msg">
                            <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-login-msg">Hızlı bir şekilde giriş yapmanızı sağlar.</span>
                        </div>
                        <input name="email" class="form-control" type="text" placeholder="Kullanıcı adınız" required>
                        <input name="password" class="form-control" type="password" placeholder="Şifreniz" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Beni Hatırla
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Giriş Yap</button>
                        </div>
                        <div>
                            <a href="<?php echo base_url("/main/lost");?>
" class="btn btn-link">Şifremi Unuttum ?</a>
                            <a href="<?php echo base_url("/main/register");?>
" class="btn btn-link">Şimdi Kayıt Ol!</a>
                        </div>
                    </div>
                </form>
                <!-- End # Login Form -->

            </div>
            <!-- End # DIV Form -->

        </div>
    </div>
</div>
<!-- END # MODAL LOGIN -->

</body><?php }
}
