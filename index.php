<!--索引-->

<!--modal column-->

<!--pagination innerhtml&fontstyle-->

<!--

/*mobile header background*/

/*pad header background*/

/*mobile background*/

/*pad background*/

-->


<!--/索引-->



<?php get_header();?>
<!--main blog container-->
<div class="container" >
	<div class="row" style="margin:0px">
		<div class="theindexhovereffectrelyone thetopsidebardevicesupportvisible">
			<div class="col-sm-4">
				<?php include("thetopsidebar.php");?>
			</div>
		</div>
		<div class="theindexhovereffectrelytwo thetopcontentdevicesupportvisible">
			<div class="col-sm-8" >
				<?php include("thetopcontent.php");?>
				<?php 
				if(function_exists('wp_paginate')) {
				    wp_paginate();
				}
				else {
				    twentythirteen_paging_nav();
				}
				?> 
			</div>
		</div>
		<div class=" thetopcontentdevicesupporthidden">
			<div class="col-sm-8" >
				<?php include("thetopcontentdevicesupport.php");?>
				<div class="devicepaginationsupport">
					<?php 
					if(function_exists('wp_paginate')) {
					    wp_paginate();
					}
					else {
					    twentythirteen_paging_nav();
					}
					?> 
				</div>
			</div>
		</div>
		<div class=" thetopsidebardevicesupporthidden">
			<div class="col-sm-4">
				<?php include("thetopsidebardevicesupport.php");?>
			</div>
		</div>
		<div class=" thetopcontentdevicesupporthiddenpad">
			<div class="col-sm-8" style="padding:0px;">
				<?php include("thetopcontentdevicesupportpad.php");?>
				<div class="devicepaginationsupportpad">
					<?php 
					if(function_exists('wp_paginate')) {
					    wp_paginate();
					}
					else {
					    twentythirteen_paging_nav();
					}
					?> 
				</div>
			</div>
		</div>
		<div class=" thetopsidebardevicesupporthiddenpad">
			<div class="col-sm-4">
				<?php include("thetopsidebardevicesupportpad.php");?>
			</div>
		</div>


	</div>
</div>
<!--/main blog container-->


<!--pagination innerhtml&fontstyle-->
<script type="text/javascript">
	$('.wp-paginate .title').html("翻页");
	$('.wp-paginate .title').css('font-family','微软雅黑');
</script>
<!--/pagination innerhtml&fontstyle-->



<!--container devicesupport-->
<style>
@media (min-width:1500px){
	.container
	{
		transition:max-width 1.5s;
	}
	.container
	{
		max-width: 1200px;
	}
}
@media (min-width:991px) and (max-width: 1499px){
	.container{
		transition:max-width 1.5s;
	}
	.container{
		max-width: 910px;
	}
}


@media (min-width: 768px){
		.footerbarhidden
	{
		display:none;
	}
	.footerhidden
	{
		display: none;
	}
}
@media(max-width: 767px){

    .footervisible
    {
    	display: none;
    }
    .footerbarvisible
    {
    	display: none;
    }
}
@media(min-width: 768px) {
	.thetopcontentdevicesupporthiddenpad
	{
		display: none;
	}
	.thetopsidebardevicesupporthiddenpad
	{
		display: none;
	}

}

@media (max-width: 479px){
	.thetopcontentdevicesupporthiddenpad
	{
		display: none;
	}
	.thetopsidebardevicesupporthiddenpad
	{
		display: none;
	}
}


@media (max-width: 479px){


	.thetopsidebardevicesupporthidden
	{
		display:visible;

	}
	.thetopsidebardevicesupportvisible
	{
		display:none;
	}

	.thetopcontentdevicesupporthidden
	{
		display: visible;
	}
	.thetopcontentdevicesupportvisible
	{
		display: none;
	}

	.container
	{
		padding-left:6px;
		padding-right:6px;
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
		

		/*mobile background*/
		/*start*/
		background-image:url(<?php bloginfo('template_directory'); ?>/images/bg/mobilebg.jpg);
		/*end*/



		background-attachment: fixed !important;
	}
	.widget_avatar .avatar, .widget_profile .avatar {
    border: 1px solid white;
	}

	#headerbackgroundrely
	{
		/*mobile header background*/
		/*start*/
		background-image: linear-gradient(to top,  rgb(233,106,70) 0%, rgb(228,88,53) 100%) !important;
		/*end*/
		
	}


	.content, .sidebar {
    padding: 5px 0;
}
	.headercontainerdevicerely
	{
		padding:5px;
	}
	.navbar-collapse
	{
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		margin-top:12px;
	}
	.navbar-nav
	{
		text-align: center;
	}
	.searchformdevicerely
	{
		width:100% !important;
	}
	#searchsubmit
	{
		width:100% !important;
	}

	.wp-paginate .title
	{
		display: none !important;
	}
	.devicepaginationsupport
	{
		padding-left:10px;
		padding-right:10px;
		box-sizing: border-box;
	}
	.devicepaginationsupport .wp-paginate a
	{
		color:rgba(255,255,255,.5);
		border:1px solid rgba(255,255,255,.5);
		transition:all 1s;
	}
	.devicepaginationsupport .wp-paginate a:hover
	{
		border:1px solid white;
		background-color: rgba(0,0,0,0.4);
		color:white;
		font-size:110%;
		margin-left:10px;
		margin-right:20px;
		
	}

}

@media(min-width: 480px) and (max-width:767px ){
 


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
		

		/*pad background*/
		/*start*/
		background-image:url(<?php bloginfo('template_directory'); ?>/images/bg/padbg.jpg);
		/*end*/

		background-attachment: fixed !important;
	}

	.thetopcontentdevicesupportvisible
	{
		display: none;
	}
	.thetopsidebardevicesupportvisible
	{
		display: none;
	}
	.post-carousel
	{
		display: none;
	}

	/*pad header background*/
	/*start*/
	#headerbackgroundrely
	{
		background-image: linear-gradient(to top,  #13AD95 0%,#13AD95 2%,#13AD95 100%) !important;
		
	}
	/*end*/

}


@media(min-width:480px){


	.thetopsidebardevicesupporthidden
	{
		display:none;

	}
	.thetopcontentdevicesupporthidden
	{
		display:none;
	}

	.thetopsidebardevicesupportvisible
	{
		display: visible;
	}
	.thetopcontentdevicesupportvisible
	{
		display: visible;
	}


}

.wp-paginate a
{
	transition:all 1s;
}
.wp-paginate a:hover
{
	margin-left:10px;
		margin-right:20px;
		font-size: 120%;
		color:white;
}
</style>
<!--/container devicesupport-->

<!--modal column-->

<style type="text/css">
	.theindexhovereffectrelyone > div
	{
		border-top-left-radius:10px;
		border-bottom-left-radius: 10px;
		transition:all 1s;
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		-o-transition:all 1s;
		-ms-transition:all 1s;
	}
	
	.theindexhovereffectrelyone > div:hover
	{

		/*start*/

	/*main modal column hover effect goes here*/
	/*you can change the color whatever you like*/
    background-color:rgba(0,0,0,.3);
    /*/main modal column hover effect ends here*/
    /*you/'d always like to have opacity within it,also it/'s fine if you don/'t*/ 

		/*end*/

    margin-top:100px;
	}
	.theindexhovereffectrelytwo > div
	{
		border-top-right-radius:10px;
		border-bottom-right-radius:10px;
		transition:all 1s;
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		-o-transition:all 1s;
		-ms-transition:all 1s;
	}
	.theindexhovereffectrelytwo > div:hover
	{
		/*start*/

	/*main modal column hover effect goes here*/
	/*you can change the color whatever you like*/
    background-color:rgba(0,0,0,.3);
    /*/main modal column hover effect ends here*/
    /*you/'d always like to have opacity within it,also it/'s fine if you don/'t*/ 

    	/*end*/

    margin-top:50px;
	}
</style>
<!--end-->

<!--/colhovereffect-->
<?php get_footer();?>