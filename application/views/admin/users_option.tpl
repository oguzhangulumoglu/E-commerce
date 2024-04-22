{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="{base_url("admin/users")}"> Kullanıcılar</a></li>
                <li class="active">Ekle / Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Kullanıcılar</h1>
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
                                    <label>Kullanıcı adı</label>
                                    <input class="form-control" type="text" name="name" value="{if $name}{$name}{/if}" placeholder="Sorumlu adı">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description" value="{if $description}{$description}{/if}" placeholder="description">
                                </div>
                                <div class="form-group">
                                    <label>Email <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="text" name="email" value="{if $email}{$email}{/if}" placeholder="Sorumlu adı">
                                </div>
                                <div class="form-group">
                                    <label>Adres</label>
                                    <input class="form-control" type="text" name="adress" value="{if $adress}{$adress}{/if}">
                                </div>
                                <div class="form-group">
                                    <label>Sabit Tel</label>
                                    <input class="form-control" type="text" id="phone2" name="homephone" value="{if $homephone}{$homephone}{/if}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Şifre <span style="color:red">(*)</span></label>
                                    <input class="form-control" type="password" name="password" value="12345">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords" value="{if $keywords}{$keywords}{/if}" placeholder="keywords">
                                </div>
                                <div class="form-group">
                                    <label>Sabit Cep</label>
                                    <input class="form-control" type="text" id="phone" name="cellphone" value="{if $cellphone}{$cellphone}{/if}">
                                </div>
                                <div class="form-group city">
                                    <label>Şehir</label>
                                    <select class="form-control" name="city" id="city" data-data="{if $city}{$city}{/if}">
                                        <option value="0">Seçiniz</option>
                                    </select>
                                </div>
                                <div class="form-group state">
                                    <label>İlçe</label>
                                    <select class="form-control" name="state" id="state" data-data="{if $state}{$state}{/if}">
                                        <option value="0">Seçiniz</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="float:right">Kaydet / Güncelle</button>
                            </div>
                        </form>
                    </div>
                    </div>

                </div>
            </div>
        </div>



    </div>

{include file="admin/footer.tpl"}