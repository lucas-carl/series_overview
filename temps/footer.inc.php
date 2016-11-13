<footer class="footer" style="margin: 30px 0">
	<div class="container">
		<p class="text-center text-muted">
			&copy;2016 - Liam Krauthoff & Lucas Carl
		</p>
		<?php
		echo '<div class="text-center text-muted">';
		if (isset($_SESSION['access_token'])) {
			echo '<p>Logged in as: <b>'. $_SESSION['user_screen_name'] .'</b></p>';
			echo '<a href="/logout">Logout</a>';
		} else
			echo '<a href="/login">Login</a>';
		echo '</div>';
		?>
	</div>
</footer>
