<?php
/* Smarty version 3.1.29, created on 2020-11-24 15:32:01
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fbcfd4144c093_40415848',
  'file_dependency' => 
  array (
    '4fd1e6c01e28c6ae972925e03e2183880d46ebeb' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/sidebar.tpl',
      1 => 1503563734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbcfd4144c093_40415848 ($_smarty_tpl) {
?>
<div class="panel panel-default tabbing">
    <div class="panel-body no-padding">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-tabs">
            YÖNETİM PANELİ
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul class="nav nav-tabs collapse navbar-collapse">
            <li class="hidden-xs">YÖNETİM PANELİ</li>
            <li class="active"><a href="<?php echo base_url("main/profile");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Bilgileri Güncelle</a></li>
            <li><a href="<?php echo base_url("main/changepass");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Şifreyi Güncelle</a></li>
            <li><a href="<?php echo base_url("main/message");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Mesajlarım</a></li>
            <?php if ($_SESSION['info']['status'] != "users") {?>
            <li><a href="<?php echo base_url("main/gallery");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Fotoğraflarım</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['status']->value == "normal") {?>
            <li><a href="<?php echo base_url("main/services");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Servis Güncelleme</a></li>
            <li><a href="<?php echo base_url("main/order");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Sipariş Ver</a></li>
            <li><a href="<?php echo base_url("main/orders");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Siparişlerim</a></li>
            <li><a href="<?php echo base_url("main/duty");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Verilen Hizmetler</a></li>
            <?php }?>
            <?php if ($_SESSION['info']['status'] != "users") {?>
            <li><a href="<?php echo base_url("main/stock");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Stokdaki Ürünlerim</a></li>
            <li><a href="<?php echo base_url("main/lcontact");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Lastikkent İletişimi</a></li>
            <li><a href="<?php echo base_url("/genel/bayi/");?>
/<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
"><i class="fa fa-circle" aria-hidden="true"></i> Lastikkent Sayfam</a></li>
            <li class="hidden-xs title">E-TİCARET</li>
            <li><a href="<?php echo base_url("main/my_category");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Benim Kategorilerim <span>Yeni</span></a></li>
            <li><a href="<?php echo base_url("main/my_product");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Satılacak Ürünlerim <span>Yeni</span></a></li>
            <li><a href="<?php echo base_url("main/product_update");?>
"><i class="fa fa-circle" aria-hidden="true"></i> Lastik Stokunu Oluştur <span>Yeni</span></a></li>
            <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Satılan Ürünler</a></li>
            <?php } else { ?>
                <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Aldığım Ürünler</a></li>
            <?php }?>
            <li><a href="<?php echo base_url("main/logout");?>
">Güvenli Çıkış</a></li>
        </ul>
    </div>
</div><?php }
}
