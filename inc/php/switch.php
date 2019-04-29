<?php
switch ($_SERVER['SCRIPT_NAME']) {
	
	case '/webprojects/rafikstudio_new/gallery.php':
		$CURRENT_PAGE = 'gallery';
		$PAGE_TITLE = 'Gallery';
		
		break;
		
	case '/webprojects/rafikstudio_new/event.php':
		$CURRENT_PAGE = 'event';
		$PAGE_TITLE = 'Event';
		break;

	case '/webprojects/rafikstudio_new/about.php':
		$CURRENT_PAGE = 'about';
		$PAGE_TITLE = 'About';
		break;

	case '/webprojects/rafikstudio_new/contact.php':
		$CURRENT_PAGE = 'contact';
		$PATE_TITLE = 'Contact';
		break;
		
	default:
		$CURRENT_PAGE = 'index';
		$PAGE_TITLE = 'Home';
}
?>