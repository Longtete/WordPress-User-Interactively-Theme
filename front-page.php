<!--you can edit the front-page images in images folder-->





<!doctype html>
<!--[if lt IE 7 ]><html lang="zh-CN" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="zh-CN" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="zh-CN" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="zh-CN" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="zh-CN" class="no-js"> <!--<![endif]--> 


<head>
   
    <meta charset="utf-8">

    <meta name="author" content="Longtee">

  
    <meta name = "generator" content = "wordpress">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

    <title><?php bloginfo('name'); ?></title>

    <!-- main JS libs  -->
    <script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr.min.js"></script>

    <script>/*
    <script src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/cdn/jquery-1.10.0.js"</script>

    <script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery-ui.min.js"></script>

    <script>/*<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/cdn/bootstrap.min.js"></script>

    <!-- Style CSS-->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" media="screen" rel="stylesheet">

    <!--main style-->
    <link href="<?php bloginfo('stylesheet_url'); ?>" media="screen" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugin/animate.min.css">
   
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugin/buttons.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugin/loading.css">

    <link href="<?php bloginfo('template_directory'); ?>/images/icon/moon.png" type="image/x-icon" rel="shortcut icon">

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

    <!--魔镜魔镜我要圆滚滚的角-->
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

 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lightbox.css">
    <script src="<?php bloginfo('template_directory'); ?>/js/greensock.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/plugin/lightbox.min.js"></script>
   

                <script src="<?php bloginfo('template_directory'); ?>/plugin/jquery.fancy-scroll.min.js"></script>

                <script type="text/javascript">
                $(window).fancy_scroll({
  animation: "bounce", 
    bounceDistance: 70, 
    glowColor: "#02A1FA", 
    animDuration: "0.4s", 
    animEasing: "cubic-bezier(0.175, 0.885, 0.420, 1.310)", 
 });
                </script>

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
         


    <div class="frontpagetopoffset" style="visibility:disable;height:120px">
    </div>


   
<style>
@media (max-width:1377px){
    .frontpagetopoffset {height:60px !important;}



}
@media(max-width:992px){
    .frontpagetopoffset{height:30px !important;
    }
}
@media(max-width:772px){
    .frontpagetopoffset{height:25px !important;}
}
@media(max-width: 479px){
    .frontpagetopoffset{height:0px !important;}
}





}
</style>
    <div class="container">

        <!-- row-->
        <div class="row">
            <div class="col-sm-12">

                <!-- Grid Gallery -->
                <div class="grid-gallery clearfix" style="margin-top:50px;padding-top:0px;margin-bottom:32px;padding-bottom:0px;">
            <div class="thumbnailgrid">

                    <div class="grid-box grid-box-large devicegridvisible" style="z-index:3">
                        <a href="<?php bloginfo('template_directory'); ?>/images/gridgallery/1.jpg" data-lightbox="gallery" data-title="" ><img src="<?php bloginfo('template_directory'); ?>/images/minigrid/1.jpg" class="img-responsive" alt="" /><span style="opacity:0">描述1</span></a>
                    </div> 
                    <div class="grid-box " style="z-index:3">
                        <a href="<?php bloginfo('template_directory'); ?>/images/gridgallery/2.jpg" data-lightbox="gallery" data-title="写上你的描述"><img src="<?php bloginfo('template_directory'); ?>/images/minigrid/2.jpg" class="img-responsive" alt="" /><span>描述2</span></a>
                    </div>
                    <div class="grid-box" style="z-index:3">
                        <a href="<?php bloginfo('template_directory'); ?>/images/gridgallery/3.jpg" data-lightbox="gallery" data-title="写上你的描述"><img src="<?php bloginfo('template_directory'); ?>/images/minigrid/3.jpg" class="img-responsive" alt="" /><span>描述3</span></a>
                    </div>
                    <div class="grid-box" style="z-index:3">
                        <a href="<?php bloginfo('template_directory'); ?>/images/gridgallery/4.jpg" data-lightbox="gallery" data-title="写上你的描述"><img src="<?php bloginfo('template_directory'); ?>/images/minigrid/4.jpg" class="img-responsive" alt="" /><span>描述4</span></a>
                    </div>
                    <div class="grid-box" style="z-index:3">
                        <a href="<?php bloginfo('template_directory'); ?>/images/gridgallery/5.jpg" data-lightbox="gallery" data-title="写上你的描述"><img src="<?php bloginfo('template_directory'); ?>/images/minigrid/5.jpg" class="img-responsive" alt="" /><span>描述5</span></a>
                    </div>
                    <div class="grid-box" style="z-index:3">
                        <a href="<?php bloginfo('template_directory'); ?>/images/gridgallery/6.jpg" data-lightbox="gallery" data-title="写上你的描述"><img src="<?php bloginfo('template_directory'); ?>/images/minigrid/6.jpg" class="img-responsive" alt="" /><span>描述6</span></a>
                    </div>
                    <div class="grid-box" style="z-index:3">
                        <a href="<?php bloginfo('template_directory'); ?>/images/gridgallery/7.jpg" data-lightbox="gallery" data-title="写上你的描述"><img src="<?php bloginfo('template_directory'); ?>/images/minigrid/7.jpg" class="img-responsive" alt="" /><span>描述7</span></a>
                    </div>
                     <div class="grid-box grid-box-large devicegridhidden" style="z-index:3">
                        <a href="<?php bloginfo('template_directory'); ?>/images/gridgallery/1.jpg" data-lightbox="gallery" data-title="写上你的描述" ><img src="<?php bloginfo('template_directory'); ?>/images/minigrid/1.jpg" class="img-responsive" alt="" /><span style="opacity:0">描述1</span></a>
                    </div> 

            </div>
                </div>
            <!--[if IE]><script type="text/javascript" src="js/grid.gallery.ie.js"></script><![endif]-->
            <!--/ Grid Gallery -->

            </div>

        </div>


<style type="text/css">
    @media(max-width: 479px){
        
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
        
        background-image:url(<?php bloginfo('template_directory'); ?>/images/bg/bg.jpg);
        background-attachment: fixed !important;
    }
.devicegridvisible
        {
            display: none;

        }


    }
    @media(min-width: 480px){
        .devicegridhidden{
            display: none;
        }
    }

</style>

<style>
.lb-number
{
    display: none !important;
}
</style>

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
    <div class="frontpagetopoffset"style="visibility:disable;height:120px">
    </div>
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
     <script>

            TweenMax.from(".the_footer",.6,{y:100,ease:Bounce.easeOut });

        </script>


            <div>

                <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/plugin/wow.min.js"></script>
                <script type="text/javascript">
                var wow = new WOW(
                {
    boxClass:     'wow',     
    animateClass: 'animated', 
    offset:       0,         
    mobile:       true,       
    live:         true,       
    callback:     function(box) {
      
  }
}
);
                wow.init();</script>

    <?php wp_footer(); ?>
</body>
</html>