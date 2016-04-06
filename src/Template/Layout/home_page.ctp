<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <title>
        Coreguard<?= $this->fetch('title') ?>
    </title>

    <!-- Royal Preloader CSS -->
    <?php if (!$debugLevel): ?>
        <?= $this->Html->css('royal_preloader') ?>    
    <?php endif ?>
    

    <!-- Revolution Slider CSS -->
    <?= $this->Html->css('../js/revolution/css/settings') ?>
    <?= $this->Html->css('../js/revolution/css/layers') ?>
        
    <!-- Revolution Slider Navigation CSS -->
    <?= $this->Html->css('../js/revolution/css/navigation') ?>

    <!-- Stylesheets -->
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('style') ?>
    <?= $this->Html->css('bootstrap-social') ?>
    <?= $this->Html->css('animate.min') ?>
    <?= $this->Html->css('owl.carousel') ?>
    <?= $this->Html->css('jquery.snippet') ?>
    <?= $this->Html->css('buttons') ?>
    
    <!-- Alternate Stylesheets / choose what color you want and include regularly AFTER style.css above -->
    <?= $this->Html->css('colors/blue') ?>

    <!-- Tem dois estilos "boxed" e "width-full", apaguei o "boxed" e estou usando o "width-full" -->
    <?= $this->Html->css('width-full') ?>

    <!-- Icon Fonts -->
    <?= $this->Html->css('ionicons.min') ?>
    <?= $this->Html->css('font-awesome') ?>

    <!-- Magnific Popup -->
    <?= $this->Html->css('magnific-popup') ?>

    <?= $this->Html->css('my_style') ?>

    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body id="home" class="royal_preloader scrollreveal">

<input type="hidden" id="slide-duration" value="<?= $sliderConfig['slideDuration']?>"></input>

<div id="royal_preloader"></div>

<div id="bg-boxed">
        <div class="boxed">
        
            <?= $this->element('HomePage/header') ?>

            <!-- Start Slider Revolution -->
            <?= $this->element('HomePage/slider') ?>

            <div id="servicos">
                <?= $this->element('HomePage/services') ?>
            </div>

            <!-- Begin Quote -->
            <?= $this->element('HomePage/frase') ?>
            <!-- End Quote -->
            
            <?= $this->fetch('content') ?>

        </div>
    </div>

    <!-- Jquery -->
    <?= $this->Html->script('../lib/jquery/dist/jquery.min') ?>
    <!-- Royal Preloader -->
    <?php if (!$debugLevel): ?>
        <?= $this->Html->script('royal_preloader.min.js') ?>
    <?php endif ?>

    <!-- Javascript Files -->
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('jquery.easing.min') ?>
    <?= $this->Html->script('jquery.mixitup.min') ?>
    <?= $this->Html->script('scrollReveal') ?>
    <?= $this->Html->script('owl.carousel.min') ?>
    <?= $this->Html->script('jquery.magnific-popup.min') ?>
    <?= $this->Html->script('jquery.snippet.min') ?>
    <?= $this->Html->script('jquery.fitvids') ?>
    <?= $this->Html->script('activate-snippet') ?>
    <?= $this->Html->script('skrollr.min') ?>

    <!-- On Scroll Animations - scrollReveal.js -->
    <script>
        var config = {
        easing: 'hustle',
        mobile:  true,
        delay:  'onload'
        }
        window.sr = new scrollReveal( config );
    </script>

    <!-- Slider Revolution JS -->
    <?= $this->Html->script('revolution/js/jquery.themepunch.tools.min.js') ?>
    <?= $this->Html->script('revolution/js/jquery.themepunch.revolution.min.js') ?>

    <!-- Slider Revolution Extensions (Load Extensions only on Local File Systems The following part can be removed on Server for On Demand Loading) -->    
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.actions.min') ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.carousel.min') ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.kenburn.min') ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.layeranimation.min') ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.migration.min') ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.navigation.min') ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.parallax.min') ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.slideanims.min') ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.video.min') ?>

    <?= $this->Html->script('main') ?>
    <?= $this->Html->script('HomePage/home') ?>

</body>
</html>
