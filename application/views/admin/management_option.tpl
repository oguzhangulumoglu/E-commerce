{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="{base_url("admin/management")}"> Yöneticiler</a></li>
                <li class="active">Yönetici Ekle / Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Yöneticiler</h1>
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
                        <form role="form" method="post">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kullanıcı adı</label>
                                    <input class="form-control" type="text" name="username" value="{if $username}{$username}{/if}" placeholder="Kullanıcı adı">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kullanıcı şifre</label>
                                    <input class="form-control" type="password" name="password" value="123456" placeholder="Kullanıcı şifre">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kullanıcı statü</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="staff" {if $status eq "staff"} selected="selected" {/if}>Yönetici</option>
                                        <option value="editor"  {if $status eq "editor"} selected="selected" {/if}>Editor</option>
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

{include file="admin/footer.tpl"}