<?php
/* Smarty version 3.1.29, created on 2020-12-27 00:25:12
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/orders_detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fe7aa38da8f97_79281586',
  'file_dependency' => 
  array (
    'f3b361fcbc26ef8e8f3eb9ec7d5bb4ca28626350' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/orders_detail.tpl',
      1 => 1492518465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5fe7aa38da8f97_79281586 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data_orders')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_orders.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Siparişler</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Siparişler</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sipariş Detayını Görüyorsunuz
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12" style="height: 50px">
                            <form action="<?php echo base_url("/admin/orders_detail/");?>
/<?php echo $_smarty_tpl->tpl_vars['order']->value["id"];?>
" method="post">
                                <div class="col-md-4">
                                    <label for="">Sipariş Durumunu</label>
                                </div>
                                <div class="col-md-6">
                                    <select name="status" class="form-control" id="">
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['order']->value["status"] == "1") {?>selected="selected"<?php }?>>Siparişiniz Değerlendiriliyor</option>
                                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['order']->value["status"] == "2") {?>selected="selected"<?php }?>>Ödeme Bekleniyor</option>
                                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['order']->value["status"] == "3") {?>selected="selected"<?php }?>>Sipariş İptal</option>
                                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['order']->value["status"] == "4") {?>selected="selected"<?php }?>>Tamamlandı</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-info">Güncelle</button>
                                </div>
                            </form>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-12">
                            <div class="row">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Sipariş Zamanı : </td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['order']->value["create_time"];?>
</strong></td>
                                        <td>Müşteri Adı Soyadı : </td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['merchant']->value["name"];?>
</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Müşteri Email : </td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['merchant']->value["email"];?>
</strong></td>
                                        <td>Müşteri Şirket : </td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['merchant']->value["company"];?>
</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Müşteri Web : </td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['merchant']->value["web"];?>
</strong></td>
                                        <td>Müşteri Vergi no : </td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['merchant']->value["vergino"];?>
</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Müşteri Home phone : </td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['merchant']->value["homephone"];?>
</strong></td>
                                        <td>Müşteri Cell phone : </td>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['merchant']->value["cellphone"];?>
</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Müşteri Adres : </td>
                                        <td colspan="3"><strong><?php echo $_smarty_tpl->tpl_vars['merchant']->value["adress"];?>
</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Ürün ID</th>
                                        <th>Ürün Adı</th>
                                        <th>Ürün Adeti</th>
                                        <th>Ürün Fiyatı (KDV'li)</th>
                                        <th>Toplam (Adet X Fiyat)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = smarty_modifier_get_data_orders($_smarty_tpl->tpl_vars['order']->value["id"]);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_orders_0_saved_item = isset($_smarty_tpl->tpl_vars['orders']) ? $_smarty_tpl->tpl_vars['orders'] : false;
$_smarty_tpl->tpl_vars['orders'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['orders']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['orders']->value) {
$_smarty_tpl->tpl_vars['orders']->_loop = true;
$__foreach_orders_0_saved_local_item = $_smarty_tpl->tpl_vars['orders'];
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['orders']->value->pid;?>
</td>
                                            <td><a href="<?php echo base_url("main/product");?>
/<?php echo $_smarty_tpl->tpl_vars['orders']->value->uri;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['orders']->value->name;?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['orders']->value->stock;?>
 adet/birim</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['orders']->value->myamount+sprintf("%.2f",(($_smarty_tpl->tpl_vars['orders']->value->myamount/100)*18));?>
</td>
                                            <td><?php echo sprintf("%.2f",(($_smarty_tpl->tpl_vars['orders']->value->myamount+(($_smarty_tpl->tpl_vars['orders']->value->myamount/100)*18))*$_smarty_tpl->tpl_vars['orders']->value->stock));?>
</td>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['orders'] = $__foreach_orders_0_saved_local_item;
}
if ($__foreach_orders_0_saved_item) {
$_smarty_tpl->tpl_vars['orders'] = $__foreach_orders_0_saved_item;
}
?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td>Toplam (KDV'li) : </td>
                                            <td><strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['order']->value["total"]);?>
</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
