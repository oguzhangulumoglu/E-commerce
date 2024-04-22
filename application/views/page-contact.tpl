{include file="header.tpl"}
<div class="page-navigation">
    <div class="container">
        <div class="current-page pull-left">
            <span><i class="fa fa-fw fa-circle-o" aria-hidden="true"></i>{$subject}</span>
        </div>
        <ol class="breadcrumb pull-right">
            <li><a href="{base_url()}">Anasayfa</a></li>
            <li class="active"> Sayfalar</li>
        </ol>
    </div>
</div>
<section class="content white-bg">
    <div class="container">
        <div class="row">
	        	<div class="col-md-6 col-xs-12 col-sm-12">
                    <form id="contact">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Adınız soyadınız</label>
                                <input type="text" name="name" class="form-control" placeholder="Adınız, soyadınız">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Telefon numaranız</label>
                                <input type="text" class="form-control" name="phone" placeholder="Telefon numaranız">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mesajınız</label>
                                <textarea class="form-control" name="mesaj" id="" cols="10" rows="10"></textarea>
                            </div>
                        </div>

                    </form>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-red">Gönder</button>
                    </div>
                    <br>
                    <br>
                    <div style="clear:both;"></div>
                	<br>
				</div>
	        	<div class="col-md-6 col-xs-12 col-sm-12">
					<p class="text-center">
					<div class=" text-center">
	                <dl>
	                    <dd>Lastik Kent San. Tic. Ltd. Şti.</dd>
	                    <dd class="phone"><strong>0312 244 06 34</strong></dd>
	                </dl>
	                <dl>
	                    <dd>Alsancak Mahallesi Şehit Hikmet Özer Cad No:182 Etimesgut Ankara</dd>
	                </dl>
	                <dl>
	                    <dd>info@lastikkent.com.tr</dd>
	                    <dd>satis@lastikkent.com.tr</dd>
	                </dl>
	                <a href="#" class="map-link"><i>Google Map'te konum almak için lütfen tıklayınız.</i></a>
	            </div>
				</p>
        	</div>
    </div>
</section>
{include file="footer.tpl"}