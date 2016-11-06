<div class="thumb-card col-xs-4">
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
			</span>
			 &bull;
			<span>
				<i class="glyphicon glyphicon-time"></i>
				<?php echo $data->view_dur; ?> mins
			</span>
			 &bull;
			<span>
				<i class="glyphicon glyphicon-star"></i>
				<?php echo $data->view_rating; ?>
			</span>
		</div>
		<div>
			<p>
				<?php
				$desc = $data->view_desc;

				if (strlen($desc) >= $maxLength)
					$desc = substr($data->view_desc, 0, $maxLength) ."&hellip;";
				echo $desc;
				?>
			</p>
		</div>
	</div>
</div>
