<!--initializing the awesome!!-->
<!doctype html>
<!--[if lt IE 7 ]><html lang="zh-CN" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="zh-CN" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="zh-CN" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="zh-CN" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="zh-CN" class="no-js"> <!--<![endif]--> 
<!--Ready Go!!!-->
<head>

    <meta charset="utf-8">

    <meta name="author" content="Longtee">

    <meta name = "generator" content = "wordpress">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

    <title><?php bloginfo('name'); ?></title>

    <!-- main JS libs  -->
    <script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr.min.js"></script>

    <!--jquery-->
    <script>/*<script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/cdn/jquery-1.10.0.js"</script>

    <script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery-ui.min.js"></script>

    <script>/*<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/cdn/bootstrap.min.js"></script>

    <!-- Style CSS-->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" media="screen" rel="stylesheet">

    <!-- <link rel = "stylesheet" href = "http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->

    <!--main style-->
    <link href="<?php bloginfo('stylesheet_url'); ?>" media="screen" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugin/animate.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugin/buttons.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugin/loading.css">


    <link href="<?php bloginfo('template_directory'); ?>/images/icon/moon.png" type="image/x-icon" rel="shortcut icon">
    
    <script src="<?php bloginfo('template_directory'); ?>/plugin/headroom.min.js"></script>

    <script src="<?php bloginfo('template_directory'); ?>/plugin/jQuery.headroom.js"></script>

    <script>
    $(function(){
        $(".thetopnavbar").delay(1500).queue(function(){
            $(this).removeClass('rubberBand');
            $(this).dequeue();
        });
        $(".navbartop").headroom({
            "tolerance": 0,
            "offset": 0,
            "classes": 
            {
                "initial": "animated",
                "pinned": "lightSpeedIn",
                "unpinned": "lightSpeedOut"
            }
        });
        $("#.navbartop").headroom("destroy");
    });
    </script> 


<!--pixel-fonts-->
<style>
@font-face{ 
    font-family:pxll;
    src:url("<?php bloginfo('template_directory'); ?>/fonts/pxll.ttf");
}
@font-face{
    font-family:Monotype Gerhilt;
    src:url("<?php bloginfo('template_directory'); ?>/fonts/Monotype_Gerhilt.ttf");
}
@font-face{
    font-family:Moon Phases;
    src:url("<?php bloginfo('template_directory'); ?>/fonts/moon.ttf");
}
@font-face {
    font-family: "Open Sans";
    font-style: normal;
    font-weight: 700;
    src: local("Open Sans Bold"), local("OpenSans-Bold"), url("fonts/Open Sans Bold.woff") format("woff");
}
@font-face {
    font-family: "Open Sans";
    font-style: normal;
    font-weight: 400;
    src: local("Open Sans"), local("OpenSans"), url("fonts/Open Sans.woff") format("woff");
}
@font-face {
    font-family: "Open Sans";
    font-style: normal;
    font-weight: 600;
    src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url("fonts/Open Sans Semibold.woff") format("woff");
}
</style>

<style>
.copyright a:hover 
{
    color: #fff;
}
</style>

<style>
.navbar{
    -webkit-animation-duration:1s;
    -webkit-animation-delay:0s;
}
</style>

<style>
body
{
    background-color:rgba(155,148,119,0.38);

    background-image:url(<?php bloginfo('template_directory'); ?>/images/bg/bg.jpg);
    background-repeat:no-repeat;

}

</style>





        <style type="text/css">
        img
        {
            height: auto !important;
            max-width: 100% !important;
            border: 0 none;
            font: inherit;
            margin: 0;
            padding: 0;
            vertical-align: baseline;
        }
        .footer_social
        {
            margin-bottom: 15px;
            text-align: center;
            outline: medium none;
            border: 0 none;
            font: inherit;
            padding: 0;
            vertical-align: baseline;
        }
        </style>
        <style type="text/css">
        a
        {
            
        }
        </style>




        <style>

        .post-meta-bot .post-meta.post-view, .post-meta-bot .post-meta.post-comm {
            width: 123px;
        }
        .post-meta-bot .post-meta.post-view, .post-meta-bot .post-meta.post-comm {
            border-right: 1px solid #fff;

        }
        .post-meta, .post-meta a {
            float: left;
            font-size: 15px;
            font-weight: bold;
            height: 24px;
            padding: 12px 0;
            padding-bottom:40px;
        }
        .post-meta, .post-meta a {
            background: none repeat scroll 0 0 #f6f1ed;
            color: #8e8071;
            text-align: center !important;
            text-transform: uppercase;
        }
        .post-meta {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        </style>

        <style>
        .item
        {
            border-top-left-radius:10px;
            -webkit-border-top-left-radius:10px;
            -khtml-border-top-left-radius:10px;
            -moz-border-top-left-radius:10px;
            -ms-border-top-left-radius:10px;
            border-top-right-radius:10px;
            -webkit-border-top-right-radius:10px;
            -khtml-border-top-right-radius:10px;
            -moz-border-top-right-radius:10px;
            -ms-border-top-right-radius:10px;
        }
        .carousel-inner
        {

            border-radius:10px;
            -webkit-border-radius:10px;
            -khtml-border-radius:10px;
            -moz-border-radius:10px;
            -ms-border-radius:10px;

        }

        </style>




        <style type="text/css">
        .header-bottom
        {
            background: none repeat scroll 0 0 #fff;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(221, 154, 101, 0.38);
            outline: medium none;
            border: 0 none;
            font: inherit;
            margin: 0;
            padding: 0;
            vertical-align: baseline;
        }
        .filter_menu
        {
            font-size: 18px;
            list-style: outside none none;
            text-align: center;
            border: 0 none;
            margin: 0;
            padding: 0;
            vertical-align: baseline;
        }   
        li
        {
            
        }
        a
        {
            outline: medium none;
            color: #7b6d5e;
            text-decoration: none;
            border: 0 none;
            font: inherit;
            margin: 0;
            padding: 0;
            vertical-align: baseline;
        }
        a:hover,
        a:focus
        {
            color:#e86741;
        }
        .blog_filter ul li a:hover, .blog_filter ul li.current-menu-item a {
            color: #e86741;
        }
        </style>


        <style>
        .footer_social
        {
            margin-bottom: 15px;
            text-align: center;
            outline: medium none;
            border: 0 none;
            font: inherit;
            padding: 0;
            vertical-align: baseline;
        }
        </style>

        <style>
        footer
        {
            height:230px;
            background-position: center top;
            position: relative;
            z-index: 1;
            display: block;
            border: 0 none;
            font: inherit;
            margin: 0;
            padding: 0;
            vertical-align: baseline;

        }
        </style>



        <style>   
        .wrapper {
            position:relative;
            height:200px;
        }
        .wrapperouter {
            overflow-y:auto;
            height: 200px;
        }
        .wrapperinner {
            font-weight: bold;
            margin-left: auto;
            margin-right: auto;
            margin:50px;
            position:relative; z-index:1;
        }
        .bar {
            height:50px; 
            z-index:2;
            position:absolute; 
            left:0; 
            right:20px;
        }

        .wrapperbottom {bottom:0;}
        .wrappertop {top:0; }

        ::-webkit-scrollbar {
            width: 12px;
        }
        ::-khtml-scrollbar {
            width: 12px;
        }
        ::-moz-scrollbar {
            width: 12px;
        }
        ::-ms-scrollbar {
            width: 12px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.3); 
            border-radius: 0px;
        }
        ::-khtml-scrollbar-track {
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.3); 
            border-radius: 0px;
        }
        ::-moz-scrollbar-track {
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.3); 
            border-radius: 0px;
        }
        ::-ms-scrollbar-track {
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.3); 
            border-radius: 0px;
        }


        ::-webkit-scrollbar-thumb {
            border-radius: 0px;
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.5); 
        }

        ::-khtml-scrollbar-thumb {
            border-radius: 0px;
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.5); 
        }
        ::-moz-scrollbar-thumb {
            border-radius: 0px;
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.5); 
        }
        ::-ms-scrollbar-thumb {
            border-radius: 0px;
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.5); 
        }
        </style>

        <style>
        .navbar-default{
            border-bottom-left-radius:10px;
            -webkit-border-bottom-left-radius:10px;
            -khtml-border-bottom-left-radius:10px;
            -moz-border-bottom-left-radius:10px;
            -ms-border-bottom-left-radius:10px;
            border-bottom-right-radius:10px;
            -webkit-border-bottom-right-radius:10px;
            -khtml-border-bottom-right-radius:10px;
            -moz-border-bottom-right-radius:10px;
            -ms-border-bottom-right-radius:10px;
        }
        </style>

        <style>
        .darkSwitch {
            background-color: #808080;
            transition-property:all;
            -webkit-transition:background-color 500ms ease-in;
            -khtml-transition:background-color 500ms ease-in;
            -moz-transition:background-color 500ms ease-in;
            -ms-transition:background-color 500ms ease-in;
        }
        .lightSwitch {
            transition-property:all;
            background-color: #ffff99;
            -webkit-transition:background-color 500ms ease-in;
            -khtml-transition:background-color 500ms ease-in;
            -moz-transition:background-color 500ms ease-in;
            -ms-transition:background-color 500ms ease-in;
        }

        </style>

        <script>
        function day() {
            thebody.className = "lightSwitch";
        };
        function night() {
            thebody.className = "darkSwitch";    
        };
        function reset() {
            thebody.className = "";
        };

        $(function() {
            var button = $('input[type=button]');
            button.on('click', function() {
                button.not(this).removeAttr('disabled');
                $(this).attr('disabled', '');
            });
        });
        </script>
        <style type="text/css">
        .navbar-default
        {
            background-image:linear-gradient(to bottom, #fff 0px, #fff 100%);
        }
        </style>

        <script src="<?php bloginfo('template_directory'); ?>/js/greensock.js"></script>


        <?php wp_head(); ?>
    </head>

<body style="font-family:微软雅黑" id="thebody"  <?php body_class(); ?>>
                   
    <style>
    body{
        background-image:url(<?php bloginfo('template_directory'); ?>/images/bg/bg.jpg);
        background-attachment: fixed;
    


    }
    </style>


    <style>
    .menu-item{margin-right: -5px;padding: 35px 27px;display: inline-block;list-style: outside none none;position: relative;font: inherit;vertical-align: baseline;
        font-family:微软雅黑;}
        </style>


        <!--header bottom-->    
        <div class="header-bottom " style="width:100%;z-index:2;border-top-left-radius:0px;border-top-right-radius:0px" >
            <div class="container">

                <div class="blog_filter clearfix ">
                       <ul class="filter_menu ">
                            <div class="site_nav">


                                <?php

                                $args = array(
                                    'theme_location' => 'primary'
                                    );

                                    ?>
                                    <?php wp_nav_menu(  $args ); ?>
                            </div>

                        </ul>

                    </div>

                </div>

            </div>
        </div>
            <!--/header bottom-->

            <!--萌萌的透明win8特效-->
            <style>
            .grid-gallery .grid-box span:hover
            {
                opacity:0.75;
                background-color:orange;
                border-radius:10px;
            }

            </style>

            <style>
            .gird-gallery
            {
                border-radius:10px;
            }
            </style>

            <style>
            .grid-gallery .grid-box a
            {
                border-radius:10px;
            }
            .grid-gallery .grid-box a img
            {
                border-radius:10px;
            }
            .grid-gallery .gird-box
            {
                border-radius:10px;
            }
            .grid-gallery .grid-box a span
            {
                border-radius:10px;
            }
            </style>
            <style>
        /*.tabs-framed .inner .tabs-center
        {
            margin:0 auto;
            }*/
         </style>


    <div style="visibility:disable;height:120px">
    </div>
    <div class="container">


              <div class="col-sm-8">
                <div class="devicecommentsupport">
 <?php comments_template(); ?></div>
 <script>
$('.comments-title').html('萌萌的留言墙')
 </script>
</div>
<style>
@media (max-width: 767px){

@keyframes fadeBackground{
    0%
    {
        opacity:0;
    }
    100%
    {

        opacity: 1;
        
    }
}
    body
    {
        transition:background-image 1.5s;
    }

    body{
        animation:fadeBackground 2s forwards;
        -webkit-animation:fadeBackground 2s forwards;
        -ms-animation:fadeBackground 2s forwards;
        -o-animation:fadeBackground 2s forwards;
        -moz-animation:fadeBackground 2s forwards;
        
        animation-iteration-count:1;
        
        background-image:url(<?php bloginfo('template_directory'); ?>/images/bg/backgroundxsdevice.jpg);
        background-attachment: fixed !important;
    }

    .devicecommentsupport .comment-form .comment-notes
    {
        color:white;
        font-size:17px;
    }
    .devicecommentsupport .comments-area .comment-respond .comment-reply-title
    {
        color:white;
    }
    



    .devicecommentsupport .comment-form-comment textarea
    {
        padding-top: 10px;
        border-radius: 10px;
        border:1px solid rgba(255, 255, 255, 0.7) ;
        color:rgba(0,0,0,.4);
        font-size: 16px;
        font-family:微软雅黑,"Goudy Bookletter 1911",Georgia,serif;
        /*box-shadow: 1px 1px 3px rgba(255, 255, 255, 0.1);*/
        transition:all 1s;
        -webkit-transition:all 1s;
        -o-transition:all 1s;
        -ms-transition:all 1s;
        -moz-transition:all 1s;
    }
    .devicecommentsupport .comment-form-comment textarea::-webkit-input-placeholder
    {
        color:rgba(0,0,0,.4);
        font-size:15px;
        font-family:微软雅黑, "Goudy Bookletter 1911",Georgia,serif;
    }
    .devicecommentsupport .comment-form-comment textarea:-ms-input-placeholder
    {
        color:rgba(0,0,0,.4);
        font-size:15px;
        font-family:微软雅黑, "Goudy Bookletter 1911",Georgia,serif;
    }
/*
    .comment-form-comment textarea::-moz-placeholder
    {
        color:rgba(0,0,0,.4);
        font-size:15px;
        font-family:微软雅黑, "Goudy Bookletter 1911",Georgia,serif;
    }
    .comment-form-comment textarea:-moz-placeholder 
    {
        color:rgba(0,0,0,.4);
        font-size:15px;
        font-family:微软雅黑, "Goudy Bookletter 1911",Georgia,serif;
    }*/

    .devicecommentsupport .comment-form-comment textarea:focus
    {
        border:1px solid white;
        font-size: 20px;
        padding-bottom: 20px;
        padding-top: 20px;
        font-style:italic;
        background-color: rgba(0,0,0,.1);
        color:rgb(255,255,255);
        -webkit-color:white;
        -o-color:white;
        -ms-color:white;
        -moz-color:white;
    }
    .devicecommentsupport .comment-form-comment textarea:hover
    {
    
        border:1px solid white;

    
    }
    .devicecommentsupport .comment-form input
    {
        border-radius: 10px;
        border:1px solid rgba(255, 255, 255, 0.7);
        color:rgba(0,0,0,.4);
        font-size:15px;
        font-family:微软雅黑, "Goudy Bookletter 1911",Georgia,serif;
        /*box-shadow: 1px 1px 3px rgba(255, 255, 255, 0.1);*/
        transition:all 1s;
        -webkit-transition:all 1s;
        -o-transition:all 1s;
        -ms-transition:all 1s;
        -moz-transition:all 1s;
    }
    .devicecommentsupport .comment-form input::-webkit-input-placeholder
    {
        color:rgba(0,0,0,.4);
        font-size:15px;
        font-family:微软雅黑, "Goudy Bookletter 1911",Georgia,serif;
    }
    .devicecommentsupport .comment-form input:-ms-input-placeholder
    {
        color:rgba(0,0,0,.4);
        font-size:15px;
        font-family:微软雅黑, "Goudy Bookletter 1911",Georgia,serif;
    }
/*
    .comment-form input::-moz-placeholder
    {
        color:rgba(0,0,0,.4);
        font-size:15px;
        font-family:微软雅黑, "Goudy Bookletter 1911",Georgia,serif;
    }
    .comment-form input:-moz-placeholder 
    {
        color:rgba(0,0,0,.4);
        font-size:15px;
        font-family:微软雅黑, "Goudy Bookletter 1911",Georgia,serif;
    }
    */
    .devicecommentsupport .comment-form input:focus
    {
        border:1px solid white;
        font-size: 20px;
        padding-bottom: 2px;
        font-style:italic;
        background-color: rgba(0,0,0,.1);
        color:white;
        -webkit-color:white;
        -o-color:white;
        -ms-color:white;
        -moz-color:white;

    }
    .devicecommentsupport .comment-form input:hover
    {
        border:1px solid white;

    }
    .devicecommentsupport .comment-form-author
    {
        width:100%;
    }
    .devicecommentsupport .comment-form-email
    {
        width:100%;
    }
    .devicecommentsupport .comment-form-url
    {
        width:100%;
    }
    .devicecommentsupport .form-submit input
    {
        background-color: rgba(0,0,0,0);
    border: 1px solid #d8dcdc;
    border-radius: 10px;
    
    float: right;
    margin-top: 0px;
    padding-bottom: 13px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top:11px;
    margin-bottom: 30px;
    color:white;
    font-size:14px;
    }
    .devicecommentsupport .form-submit input:hover
    {
        background-color: white;
        color:rgba(0,0,0,.4);


    }
    .devicecommentsupport .comment-awaiting-moderation
    {
        /*float:right;*/
        position:relative;
        float:right;
        
        top:7px;
        color:#aeaeae;
    }
    .devicecommentsupport .comment-form >label
    {
        visibility: visible;
        position:relative;
        color:white;
        -webkit-color:white;
        -o-color:white;
        -ms-color:white;
        -moz-color:white;
        margin-top:4px;
        margin-left: 5px;

    }
    .devicecommentsupport .comment-form >input
    {
        width:15px;
        height:15px;
        display: inline-block;
        border:1px solid white;
        background-color: rgba(0,0,0,0);

    }
    .devicecommentsupport .comments-title
    {
        color:white;
    }
}

    @media(min-width: 480px) and (max-width: 767px){


@keyframes padfadeBackground{
    0%
    {
        opacity:0;
    }
    100%
    {

        opacity: 1;
        
    }
}
    body
    {
        transition:background-image 1.5s;
    }

    body{
        animation:padfadeBackground 2s forwards;
        -webkit-animation:padfadeBackground 2s forwards;
        -ms-animation:padfadeBackground 2s forwards;
        -o-animation:padfadeBackground 2s forwards;
        -moz-animation:padfadeBackground 2s forwards;
        
        animation-iteration-count:1;
        
        background-image:url(<?php bloginfo('template_directory'); ?>/images/bg/backgroundxsdevicepad.jpg);
        background-attachment: fixed !important;
    }

.devicecommentsupport .comments-area .comment-respond input
    {
        color:rgba(255, 255, 255, 0.8);
    }
    .devicecommentsupport .comments-area .comment-respond input:focus
    {
        color:white;
    }

    }
     @media (max-width: 479px){
        .devicecommentsupport .comments-area .comment-respond input
    {
        color:rgba(255, 255, 255, 0.8);
    }
    .devicecommentsupport .comments-area .comment-respond input:focus
    {
        color:white;
    }
    }
</style>


                <!-- <section class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s">fsafadsfasdfsdaf</section>
                <section class="wow slideInRight" data-wow-offset="10"  data-wow-iteration="10">adfasdfadfsdf</section> -->

        <style type="text/css">
            .grid-box{
            position:relative;}
        </style>
        <script>

            TweenMax.from(".header-bottom",.6,{y:-100,ease:Bounce.easeOut });

            TweenMax.staggerFrom(".grid-box",.6,{
                y:200,opacity:0,scale:.8,skewY:200,ease:Back.easeOut.config(1.3),delay:.56
            },0.21);
        </script>
    </div>
    <div style="visibility:disable;height:120px">
    </div>
    <!--footer-->    
    <div class="header-bottom the_footer" style="width:100%;z-index:4;border-bottom-left-radius:0px;border-bottom-right-radius:0px">
        <div class="container">

            <div class="blog_filter clearfix ">
                <ul class="filter_menu ">
                    <div class="site_nav">

                        <?php

                        $args = array(
                            'theme_location' => 'footer'
                            );

                            ?>
                            <?php wp_nav_menu(  $args ); ?>
                    </div>

                </ul>

            </div>

        </div>
    </div>
     <!--/footer-->
     <script>

            TweenMax.from(".the_footer",.6,{y:100,ease:Bounce.easeOut });

        </script>


            <!--#######################################javascript特别战略执行部队####################################-->

            <div>

                <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/plugin/wow.min.js"></script>
                <script type="text/javascript">
                var wow = new WOW(
                {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
  }
}
);
                wow.init();</script>

<script>/*
      

        <!--雨san五笔怎么打 0.0 ~ -->
        <!-- <script src="plugin/modeswitch.js"></script>-->

        <!--youtubeload bar-->
        <script src="<?php bloginfo('template_directory'); ?>/plugin/jquery.loadingbar.js"></script>
        <script>
        $(".ajax-call").loadingbar({
            target: "#loadingbar-frame",
            replaceURL: false,
            direction: "right",

            /* Default Ajax Parameters.  */
            async: true, 
            complete: function(xhr, text) {},
            cache: true,
            error: function(xhr, text, e) {},
            global: true,
            headers: {},
            statusCode: {},
            success: function(data, text, xhr) {},
            dataType: "html",
            done: function(data) {}
        });
        </script>

        <!--popline-->
        <script src="<?php bloginfo('template_directory'); ?>/plugin/jquery.popline.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/plugin/jquery.popline.decoration.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/plugin/jquery.popline.link.js"></script>
        <script>
        $(".editor").popline();
        $(".editor").popline({mode: 'view'});
        </script>

        <!--zoom超级驱动-->
        <script src="<?php bloginfo('template_directory'); ?>/plugin/zoom.js"></script>
        <script>
        document.querySelector( '.page-body' ).addEventListener( 'click', function( event ) {
            event.preventDefault();
            zoom.to({ element: event.target });
        } );
        </script>

        <!--百度统计-->
        <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?9be01ac77d4b0cb217f3380253edf8a2";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </div>
    

        <style type="text/css">

        .comment-body
        {
            background: none repeat scroll 0 0 #fff;
            border-radius: 5px;
            box-shadow: 0 0 12px rgba(58, 51, 46, 0.26);
            z-index: 0;
        }

        </style>
        
    </div>
</div>
<?php include('commentbody.php'); ?>
<script>

    // $('.fn').attr('id','appendvarone');
    // $('.says').attr('id','appendvartwo');
    // $('.comment-body').attr('id','appendvarmother');
    // $('.says').('.comment-body');

</script>
<script>
$('.comment-body p').addClass('rightside');
</script>
<script>
$('#author').attr('onkeyup','WidthCheck(this,8);');
</script>
<script>
function WidthCheck(str, maxLen){ 
var w = 0; 
var tempCount = 0;
        //length 获取字数数，不区分汉子和英文
for (var i=0; i<str.value.length; i++) { 
                      //charCodeAt()获取字符串中某一个字符的编码
var c = str.value.charCodeAt(i); 
//单字节加1 
if ((c >= 0x0001 && c <= 0x007e) || (0xff60<=c && c<=0xff9f)) { 
w++; 
}
else {   
w+=2; 
} 
if (w > maxLen) { 
str.value = str.value.substr(0,i);
break;
}   
} 
}

</script>


 
    <?php include('commentform.php'); ?>


<script>
$('.comment-awaiting-moderation').html('你的评论已收到,会在审核后显示');
$('#author').attr('placeholder','名字');
$('#email').attr('placeholder','邮箱');
$('#url').attr('placeholder','主页');
$('#comment').attr('placeholder','说点什么吧')
$('#comment_mail_notify').attr('style','margin-left:0px');

</script>
    <?php wp_footer(); ?>
    <!--#######################################javascript特别战略执行部队####################################-->
</body>
</html>


