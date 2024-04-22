{include file="admin/header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{base_url("admin")}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="{base_url("admin/comments")}"> Yorumlar</a></li>
                <li class="active">Yorum Düzenle</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Yorumlar</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Düzenle</div>
                    {if $errorCode eq 2}
                        <div class="alert bg-primary" role="alert">
                            <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> {$errorMsg}</a>
                        </div>
                    {/if}
                    <div class="panel-body">
                        <form role="form" method="post">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Yorum adı</label>
                                    <input class="form-control" type="text" name="name" value="{if $name}{$name}{/if}" placeholder="Name adı">
                                </div>
                                <div class="form-group">
                                    <label>Yorum konu</label>
                                    <input class="form-control" type="text" name="subject" value="{if $subject}{$subject}{/if}" placeholder="subject adı">
                                </div>
                                <div class="form-group">
                                    <label>Yorum</label>
                                    <input class="form-control" type="text" name="text" value="{if $text}{$text}{/if}" placeholder="text adı">
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