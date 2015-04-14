<!--索引-->

<!--change the content hover color-->

<!--/索引-->

<style type="text/css">
	
</style>
<!--content-->
<div class="content " role="main" style="padding-bottom:0px;">

	<!-- post list -->
	<div class="postlist clearfix">

		
		<!--  style="color:rgb(232,103,65)"
		style="color:rgb(232,103,65)" -->





		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>


<style>


.post-name
{
  transition:letter-spacing 1s;
  -webkit-transition:letter-spacing 1s;
-o-transition:letter-spacing 1s;
-ms-transition:letter-spacing 1s;
-moz-transition:letter-spacing 1s;


}

.post-name:hover
{
	letter-spacing: 6px;
}



.post-category a
{
  transition:color 1s;
  -webkit-transition:color 1s;

-o-transition:color 1s;

-ms-transition:color 1s;
-moz-transition:color 1s;


}

.post-category a:hover
{
	color: #E3613C;

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


	
}/*
.post-imagehovereffect >div:hover
{
	
}
*/
</style>
<div class="hoverpost">
<div class="hoverrely">
		<!-- post item-->
		<div class="post-item  boxed " style="border-radius:10px;background-color:rgba(0,0,0,0);box-shadow:0px 0px 0px rgba(0,0,0,0);">
			<div class="inner" style="padding:0px">

				<!--date-->
				<div style="padding-left:40px">
					<div class="post-meta-top post-date-circle" style="background: none repeat scroll 0 0 rgba(0,0,0,0);box-shadow:2px 2px 5px #CDCDCD;border-radius: 60px;color: #fff;display: block;font-size: 11px;height: 60px;left: 20px;line-height: 36px;position: absolute;text-align: center;top: -7px;width: 60px;box-shadow:1px 0px 3px rgba(0, 0, 0, 0.2)">
						<div class="ribbon" style="margin:-20px">
							<span style="margin:0px;padding-top:15px">
								<em class="post-date" style="color:rgba(0,0,0,.5);margin-top:13px;font-size:23px;margin-left:-5px">
									<?php the_time('j')?>
								</em>
								<strong class="post-author" style="color:rgba(0,0,0,.5);margin-top:-14px;font-size:14px;margin-left:-5px" >
									<?php the_time("M"); ?>
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
						<a class="post-name"href="<?php echo the_permalink(); ?>">
							<font face="微软雅黑"><?php the_title(); ?></font>
						</a>
					</h2>


					<p class="post-category"><font face="微软雅黑">发表在</font>

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

					<font face="微软雅黑">分类中</font></p>
					
				</div>
				<div class="post-imagehovereffect">
				<div class="post-image mypostimg" style="
				  background: none repeat scroll 0 0 #fff;
    border: 6px solid white;
    border-radius: 10px;
    
    margin: 0 20px 22px 0;
    margin-top:15px;">
    				
					<?php the_post_thumbnail() ?>
									
				</div>
			
				
				<div class="post-desc" style="padding:0px 25px 0px 14px;margin-bottom:0px;margin-top:35px;padding-left:23px;padding-right:33px;">
					<font face="微软雅黑">
				<?php the_content('...') ?>
				
				</font>
				</div>
				<div class="container" style="padding-left:30px;padding-right:30px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0px;position:relative;padding-top:9px;">
				
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
                
				<a class="opacitybtn  btn btn-small btn-lime clearfix" style="float:right;margin-right:0px" href="<?php the_permalink() ?>"><span class="post-meta post-read " >&nbsp;<i class="glyphicon glyphicon-plus"></i><font face="微软雅黑" style="text-align:center">更多&nbsp;&nbsp;&nbsp;&nbsp;</font></span></a>
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

}
</style>



<!--change the content hover color-->
<style>
.post-imagehovereffect
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



.post-imagehovereffect:hover
{

	/*start*/

	/*warning:it will also effect the middle-size page's content,need more modification?plz send me email*/
	/*友情提示:这个颜色同样影响中级页面的背景色,如果需要更多修改空间,请发我邮件*/

	background-color: white;

	/*end*/


	margin-bottom: 80px;
	margin-top:65px;
	padding:14px 10px 27px 30px;
	box-shadow: 1px 0px 3px rgba(0,0,0,.2);
	


}

</style>

		<style>

		.post-item .post-image img, .post-item-wide .post-image img{
			border-radius:5px;
		}
		
		
		.mypostimg img{


			transition:all .8s;
			-webkit-transition:all .8s;
			-o-transition:all .8s;
			-ms-transition:all .8s;
			-moz-transition:all .8s;


		}
		.mypostimg img:hover {
			transform:scale(1.2);
			-webkit-transform:scale(1.2);

			-o-transform:scale(1.2);
			-ms-transform:scale(1.2);
			-moz-transform:scale(1.2);
			margin-top:-27px;

			

			


		}

		</style>
		<?php endwhile;

		else :
			echo '<p><font face="微软雅黑">没有找到你想要的哦</font></p><br><br><br><br><br><br><br><br><br><br><br>
		';

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
