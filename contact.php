<?php
$file_misc = "./inc/php/misc_lib.php";
$file_functions = "./inc/php/functions.php";
$file_switch = "./inc/php/switch.php";

if(file_exists($file_functions) && file_exists($file_misc) && file_exists($file_switch)) {
	include_once $file_functions;
	include_once $file_misc;
	include_once $file_switch;
} else {
	die($file_functions." doesn't exist");
	die($file_misc." doesn't exist");
	die($file_switch." doesn't exist");
}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Rafik Studio <?php echo $PAGE_TITLE; ?></title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="./inc/js/js-functions.js"></script>
</head>
<body>
<nav id="mobileNav" class="mobile-nav">
		<!-- mobile navigation -->
		<?php page_mobile_nav($file_mobile_nav) ?>
	</nav>
	<header>
		<?php page_header($file_header); ?>
	</header>
	<nav id="topNav" class="ribbon">
		<!-- top navigation -->
		<?php //top_nav($file_top_nav); ?>
		<script> runNavScript(nav); </script>
	</nav>
    <main>
        <?php contact_page($file_contact); ?>
        <?php top_category($file_top_category) ?>
    </main>
    <script src="./inc/js/modal-functions.js"></script>
	<footer class="rs-footer">
		<?php footer_nav($file_footer_nav) ?>
	</footer>
</body>
</html>