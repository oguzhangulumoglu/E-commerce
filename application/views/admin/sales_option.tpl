{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="{base_url("admin/sales")}"> Lastik Satıcı</a></li>
                <li class="active"> Ekle / Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lastik Satıcı</h1>
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
                                    <label>Marka adı</label>
                                    <input class="form-control" type="text" name="sales" value="{if $name}{$name}{/if}" placeholder="Lastik satıcı adı">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Marka Logo</label>
                                    <input class="form-control" type="file" name="file" value="{if $image}{$image}{/if}" placeholder="Image adı">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea name="details" class="form-control editor" id="" cols="30" rows="12">{$details}</textarea>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" style="margin-top: 25px">Kaydet / Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

{include file="admin/footer.tpl"}