<?php get_header();?>


<div class="container">
	<h2 style="text-align:center;margin-top:50px"> <font face="微软雅黑">这里是搜索结果 </font></h2>
	<div class="row" >
		
		<div class="col-sm-12" >
			<?php include("thetopcontent.php");?>
		</div>
	</div>
</div>



<?php get_footer();?>


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
	.footerbarhidden
	{
		display:none;
	}
	.footerhidden
	{
		display: none;
	}

	  /* .footervisible
    {
    	display: none;
    }
    .footerbarvisible
    {
    	display: none;
    }备用*/
}
</style>