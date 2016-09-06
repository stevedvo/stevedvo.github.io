<header class="hidden-xs">
	<h3 style="margin-top: 0px;">Blog</h3>	
</header>

<hr/>

<section class="periods_acc">
	<h3>Latest</h3>
	<div>
		<?php include("about_5_latest.html"); ?>
	</div>
 	<h3>August 2016</h3>
	<div>
		<?php include("about_5_201608.html"); ?>
	</div>
 	<h3>July 2016</h3>
	<div>
		<?php include("about_5_201607.html"); ?>
	</div>
 	<h3>June 2016</h3>
	<div>
		<?php include("about_5_201606.html"); ?>
	</div>
 	<h3>May 2016</h3>
	<div>
		<?php include("about_5_201605.html"); ?>
	</div>
	<h3>April 2016</h3>
	<div>
		<?php include("about_5_201604.html"); ?>
	</div>
</section>

<script type="text/javascript">
	$(".periods_acc").accordion(
	{
		collapsible: true,
		// active: false,
		animate: false,
		heightStyle: "content"
	});

	$(".periods_acc").accordion().addClass("hidden-xs");

</script>