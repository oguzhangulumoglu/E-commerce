<?php
/* Smarty version 3.1.29, created on 2020-11-19 14:46:56
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_search.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb65b3043b0c7_78383861',
  'file_dependency' => 
  array (
    '4acece5ca41ae196c98e2be17ab8f44d124f1612' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/merchant_search.tpl',
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
function content_5fb65b3043b0c7_78383861 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>arama sonuçları</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Arama Sonuçları</li>
        </ol>
    </div>
</div>


<section class="content pb">

    <div class="container">
        <div class="row">
            <div class="col-sm-3 hidden-xs">
                <?php echo $_smarty_tpl->tpl_vars['ads']->value["reklam_6"];?>

            </div>

            <div class="col-sm-9">
                <div class="wrapper">

                    <div class="page-header">
                        <h1><span class="black"><?php if (smarty_modifier_capitalize(smarty_modifier_get_data($_GET['state'],"state","state"))) {
echo smarty_modifier_capitalize(smarty_modifier_get_data($_GET['state'],"state","state"));?>
, <?php echo smarty_modifier_capitalize(smarty_modifier_get_data($_GET['city'],"city","city"));
}?> Bayi Arama Sonuçları</span></h1>
                        <div class="search-result pull-right">
                            <span class="page">Toplam <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 Sayfa</span>
                            <span class="count"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 Bayi Bulundu</span>
                        </div>
                    </div>

                    <?php
$_from = $_smarty_tpl->tpl_vars['searchs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['search']) ? $_smarty_tpl->tpl_vars['search'] : false;
$_smarty_tpl->tpl_vars['search'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['search']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['search']->value) {
$_smarty_tpl->tpl_vars['search']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['search'];
?>

                        <div class="result <?php if (!(1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null))) {?>lightgrey<?php }?>">
                            <div class="row row-sm-mg">
                                <?php if ($_smarty_tpl->tpl_vars['search']->value->hit > 10) {?>
                                <div class="col-sm-3 col-sm-pd">
                                    <figure class="banner"><span>popüler</span><img src="<?php if ($_smarty_tpl->tpl_vars['search']->value->logo) {
echo base_url($_smarty_tpl->tpl_vars['search']->value->logo);
} else {
echo base_url("assets/images/no_image.jpg");
}?>" style="width: 134px; height:126px" alt="" class="img-responsive center-block"></figure>
                                </div>
                                <?php } else { ?>
                                <div class="col-sm-3 col-sm-pd">
                                    <figure><img src="<?php if ($_smarty_tpl->tpl_vars['search']->value->logo) {
echo base_url($_smarty_tpl->tpl_vars['search']->value->logo);
} else {
echo base_url("assets/images/no_image.jpg");
}?>" style="width: 134px; height:126px" alt="" class="img-responsive center-block"></figure>
                                </div>
                                <?php }?>
                                <div class="col-sm-9 col-sm-pd">
                                    <h3 class="result-header">
                                        <!--<a href="<?php echo base_url("/main/merchant");?>
/<?php echo $_smarty_tpl->tpl_vars['search']->value->uri;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['search']->value->company);?>
 Bayi</a>-->
                                        <a href="<?php echo base_url("/genel/bayi/");?>
/<?php echo $_smarty_tpl->tpl_vars['search']->value->uri;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['search']->value->company);?>
 Bayi</a>
                                    </h3>
                                    <style>
                                        .tire-info .description {
                                            font-weight: bold;
                                            padding-right: 10px;
                                            font-size: 12px;
                                        }
                                        .tire-info .value {
                                            padding-left: 10px;
                                            font-size: 12px;
                                        }
                                        .tire-info {
                                            padding: 10px 0;
                                        }
                                    </style>
                                    <div class="result-body">
                                        <div class="col-md-12" style="padding: 20px 0 0"><strong>Verilen Hizmetler</strong></div>
                                        <div class="vendor-services">
                                            <ul class="col-md-6 tire-info" style="background-color: #fff; padding: 10px; border-radius: 10px; border: 1px solid #ddd">
                                                <li>Lastik Değişimi <i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['search']->value->service_1 > 0) {?>fa-check<?php } else { ?>fa-times<?php }?>"></i></li>
                                                <li>Nitrojen Gaz Dolumu <i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['search']->value->service_2 > 0) {?>fa-check<?php } else { ?>fa-times<?php }?>"></i></li>
                                                <li>Rot Ayarı <i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['search']->value->service_3 > 0) {?>fa-check<?php } else { ?>fa-times<?php }?>"></i></li>
                                            </ul>
                                            <ul class="col-md-6 tire-info" style="background-color: #fff; padding: 10px; border-radius: 10px;border: 1px solid #ddd">
                                                <li>Sibop Değişimi <i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['search']->value->service_4 > 0) {?>fa-check<?php } else { ?>fa-times<?php }?>"></i></li>
                                                <li>Mobil Değişim <i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['search']->value->service_5 > 0) {?>fa-check<?php } else { ?>fa-times<?php }?>"></i></li>
                                                <li>Yağ Değişim <i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['search']->value->service_6 > 0) {?>fa-check<?php } else { ?>fa-times<?php }?>"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--<a href="<?php echo base_url("/main/merchant");?>
/<?php echo $_smarty_tpl->tpl_vars['search']->value->uri;?>
" class="btn btn-red" style="display: inline-block; margin-top: 10px">Bayi Detayı <i class="fa fa-angle-right"></i></a>-->
                                    <a href="<?php echo base_url("/genel/bayi");?>
/<?php echo $_smarty_tpl->tpl_vars['search']->value->uri;?>
" class="btn btn-red" style="display: inline-block; margin-top: 10px">Bayi Detayı <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    <?php
$_smarty_tpl->tpl_vars['search'] = $__foreach_foo_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['search']->_loop) {
?>
                        <div class="col-md-12">
                            <div class="white-bg">
                                <div class="row">
                                    <span style="padding: 15px;display: inline-block;">Üzgünüm, herhangi bir bayi bulunamadı, lütfen daha sonra tekrar deneyiniz!</span>
                                </div>
                            </div>
                        </div>
                    <?php
}
if ($__foreach_foo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_0_saved;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['search'] = $__foreach_foo_0_saved_item;
}
?>


                    <?php $_smarty_tpl->tpl_vars['exp'] = new Smarty_Variable(explode("?",$_SERVER['REQUEST_URI']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'exp', 0);?>
                    <ul class="pagination">
                        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                            <li<?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['complete']->value) {?> class="active"<?php }?>><a href="<?php echo base_url("main/search");?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value;
if ($_smarty_tpl->tpl_vars['exp']->value[1]) {?>?<?php echo $_smarty_tpl->tpl_vars['exp']->value[1];
}?>"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                        <?php }
}
?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
