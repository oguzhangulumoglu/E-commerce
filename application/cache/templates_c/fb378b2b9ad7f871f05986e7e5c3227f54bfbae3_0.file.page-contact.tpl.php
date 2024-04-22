<?php
/* Smarty version 3.1.29, created on 2020-11-19 22:24:43
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/page-contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb6c67bf10589_49754148',
  'file_dependency' => 
  array (
    'fb378b2b9ad7f871f05986e7e5c3227f54bfbae3' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/page-contact.tpl',
      1 => 1492518462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb6c67bf10589_49754148 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active"> Sayfalar</li>
        </ol>
    </div>
</div>
<section class="content white-bg">
    <div class="container">
        <div class="row">
	        	<div class="col-md-6 col-xs-12 col-sm-12">
                    <form id="contact">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Adınız soyadınız</label>
                                <input type="text" name="name" class="form-control" placeholder="Adınız, soyadınız">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Telefon numaranız</label>
                                <input type="text" class="form-control" name="phone" placeholder="Telefon numaranız">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mesajınız</label>
                                <textarea class="form-control" name="mesaj" id="" cols="10" rows="10"></textarea>
                            </div>
                        </div>

                    </form>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-red">Gönder</button>
                    </div>
                    <br>
                    <br>
                    <div style="clear:both;"></div>
                	<br>
				</div>
	        	<div class="col-md-6 col-xs-12 col-sm-12">
					<p class="text-center">
					<div class=" text-center">
	                <dl>
	                    <dd>Lastik Kent San. Tic. Ltd. Şti.</dd>
	                    <dd class="phone"><strong>0312 244 06 34</strong></dd>
	                </dl>
	                <dl>
	                    <dd>Alsancak Mahallesi Şehit Hikmet Özer Cad No:182 Etimesgut Ankara</dd>
	                </dl>
	                <dl>
	                    <dd>info@lastikkent.com.tr</dd>
	                    <dd>satis@lastikkent.com.tr</dd>
	                </dl>
	                <a href="#" class="map-link"><i>Google Map'te konum almak için lütfen tıklayınız.</i></a>
	            </div>
				</p>
        	</div>
    </div>
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
