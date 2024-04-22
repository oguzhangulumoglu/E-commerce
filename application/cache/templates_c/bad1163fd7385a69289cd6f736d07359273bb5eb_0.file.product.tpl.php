<?php
/* Smarty version 3.1.29, created on 2020-12-06 23:13:12
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fcd3b58bb7ff8_99418852',
  'file_dependency' => 
  array (
    'bad1163fd7385a69289cd6f736d07359273bb5eb' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/product.tpl',
      1 => 1506412822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5fcd3b58bb7ff8_99418852 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_get_data')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.get_data.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url("admin");?>
"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Ürünler</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Ürünler</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <form action="" method="get">
                        <div class="col-md-2">
                            <label for="">Marka</label>
                            <select name="category" class="form-control">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_0_saved_item = isset($_smarty_tpl->tpl_vars['brands']) ? $_smarty_tpl->tpl_vars['brands'] : false;
$_smarty_tpl->tpl_vars['brands'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brands']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->tpl_vars['brands']->_loop = true;
$__foreach_foo2_0_saved_local_item = $_smarty_tpl->tpl_vars['brands'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['brands']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['brands']->value->id == $_GET['category']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['brands']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['brands'] = $__foreach_foo2_0_saved_local_item;
}
if ($__foreach_foo2_0_saved_item) {
$_smarty_tpl->tpl_vars['brands'] = $__foreach_foo2_0_saved_item;
}
?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Taban Genişliği</label>
                            <select name="tire_width" class="form-control">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_width']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_1_saved_item = isset($_smarty_tpl->tpl_vars['tire_width']) ? $_smarty_tpl->tpl_vars['tire_width'] : false;
$_smarty_tpl->tpl_vars['tire_width'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_width']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_width']->value) {
$_smarty_tpl->tpl_vars['tire_width']->_loop = true;
$__foreach_foo2_1_saved_local_item = $_smarty_tpl->tpl_vars['tire_width'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tire_width']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['tire_width']->value->id == $_GET['tire_width']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_width']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['tire_width'] = $__foreach_foo2_1_saved_local_item;
}
if ($__foreach_foo2_1_saved_item) {
$_smarty_tpl->tpl_vars['tire_width'] = $__foreach_foo2_1_saved_item;
}
?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Kesit Oranı</label>
                            <select name="tire_rate" class="form-control">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_tire_rate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_2_saved_item = isset($_smarty_tpl->tpl_vars['tire_rate']) ? $_smarty_tpl->tpl_vars['tire_rate'] : false;
$_smarty_tpl->tpl_vars['tire_rate'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tire_rate']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tire_rate']->value) {
$_smarty_tpl->tpl_vars['tire_rate']->_loop = true;
$__foreach_foo2_2_saved_local_item = $_smarty_tpl->tpl_vars['tire_rate'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['tire_rate']->value->id == $_GET['tire_rate']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tire_rate']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['tire_rate'] = $__foreach_foo2_2_saved_local_item;
}
if ($__foreach_foo2_2_saved_item) {
$_smarty_tpl->tpl_vars['tire_rate'] = $__foreach_foo2_2_saved_item;
}
?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Jant Çapı</label>
                            <select name="rim_diameter" class="form-control">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_rim_diameter']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_3_saved_item = isset($_smarty_tpl->tpl_vars['rim_diameter']) ? $_smarty_tpl->tpl_vars['rim_diameter'] : false;
$_smarty_tpl->tpl_vars['rim_diameter'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rim_diameter']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rim_diameter']->value) {
$_smarty_tpl->tpl_vars['rim_diameter']->_loop = true;
$__foreach_foo2_3_saved_local_item = $_smarty_tpl->tpl_vars['rim_diameter'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['rim_diameter']->value->id == $_GET['rim_diameter']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['rim_diameter']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['rim_diameter'] = $__foreach_foo2_3_saved_local_item;
}
if ($__foreach_foo2_3_saved_item) {
$_smarty_tpl->tpl_vars['rim_diameter'] = $__foreach_foo2_3_saved_item;
}
?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Mevsim</label>
                            <select name="season" class="form-control">
                                <option value="0">Tümü</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['select_season']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_4_saved_item = isset($_smarty_tpl->tpl_vars['season']) ? $_smarty_tpl->tpl_vars['season'] : false;
$_smarty_tpl->tpl_vars['season'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['season']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['season']->value) {
$_smarty_tpl->tpl_vars['season']->_loop = true;
$__foreach_foo2_4_saved_local_item = $_smarty_tpl->tpl_vars['season'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['season']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['season']->value->id == $_GET['season']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['season']->value->name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_4_saved_local_item;
}
if ($__foreach_foo2_4_saved_item) {
$_smarty_tpl->tpl_vars['season'] = $__foreach_foo2_4_saved_item;
}
?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for=""></label>
                            <button class="btn btn-danger" type="submit" style="margin-top: 25px;">HEMEN ARA</button>
                        </div>
                        <div class="col-md-2">
                            <label for="">Ürün ID</label>
                            <input type="number" name="id_search" class="form-control" placeholder="ID ile ara" value="<?php echo $_GET['id_search'];?>
"/>
                        </div>
                        <div class="col-md-8">
                            <label for="">İsimde Ara</label>
                            <input type="text" name="search" class="form-control" placeholder="Ürün adı ile ara" value="<?php echo $_GET['search'];?>
"/>
                        </div>
                        <div class="col-md-2">
                            <label for=""></label>
                            <button class="btn btn-danger" type="submit" style="margin-top: 25px;">HEMEN ARA</button>
                        </div>
                    </form>
                </div>
                <br/>
            </div>
            <div class="col-lg-12 panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Ürünleri Görüyorsunuz</h3>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <a class="btn btn-sm btn-primary btn-create" href="<?php echo base_url("admin/add/product");?>
">Yeni Ürün Ekle</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th><a href="<?php echo current_url();?>
?short=id">Ürün Kodu</a></th>
                            <th><a href="<?php echo current_url();?>
?short=name">Ürün Adı</a></th>
                            <th><a href="<?php echo current_url();?>
?short=brand">Ürün Marka</a></th>
                            <th><a href="<?php echo current_url();?>
?short=category">Kategori</a></th>
                            <th>Ağırlık İndex</th>
                            <th>Ürün Jant Çapı</th>
                            <th>Lastik Oranı</th>
                            <th>Lastik Genişliği</th>
                            <th>Hız İndex</th>
                            <th>Lastik Tipi</th>
                            <th>Sıralama</th>
                            <th><em class="fa fa-cog"></em></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->tpl_vars['results']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_result_5_saved_item = isset($_smarty_tpl->tpl_vars['result']) ? $_smarty_tpl->tpl_vars['result'] : false;
$_smarty_tpl->tpl_vars['result'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['result']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$__foreach_result_5_saved_local_item = $_smarty_tpl->tpl_vars['result'];
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
</td>
                                <td><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['result']->value['brand'],"brand","name");?>
</td>
                                <td><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['result']->value['category'],"category","name");?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['weight_index'];?>
</td>
                                <td><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['result']->value['rim_diameter'],"rim_diameter","name");?>
</td>
                                <td><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['result']->value['tire_rate'],"tire_rate","name");?>
</td>
                                <td><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['result']->value['tire_width'],"tire_width","name");?>
</td>
                                <td><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['result']->value['speed_index'],"speed_index","name");?>
</td>
                                <td><?php echo smarty_modifier_get_data($_smarty_tpl->tpl_vars['result']->value['season'],"season","name");?>
</td>
                                <td><?php if (!$_smarty_tpl->tpl_vars['result']->value['popular']) {?>-<?php } else {
echo $_smarty_tpl->tpl_vars['result']->value['popular'];
}?></td>
                                <td align="center">
                                    <?php if ($_SESSION['status'] == "staff") {?>
                                    <a href="<?php echo base_url("admin/edit/product");?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <a href="<?php echo base_url("admin/delete/product");?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                    <?php } else { ?>
                                        <a href="<?php echo base_url("admin/edit/product");?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_5_saved_local_item;
}
if ($__foreach_result_5_saved_item) {
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_5_saved_item;
}
?>
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-4">Sayfa <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['totalRow']->value;?>

                        </div>
                        <div class="col col-xs-8">
                            <ul class="pagination hidden-xs pull-right">
                                <li><a href="<?php echo base_url("admin/product");?>
/1<?php if ($_smarty_tpl->tpl_vars['param']->value) {?>?<?php echo $_smarty_tpl->tpl_vars['param']->value;
}?>">«</a></li>
                                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pagination_right']->value+1 - ($_smarty_tpl->tpl_vars['pagination_left']->value) : $_smarty_tpl->tpl_vars['pagination_left']->value-($_smarty_tpl->tpl_vars['pagination_right']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['pagination_left']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['page']->value) {?>class="active"<?php }?>><a <?php if ($_smarty_tpl->tpl_vars['foo']->value == $_smarty_tpl->tpl_vars['page']->value) {?>class="active"<?php }?> href="<?php echo base_url("admin/product");?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value;
if ($_smarty_tpl->tpl_vars['param']->value) {?>?<?php echo $_smarty_tpl->tpl_vars['param']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
                                <?php }
}
?>

                                <li><a href="<?php echo base_url("admin/product");?>
/<?php echo $_smarty_tpl->tpl_vars['totalRow']->value;
if ($_smarty_tpl->tpl_vars['param']->value) {?>?<?php echo $_smarty_tpl->tpl_vars['param']->value;
}?>">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
