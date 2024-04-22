{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="{base_url("admin/product")}"> Ürün</a></li>
                <li class="active">Ekle / Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Ürün</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Ekle / Düzenle</div>
                    {if $errorCode eq 2}
                        <div class="alert bg-primary" role="alert">
                            <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> {$errorMsg}<a href="{base_url("admin/add/management")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    {/if}
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Ürün Marka</label>
                                    <select class="form-control" name="brand">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_brand item=brands}
                                            <option value="{$brands->id}" {if $brand eq $brands->id}selected="selected"{/if}>{$brands->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ürün Model/Desen</label>
                                    <select class="form-control" name="patern">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_patern item=paterns}
                                            <option value="{$paterns->id}" {if $patern eq $paterns->id}selected="selected"{/if}>{$paterns->paternName}</option>
                                        {/foreach}
                                    </select>
                                </div>
                               <!--<div class="form-group">
                                    <label>Sezon</label>
                                    <select class="form-control" name="season">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_season item=seasons}
                                            <option value="{$seasons->id}">{$seasons->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="category">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_category item=categorys}
                                            <option value="{$categorys->id}">{$categorys->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                -->
                                <div class="form-group">
                                    <label>Ağırlık İndexı</label>
                                    <input class="form-control" type="text" name="weight_index" value="{if $weight_index}{$weight_index}{/if}{if $smarty.post.weight_index}{$smarty.post.weight_index}{/if}" placeholder="Ağırlık indexi">
                                </div>
                                <div class="form-group">
                                    <label>Run flat mi ? </label>
                                    <select class="form-control" name="run_flat">
                                        <option value="no" {if $run_flat eq "no"}selected="selected"{/if}>Hayır</option>
                                        <option value="yes" {if $run_flat eq "yes"}selected="selected"{/if}>Evet</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Extra LOT (XL) mı?</label>
                                    <select class="form-control" name="extra_lot">
                                        <option value="no" {if $extra_lot eq "no"}selected="selected"{/if}>Hayır</option>
                                        <option value="yes" {if $extra_lot eq "yes"}selected="selected"{/if}>Evet</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12" style="border: 1px solid #f17676;;padding: 10px 5px;border-radius: 5px;background: #fbf0f0;">
                                    <div class="col-md-12 row"><h5>Avrupa Etiketi</h5></div>
                                    <div class="col-md-4 row">
                                        <label>Yakıt</label>
                                        <select class="form-control" name="yakit">
                                            <option value="">Seçiniz</option>
                                            <option value="A" {if $yakit eq "A"}selected="selected"{/if}>A</option>
                                            <option value="B" {if $yakit eq "B"}selected="selected"{/if}>B</option>
                                            <option value="C" {if $yakit eq "C"}selected="selected"{/if}>C</option>
                                            <option value="D" {if $yakit eq "D"}selected="selected"{/if}>D</option>
                                            <option value="E" {if $yakit eq "E"}selected="selected"{/if}>E</option>
                                            <option value="F" {if $yakit eq "F"}selected="selected"{/if}>F</option>
                                            <option value="G" {if $yakit eq "G"}selected="selected"{/if}>G</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Islak Zemin</label>
                                        <select class="form-control" name="islak">
                                            <option value="">Seçiniz</option>
                                            <option value="A" {if $islak eq "A"}selected="selected"{/if}>A</option>
                                            <option value="B" {if $islak eq "B"}selected="selected"{/if}>B</option>
                                            <option value="C" {if $islak eq "C"}selected="selected"{/if}>C</option>
                                            <option value="D" {if $islak eq "D"}selected="selected"{/if}>D</option>
                                            <option value="E" {if $islak eq "E"}selected="selected"{/if}>E</option>
                                            <option value="F" {if $islak eq "F"}selected="selected"{/if}>F</option>
                                            <option value="G" {if $islak eq "G"}selected="selected"{/if}>G</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>SES</label>
                                        <input class="form-control" type="text" name="ses" value="{if $ses}{$ses}{/if}{if $smarty.post.ses}{$smarty.post.ses}{/if}" placeholder="SES Db Cinsinden">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Lastik Genişlik</label>
                                    <select class="form-control" name="tire_width">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_tire_width item=tire_widths}
                                            <option value="{$tire_widths->id}" {if $tire_width eq $tire_widths->id}selected="selected"{/if}>{$tire_widths->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Lastik Oran</label>
                                    <select class="form-control" name="tire_rate">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_tire_rate item=tire_rates}
                                            <option value="{$tire_rates->id}" {if $tire_rate eq $tire_rates->id}selected="selected"{/if}>{$tire_rates->name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jant Çapı</label>
                                    <select class="form-control" name="rim_diameter">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_rim_diameter item=rim_diameters}
                                            <option value="{$rim_diameters->id}" {if $rim_diameter eq $rim_diameters->id}selected="selected"{/if}>{$rim_diameters->name}</option>
                                        {/foreach}
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Hız indexi</label>
                                    <select class="form-control" name="speed_index">
                                        <option value="0">Seçiniz</option>
                                        {foreach from=$select_speed_index item=speed_indexs}
                                            <option value="{$speed_indexs->id}" {if $speed_index eq $speed_indexs->id}selected="selected"{/if}>{$speed_indexs->name}</option>
                                        {/foreach}
                                    </select>
                                </div>

                                <!--
                                <div class="form-group">
                                    <label>Resim Yükle (<span style="font-size:12px">CTRL basarak çoklu resim seçiniz</span>)</label>
                                    <input class="form-control" type="file" name="file[]" multiple>
                                </div>
                                -->
                                <div class="col-md-4 hidden">
                                    <div class="form-group">
                                        <label>Ürün Yılı</label>
                                        <input class="form-control" type="text" name="year" value="{if $year}{$year}{/if}" placeholder="Ürün Yılı">
                                    </div>
                                </div>
                                <div class="col-md-4 row">
                                    <div class="form-group">
                                        <label>Fiyatı</label>
                                        <input class="form-control" type="text" name="myamount" value="{if $myamount}{$myamount}{/if}" placeholder="Lastikkent Fiyatı">
                                    </div>
                                </div>
                                <div class="col-md-3 row">
                                    <div class="form-group">
                                        <label>Sıra</label>
                                        <input class="form-control" type="number" name="popular" value="{if $popular}{$popular}{/if}" placeholder="Lastikkent Populer Lastik Sıra">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ürün Kalite (** Sizinde yorumunuz olabilir)</label>
                                    <textarea class="form-control editor" name="grade" rows="4">{if $smarty.post.grade}{$smarty.post.grade}{/if}{if $grade}{$grade}{/if}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="margin-top: 25px; float: right">Kaydet / Güncelle</button>
                            </div>
                            <!--{if $select_img}
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
                            {/if}-->
                            <div class="col-md-12" id="select_this_arac_hide">
                                <div class="form-group">
                                    <label>Araç Seçin</label>
                                    <select class="form-control selectpicker" style="height: 250px" name="car[]" multiple>
                                        {foreach from=$select_car item=car}
                                            <optgroup label="{$car->title}">
                                                {foreach from=$car->id|get_data_car item=cars}
                                                    <option value="{$cars->id}" {if $cars->id|get_data_car_num:$id > 0}selected="selected" {/if}>{$cars->title}</option>
                                                {/foreach}
                                            </optgroup>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <!--
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ürün Açıklama</label>
                                    <textarea class="form-control editor" name="property" rows="16">{if $smarty.post.property}{$smarty.post.property}{/if}{if $property}{$property}{/if}</textarea>
                                </div>
                            </div>
                            -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{include file="admin/footer.tpl"}