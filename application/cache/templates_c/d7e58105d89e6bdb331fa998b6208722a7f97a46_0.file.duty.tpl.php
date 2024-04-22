<?php
/* Smarty version 3.1.29, created on 2021-05-20 19:08:57
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/duty.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60a68999dcb752_60937499',
  'file_dependency' => 
  array (
    'd7e58105d89e6bdb331fa998b6208722a7f97a46' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/duty.tpl',
      1 => 1492518461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:company.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60a68999dcb752_60937499 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Hizmet Güncelleme</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Bayi Paneli</h1>
    </div>
</div>

<section class="vendor-settings">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="info-update">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Hizmet Güncelleme</h3>
                        <div class="wrapper">
                            <div class="row">
                                <?php if ($_smarty_tpl->tpl_vars['error']->value["code"] == 2) {?>
                                    <div class="alert bg-primary" role="alert">
                                        <?php echo $_smarty_tpl->tpl_vars['error']->value["msg"];?>
<a href="<?php echo base_url("main/changepass");?>
" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                <?php }?>
                                <form name="duty" method="post" enctype="multipart/form-data">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_1" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_1 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Lastik Değişimi
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_1_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_1_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_1_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_2" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_2 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Nitrojen Gaz Dolumu
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_2_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_2_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_2_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_3" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_3 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Rot Ayarı
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_3_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_3_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_3_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_4" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_4 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Sibop Değişimi
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_4_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_4_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_4_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_5" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_5 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Mobil Değişim
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_5_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_5_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_5_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_6" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_6 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Yağ Değişim
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_6_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_6_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_6_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_7" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_7 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Jant Satış
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_7_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_7_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_7_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_8" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_8 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Jant Düzeltme
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_8_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_8_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_8_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_9" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_9 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Jant Boyama
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_9_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_9_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_9_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_10" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_10 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Balata Değişimi
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_10_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_10_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_10_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_11" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_11 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Aksesuar
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_11_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_11_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_11_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_12" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_12 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Balans Ayarı
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_12_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_12_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_12_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_13" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_13 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                OTO Yıkama
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_13_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_13_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_13_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_14" value="1" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value->service_14 > 0) {?>checked<?php }?>/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                OTO Kuaför
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_14_amount" value="<?php if ($_smarty_tpl->tpl_vars['data']->value->service_14_amount) {
echo $_smarty_tpl->tpl_vars['data']->value->service_14_amount;
}?>" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-red">GÜNCELLE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pop-up pop-up-successful">
    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
    <span>Ürün başarıyla güncellendi.</span>
</div>

<div class="pop-up pop-up-unsuccessful">
    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
    <span>Ürün güncellemesi başarısız.<br>Lütfen kontrol ediniz.</span>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
