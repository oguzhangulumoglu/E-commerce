{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>mesajlar</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Bayi Mesaj</li>
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

                    <div class="tab-pane active">
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Mesaj gönder</h3>
                        <div class="search-results">
                            {if $message["code"] eq 2}
                                <div class="alert bg-primary" role="alert">
                                    {$message["msg"]}<a href="{base_url("main")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                            {elseif $message["code"] eq 1}
                                <div class="alert bg-primary" role="alert">
                                    {$message["msg"]}<a href="{base_url("main")}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                            {/if}

                            <form action="{base_url("main/lcontact")}" method="post">
                                <div class="gap-wrapper">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Sorumlu Ad Soyad</label>
                                            <input type="text" name="name" value="{$name}" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">E-Posta Adresiniz</label>
                                            <input type="email" name="email" value="{$email}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Mesaj</label>
                                            <textarea name="text" id="text" cols="30" rows="5" class="form-control" required>{$smarty.post.message}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-red">MESAJ GÖNDER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{include file="footer.tpl"}