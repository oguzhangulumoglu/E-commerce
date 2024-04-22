{include file="admin/header.tpl"}

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<div class="row">
    <ol class="breadcrumb">
        <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li><a href="{base_url("admin/e_ticaret/classfield/2")}"> E-Ticaret</a></li>
        <li class="active">Ekle / Düzenle</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">İlanlar</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Düzenle</div>
            {if $errorCode eq 2}
                <div class="alert bg-primary" role="alert">
                    <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> {$errorMsg}<a href="{base_url("admin/add/management")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
            {/if}
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>İlan Başlığı</label>
                            <input class="form-control" type="text" name="title" value="{if $title}{$title}{/if}" placeholder="İlan Adı">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Kategory</label>
                            <select class="form-control" name="category" id="category" required="required">
                                <option value="">Seçiniz</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Durumu</label>
                            <select class="form-control" name="status" id="status" required="required">
                                <option value="active" {if $status eq "active"}selected="selected" {/if}>Yayında</option>
                                <option value="passive" {if $status eq "passive"}selected="selected" {/if}>Yayında değil</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>İlan Kısa Açıklama</label>
                            <textarea name="short_property" class="form-control" id="" cols="30" rows="5">{if $short_property}{$short_property}{/if}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3 row">
                            <div class="form-group">
                                <label class="control-label">Ürün Fiyatı</label>
                                <input maxlength="100" type="number" required="required" class="form-control" placeholder="300" name="price" value="{if $price}{$price}{/if}" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">İndirim Varmı ?</label>
                                <select class="form-control" name="knock_off" id="knock_off">
                                    <option value="no" {if $knock_off eq "no"}selected{/if}>Hayır</option>
                                    <option value="yes" {if $knock_off eq "yes"}selected{/if}>Evet</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group {if $knock_off neq "yes"}hidden{/if}" id="knock_off_type">
                                <label class="control-label">İndirim Oranı Tipi</label>
                                <select class="form-control" name="knock_off_type">
                                    <option value="no" {if $knock_off_type eq "yuzde"}selected{/if}>Yüzde</option>
                                    <option value="yes" {if $knock_off_type eq "fiyat"}selected{/if}>Fiyat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group {if $knock_off neq "yes"}hidden{/if}" id="knock_off_price">
                                <label class="control-label">İndirim Miktarı</label>
                                <input maxlength="100" type="number" class="form-control" placeholder="300" name="knock_off_price" value="{if $knock_off_price}{$knock_off_price}{/if}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>İlan Açıklama</label>
                            <textarea class="form-control editor" name="property" rows="16">{if $property}{$property}{/if}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" style="margin-top: 25px">Kaydet / Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

{include file="admin/footer.tpl"}