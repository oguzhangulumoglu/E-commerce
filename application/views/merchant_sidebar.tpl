
<div class="col-sm-4 col-md-3">
<div class="panel panel-default">
    <div class="panel-body text-center">
        <figure><img src="{if $logo}{base_url($logo)}{else}{base_url("assets/images/no_image.jpg")}{/if}" alt="" class="center-block"></figure>
        <div class="vendor">
            <h4>{$company}</h4>
            <ul class="rating">
                <li><i class="fa fa-star {if $ratings < 1}grey{/if}" aria-hidden="true"></i></li>
                <li><i class="fa fa-star {if $ratings < 2}grey{/if}" aria-hidden="true"></i></li>
                <li><i class="fa fa-star {if $ratings < 3}grey{/if}" aria-hidden="true"></i></li>
                <li><i class="fa fa-star {if $ratings < 4}grey{/if}" aria-hidden="true"></i></li>
                <li><i class="fa fa-star {if $ratings < 5}grey{/if}" aria-hidden="true"></i></li>
            </ul>
            <span>({$ratings|string_format:"%.1f"})</span>
            {if $search}
                <a href="{base_url("main/contact")}/{$uri}" class="btn btn-red"><i class="fa fa-envelope-o"></i> MESAJ GÖNDER</a>
            {/if}
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body text-center">
        {$company} bayimiz bu zamana kadar <strong>{$hit}</strong> görüntüleme aldı.
    </div>
</div>
<div class="cart-left-menu">
    <h2>
        <i class="fa fa-shopping-cart"></i>
        Mağazanın Ürünleri
    </h2>
    <ul class="cart-list-category">
        <li {if !$product->e_category} class="active"{/if}>
            <a href="{base_url("bayi")}/{$uri}/urunler/1">Tümü <span>({$categorys->id|cat_num:$id:"all"})</span></a>
        </li>
        <li {if $product->e_category eq "lastik"} class="active"{/if}>
            <a href="{base_url("bayi")}/{$uri}/lastik/1">Lastik <span>({$categorys->id|cat_num:$id:"lastik"})</span></a>
        </li>
        {foreach from=$category item=categorys}
            <li {if $product->e_category eq $categorys->id} class="active"{/if}>
                <a href="{base_url("bayi")}/{$uri}/{$categorys->uri}/1">{$categorys->name|capitalize} <span>({$categorys->id|cat_num:$id:"cat"})</span></a>
            </li>
        {/foreach}
    </ul>
</div>
<div class="panel-group" id="accordion">
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                Haritada gör <i class="glyphicon glyphicon-menu-down pull-right"></i>
            </a>
        </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse  in">
        <div class="embed-responsive " style="height: 350px">
            <iframe class="embed-responsive-item" style="height: 350px" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q={$id|get_data:"merchant":"adress"},{$id|get_data:"merchant":"state"|get_data:"state":"state"|capitalize},{$id|get_data:"merchant":"city"|get_data:"city":"city"|capitalize},+Türkiye&key=AIzaSyAGozyC7F_w27PQMQ-SALXOe60YPTGEYWU"></iframe>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Adres Bilgileri <i class="glyphicon glyphicon-menu-down pull-right"></i></a>
        </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
        <table class="table table-responsive">
            <tr>
                <td>Adres</td>
                <td>{$adress}</td>
            </tr>
            <tr>
                <td>Lokasyon</td>
                <td>{$id|get_data:"merchant":"state"|get_data:"state":"state"|capitalize}, {$id|get_data:"merchant":"city"|get_data:"city":"city"|capitalize}</td>
            </tr>
            <tr>
                <td>Sabit</td>
                <td>{$homephone}</td>
            </tr>
            <tr>
                <td>GSM</td>
                <td>{if $cellphone}{$cellphone}{else}-{/if}</td>
            </tr>
        </table>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Bayide Verilen Hizmetler <i class="glyphicon glyphicon-menu-down pull-right"></i></a>
        </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Lastik Değişimi <span class="price">{if $merchant->service_1 > 0}{$merchant->service_1_amount} <div class="fa fa-try"></div> {/if}</span>
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_1 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>

        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Nitrojen Gaz Dolumu <span class="price">{if $merchant->service_2 > 0}{$merchant->service_2_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_2 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>

        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Rot Ayarı <span class="price">{if $merchant->service_3 > 0}{$merchant->service_3_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_3 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Sibop Değişimi <span class="price">{if $merchant->service_4 > 0}{$merchant->service_4_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_4 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Mobil Değişim <span class="price">{if $merchant->service_5 > 0}{$merchant->service_5_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_5 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Yağ Değişim  <span class="price">{if $merchant->service_6 > 0}{$merchant->service_6_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_6 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Jant Satış  <span class="price">{if $merchant->service_7 > 0}{$merchant->service_7_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_7 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Jant Düzeltme <span class="price">{if $merchant->service_8 > 0}{$merchant->service_8_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_8 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Jant Boyama <span class="price">{if $merchant->service_9 > 0}{$merchant->service_9_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_9 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Balata Değişimi  <span class="price">{if $merchant->service_10 > 0}{$merchant->service_10_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_10 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Aksesuar  <span class="price">{if $merchant->service_11 > 0}{$merchant->service_11_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_11 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    Balans Ayarı <span class="price">{if $merchant->service_12 > 0}{$merchant->service_12_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_12 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    OTO Yıkama <span class="price">{if $merchant->service_13 > 0}{$merchant->service_13_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_13 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success" id="fancy-checkbox-success" class="hidden" checked autocomplete="off" disabled/>
            <div class="[ btn-group ]">
                <label class="[ btn btn-default ]">
                    OTO Kuaför <span class="price">{if $merchant->service_14 > 0}{$merchant->service_14_amount} <div class="fa fa-try"></div> {/if}
                </label>
                <label class="[ btn btn-success ]">
                    <span class="[ glyphicon {if $merchant->service_14 > 0}glyphicon-ok{else}glyphicon-minus{/if} ]"></span>
                    <span> </span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                Satılan Lastik Markaları  <i class="glyphicon glyphicon-menu-down pull-right"></i>
            </a>
        </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
        {if $brand|@count > 0}
            <div class="panel panel-default">
                <div class="panel-body" style="height:400px;overflow-y:scroll">
                    <div class="vendor-brand">
                        <ul>
                            {foreach from=$brand item=brands}
                                {if $id|get_data_num:"merchant_detail":"brand":"data":$brands->id > 0}
                                    <li style="display: block">
                                        <a href="{base_url("marka")}/{$brands->id}/{$brands->name|lower|replace:" ":"-"}">
                                            <img src="{base_url($brands->image)}" class="img-responsive center-block">
                                        </a>
                                    </li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
        {/if}
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                Satılan Akü Markaları <i class="glyphicon glyphicon-menu-down pull-right"></i>
            </a>
        </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
        {if $brand_aku|@count > 0}
            <div class="panel panel-default">
                <div class="panel-body" style="height:400px;overflow-y:scroll">
                    <div class="vendor-brand">
                        <ul>
                            {foreach from=$brand_aku item=brand_akus}
                                {if $id|get_data_num:"merchant_detail":"brand_aku":"data":$brand_akus->id > 0}
                                    <li style="display: block">
                                        <img src="{base_url($brand_akus->image)}" class="img-responsive center-block">
                                    </li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
        {/if}
    </div>
</div>
</div>
</div>