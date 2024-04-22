<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>Lastikkent.com.tr - Kayıt Formu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url('assets/css/ekko-lightbox.min.css')}?v={time()}">
    <link rel="stylesheet" type="text/css" href="{base_url('assets/css/main.css')}?v={time()}">
    <script src="https://cdn.jsdelivr.net/g/jquery@2.2.0,bootstrap@3.3.6"></script>
    <script src="{base_url('assets/js/ekko-lightbox.min.js')}"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script><![endif]-->
</head>
<body class="page--sign">
<header class="bg-white">
    <div class="container">
        <nav class="navbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="{base_url()}">
                    <img src="{base_url("assets/img/logo.png")}">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</header>

<main class="Sign-up">
    <div class="container">
        <div class="info-alert">
            <i class="fa fa-bullhorn"></i>
            <div class="title">BİLGİLENDİRME!</div>
            <p>Tüm üyelerimiz için üyelik kontrolü yapılmaktadır! Bu durumdan dolayı herhangi bilgi eksikliği olan üyelikler onaylanmamaktadır. Tüm üyelerimizin dikkatine sunulur.</p>
        </div>
        <div class="info-alert">
            <i class="fa fa-check-circle"></i>
            <div class="title">KAYIT BAŞARILI</div>
            <p>Üyeliğiniz başarılı bir şekilde oluşturulmuştur. Üyelik panelinize <a href="{base_url("main/login")}"><strong>GİRİŞ</strong></a> yaparak ulaşabilir, lastikkent.com.tr'nin size sunmuş olduğu avantajlardan yararlanabilirsiniz.</p>
        </div>
        <div class="col-sm-offset-4 col-sm-4 text-center">
            <a class="btn btn-red" href="{base_url("main/login")}">GİRİŞ YAP</a>
            <a class="btn btn-primary" href="{base_url("main")}">ANASAYFA DÖN</a>
        </div>
    </div>
</main>

<footer class="bg-white">
    <div class="container">
        <p>Telif Hakkı Bildirimi © 2017 Lastikkent.com.tr. Her hakkı saklıdır.</p>
        <p>Alsancak Mahallesi Şehit Hikmet Özer Cad No:182 Etimesgut, Ankara</p>
    </div>
</footer>


</body>