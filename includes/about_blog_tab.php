<section id="Blog_tab">
	<header class="hidden-xs">
		<h3 style="margin-top: 0px;">Blog</h3>	
	</header>

	<hr/>

	<section class="periods_acc">
		<h3>Latest</h3>
		<div>
			<?php include("about_5_latest.html"); ?>
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

</section>