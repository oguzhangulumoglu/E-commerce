{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>bayi giriş</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Bayi Şifremi Unuttum?</li>
        </ol>
    </div>
</div>

<div class="top-header">
    <div class="container">
        <h1>Bayi Şifremi Unuttum?</h1>
    </div>
</div>

<section class="vendor-login">
    <div class="container">
        <form action="" method="post" class="login-form">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    {if $error["code"]}
                        <div class="alert bg-primary" role="alert">
                            {$error["msg"]}<a href="{base_url("main/lost")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    {/if}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-fw fa-user" aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="E-mail Adres">
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-red">ŞİFREMİ GÖNDER</button>
                </div>
            </div>
        </form>
    </div>
</section>

{include file="footer.tpl"}