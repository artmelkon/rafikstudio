 <?php

function page_mobile_nav($file_mobile_nav) {	//removed from the page
	if(file_exists($file_mobile_nav)) {
		include $file_mobile_nav;
	} else {
		die("file doesn't exist");
	}
}

function page_header($file_header) {
	if(file_exists($file_header)) {
		include $file_header;
	} else {
		die($file_header." doesn't exist");
	}
}

function top_nav($file_top_nav) {
	if(file_exists($file_top_nav)) {
		include_once $file_top_nav;
	} else {
		die($file_top_nav." doesn't exist");
	}
}

function gallery_tpl($file_gallery) {
	if(file_exists($file_gallery)) {
		include $file_gallery;
	} else {
		dit($file_gallery." file doesn't exist");
	}
}

function btm_Category($file_category) {
	if (file_exists($file_category)) {
		include_once $file_category;
	} else {
		die("category file doesn't exist");
	}
}

function footer_nav($file_footer_nav) {
	if(file_exists($file_footer_nav)) {
		include_once $file_footer_nav;
	} else {
		die("file not found!");
	}
}

function about_page($file_about) {
	if(file_exists($file_about)) {
		include_once $file_about;
	} else {
		die ("about page not found!");
	}
}

function contact_page($file_contact) {
	if(file_exists($file_contact)) {
		include_once $file_contact;
	} else {
		die($file_contact." does not exist");
	}
}

function info_insert($file_info_text) {
	if(file_exists($file_info_text)) {
		include_once $file_info_text;
	} else {
		die($file_info_text." does not exist");
	}
}

function hero_insert($file_hero) {
	if(file_exists($file_hero)) {
		include_once $file_hero;
	} else {
		die($file_hero." does not exist");
	}
}

function collage($file_collage) {
	if(file_exists($file_collage)) {
		include_once $file_collage;
	} else {
		die($file_collage." doesn't exist");
	}
}

function top_category($file_top_category) {
	if(file_exists($file_top_category)) {
		include_once $file_top_category;
	} else {
		die($file_top_category." doesn't exist");
	}
}

?>