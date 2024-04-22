<a data-text="Bu lastiği gördün mü ?" data-link="{base_url(uri_string())}" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large hidden">Hemen Paylaş</a>
<footer>
    <div class="container">
        <div class="row" style="margin-bottom: 30px">
            <div class="col-sm-3 text-center">
                <a href="#" class="footer-logo"><img src="{base_url('assets/img/logo.png')}" alt="" class="img-responsive center-block"></a>
                <dl>
                    <dd>Lastik Kent San. Tic. Ltd. Şt.</dd>
                    <dd class="phone"><strong>{$phone}</strong></dd>
                </dl>
                <dl>
                    <dd>{$adresss}</dd>
                </dl>
                <dl>
                    <dd>{$email_sistem}</dd>
                    <dd>{$email_sales}</dd>
                </dl>
                <a href="#" class="map-link"><i>Google Map'te konum almak için lütfen tıklayınız.</i></a>
            </div>
            <div class="col-sm-2">
                <ul>
                    <li class="list-header">Kurumsal</li>
                    {foreach from=$pages item=page}
                        <li><a href="{base_url("main/page/")}/{$page->uri}">{$page->subject}</a></li>
                    {/foreach}
                </ul>
            </div>
            <div class="col-sm-2">
                <ul>
                    <li class="list-header">Mevzuat</li>
                    {foreach from=3|get_page item=page}
                        <li><a href="{base_url("main/page/")}/{$page->uri}">{$page->subject}</a></li>
                    {/foreach}
                </ul>
            </div>
            <div class="col-sm-2">
                <ul>
                    <li class="list-header">Hizmetler</li>
                    {foreach from=$pages2 item=page2}
                        <li><a id="link{$page2->uri}" href="{base_url("main/page/")}/{$page2->uri}">{$page2->subject}</a></li>
                    {/foreach}
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="bulletin">
                    <li class="list-header">E-Posta Servisi</li>
                    <li>Kampanya haberlerimizi kaçırmamak için <strong>e-posta listemize kaydolun!</strong></li>
                </ul>
                <form action="{base_url("main/addmailing")}" method="post" class="bulletin-form">
                    <div class="form-group">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" name="email" class="form-control" placeholder="e-posta adresiniz">
                    </div>
                    <button class="btn btn-red" style="border-radius: 5px">KAYDI OLUŞTUR</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8">
                    <div class="copyright">
                        <span>Copyright &copy; 2016 - 2022 LastikKent</span> Tüm Hakları Saklıdır. İzinsiz Kopyalanamaz veya Çoğaltılamaz.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 text-xs-center">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <img id="img_logo" src="{base_url("/assets/img/logo.png")}">
            </div>

            <!-- Begin # DIV Form -->
            <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" method="post" action="{base_url("/main/login?redict=")}{base64_encode(current_url())}">
                    <div class="modal-body">
                        <div id="div-login-msg">
                            <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-login-msg">Hızlı bir şekilde giriş yapmanızı sağlar.</span>
                        </div>
                        <input name="email" class="form-control" type="text" placeholder="Kullanıcı adınız" required>
                        <input name="password" class="form-control" type="password" placeholder="Şifreniz" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Beni Hatırla
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Giriş Yap</button>
                        </div>
                        <div>
                            <a href="{base_url("/main/lost")}" class="btn btn-link">Şifremi Unuttum ?</a>
                            <a href="{base_url("/main/register")}" class="btn btn-link">Şimdi Kayıt Ol!</a>
                        </div>
                    </div>
                </form>
                <!-- End # Login Form -->

            </div>
            <!-- End # DIV Form -->

        </div>
    </div>
</div>
<!-- END # MODAL LOGIN -->

</body>