<form class="navbar-form navbar-right " role="search" method="get" id="searchform" action="<?php echo home_url('/');?>">


	<div class="form-group search-form" for="s">
		<input type="text"  value="" name="s" id="s" class="form-control searchformdevicerely searchformoffset" style="margin-top:13px;font-family:微软雅黑;width:195px" placeholder="<?php the_search_query(); ?>">
	</div>
	<style>
	@media(max-width:990px){
	
	.searchformoffset
	{
		
		transition:width 1s;

	}
	.searchformoffset
	{
		width:120px !important;
	}


	#searchsubmit
	{
		width:120px !important;
	}
}


@media(min-width: 991px){
	.searchformoffset
	{
		
		transition:width 1s;

	}
	.searchformoffset
	{
		width:180px !important;
	}
}
</style>
	<button type="submit" id="searchsubmit" value="Search" class="button button-3d  button-highlight button-rounded" style="margin-top:9px;background-color:rgb(236,186,31);border-radius:7px;"><font face="微软雅黑">搜索</font></button>

</form>