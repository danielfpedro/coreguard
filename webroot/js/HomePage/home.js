$(function(){
    $("#slider1").revolution({
        sliderType:"standard",
        startDelay: 0,
        spinner:"spinner2",
        sliderLayout:"auto",
        viewPort:{
           enable:false,
           outof:'wait',
           visible_area:'100%'
        },
        delay: parseInt($('#slide-duration').val()),
        navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            onHoverStop: "on",
            arrows: {
                style:"erinyen",
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div> <span class="tp-arr-titleholder">{{title}}</span> </div>',
                left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                },
                right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                }
            }
            ,
            touch:{
                touchenabled:"on",
                swipe_treshold : 75,
                swipe_min_touches : 1,
                drag_block_vertical:false,
                swipe_direction:"horizontal"
            }
            ,
            bullets: {
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                style:"hermes",
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:30,
                space:5
            }
        },
        gridwidth:1240,
        gridheight:497 
    }); 

    // Rolar para a ancora
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

}); 