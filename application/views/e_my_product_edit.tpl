{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>E-ticaret mağazam</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
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
                {include file="company.tpl"}
                {include file="sidebar.tpl"}
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
                                        {foreach from=$category item=categorys}
                                            <option {if $data->e_category eq $categorys->id} selected="selected" {/if} value="{$categorys->id}">{$categorys->name}</option>
                                        {/foreach}
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Ürün Başlığı</label>
                                    <input maxlength="100" type="text" required="required" value="{$data->title}" class="form-control" placeholder="Ürün Başlığı" name="title" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Kısa Açıklama</label>
                                    <textarea required="required" name="short_property" class="form-control" rows="5" placeholder="Kısa Açıklama Giriniz" >{$data->short_property}</textarea>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-3 row">
                                        <div class="form-group">
                                            <label class="control-label">Ürün Fiyatı</label>
                                            <input maxlength="100" type="number" required="required" class="form-control" placeholder="300" name="price" value="{$data->price}" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">İndirim Varmı ?</label>
                                            <select class="form-control" name="knock_off" id="knock_off">
                                                <option value="no" {if $data->knock_off eq "no"}selected{/if}>Hayır</option>
                                                <option value="yes" {if $data->knock_off eq "yes"}selected{/if}>Evet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {if $data->knock_off neq "yes"}hidden{/if}" id="knock_off_type">
                                            <label class="control-label">İndirim Oranı Tipi</label>
                                            <select class="form-control" name="knock_off_type">
                                                <option value="no" {if $data->knock_off_type eq "yuzde"}selected{/if}>Yüzde</option>
                                                <option value="yes" {if $data->knock_off_type eq "fiyat"}selected{/if}>Fiyat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {if $data->knock_off neq "yes"}hidden{/if}" id="knock_off_price">
                                            <label class="control-label">İndirim Miktarı</label>
                                            <input maxlength="100" type="number" class="form-control" placeholder="300" name="knock_off_price" value="{$data->knock_off_price}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Açıklama</label>
                                    <textarea required="required" name="property" id="property" class="form-control" placeholder="Açıklama Giriniz" rows="20" >{$data->property}</textarea>
                                </div>

                                <input type="hidden" name="productID" value="{$data->id}"/>
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
                                        {foreach from=$image item=img}
                                            <li class="col-md-2 img{$img->id}">
                                                <img src="{base_url($img->uri)}" alt="" class="img-responsive"/>
                                                <a href="javascript:void(0)" onclick="return deleteImg('{$img->id} ')" class="text-center">Resmi Sil</a>
                                            </li>
                                        {/foreach}
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
                            <a href="{base_url("/main/my_product")}" class="btn btn-default btn-lg pull-right">Kaydet ve Bitir</a>
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


{include file="footer.tpl"}