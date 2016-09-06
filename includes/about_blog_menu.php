<nav class="hidden-lg hidden-md hidden-sm">
	<form action="#" id="periodform">
		 <fieldset>
		 	<label for="viewperiod"></label>
		 	<select name="viewperiod" id="viewperiod">
		 		<option value="Latest_menu">Latest</option>
		 		<option value="Aug-2016_menu">Aug 2016</option>
		 		<option value="Jul-2016_menu">Jul 2016</option>
		 		<option value="Jun-2016_menu">Jun 2016</option>
		 		<option value="May-2016_menu">May 2016</option>
		 		<option value="Apr-2016_menu">Apr 2016</option>
		 	</select>
		 </fieldset>
	 </form>
</nav>

<hr/>

<section id="Latest_menu" class="period hidden-lg hidden-md hidden-sm">
	<?php include("about_5_latest.html"); ?>
</section>

<section id="Aug-2016_menu" class="period" style="display: none;">
	<?php include("about_5_201608.html"); ?>
</section>

<section id="Jul-2016_menu" class="period" style="display: none;">
	<?php include("about_5_201607.html"); ?>
</section>

<section id="Jun-2016_menu" class="period" style="display: none;">
	<?php include("about_5_201606.html"); ?>
</section>

<section id="May-2016_menu" class="period" style="display: none;">
	<?php include("about_5_201605.html"); ?>
</section>

<section id="Apr-2016_menu" class="period" style="display: none;">
	<?php include("about_5_201604.html"); ?>
</section>