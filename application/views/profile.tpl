{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>{if $smarty.session.info['status'] neq "users"}mağaza girişi{else}profil{/if}</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">{if $smarty.session.info['status'] neq "users"}Mağaza Profili{else}Profil{/if}</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>{if $smarty.session.info['status'] neq "users"}Mağaza Paneli{else}Panel{/if}</h1>
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
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Bilgileri Güncelle</h3>
                        <div class="wrapper">
                            <div class="row">
                                {if $error["code"] eq 2}
                                    <div class="alert bg-primary" role="alert">
                                        {$error["msg"]}<a href="{base_url("main/profile")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                {/if}
                                <form name="profile" method="post" enctype="multipart/form-data">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Yetkili Ad Soyad <span style="color: red">(*)</span></label>
                                            <input type="text" name="name" value="{$name}" class="form-control" placeholder="Yetkili Adı">
                                        </div>
                                    </div>
                                    {if $smarty.session.info['status'] neq "users"}
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Web Sitesi</label>
                                            <input type="text" class="form-control" name="web" value="{$web}">
                                        </div>
                                    </div>
                                    {/if}
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Adres <span style="color: red">(*)</span></label>
                                            <textarea name="adress" cols="30" rows="5" class="form-control">{$adress}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sabit Telefon Numarası <span style="color: red">(*)</span></label>
                                            <input type="text" class="form-control" name="homephone" value="{$homephone}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cep Telefonu</label>
                                            <input type="text" class="form-control" name="cellphone" value="{$cellphone}">
                                        </div>
                                    </div>
                                    {if $status != "online"}
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>İl</label>
                                            <select name="city2" id="city" class="form-control" data-id="{$city}">
                                                <option value="">Lütfen Seçiniz</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>İlçe</label>
                                            <select name="state2" id="state" class="form-control" data-id="{$state}">
                                                <option value="">Lütfen Seçiniz</option>
                                            </select>
                                        </div>
                                    </div>
                                    {/if}
                                    {if $smarty.session.info['status'] neq "users"}
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Vergi No</label>
                                            <input type="text" class="form-control" name="vergino" value="{$vergino}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Logo Güncelle</label>
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                    </div>
                                    {/if}
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

<div class="pop-up pop-up-successful">
    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
    <span>Ürün başarıyla güncellendi.</span>
</div>

<div class="pop-up pop-up-unsuccessful">
    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
    <span>Ürün güncellemesi başarısız.<br>Lütfen kontrol ediniz.</span>
</div>

{include file="footer.tpl"}