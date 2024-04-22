{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="{base_url("admin/patern")}"> Desen</a></li>
                <li class="active">Ekle / Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Desen Ekle/Düzenle</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Ekle / Düzenle</div>
                    {if $errorCode eq 2}
                        <div class="alert bg-primary" role="alert">
                            <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> {$errorMsg}<a href="{base_url("admin/add/model")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    {/if}
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Lastik Marka</label>
                                    <select name="brand" id="" class="form-control">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$brand item=brands}
                                            <option value="{$brands->id}" {if $data->brand eq $brands->id}selected="selected"{/if}>{$brands->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Desen Adı</label>
                                    <input class="form-control" type="text" name="paternName" value="{if $data->paternName}{$data->paternName}{/if}" placeholder=" Leon">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sezon</label>
                                    <select class="form-control" name="season">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_season item=seasons}
                                            <option value="{$seasons->id}" {if $data->season eq $seasons->id}selected="selected"{/if}>{$seasons->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Araç Tipi</label>
                                    <select class="form-control" name="category">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_category item=categorys}
                                            <option value="{$categorys->id}" {if $data->category eq $categorys->id}selected="selected"{/if}>{$categorys->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Resim Yükle (<span style="font-size:12px">CTRL basarak çoklu resim seçiniz</span>)</label>
                                    <input class="form-control" type="file" name="file[]" multiple>
                                </div>
                            </div>
                            {if $select_img}
                                <div class="col-md-12">
                                    <h3>Güncel Resimler</h3>
                                </div>
                                <div class="col-md-12">
                                    {foreach from=$select_img item=img}
                                        <div class="col-md-2">
                                            <img src="/{$img->image}" alt="" class="img-responsive"/>
                                            <div>
                                                <a href="{base_url("admin/delete/product_img")}/{$img->id}" style="display: block" class="text-center">Resmi Sil</a>
                                            </div>
                                        </div>
                                    {/foreach}
                                </div>
                            {/if}
                            <div class="form-group col-md-12">
                                <div class="col-md-4 row">
                                    <label>Güvenlik</label>
                                    <select class="form-control" name="guvenlik">
                                        <option value="">Seçiniz</option>
                                        <option value="-" {if $data->guvenlik eq "-"}selected{/if}>Belirlenmemiş</option>
                                        <option value="1" {if $data->guvenlik eq 1}selected{/if}>1</option>
                                        <option value="2" {if $data->guvenlik eq 2}selected{/if}>2</option>
                                        <option value="3" {if $data->guvenlik eq 3}selected{/if}>3</option>
                                        <option value="4" {if $data->guvenlik eq 4}selected{/if}>4</option>
                                        <option value="5" {if $data->guvenlik eq 5}selected{/if}>5</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Tasarruf</label>
                                    <select class="form-control" name="tasarruf">
                                        <option value="">Seçiniz</option>
                                        <option value="-" {if $data->tasarruf eq "-"}selected{/if}>Belirlenmemiş</option>
                                        <option value="1" {if $data->tasarruf eq 1}selected{/if}>1</option>
                                        <option value="2" {if $data->tasarruf eq 2}selected{/if}>2</option>
                                        <option value="3" {if $data->tasarruf eq 3}selected{/if}>3</option>
                                        <option value="4" {if $data->tasarruf eq 4}selected{/if}>4</option>
                                        <option value="5" {if $data->tasarruf eq 5}selected{/if}>5</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Konfor</label>
                                    <select class="form-control" name="konfor">
                                        <option value="">Seçiniz</option>
                                        <option value="1" {if $data->konfor eq 1}selected{/if}>1</option>
                                        <option value="2" {if $data->konfor eq 2}selected{/if}>2</option>
                                        <option value="3" {if $data->konfor eq 3}selected{/if}>3</option>
                                        <option value="4" {if $data->konfor eq 4}selected{/if}>4</option>
                                        <option value="5" {if $data->konfor eq 5}selected{/if}>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ürün Açıklama</label>
                                    <textarea class="form-control editor" name="property" rows="10">{if $smarty.post.property}{$smarty.post.property}{/if}{if $data->property}{$data->property}{/if}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="margin-top: 25px; float: right">Kaydet / Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

{include file="admin/footer.tpl"}