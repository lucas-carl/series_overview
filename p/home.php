<?php
require "temps/process.inc.php";

$view_id = $_GET["v_id"];
$rating = $_GET["r"];


//+//
$sql = "SELECT * FROM view ORDER BY view_rating DESC";

$result = $connect->query($sql);

while ($row = $result->fetch_object()) {
	$set[] = $row;
}
//+//
?>

<div class="container">

	<h3>Featured</h3>

	<?php

	$rLimit = 3;
	$rLength = 0;
	$rAll = 0;
	$maxLength = 100;

	foreach ($set as $data):
		if ($rLength == 0)
			echo "<div class='row'>";
	?>

	<?php include "temps/thumb-card.inc.php" ?>

	<?php
	$rLength++;
	$rAll++;

	if ($rLength == $rLimit || $rAll == count($set)) {
		$rLength = 0;
		echo "</div>";
	}
	endforeach;
	?>

</div>

<div class="container">

	<h3>Based On Your Viewing History</h3>

	<?php

	$rLimit = 3;
	$rLength = 0;
	$rAll = 0;
	$maxLength = 100;

	foreach ($set as $data):
		if ($rLength == 0)
			echo "<div class='row'>";
	?>

	<?php include "temps/thumb-card.inc.php" ?>

	<?php
	$rLength++;
	$rAll++;

	if ($rLength == $rLimit || $rAll == count($set)) {
		$rLength = 0;
		echo "</div>";
	}
	endforeach;
	?>

</div>

<div class="container">

	<h3>Popular on Netflix</h3>

	<?php

	$rLimit = 3;
	$rLength = 0;
	$rAll = 0;
	$maxLength = 100;

	foreach ($set as $data):
		if ($rLength == 0)
			echo "<div class='row'>";
	?>

	<?php include "temps/thumb-card.inc.php" ?>

	<?php
	$rLength++;
	$rAll++;

	if ($rLength == $rLimit || $rAll == count($set)) {
		$rLength = 0;
		echo "</div>";
	}
	endforeach;
	?>

</div>

<style>
	h3 {
		padding: 15px;
	}
	.row {
		float: left;
		height: auto;
		width: 100%;
		margin: 0 0 30px 0;
	}
	.thumb-card {
		position: relative;
		display: inline-block;
	}
	.thumb-card::after {
		content: '';
		background: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.1),rgba(0,0,0,.6));
		position: absolute;
		display: none;
		height: 100%;
		width: calc(100% - 30px);
		left: 0;
		right: 0;
		bottom: 0;
		margin: 0 15px;
	}
	.thumb-card.is-active::after {
		display: block;
	}
	.thumb {
		width: 100%;
		padding-bottom: 150%;
		box-shadow: 0 4px 12px rgba(0,0,0,.2), 0 0 8px rgba(0,0,0,.1);
	}
	.card-context {
		position: absolute;
		float: left;
		width: 70%;
		left: 15%;
		right: 15%;
		bottom: 0;
		color: #fff;
		z-index: 2;
		opacity: 0;
	}
	.card-context .card-title > a {
		color: #fff;
	}
	.thumb-card.is-active .card-context {
		opacity: 1;
	}
	@media (max-width: 720px) {
		html, body {
			font-size: 13px;
		}
		h4 {
			font-size: 17px;
		}
		.card-context > div:nth-child(2) {
			display: none;
		}
	}
	@media (max-width: 480px) {
		html, body {
			font-size: 11px;
		}
		h4 {
			font-size: 15px;
		}
	}
</style>
