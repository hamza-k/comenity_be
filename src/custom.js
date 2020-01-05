$(document).ready(function () {

    $(".intro-header--videoplay").click(function(){
        $(".intro-header--video-content").autoplay;
    })
    
    
    // Pop-up subscribe


    $('.intro-header--cta').click(function(){
        $('.register.login').show();
        $('.register-content').show();
    });
    $('.nav-login').click(function(){
        $('.register.login').show();
        $('.login-content').show();
    });
    $('.register.login .close').click(function(){
        $('.register.login').hide();
        $('.login-content').hide();
        $('.register-content').hide();
    })
    $('.switch--register-login').click(function(){
        $('.register-content').hide();
        $('.login-content').show();
    })
    $('.switch--login-register').click(function(){
        $('.login-content').hide();
        $('.register-content').show();
    })
    

    // ScrollMagic //

    //Display Video Header
    var controller = new ScrollMagic.Controller();
    var tweenvid = TweenMax.to(".intro-header--bg", 0.5, {
        autoAlpha: 0
    });

    // build scene
    var scene = new ScrollMagic.Scene({
            triggerElement: ".intro-header--videoplay",
            duration: 400
        })
        .setTween(tweenvid)
        //.addIndicators()
        .addTo(controller);

    //Display Description
    var controller = new ScrollMagic.Controller();
    var tweenpresent = TweenMax.from(".intro-present", 0.5, {
        autoAlpha: 0,
        y: -100
    });

    // build scene
    var scene = new ScrollMagic.Scene({
            triggerElement: ".intro-present",
            reverse: false
        })
        .setTween(tweenpresent)
        //.addIndicators()
        .addTo(controller);

    //Display role
    var controller = new ScrollMagic.Controller();
    var tweenpresent = TweenMax.from(".role", 0.5, {
        autoAlpha: 0,
        y: -100
    });

    // build scene
    var scene = new ScrollMagic.Scene({
            triggerElement: ".role",
            reverse: false
        })
        .setTween(tweenpresent)
        //.addIndicators()
        .addTo(controller);

    //Display role
    var controller = new ScrollMagic.Controller();
    var tweencta = TweenMax.from(".aboutus-end", 1, {
        height: 0
    });

    // build scene
    var scene = new ScrollMagic.Scene({
            triggerElement: ".aboutus-end",
            reverse: false
        })
        .setTween(tweencta)
    .triggerHook(0.7)
        //.addIndicators()
        .addTo(controller);
    
    
    // VIDEO PLAYING //
    $(".intro-header--videoplay").click(function(){
        $(".intro-header--video").show();
        $(".intro-header--video-content").attr("autoplay", "");
    })
    
    $(".intro-header--video .close").click(function(){
        $(".intro-header--video").hide();
        $(".intro-header--video-content").removeAttr("autoplay");
    })
    
    // FAQ //
    $(".faq .side-general").click(function(){
        $(".faq .content-faq").hide();
        $(".faq .content-general").show();
    })
    $(".faq .side-tutor").click(function(){
        $(".faq .content-faq").hide();
        $(".faq .content-tutor").show();
    })
    $(".faq .side-student").click(function(){
        $(".faq .content-faq").hide();
        $(".faq .content-student").show();
    })
    $(".faq .side-other").click(function(){
        $(".faq .content-faq").hide();
        $(".faq .content-other").show();
    })
    
    
        $(".faq .content-faq").hide();
        $(".faq .content-general").show();
    
    $(".faq .content-question").click(function(){
        $(".faq .content-question").removeClass("active");
        $(this).addClass("active");
    })
    
    // CGU //
    $(".cgu .side-intro").click(function(){
        $(".cgu .content-cgu").hide();
        $(".cgu .content-cgu--intro").show();
    })
    $(".cgu .side-cgumain").click(function(){
        $(".cgu .content-cgu").hide();
        $(".cgu .content-cgu--cgumain").show();
    })
    $(".cgu .side-desc").click(function(){
        $(".cgu .content-cgu").hide();
        $(".cgu .content-cgu--desc").show();
    })
    $(".cgu .side-ad").click(function(){
        $(".cgu .content-cgu").hide();
        $(".cgu .content-cgu--ad").show();
    })
    $(".cgu .side-security").click(function(){
        $(".cgu .content-cgu").hide();
        $(".cgu .content-cgu--security").show();
    })
    $(".cgu .side-certif").click(function(){
        $(".cgu .content-cgu").hide();
        $(".cgu .content-cgu--certif").show();
    })
    $(".cgu .side-table").click(function(){
        $(".cgu .content-cgu").hide();
        $(".cgu .content-cgu--table").show();
    })
    
    
        $(".cgu .content-cgu").hide();
        $(".cgu .content-cgu--intro").show();

})
