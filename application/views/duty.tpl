{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Hizmet Güncelleme</li>
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
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Hizmet Güncelleme</h3>
                        <div class="wrapper">
                            <div class="row">
                                {if $error["code"] eq 2}
                                    <div class="alert bg-primary" role="alert">
                                        {$error["msg"]}<a href="{base_url("main/changepass")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                {/if}
                                <form name="duty" method="post" enctype="multipart/form-data">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_1" value="1" class="form-control" {if $data->service_1 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Lastik Değişimi
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_1_amount" value="{if $data->service_1_amount}{$data->service_1_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_2" value="1" class="form-control" {if $data->service_2 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Nitrojen Gaz Dolumu
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_2_amount" value="{if $data->service_2_amount}{$data->service_2_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_3" value="1" class="form-control" {if $data->service_3 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Rot Ayarı
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_3_amount" value="{if $data->service_3_amount}{$data->service_3_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_4" value="1" class="form-control" {if $data->service_4 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Sibop Değişimi
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_4_amount" value="{if $data->service_4_amount}{$data->service_4_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_5" value="1" class="form-control" {if $data->service_5 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Mobil Değişim
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_5_amount" value="{if $data->service_5_amount}{$data->service_5_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_6" value="1" class="form-control" {if $data->service_6 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Yağ Değişim
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_6_amount" value="{if $data->service_6_amount}{$data->service_6_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_7" value="1" class="form-control" {if $data->service_7 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Jant Satış
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_7_amount" value="{if $data->service_7_amount}{$data->service_7_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_8" value="1" class="form-control" {if $data->service_8 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Jant Düzeltme
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_8_amount" value="{if $data->service_8_amount}{$data->service_8_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_9" value="1" class="form-control" {if $data->service_9 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Jant Boyama
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_9_amount" value="{if $data->service_9_amount}{$data->service_9_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_10" value="1" class="form-control" {if $data->service_10 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Balata Değişimi
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_10_amount" value="{if $data->service_10_amount}{$data->service_10_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_11" value="1" class="form-control" {if $data->service_11 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Aksesuar
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_11_amount" value="{if $data->service_11_amount}{$data->service_11_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_12" value="1" class="form-control" {if $data->service_12 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                Balans Ayarı
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_12_amount" value="{if $data->service_12_amount}{$data->service_12_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_13" value="1" class="form-control" {if $data->service_13 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                OTO Yıkama
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_13_amount" value="{if $data->service_13_amount}{$data->service_13_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-md-2" style="background-color: #fff">
                                                <input type="checkbox" name="service_14" value="1" class="form-control" {if $data->service_14 > 0}checked{/if}/>
                                            </div>
                                            <div class="col-md-5" style="padding: 20px 0 14px 0;background-color: #fff">
                                                OTO Kuaför
                                            </div>
                                            <div class="col-md-5" style="padding-right: 0; padding-left: 0">
                                                <input type="text" name="service_14_amount" value="{if $data->service_14_amount}{$data->service_14_amount}{/if}" class="form-control" placeholder="0 TL" />
                                            </div>
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

<div class="pop-up pop-up-successful">
    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
    <span>Ürün başarıyla güncellendi.</span>
</div>

<div class="pop-up pop-up-unsuccessful">
    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
    <span>Ürün güncellemesi başarısız.<br>Lütfen kontrol ediniz.</span>
</div>

{include file="footer.tpl"}