<?php session_start() ?>
<!DOCTYPE html>
<html>

	<head>
		<title>Series Overview</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	
	<body>

		<?php
		include "./temps/header.inc.php";

		//+//
		switch ($_GET['p']) {
			case 'login':
				include "./p/login.php";
				break;
			case 'profile':
				include "./p/profile.php";
				break;
			case 'search':
				include "./p/search.php";
				break;
			case 'view':
				include "./p/view.php";
				break;
			case 'home':
			default:
				include "./p/home.php";
		}
		//+//

		include "./temps/footer.inc.php";
		?>

	</body>

</html>

<script src="/src/js/jquery-3.1.0.min.js"></script>
<script src="/src/js/main.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
