<div class="panel panel-default tabbing">
    <div class="panel-body no-padding">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-tabs">
            YÖNETİM PANELİ
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul class="nav nav-tabs collapse navbar-collapse">
            <li class="hidden-xs">YÖNETİM PANELİ</li>
            <li class="active"><a href="{base_url("main/profile")}"><i class="fa fa-circle" aria-hidden="true"></i> Bilgileri Güncelle</a></li>
            <li><a href="{base_url("main/changepass")}"><i class="fa fa-circle" aria-hidden="true"></i> Şifreyi Güncelle</a></li>
            <li><a href="{base_url("main/message")}"><i class="fa fa-circle" aria-hidden="true"></i> Mesajlarım</a></li>
            {if $smarty.session.info['status'] neq "users"}
            <li><a href="{base_url("main/gallery")}"><i class="fa fa-circle" aria-hidden="true"></i> Fotoğraflarım</a></li>
            {/if}
            {if $status eq "normal"}
            <li><a href="{base_url("main/services")}"><i class="fa fa-circle" aria-hidden="true"></i> Servis Güncelleme</a></li>
            <li><a href="{base_url("main/order")}"><i class="fa fa-circle" aria-hidden="true"></i> Sipariş Ver</a></li>
            <li><a href="{base_url("main/orders")}"><i class="fa fa-circle" aria-hidden="true"></i> Siparişlerim</a></li>
            <li><a href="{base_url("main/duty")}"><i class="fa fa-circle" aria-hidden="true"></i> Verilen Hizmetler</a></li>
            {/if}
            {if $smarty.session.info['status'] neq "users"}
            <li><a href="{base_url("main/stock")}"><i class="fa fa-circle" aria-hidden="true"></i> Stokdaki Ürünlerim</a></li>
            <li><a href="{base_url("main/lcontact")}"><i class="fa fa-circle" aria-hidden="true"></i> Lastikkent İletişimi</a></li>
            <li><a href="{base_url("/genel/bayi/")}/{$uri}"><i class="fa fa-circle" aria-hidden="true"></i> Lastikkent Sayfam</a></li>
            <li class="hidden-xs title">E-TİCARET</li>
            <li><a href="{base_url("main/my_category")}"><i class="fa fa-circle" aria-hidden="true"></i> Benim Kategorilerim <span>Yeni</span></a></li>
            <li><a href="{base_url("main/my_product")}"><i class="fa fa-circle" aria-hidden="true"></i> Satılacak Ürünlerim <span>Yeni</span></a></li>
            <li><a href="{base_url("online/sales")}"><i class="fa fa-circle" aria-hidden="true"></i> Online Sat <span>Yeni</span></a></li>
            <li><a href="{base_url("main/product_update")}"><i class="fa fa-circle" aria-hidden="true"></i> Lastik Stokunu Oluştur <span>Yeni</span></a></li>
            <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Sattığım Ürünler</a></li>
            {else}
                <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Aldığım Ürünler</a></li>
            {/if}
            <li><a href="{base_url("main/logout")}">Güvenli Çıkış</a></li>
        </ul>
    </div>
</div>