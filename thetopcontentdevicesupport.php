
<!--索引-->

<!--change your profile img-->

<!--change the sidebar name-->

<!--change the sidebar description-->

<!--change the sidebar link-->

<!--change the sidebar link img-->

<!--change the modal content background in mobile-->

<!--/索引-->



<style>

.avatar-devicehovereffect > div
{
	border-radius: 10px;
	transition:all 1s;
	-webkit-transition:all 1s;
	-o-transition:all 1s;
	-ms-transition:all 1s;
	-moz-transition:all 1s;
margin:0 auto;
max-width: 300px;
}

.avatar-devicehovereffect > div:hover
{

	background-color: inherit;
	margin-top:40px;
	margin-bottom: 70px;
	box-shadow: 0px 0px 3px rgba(0,0,0,.2);
	background-color: rgba(0,0,0,.4);

	transform:scale(1.1) ;

}



</style>
<div class="sidebar">

	<!-- Avatar -->
	<div class="widget-container widget_avatar boxed avatar-devicehovereffect " style="background-color:rgba(0,0,0,0);box-shadow:1px 1px 4px rgba(0,0,0,0.1);">
		
		<div class="inner clearfix" >
			<div class="avatar">

				<!--change your profile img-->
				<!--start-->
				<!--the img ratio should be 1*1 so that u won/'t get ellipse border-->
				<img src="<?php bloginfo('template_directory'); ?>/images/avatar/ex.png" alt="" />
				<!--end-->

			</div>

			<h5 class="avatarname"><span>


				<!--change the sidebar name-->
				<!--start-->
				<font face="" style="font-size:23px;color:white">
				你的名字
				</font>
				<!--end-->

			</span></h5>
			<span class="subtitle">

				<!--change the sidebar description-->
				<!--start-->
				<font face="微软雅黑" style="color:white">

					你的个人签名

					<br/>

					个人签名第二行

				</font>
				<!--end-->
			</span>
			
		</div>
		



		<!--##########-->
		<div class="menu-headermenu-container">
			<ul id="menu-headermenu" class="menu">
				<li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12">
					
					<!--change the sidebar link-->
					<!--sorry for this, i didn/'t give it a dynamic function for you to use,so you have to change the link and the name all by yourself-->
					<!--start-->
					<a href="link goes here" style="color:white">
						主页
					</a>
					<!--end-->

				</li>
				<li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43">
					<!--change the sidebar link-->
					<!--start-->
					<a href="link goes here" style="color:white">
						关于
					</a>
					<!--end-->
				</li>
				<li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42">
					<!--change the sidebar link-->
					<!--start-->
					<a href="link goes here" style="color:white">
						留言
					</a>
					<!--end-->
				</li>
			</ul>
		</div>



		<div class="menu-headermenu-container">
			<div class="row"  style="padding:15px;padding-left:37px;">
				<div class="col-xs-3" >
					
					<!--change the sidebar link img-->
					<!--start-->
					<a href="http://weibo.com/234215269"><img style="border-radius:50%;height:30px;width:30px" src="<?php bloginfo('template_directory'); ?>/images/rss/9.png" style="height:40px;width:40px"></a>
					<!--end-->

					
				</div>
				<div class="col-xs-9">
					<span class="followmelinkhover"style="display:block;margin-top:10px;">

						<!--change the sidebar link-->
						<!--start-->
						<font face="">
						<a href="###" style="color:white">
							Follow Me On Tumblr
						</a>
						</font>
						<!--end-->

					</span>
				</div>
			</div>
		</div>






	</div>




<style type="text/css">
	
</style>

<div class="content " role="main">

	<div class="postlist clearfix">

		


		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>


<style>


.devicepostname
{
color:white !important;
	text-shadow:0px 0px 0px rgba(0,0,0,0);
  transition:all 1s;
  -webkit-transition:all 1s;
-o-transition:all 1s;
-ms-transition:all 1s;
-moz-transition:all 1s;


}

.devicepostname:hover
{
	letter-spacing: 6px;
	color:white !important;
}



.devicepostcategory a
{
	color:white;
  transition:color 1s;
  -webkit-transition:color 1s;

-o-transition:color 1s;

-ms-transition:color 1s;
-moz-transition:color 1s;


}

.devicepostcategory a:hover
{
	color: rgba(0,0,0,.4);


}

.post-date-circle span
{
	transition:all 1s;
	-webkit-transition:all 1s;
-o-transition:all 1s;
-ms-transition:all 1s;
-moz-transition:all 1s;


}
.post-date-circle span:hover
{
	transform:scale(.8);
	-webkit-transform:scale(.8);
	-o-transform:scale(.8);
	-ms-transform:scale(.8);
	-moz-transform:scale(.8);


	
}
.devicepostsupport p
{
	color:white;
}
.devicepostsupport
{
	margin-top: 0px !important;
}

</style>
<div class="hoverpost">
<div class="hoverrely">
		<!-- post item-->
		<div class="post-item  boxed " style="border-radius:10px;background-color:rgba(0,0,0,0);box-shadow:0px 0px 0px rgba(0,0,0,0);">
			<div class="inner" style="padding:0px">

				<!--date-->
				<div style="padding-left:40px">
					<div class="post-meta-top post-date-circle" style="background: none repeat scroll 0 0 rgba(0,0,0,0);box-shadow:2px 2px 5px #CDCDCD;border-radius: 60px;color: #fff;display: block;font-size: 11px;height: 60px;left: 20px;line-height: 36px;position: absolute;text-align: center;top: -10px;width: 60px;box-shadow:0px 0px 3px white">
						<div class="ribbon" style="margin:-20px">
							<span style="margin:0px;padding-top:15px">
								<em class="post-date" style="color:rgba(0,0,0,.5);margin-top:13px;font-size:23px;margin-left:-5px">
									<font style="color:white"><?php the_time('j')?></font>
								</em>
								<strong class="post-author" style="color:rgba(0,0,0,.5);margin-top:-14px;font-size:14px;margin-left:-5px" >
									<font style="color:white"><?php the_time("M"); ?></font>
								</strong>
							</span>
						</div>
					</div> 
				</div>
				<!--end date-->
				<div class="post-title" style="margin-left:100px">

					<h2 style="color: #aeaeae;
    
    font-size: 16px;
    font-style: italic;
    padding-bottom: 0px;
    text-shadow: 1px 1px 4px #fff;">
						<a class="post-name devicepostname"href="<?php echo the_permalink(); ?>">
							<font class="devicetitle"><?php the_title(); ?></font>
						</a>
					</h2>


					<p class="post-category devicepostcategory"><font face="微软雅黑" style="color:white">发表在</font>

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

					<font face="微软雅黑" style="color:white">分类中</font></p>
					
				</div>
				<div class="post-imagehovereffect post-imagehovereffectdevicesupport">
				<div class="post-image mydevicepostimg" style="
				  background: none repeat scroll 0 0 #fff;
    border: 6px solid white;
    border-radius: 10px;
    
    margin: 0 20px 22px 0;
    margin-top:15px;">
    				
					<?php the_post_thumbnail() ?>
									
				</div>
			
				
				<div class="post-desc devicepostsupport" style="padding:0px 25px 0px 14px;margin-bottom:0px;margin-top:35px;padding-left:23px;padding-right:33px;">
					<font face="微软雅黑">
				<?php the_content('...') ?>
				

				</font>
				</div>
				<div class="container devicemorebuttoncontainer" style="padding-left:30px;padding-right:30px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0px;position:relative;padding-top:9px;">
				
				<span class="deviceauthorgear" style="position:absolute;bottom:0;left:1;"><font face="" style="text-transform:none;"> by <a href="<?php echo get_author_posts_url(get_the_author_meta()); ?>"><?php the_author('ID')?></font></a></span>

<style type="text/css">
	.opacitybtn .btn .btn-small .btn-lime
	{
		background: none repeat scroll 0 0 #f6f1ed;
		color: #8e8071;
		box-shadow: 0 1px 1px rgba(255, 255, 255, 0.5) inset, 1px 2px 5px rgba(154, 125, 108, 0.6);
		border:none;
	}
</style>
                
				<a class="opacitybtn devicemorebutton  clearfix" style="float:right;margin-right:0px" href="<?php the_permalink() ?>"><span class="post-meta post-read devicemorebuttonread" >&nbsp;<i class="glyphicon glyphicon-plus"></i><font face="微软雅黑" style="text-align:center">更多&nbsp;&nbsp;&nbsp;&nbsp;</font></span></a>
				<a href=" <?php comments_link(); ?>" class="opacitybtn opacitybtndiviceeffect btn btn-small btn-blue clearfix" style="float:right;margin-right:10px"><span><i class="glyphicon glyphicon-comment"></i><font face="微软雅黑"><?php comments_number( '0 条评论&nbsp;&nbsp;', '1 条评论&nbsp;&nbsp;', '% 条评论&nbsp;&nbsp;' ); ?></font></span></a>
			</div>
			</div>


			
		</div>
	</div>
</div>
</div>
<style>
@media (min-width:768px) and (max-width: 990px){
	
}
	@media (min-width: 480px) and (max-width: 767px) {
    
}
@media (max-width: 479px) {
	

.deviceauthorgear
{
	display: none;
}

}
</style>



<style>
@media (min-width:768px) and (max-width: 990px){
	
}
	@media (min-width: 480px) and (max-width: 767px) {
    
}
@media (max-width: 479px) {
	.opacitybtndiviceeffect
	{
		display: none;
	}
	.devicemorebutton
	{
		margin-bottom: 7px;
		

	}
	.devicemorebuttonread
	{
		border-radius: 10px;
		padding:10px 5px 30px 10px !important;
	}
	.devicemorebuttoncontainer
	{
		padding-right: 0px !important;
		
	}

}
</style>


<!--change the modal content background in mobile-->
<style>
.post-imagehovereffectdevicesupport
{
	
	padding-left:20px;
	padding-bottom: 17px;
	border-radius: 10px;
	-webkit-border-radius: 10px;

	-o-border-radius:10px;
	-ms-border-radius:10px;
	-moz-border-radius:10px;
	margin-bottom: 15px;
	padding-top:0px;
	overflow: hidden;
-webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC);

	transition:all 1s;
	-webkit-transition:all 1s;
	-o-transition:all 1s;
	-ms-transition:all 1s;
	-moz-transition:all 1s;


}


.post-imagehovereffectdevicesupport:hover
{

	/*start*/
	background-color: #121212;
	/*end*/
	margin-bottom: 80px;
	margin-top:65px;
	margin-left:20px;
	margin-right: 20px;
	box-shadow: 1px 0px 3px rgba(0,0,0,.2);
	margin-bottom: 20px;

	

}

</style>
<script type="text/javascript">
   
</script>
	
		
		<style>

		.post-item .post-image img, .post-item-wide .post-image img{
			border-radius:5px;
		}
		
		.mydevicepostimg{
			/*overflow: hidden;*/
		}
		.mydevicepostimg img{



		}
		.mydevicepostimg img:hover {
		
			


		}

		</style>
		
		<?php endwhile;

		else :
			echo '<p>No content found</p>';

		endif;
		?>

	</div>
	<!--/ post list -->	
</div>
					<!--/content-->
					<style type="text/css">

					.navigation .wp-paginate
					{
						padding-right: 28px;
    text-align: left;
    font-family: Georgia,serif;
    font-size: 30px;
    padding-bottom: 53px;
    position: relative;

						}
						.navigation .wp-paginate .title{

				 background: none repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
    border: medium none !important;
    display: block;
    height:40px;
    font-size: 14px;
    font-style: italic;
    margin: 2px !important;
    padding: 5px 7px !important;
							}
							.navigation .current
							{
								border:1px solid white;
								border-radius: 10px;
								background: none;
							}
	.navigation .wp-paginate a {
		background: none;
		border: none solid white;
		border-radius: 10px


	}
	.navigation .wp-paginate a:hover {
		
		border:1px solid white;
								border-radius: 10px;
								transition:all 0.3s;
								-webkit-transition:all 0.3s;
								-o-transition:all 0.3s;
								-ms-transition:all 0.3s;
								-moz-transition:all 0.3s;

								
								

	}
							</style>

							
<style type="text/css">

	@media (min-width:768px) and (max-width: 990px){
	
}
	@media (min-width: 480px) and (max-width: 767px) {
    
}
@media (max-width: 479px) {
	
.post-imagehovereffect
    {
    	padding: 0px;
    }
   
    .col-sm-8
    {
    	padding:0px;
    }

	.theindexhovereffectrelytwo>div
	{
		/*border-left:4px solid orange;*/
		border-top-left-radius: 10px;
		border-bottom-right-radius:0px !important;
    
    
	}
.theindexhovereffectrelyone>div
	{
		/*border-left:4px solid orange;*/
		border-top-right-radius: 10px;
		border-bottom-right-radius: 10px;
    
    
	}

}
</style>
