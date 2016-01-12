<?php

$page = $_REQUEST['page'];

// Determine what page to show
if ($page == 'about') {
	about();
}

// Load the about page
function about() {
	// Load the view file
	include 'page-about-view.php';
}
?>