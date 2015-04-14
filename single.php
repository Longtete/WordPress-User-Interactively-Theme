<!--索引-->

<!--single sidebar-->

<!--/索引-->

<?php get_header() ?>


<div class="container">
	<div class="row">
		<div class="col-sm-8 devicecol" >
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
			?>

			<!-- post item-->
			<div class="container" style="margin-top:30px;padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
				<div class="post-item  boxed devicepostitem" >
					<div class="post-meta-top">
						<div class="ribbon">
							<span>
								<em class="post-date">
									<?php the_time('j')?>
								</em>
								<strong class="post-author" >
									<?php the_time('M'); ?>
								</strong>
							</span>
						</div>
					</div> 
					<div class="post-image devicepostimage">
						<?php the_post_thumbnail() ?>
					</div>
					<div class="inner deviceinner" style="padding-bottom:5px;">
						<div class="post-title" style="text-align:center;">
							<h2>
								<a href="<?php echo the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>
							<p class="post-category"><font face="微软雅黑">晾在了</font>

					<font face="微软雅黑"><?php

							$categories = get_the_category();
							$separator = ", ";
							$output = '';

							if ($categories) {

								foreach ($categories as $category)
								{
									$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
								}
								echo trim($output, $separator);
							}

							?></font>

					<font face="微软雅黑">架上</font></p>
							
						</div>
						<div class="post-desc devicepostcontent">
							<font face="微软雅黑">
								<?php the_content(); ?>
							</font>
						</div>
					</div>


				</div>
			</div>
			<!--/post item-->
			<?php endwhile;

			else :
				echo '<p>No content found</p>';

			endif;
			?>


			<div class="devicecommentsupport anotherdevicecommentsupport">

					<?php comments_template(); ?>
				</div>
		</div>
				<div class="col-sm-4">
					<div class="container thesinglesidebar" style="margin-top:30px">





                    <!--single sidebar-->
                    <!--每篇文章的边栏在这里,你可以放置任何你想要的东西-->



					
		          </div>
				</div>



<style>
@media (max-width: 767px){
    .thesinglesidebar
    {
        display: none;
    }
}

</style>
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
<?php include('commentbody.php');?>
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


	<?php include('commentform.php');?>

<script>
$('.comment-awaiting-moderation').html('你的评论已收到,会在审核后显示');
$('#author').attr('placeholder','名字');
$('#email').attr('placeholder','邮箱');
$('#url').attr('placeholder','主页');
$('#comment').attr('placeholder','说点什么吧')
$('#comment_mail_notify').attr('style','margin-left:0px');

</script>
<?php get_footer() ?>

<style>
@media(min-width:480px){
.footerbarhidden
	{
		display:none;
	}
	.footerhidden
	{
		display: none;
	}

}
@media(max-width: 479px){
	   .footervisible
    {
    	display: none;
    }
    .footerbarvisible
    {
    	display: none;
    }

#headerbackgroundrely
	{
		background-image: linear-gradient(to top,  rgb(237,231,230) 0%,rgb(233,106,70) 2%,rgb(228,88,53) 100%) !important;
		
	}

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
}


@media (max-width: 767px){
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
}
@media (max-width: 767px){
    .devicepostitem
    {
        background-color:rgba(0,0,0,0);
        box-shadow:0 0 0 rgba(0,0,0,0);

    }

    .deviceinner
    {
        padding-left:0px !important;
        padding-right:0px !important;
        padding-bottom: 0px !important;
    }
    .deviceinner a
    {
        color:white;
    }
    .devicecol
    {
        padding-left:8px;
        padding-right:8px;
    }
    .devicepostcontent p
    {
        color:white ;
        font-size: 15px;
    }
    .post-item .deviceinner .post-title h2 a
    {
        color:white ;
    }
    .deviceinner p
    {
        color:white;
    }
    .devicepostimage
    {
        border:5px solid white;
        border-radius: 10px;
    }
    .devicepostimage img{
        border-radius: 5px !important;
    }
    .deviceinner

    {
        padding-top:0px !important;
    }
    .deviceinner .post-title .post-category
    {
        padding-bottom: 0px;
    }

    .devicecommentsupport .comments-area h2
    {
        color:white ;
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
    #headerbackgroundrely
    {
        background-image: linear-gradient(to top,  #13AD95 0%,#13AD95 2%,#13AD95 100%) !important;
        
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
