<?php include("_include/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include("_include/head.php"); ?>
	<title><?= PR_NAME; ?> - Admin <?php if ($_SESSION['logged_in'] == 1) { print "Panel"; } else { print "Login"; } ?></title>
</head>
<body>
	<div id="banner">
		<div id="banner-title">
			<i class="material-icons" id="banner-title2">security</i>
			<div id="banner-title1">
				<?= PR_NAME ?><br/>Admin <?php if ($_SESSION['logged_in'] == 1) { print "Panel"; } else { print "Login"; } ?>
			</div>
		</div>

	</div>
	<?php include("_include/nav.php"); ?>
</body>
</html>