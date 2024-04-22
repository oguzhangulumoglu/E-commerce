<?php
/* Smarty version 3.1.29, created on 2020-12-13 01:54:34
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fd54a2a6faac0_40037363',
  'file_dependency' => 
  array (
    '1515abed3343b2074169855f18bb95b5097635ff' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/cart.tpl',
      1 => 1502539980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fd54a2a6faac0_40037363 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data_image')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_image.php';
if (!is_callable('smarty_modifier_get_image')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_image.php';
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
if (!is_callable('smarty_modifier_get_data_where')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data_where.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>SEPET</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li><a href="<?php echo base_url();?>
">Online Mağaza</a></li>
            <li class="active">Sepet</li>
        </ol>
    </div>
</div>
<section class="cart container">
    <table class="table cart-table">
        <thead>
            <tr>
                <th colspan="4">ÜRÜN</th>
                <th>FİYAT</th>
                <th>ADET</th>
                <th>TOPLAM</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_0_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_0_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->p_type == 1) {?>
                        <img src="<?php if (smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['product']->value->p_id,"product_img","image")) {
echo base_url(smarty_modifier_get_data_image($_smarty_tpl->tpl_vars['product']->value->p_id,"product_img","image"));
} else {
echo base_url("assets/images/no_image.jpg");
}?>"  style="max-height: 150px; max-width: 150px" class="img-responsive" alt=""/>
                    <?php } else { ?>
                        <img src="<?php echo base_url(smarty_modifier_get_image($_smarty_tpl->tpl_vars['product']->value->p_id,"uri"));?>
" alt="" style="max-height: 150px; max-width: 150px" class="img-responsive"/>
                    <?php }?>
                </td>
                <td colspan="3">
                    <a href="<?php if ($_smarty_tpl->tpl_vars['product']->value->p_type == 1) {
echo base_url("/genel/lastik");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"product","uri");
} else {
echo base_url("/main/urunler");?>
/<?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","userID"),"merchant","uri");?>
/<?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","uri");
}?>">
                        <h2><?php if ($_smarty_tpl->tpl_vars['product']->value->p_type == 1) {
echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"product","name");
} else {
echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","title");
}?></h2>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->p_type == 1) {?>
                        <div class="cart-sub-detail">
                            <strong><?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"product","brand"),"brand","name");?>
</strong>   /   Ürün Kodu: <?php echo mb_strtoupper(smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"product","brand"),"brand","name"), 'UTF-8');
echo $_smarty_tpl->tpl_vars['product']->value->pid;?>

                        </div>
                        <?php } else { ?>
                        <div class="cart-sub-detail">
                            <strong><?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","e_category"),"e_category","name");?>
</strong>   /   Ürün Kodu: <?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","productCode");?>

                        </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->p_type == 1) {?>
                        <ul class="cart-border">
                            <li><?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"product","rim_diameter"),"rim_diameter","name");?>
</li>
                            <li><?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"product","tire_rate"),"tire_rate","name");?>
</li>
                            <li><?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"product","tire_width"),"tire_width","name");?>
</li>
                            <li><?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"product","speed_index"),"speed_index","name");?>
</li>
                            <li><?php echo smarty_modifier_get_data(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"product","season"),"season","name");?>
</li>
                        </ul>
                        <?php }?>
                    </a>
                </td>
                <td>
                    <strong>₺
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->p_type == 1) {?>
                            <?php echo number_format(smarty_modifier_get_data_where($_smarty_tpl->tpl_vars['product']->value->p_id,"product_amount","pid",$_smarty_tpl->tpl_vars['product']->value->m_id,"amount"),2,".",'');?>

                        <?php } else { ?>
                            <?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","knock_off") == "no") {?>
                                <?php echo number_format(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","price"),2,".",'');?>

                            <?php } else { ?>
                                <?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","knock_off_type") == "fiyat") {?>
                                    <?php echo number_format(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","knock_off_price"),2,".",'');?>

                                <?php } else { ?>
                                    <?php echo number_format((smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","price")-((smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","price")/100)*smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","knock_off_price"))),2,".",'');?>

                                <?php }?>
                            <?php }?>
                        <?php }?>
                    </strong>
                </td>
                <td>
                    <input type="number" class="form-control" data-quantity="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" name="quantity" <?php if ($_smarty_tpl->tpl_vars['product']->value->p_type == 2) {?>disabled="disabled" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
"/>
                </td>
                <td>
                    <strong data-total_price="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">₺
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->p_type == 1) {?>
                            <?php echo number_format(((smarty_modifier_get_data_where($_smarty_tpl->tpl_vars['product']->value->p_id,"product_amount","pid",$_smarty_tpl->tpl_vars['product']->value->m_id,"amount"))*$_smarty_tpl->tpl_vars['product']->value->quantity),2,".",'');?>

                        <?php } else { ?>
                            <?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","knock_off") == "no") {?>
                                <?php echo number_format(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","price"),2,".",'');?>

                            <?php } else { ?>
                                <?php if (smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","knock_off_type") == "fiyat") {?>
                                    <?php echo number_format(smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","knock_off_price"),2,".",'');?>

                                <?php } else { ?>
                                    <?php echo number_format((smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","price")-((smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","price")/100)*smarty_modifier_get_data($_smarty_tpl->tpl_vars['product']->value->p_id,"e_product","knock_off_price"))),2,".",'');?>

                                <?php }?>
                            <?php }?>
                        <?php }?>
                    </strong>
                </td>
                <td>
                    <a href="javascript:void(0)" onclick="deleteProductCart('<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
')">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['product']->_loop) {
?>
            <tr>
                <td colspan="8" style="padding: 10px">Sepetinizde ürün bulunmamaktadır!</td>
            </tr>
        <?php
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" rowspan="3">
                    <form action="#">
                        <h4>İNDİRİM KUPONU</h4>
                        <span>Kuponu sepete işlemek için lütfen bu alana girin</span>
                        <div class="form-group">
                            <div class="col-md-8 row">
                                <input type="text" class="form-control"/>
                            </div>
                            <div class="col-md-4 row">
                                <button class="btn btn-red">KUPONU GİR</button>
                            </div>
                        </div>
                    </form>
                </td>
                <td colspan="3">
                    TOPLAM
                </td>
                <td colspan="2">
                    <strong> ₺<?php echo $_smarty_tpl->tpl_vars['totalAmount']->value;?>
</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    KARGO
                </td>
                <td colspan="2">
                    ÜCRETSİZ KARGO
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <strong>GENEL TOPLAM (+KDV)</strong>
                </td>
                <td colspan="2">
                    <strong>₺<?php echo $_smarty_tpl->tpl_vars['genelAmount']->value;?>
</strong>
                </td>
            </tr>
        </tfoot>
    </table>

    <a class="pull-right btn btn-red" href="#">ÖDEMEYİ TAMAMLA</a>
    <a class="pull-right btn btn-default" href="#">MAĞAZAYA DÖN</a>
</section>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
