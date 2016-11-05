<div class="container">

	<?php

	require "temps/process.inc.php";

	$view_id = $_GET["v_id"];
	$rating = $_GET["r"];


	//+//
	$sql = "SELECT * FROM view";

	$result = $connect->query($sql);

	while ($row = $result->fetch_object()) {
		$set[] = $row;
	}
	//+//


	$rLimit = 4;
	$rLength = 0;

	foreach ($set as $data):
		if ($rLength == 0)
			echo "<div class='row'>";
	?>

	<div class="thumb-card col-xs-3">
		<div class="thumb" style="background:url(/assets/img/<?php echo $data->view_id; ?>.jpg) center/cover" title="<?php echo $data->view_title; ?>"></div>
		<div class="card-context hidden">
			<div>
				<h4>
					<a href="/view/<?php echo $data->view_id ?>">
						<?php echo $data->view_title ?>
					</a>
				</h4>
				<span>
					<?php echo $data->view_date; ?>
					 &bull; <i class="glyphicon glyphicon-time"></i>
					<?php echo $data->view_dur; ?> mins
					 &bull; <i class="glyphicon glyphicon-star"></i>
					<?php echo $data->view_rating; ?>
				</span>
			</div>
			<div>
				<p>
					<?php echo $data->view_desc; ?>
				</p>
			</div>
		</div>
	</div>

	<?php
	$rLength++;

	if ($rLength == $rLimit) {
		$rLength = 0;
		echo "</div>";
	}
	endforeach;
	?>

</div>

<style>
	.row {
		margin-bottom: 30px;
	}
	.thumb-card {
		position: relative;
		display: inline-block;
	}
	.thumb {
		width: 100%;
		padding-bottom: 150%;
	}
	.card-context {
		float: left;
		width: 75vw;
		left: 0;
		top: 100%;
	}
</style>
