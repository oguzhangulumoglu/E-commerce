{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Bayi Profili</li>
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
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Servis Güncelleme</h3>
                        <div class="wrapper">
                            <div class="row">
                                {if $error["code"] eq 2}
                                    <div class="alert bg-primary" role="alert">
                                        {$error["msg"]}<a href="{base_url("main/services")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                {/if}
                                <form name="services" method="post">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-md-12">Satılan Lastik Markaları</label>
                                            {foreach from=$brand item=brands}
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="brand[]" value="{$brands['id']}" {if $brands['select']}checked="checked" {/if} class="form-control">
                                            </div>
                                            <div class="col-md-10" style="padding: 20px 0 14px;background-color: #fff">
                                                {$brands['name']}
                                            </div>
                                            {/foreach}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-md-12">Satılan Akü Markaları</label>
                                            {foreach from=$brand_aku item=brand_akus}
                                                <div class="col-md-2" style="background-color: #fff">
                                                    <input type="checkbox" name="brand_aku[]" value="{$brand_akus['id']}" {if $brand_akus['select']}checked="checked" {/if} class="form-control">
                                                </div>
                                                <div class="col-md-10" style="padding: 20px 0 14px;background-color: #fff">
                                                    {$brand_akus['name']}
                                                </div>
                                            {/foreach}
                                        </div>
                                    </div>

                                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-red">GÜNCELLE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{include file="footer.tpl"}