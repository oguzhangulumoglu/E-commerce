{include file="header.tpl"}

<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>mesajlarım</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active">Mesaj</li>
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
                        <h3><i class="fa fa-circle" aria-hidden="true"></i> Gelen Mesajlarım</h3>
                        <div class="search-results">
                            <div class="row">
                                {foreach from=$message name=foo item=msg}
                                    <div class="col-md-12">
                                        <div class="white-bg">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h4>{$msg->name}</h4>
                                                    <ul>
                                                        <li>
                                                            <span>Zaman: </span> {$msg->create_time}
                                                        </li>
                                                        <li>
                                                            <span>Email: </span> {$msg->email}
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>Mesaj</span> {$msg->text}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        <span class="red">İşlem</span>
                                                        <span style="display: block">
                                                            <a href="{base_url("main/message_delete/")}/{$msg->id}">
                                                                <i class="glyphicon glyphicon-remove" style="font-size: 32px;color: #d23a3a;"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {foreachelse}
                                    <div class="col-md-12">
                                        <div class="white-bg">
                                            <div class="row">
                                                <span>Üzgünüm, herhangi bir mesajınız bulunmamaktadır!</span>
                                            </div>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                            <ul class="pagination">
                                {for $foo=1 to $page}
                                    <li{if $foo eq $complete} class="active"{/if}><a href="{base_url("main/product_update/")}/{$foo}">{$foo}</a></li>
                                {/for}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{include file="footer.tpl"}