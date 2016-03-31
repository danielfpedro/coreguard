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

    <!-- Royal Preloader CSS -->
    <!-- <?= $this->Html->css('royal_preloader') ?> -->

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

    <title>
        Coreguard<?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="royal_preloader scrollreveal">

<div id="royal_preloader"></div>

<?= $this->Flash->render() ?>

<div id="bg-boxed">
        <div class="boxed">
        
        <?= $this->element('HomePage/header') ?>

        <?= $this->fetch('content') ?>

            <!-- Start Slider Revolution -->
            <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0" id="slider1">
                    <ul>
                        <li
                            data-delay="0" 
                            data-description="Raleway Bootstrap Template" 
                            data-easein="default"
                            data-easeout="default" 
                            data-masterspeed="default" 
                            data-param1="test" 
                            data-rotate="0" 
                            data-slotamount="default" 
                            data-title="Coreguard"
                            data-thumb="<?= $this->Url->image('backgrounds/bg1.png') ?>"
                            data-transition="slideremoveup">

                            <!-- MAIN IMAGE -->
                            <?= $this->Html->image('backgrounds/bg1.png', [
                                'data-bgfit' => 'cover',
                                'data-bgposition' => 'center center',
                                'data-bgrepeat' => 'no-repeat',
                                'data-no-retina' => '',
                                'height' => '800',
                                'style' => 'background-color:#000',
                                'width' => '1732'
                            ]) ?>

                            <div
                                class="tp-caption"
                                data-x="center"
                                data-y="196"
                                data-speed="600"
                                data-start="1200"
                                data-end="9400"
                                data-endspeed="600"
                                data-transform_idle="o:1;"
                                data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeOut;"
                                data-transform_out="y:50px;opacity:0;s:500;e:Power2.easeInOut;"
                                style="padding: 0px 3px; font-size: 46px; visibility: visible; border-bottom:2px solid rgba(255, 255, 255, 0.24); color:#fff; font-family: 'Raleway' sans-serif;">
                            <span class="heavy">Coreguard</span> IT Security & Risk Consulting.
                            </div>
                            
                            <div
                                class="tp-caption"
                                data-x="center"
                                data-y="295"
                                data-speed="600"
                                data-start="1200"
                                data-end="9400"
                                data-endspeed="600"
                                data-transform_idle="o:1;"
                                data-transform_in="y:150px;opacity:0;s:700;e:Power3.easeOut;"
                                data-transform_out="y:150px;opacity:0;s:500;e:Power2.easeInOut;"
                                style="padding: 0px 3px; font-size: 24px; visibility: visible; color:#e0e0e0; font-family: 'Open Sans' sans-serif; text-align:center;">
                                <p>
                                    Somos mais que uma empresa de segurança, somos seus parceiros.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Jquery -->
    <?= $this->Html->script('../lib/jquery/dist/jquery.min') ?>
    <!-- Royal Preloader -->
    <!-- <?= $this->Html->script('royal_preloader.min.js') ?> -->

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

    <!-- Slider Revolution Main -->
    <script type="text/javascript">
    jQuery(document).ready(function() { 
       jQuery("#slider1").revolution({
            sliderType: "standard",
            startDelay: 2000,
            spinner: "spinner2",
            sliderLayout: "auto",
            viewPort:{
               enable:false,
               outof:'wait',
               visible_area:'100%'
            },
            delay: 9000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"off",
                // arrows: {
                //     style:"erinyen",
                //     enable:true,
                //     hide_onmobile:true,
                //     hide_under:600,
                //     hide_onleave:true,
                //     hide_delay:200,
                //     hide_delay_mobile:1200,
                //     tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div> <span class="tp-arr-titleholder">{{title}}</span> </div>',
                //     left: {
                //         h_align:"left",
                //         v_align:"center",
                //         h_offset:30,
                //         v_offset:0
                //     },
                //     right: {
                //         h_align:"right",
                //         v_align:"center",
                //         h_offset:30,
                //         v_offset:0
                //     }
                // },
                touch:{
                    touchenabled:"on",
                    swipe_treshold : 75,
                    swipe_min_touches : 1,
                    drag_block_vertical:false,
                    swipe_direction:"horizontal"
                },
                // bullets: {
                //     enable:true,
                //     hide_onmobile:true,
                //     hide_under:600,
                //     style:"hermes",
                //     hide_onleave:true,
                //     hide_delay:200,
                //     hide_delay_mobile:1200,
                //     direction:"horizontal",
                //     h_align:"center",
                //     v_align:"bottom",
                //     h_offset:0,
                //     v_offset:30,
                //     space:5
                // }
            },
            gridwidth:1240,
            gridheight:497 
        }); 
    }); 
    </script>

</body>
</html>
