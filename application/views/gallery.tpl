{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>fotoğraflar</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Galeri</li>
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
                {include file="company.tpl"}
                {include file="sidebar.tpl"}
            </div>

            <div class="col-sm-8 col-md-9">
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="info-update">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Fotoğrafları Güncelle</h3>
                        <div class="wrapper">
                            <div class="row">
                                {if $error["code"] eq 2}
                                    <div class="alert bg-primary" role="alert">
                                        {$error["msg"]}<a href="{base_url("main/profile")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                {/if}
                                <form name="profile" method="post" enctype="multipart/form-data">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Fotoğraf</label>
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-red">EKLE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane active" id="info-update">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Fotoğraflar</h3>
                        <div class="wrapper">
                            <div class="row">
                                {foreach from=$gallery item=image}
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a class="thumbnail" title="Resmi Sil" href="#" data-href="{base_url("main/gallery_delete")}/{$image->id}" data-toggle="modal" data-target="#confirm-delete">
                                            <img class="img-responsive" src="{base_url($image->name)}" alt="">
                                        </a>
                                    </div>
                                {foreachelse}
                                    <div class="col-md-12">
                                        <span>Üzgünüm, herhangi bir galleriniz bulunmamaktadır.</span>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="border: 1px solid #ddd;border-radius: 10px; padding: 10px;">
        <div class="modal-content" style="background: #f4f4f4;border: 1px solid #ddd;padding: 10px;">
            <div class="modal-header" style="padding: 10px;border-bottom: 3px solid #d9534f;font-size: 18px;">İşlem Yönetimi</div>
            <div class="modal-body">
               Silme işlemini onaylıyor musunuz ?
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger btn-ok">Evet</a>
                <a href="#" data-dismiss="modal" class="btn secondary">Hayır</a>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}