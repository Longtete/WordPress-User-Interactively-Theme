<!--索引-->

<!--change your friend's link-->

<!--change your comment page id-->

<!--/索引-->



	
	<style>
	@media (min-width:768px) and (max-width:990px){
		.carousel-desc
		{
			font-size:14px;
			bottom:44px;
		}


	}

	</style>

	<style type="text/css">

	
	@media (min-width: 480px) and (max-width: 767px) {
		.post-carousel
		{
			
		}
	}
	@media (max-width: 479px) {
		.post-carousel
		{
			display: none;
		}
	}
	@media (min-width:1401px){
		.carousel-inner .item img
		{
			padding:0px !important;
			border-radius: 0px !important;
		}
		.post-carousel > div
		{
			
			transition:all 1s;

		}

		.post-carousel > div 
		{
			box-shadow: 0px 0px 4px rgba(0,0,0,.2);

		}


	}
	</style>
	

	<div>
		<style>
		.glowlink{
-moz-box-shadow: 0 0 5px #fff;
-webkit-box-shadow: 0 0 5px #fff;
box-shadow: 0px 0px 15px 5px rgba(255, 255, 190, .75);}
</style>
	</div>



	<!-- widget flickr-->
	<div class="paddeviceflickrhoverrely">
		<div class="widget-container flickr boxed clearfix" style="background-color:rgba(0,0,0,0);box-shadow:1px 0px 2px rgba(0,0,0,.1);">
			<h3 class="widget-title" style="background-color:rgba(0,0,0,0);box-shadow:1px 0px 3px rgba(0,0,0,0.15);color:#5C5146;text-align:center;margin-left:0px;padding-left:10px">

				<!--change your friend's link-->
				<!--start-->
				<font face="微软雅黑" style="color:white;">

					change your friend's link

				</font>
				<!--end-->

			</h3>
			<div class="inner" style="padding-right:0px;padding-left:0px;">
				<div class="flickr-inner">
					
					<!--change your friend's link-->
					<div class="flickr_badge_image">

						<!--start-->
						<a href="###########">
							<img src="<?php bloginfo('template_directory'); ?>/images/link/ex.png" class="img-circle glowlink" style="border:none" alt="" />
						</a>
						<!--end-->
					</div>

					<!--change your friend's link-->
					<div class="flickr_badge_image">

						<!--start-->
						<a href="###########">
							<img src="<?php bloginfo('template_directory'); ?>/images/link/ex.png" class="img-circle glowlink"  alt="" />
						</a>
						<!--end-->

					</div>

					<!--change your friend's link-->
					<div class="flickr_badge_image">
						<!--start-->
						<a href="###########">
							<img src="<?php bloginfo('template_directory'); ?>/images/link/ex.png" class="img-circle glowlink"  alt="" />
						</a>
						<!--end-->

					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!--/ widget flickr-->


	<!--flick hover effect-->
	<style>

	.paddeviceflickrhoverrely >div
	{
		transition:all 1s;
		-moz-transition:all 1s;
		-ms-transition:all 1s;
		-o-transiton:all 1s;
		-webkit-transition:all 1s;
		background-color:white !important;

	}
	.paddeviceflickrhoverrely >div:hover
	{
		
		box-shadow: 2px 0px 2px rgba(0,0,0,0.2) !important;
		margin-top:65px;
		margin-bottom:95px;
		
		/*transform:scale(1.2);*/

	}

	</style>

	<style type="text/css">

	@media (min-width:768px) and (max-width: 990px){
		
	}
	@media (min-width: 480px) and (max-width: 767px) {
		.paddeviceflickrhoverrely
		{
			
		}
	}
	@media (max-width: 479px) {
	}
	</style>




	<style type="text/css">
	.tabs li a{
		color:#5c5146;
	}
	.tabs li.active a{
		color:#E7613C;
	}
	</style>



	<!-- latest comments-->
	<div class="widget-container widget_recent_comments pad_device_widget_hover_effects boxed"  style="background-color:rgba(0,0,0,0);box-shadow: 0px 1px 6px rgba(57, 57, 57, .12)">
		
		<div class="inner" >
			<h3 class="widget-title"  style="background-color:rgba(0,0,0,0);box-shadow: 2px 2px 2px rgba(57, 57, 57, .12);color:white; text-transform: uppercase;text-align:center;border-radius:10px;border:none;">留言墙</h3>

			<br>

			<style type="text/css">
			.widget-thumb img
			{
				border-radius:50%;
				display: block;
				height: 100% !important;
				width: 100%;
				border: 0 none;
				font: inherit;
				height: auto !important;
				margin: 0;
				max-width: 100% !important;
				padding: 0;
				vertical-align: baseline;
			}
			</style>

			<style>
			.pad_device_widget_hover_effects>div
			{border-radius:10px;
				transition:all 1s;
				-webkit-transition:all 1s;
				-o-transition:all 1s;
				-ms-transition:all 1s;
				-moz-transition:all 1s;
background-color: white;
			}	
			.pad_device_widget_hover_effects>div:hover
			{
				
				margin-top:80px;
				/*border-radius: 50%;*/
				box-shadow: 1px 0px 2px rgba(0,0,0,0.1);
				
			}
			</style>

			
<!--change your comment page id-->
			<?php
			$args = array(
				'number' => 3,
				'order' => 'DESC',
				'post_id' => 12,
				'status' => 'approve',
				);
			$comments = get_comments( $args );
			
			if( $comments ) 
				{ ?> 
			<ul class="comment-header">
				
				</ul> <div class="clear"></div> <?php
				
				echo '<div class="single-comment">';
				foreach( $comments as $comment ) {

					echo  '<li class="recentcomments clearfix" style="list-style:none;">' ;
					
					
					echo '<a class="widget-thumb" href="'.get_comment_author_url().'">'.get_avatar(  $comment, 50 ).'</a>';
					echo '<span class="comment-content devicerecent_comment">', '<a rel="external nofollow" href="'.get_comment_author_link().'">'.'<font face="微软雅黑" class="padcommentauthorlink" >'.get_comment_author_link().'</font>'.'</a>'.'<font face="微软雅黑" style="color:#8E8071;">'.'在'.'</font>'.'<a href="'.get_comment_link($comment->comment_ID).'">'.'<font face="微软雅黑" style="color:#8E8071;">'.get_the_title($comment->comment_post_ID).'</font>'.'</a>'.'<font face="微软雅黑" style="color:#8E8071;">'.'说 : '.'</font>'.'<a style=" word-wrap: break-word;" href="'.get_comment_link($comment->comment_ID).'">'.'<font face="微软雅黑" style="color:#8E8071;">'.($comment->comment_content).'</font>'.'</a>'.'</span>' ;
					echo '<p><span class="comment-date">'.date('h:i a F jS ', strtotime($comment->comment_date)).'</span></p>'. '</li>';
				}
				echo '</div>';
			}
			?> 
			<ul><li style="text-align:center" class="commentslinkhover"><a href="<?php  echo get_page_link(12); ?>#comments" title="萌萌的留言版哦~" rel="bookmark"><span class="red-color "><font face="微软雅黑" >我要留言</font></span></a></li></ul>
			
		</div>
	</div>
	<!-- latest comments-->
	<style>
	.padcommentauthorlink a
	{
		color:#8E8071!important;
	}
	.padcommentauthorlink
	{
		color:#8E8071!important;
	}
	 .widget-container .devicerecent_comment, .widget-container .devicerecent_comment a {
    color: white;
    
}
	.comment-date
	{
		float:right;
	}
	.commentslinkhover a
	{

		transition:all 1s;
		-moz-transition:all 1s;
		-ms-transition:all 1s;
		-o-transiton:all 1s;
		-webkit-transition:all 1s;

	}
	.commentslinkhover a:hover
	{
		color:#E3613C;
	}
	.widget_recent_comments li, .widget_recent_entries li {
		border-top: none;
		padding: 17px 0;
		transition:all 1s;
		-moz-transition:all 1s;
		-ms-transition:all 1s;
		-o-transiton:all 1s;
		-webkit-transition:all 1s;

	}
	.widget_recent_comments li:hover {
		
		padding:  0px;
	}
	</style>

	
</div>
					<!--/sidebar-->