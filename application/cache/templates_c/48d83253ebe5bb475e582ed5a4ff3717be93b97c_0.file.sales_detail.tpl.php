<?php
/* Smarty version 3.1.29, created on 2020-11-19 14:34:01
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/sales_detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb6582988def3_47014415',
  'file_dependency' => 
  array (
    '48d83253ebe5bb475e582ed5a4ff3717be93b97c' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/sales_detail.tpl',
      1 => 1605774378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fb6582988def3_47014415 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_c_ago')) require_once '/home/admin/web/lastikkent.com.tr/public_html/application/third_party/smarty/libs/plugins/modifier.c_ago.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['sales']->value->name;?>
</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="<?php echo base_url();?>
">Anasayfa</a></li>
            <li class="active">Lastik Satıcıları</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['sales']->value->name;?>
 hakkında detaylı bilgi</h1>

        <div class="col-md-12 row" style="padding: 20px 0;">
            <div class="col-md-4" style="">
                <img src="<?php echo base_url($_smarty_tpl->tpl_vars['sales']->value->image);?>
" alt="" class="img-responsive"/>
                <br/>

                <div class="container2">
                    <div class="tab-content">
                        <div class="tab-pane active" id="size" style="display: block;margin: 10px 0;border-top: 1px solid #dadada;padding: 20px 0;border-bottom: 1px solid #dadada;">
                            <form class="row" method="get" action="<?php echo base_url("lastik-satici-arama");?>
">
                                <div class="col-md-12 hidden">
                                    <h4 style="border-bottom: 1px solid #dadada;display: inline-block;padding-bottom: 10px; margin-bottom: 15px;"><?php echo $_smarty_tpl->tpl_vars['sales']->value->name;?>
 lastiklerini ara</h4>
                                </div>
                                <input type="hidden" name="sales" value="<?php echo $_smarty_tpl->tpl_vars['sales']->value->id;?>
"/>
                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">İl Tümü</label>
                                    <div class="select">
                                        <select name="city" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 form-group">
                                    <label for="">İlçe Tümü</label>
                                    <div class="select">
                                        <select name="state" class="form-control" style="-webkit-appearance: none;">
                                            <option value="0">Tümü</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 text-sm-center">
                                            <button class="btn col-md-12 btn-red">HEMEN BUL</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <br/>
            </div>
            <div class="col-md-8" style="border-left: 1px solid #dadada;">
                <div class="pull-left marca_details" style="text-align: left; border-bottom: 1px solid #dadada; padding-bottom: 20px; margin-bottom: 20px">
                    <?php echo $_smarty_tpl->tpl_vars['sales']->value->details;?>

                </div>
                <div class="col-xs-12" style="text-align: left!important;">
                    <h3 class="small-header text-left" style="padding-bottom:20px"><?php echo $_smarty_tpl->tpl_vars['sales']->value->name;?>
 Hakkında Yapılan Yorumlar</h3>

                    <div class="col-md-12 row">

                        <?php
$_from = $_smarty_tpl->tpl_vars['comment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo2_0_saved_item = isset($_smarty_tpl->tpl_vars['comments']) ? $_smarty_tpl->tpl_vars['comments'] : false;
$_smarty_tpl->tpl_vars['comments'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comments']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comments']->value) {
$_smarty_tpl->tpl_vars['comments']->_loop = true;
$__foreach_foo2_0_saved_local_item = $_smarty_tpl->tpl_vars['comments'];
?>

                            <div class="row">
                                <div class="col-md-2 hidden-sm" style="margin-bottom: 15px">
                                    <div>
                                        <img class="img-responsive img-circle user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                    </div>
                                </div>

                                <div class="col-md-10" style="margin-bottom: 15px">
                                    <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                                        <div class="panel-heading" style="padding: 5px 15px;">
                                            <strong><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->name);?>
</strong>
                                            <span class="text-muted" style="font-size: 12px"> <?php echo smarty_modifier_c_ago($_smarty_tpl->tpl_vars['comments']->value->create_time);?>
</span>
                                            <span class="like pull-right">
                                                <a href="javascript:void(0)" class="like" onclick="like(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                    <i class="glyphicon glyphicon-thumbs-up"></i> <strong id="comment-like-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->like;?>
 )</strong>
                                                </a>
                                                <a href="javascript:void(0)" class="unlike" onclick="unlike(<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
)">
                                                    <i class="glyphicon glyphicon-thumbs-down"></i> <strong id="comment-unlike-<?php echo $_smarty_tpl->tpl_vars['comments']->value->id;?>
">( <?php echo $_smarty_tpl->tpl_vars['comments']->value->unlike;?>
 )</strong>
                                                </a>
                                            </span>
                                            <span class="star">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['comments']->value->rating != '0' || $_smarty_tpl->tpl_vars['comments']->value->rating == 1 || $_smarty_tpl->tpl_vars['comments']->value->rating == 2 || $_smarty_tpl->tpl_vars['comments']->value->rating == 3 || $_smarty_tpl->tpl_vars['comments']->value->rating == 4 || $_smarty_tpl->tpl_vars['comments']->value->rating == 5) {
} else { ?>grey<?php }?>" aria-hidden="true"></i></li>
                                                </ul>
                                            </span>
                                        </div>
                                        <div class="panel-body">
                                            <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['comments']->value->text);?>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['comments']->_loop) {
?>
                            <div class="col-md-12">
                                <div class="comment-body">
                                    <p>Üzgünüm, Herhangi bir yorum yapılmamıştır. İlk yorumu siz yapabilirsiniz</p>
                                </div>
                            </div>
                        <?php
}
if ($__foreach_foo2_0_saved_item) {
$_smarty_tpl->tpl_vars['comments'] = $__foreach_foo2_0_saved_item;
}
?>
                    </div>
                </div>

                <div class="col-xs-12" style="padding: 0">
                    <form action="#" name="commentss" method="post" class="comment-form" style="padding: 20px; border-radius: 5px">
                        <div class="panel panel-default" style="border-radius: 5px 5px 0 0;">
                            <div class="panel-heading" style="padding: 5px 15px;">
                                <strong>Yorum Yap</strong>
                            </div>
                            <div class="panel-body" style="padding: 20px 0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="col-md-12" style="padding-right: 0px">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control required" placeholder="Adınız Soyadınız" required style="border-radius: 5px">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="padding-right: 0px">
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control" placeholder="Yorum Başlığı" required style="border-radius: 5px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="text" id="" cols="30" rows="5" class="form-control" placeholder="Yorumunuz" required style="border-radius: 5px"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" value="sales"/>
                                        <input type="hidden" name="rating" value="0"/>
                                        <input type="hidden" name="status" value="0"/>
                                        <input type="hidden" name="merchantID" value="<?php echo $_smarty_tpl->tpl_vars['sales']->value->id;?>
"/>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <div class="col-md-4" style="border: 1px solid #e2e2e2; border-radius: 5px; height: 55px;border-right: 0;">
                                                <span><strong style="font-weight: 500;line-height: 52px;">Puanla</strong></span>
                                            </div>

                                            <div class="col-md-8" style="border: 1px solid #e2e2e2; border-radius: 5px;border-left: 0;">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star grey" data-value="1" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star grey" data-value="2" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star grey" data-value="3" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star grey" data-value="4" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star grey" data-value="5" aria-hidden="true"></i></li>
                                                    <li><strong class="note">(<span>0</span>)</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <a id="postComment" class="btn btn-red" style="margin:0 6px; border-radius: 5px;padding: 15px 0; font-weight:700; font-size: 16px">Yorumu Gönder</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
