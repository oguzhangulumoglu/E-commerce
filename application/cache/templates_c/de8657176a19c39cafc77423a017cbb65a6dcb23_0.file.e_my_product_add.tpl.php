<?php
/* Smarty version 3.1.29, created on 2021-10-13 14:13:02
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/e_my_product_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_6166bf3e35a3c1_11120765',
  'file_dependency' => 
  array (
    'de8657176a19c39cafc77423a017cbb65a6dcb23' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/e_my_product_add.tpl',
      1 => 1496485809,
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
function content_6166bf3e35a3c1_11120765 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>E-ticaret mağazam</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Mağaza Yeni Ürün Ekle</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Yeni Ürün Ekle</h1>
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

            <div class="col-sm-8 col-md-9" style="border: 1px solid #ccc;padding: 50px 10px 20px;">

                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Ürün Bilgileri</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p>Fotoğraf Yükle</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p>Onayla & Bitir</p>
                        </div>
                    </div>
                </div>

                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <form role="form" name="product" action="" method="post">
                            <div class="col-md-12">
                                <h3>Ürün Bilgileri</h3>
                                <div class="form-group">
                                    <label class="control-label">Kategori</label>
                                    <select name="category" id="category" required="required" class="form-control">
                                        <option value="">Seçiniz</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categorys_0_saved_item = isset($_smarty_tpl->tpl_vars['categorys']) ? $_smarty_tpl->tpl_vars['categorys'] : false;
$_smarty_tpl->tpl_vars['categorys'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['categorys']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categorys']->value) {
$_smarty_tpl->tpl_vars['categorys']->_loop = true;
$__foreach_categorys_0_saved_local_item = $_smarty_tpl->tpl_vars['categorys'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['categorys']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categorys']->value->name;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['categorys'] = $__foreach_categorys_0_saved_local_item;
}
if ($__foreach_categorys_0_saved_item) {
$_smarty_tpl->tpl_vars['categorys'] = $__foreach_categorys_0_saved_item;
}
?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Ürün Başlığı</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Ürün Başlığı" name="title" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Kısa Açıklama</label>
                                    <textarea required="required" name="short_property" class="form-control" placeholder="Kısa Açıklama Giriniz" ></textarea>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="col-md-3 row">
                                        <div class="form-group">
                                            <label class="control-label">Ürün Fiyatı</label>
                                            <input maxlength="100" type="number" required="required" class="form-control" placeholder="300" name="price" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">İndirim Varmı ?</label>
                                            <select class="form-control" name="knock_off" id="knock_off">
                                                <option value="no" selected>Hayır</option>
                                                <option value="yes">Evet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group hidden" id="knock_off_type">
                                            <label class="control-label">İndirim Oranı Tipi</label>
                                            <select class="form-control" name="knock_off_type">
                                                <option value="no">Yüzde</option>
                                                <option value="yes">Fiyat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group hidden" id="knock_off_price">
                                            <label class="control-label">İndirim Miktarı</label>
                                            <input maxlength="100" type="number" class="form-control" placeholder="300" name="knock_off_price" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Açıklama</label>
                                    <textarea required="required" name="property" id="property" class="form-control" placeholder="Açıklama Giriniz" rows="20" ></textarea>
                                </div>
                                <input type="hidden" name="productID"/>
                                <button class="btn btn-default saveProduct nextBtn pull-right" type="button">Devam</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Resim Yükle & Ürününü Tanıt</h3>
                            <div class="col-md-12">
                                <div class="row" style="padding: 20px 0">
                                    <ul id="upload">
                                        <li class="col-md-2">
                                            <a href="#" class="image-btn image-upload btn btn-warning btn-block">
                                                <i class="fa fa-cloud-upload" aria-hidden="true"></i> YÜKLE
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-default nextBtn pull-right" type="button">Devam</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h2 class="text-center text-space">
                                Tebrikler! <br><small>İlanınız onay sürecine girmiştir. Kısa sürede editörlerimiz tarafından yayına alınacaktır. Lütfen, bekleyiniz..</small>
                            </h2>
                            <a href="<?php echo base_url("/main/my_product");?>
" class="btn btn-default btn-lg pull-right">Kaydet ve Bitir</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="image-upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="border: 1px solid #ccc;">
        <div class="modal-content">
            <div class="modal-header" style="padding: 10px"">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title" id="myModalLabel">Ürün Resim Yükleme</h2>
            </div>

            <div class="modal-body" style="overflow: hidden">
                <div id="fileuploader">

                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Tamam</button>
            </div>
        </div>
    </div>
</div>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
