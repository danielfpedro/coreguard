<?php
    $headerData = [
        'address' => 'Rua 18 B, nº 45 - 1º andar, Vila Santa Cecília  - Volta Redonda',
        'phone' => '+55 (24) 99203-01292'
    ];
?>
<!-- Begin Header -->
<header>
    <!-- Begin Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <!-- Address and Phone -->
                <div class="col-sm-7 hidden-xs">
                    <span class="ion-android-system-home home-icon"></span><?= $headerData['address'] ?>
                    <span class="ion-ios7-telephone phone-icon"></span><?= $headerData['phone']?>
                </div>
                <!-- Social Buttons -->
                <div class="col-sm-5 text-right">
                    <ul class="topbar-list list-inline">
                        <li>    
                            <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                                <i class="fa fa-facebook"></i>
                            </a>                    
                            <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--/row --> 
        </div><!--/container header -->   
    </div><!--/top bar -->   
    <!-- End Top Bar -->

    <!-- Begin Navigation -->
    <div class="navbar-wrapper">
        <div class="navbar navbar-main" id="fixed-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 column-header">
                        <div class="navbar-header">
                            <!-- Brand -->
                            <a
                                href="<?= $this->Url->build(['controller' => 'HomePage', 'action' => 'home']) ?>"
                                class="navbar-brand"
                                title="Coreguard">
                                <div class="css-logo"></div>
                                <img
                                    style="margin-top: 2px;"
                                    src="<?= $this->Url->image('logo.png') ?>"
                                    class="raleway-logo"
                                    alt="Coreguard">
                            </a>
                            <!-- Mobile Navigation -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div><!-- /navbar header -->   

                        <!-- Main Navigation - Explained in Documentation -->
                        <nav class="navbar-collapse collapse navHeaderCollapse" role="navigation">
                            <ul class="nav navbar-nav navbar-right">
<!--                                 <li class="">
                                    <a
                                        href="#home"
                                        class="is-ancor">
                                        Home
                                    </a>
                                </li> -->
<!--                                 <li class="">
                                    <a
                                        href="#">
                                        Quem somos
                                    </a>
                                </li> -->
                                <li class="">
                                    <a
                                        href="#servicos"
                                        class="">
                                        Serviços
                                    </a>
                                </li>
                                <li class="disabled">
                                    <a
                                        title="Em breve!"
                                        href="#"
                                        class="disabled">
                                        Blog
                                    </a>
                                </li>
<!--                                 <li class="">
                                    <a
                                        href="#contato"
                                        class="is-ancor">
                                        Contato
                                    </a>
                                </li> -->
                            </ul><!-- /navbar right -->  
                        </nav><!-- /nav -->
                    </div>
                </div>
            </div><!-- /container header -->   
        </div><!-- /navbar -->
    </div><!-- /navbar wrapper -->
    <!-- End Navigation -->

</header><!-- /header -->
<!-- End Header -->