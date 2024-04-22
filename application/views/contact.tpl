{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>iletişim formu</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">İletişim Formu</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>{$merchant["company"]|capitalize} İletişim Formu</h1>
    </div>
</div>

<section class="vendor-register">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <form name="register" method="post">
                    <div class="row">
                        <div class="gap-wrapper">
                            {if $error["code"] eq 2}
                                <div class="alert bg-primary" role="alert">
                                    {$error["msg"]}<a href="{base_url("main")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                            {elseif $error["code"] eq 3}
                                <div class="alert bg-primary" role="alert">
                                    {$error["msg"]}<a href="{base_url("main")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                            {/if}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Sorumlu Ad Soyad</label>
                                    <input type="text" name="name" value="{$smarty.post.name}" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">E-Posta Adresiniz</label>
                                    <input type="email" name="email" value="{$smarty.post.email}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Mesaj</label>
                                    <textarea name="text" id="text" cols="30" rows="5" class="form-control" required>{$smarty.post.message}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-3">
                            <button type="submit" class="btn btn-red">MESAJ GÖNDER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{include file="footer.tpl"}
