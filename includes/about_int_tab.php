<header class="hidden-xs">
	<h3 style="margin-top: 0px;">Hobbies & Interests</h3>	
</header>
<p style="margin-top: 10px;">Besides getting my head into web development and technology, I have several other hobbies & interests:</p>	

<hr/>

<section class="interests_acc">
	<h3>Astronomy</h3>
	<div><?php include ("about_4_astronomy.html"); ?></div>
	<h3>Baking</h3>
	<div><?php include ("about_4_baking.html"); ?></div>
	<h3>Cinema</h3>
	<div><?php include ("about_4_cinema.html"); ?></div>
	<h3>Formula 1</h3>
	<div><?php include ("about_4_formula1.html"); ?></div>
	<h3>Music</h3>
	<div><?php include ("about_4_music.html"); ?></div>
	<h3>Photography</h3>
	<div><?php include ("about_4_photography.html"); ?></div>
	<h3>Pub Quizzes</h3>
	<div><?php include ("about_4_pubquizzes.html"); ?></div>
	<h3>Sci-fi</h3>
	<div><?php include ("about_4_scifi.html"); ?></div>
	<h3>Snooker</h3>
	<div><?php include ("about_4_snooker.html"); ?></div>
	<h3>Stand-Up</h3>
	<div><?php include ("about_4_standup.html"); ?></div>
	<h3>Tom Clancy</h3>
	<div><?php include ("about_4_tomclancy.html"); ?></div>
	<h3>Walking</h3>
	<div><?php include ("about_4_walking.html"); ?></div>
</section>

<script type="text/javascript">
	$(".interests_acc").accordion(
	{
		collapsible: true,
		active: false,
		animate: false,
		heightStyle: "content"
	});

	$(".interests_acc").accordion().addClass("hidden-xs");

</script>