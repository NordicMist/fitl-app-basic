<?php

$page = $_REQUEST['page'];

include ('db-connection.php');

// Determine what page to show
if ($page == 'show') {
	$id = $_REQUEST['id'];
	show($id);
}
elseif ($page == 'create') {
	create();	
}



// Load the show page
function show($id) {
	global $connection;
	
	$object = array(
		'formula_name' => '',
		'page_title' => '',
		'formula_mathjax' => '',
		'formula_solver_script' => '',
		'formula_varibale_definitions' => '',
	);


	// Query to select the object
	$sql = 'SELECT * FROM formula_solvers WHERE id = ' . $id;
	
	// Execute the query
	$result = $connection->query($sql);
	
	// Check for and retrieve the object
	if ($result->num_rows > 0) {
		$object = $result->fetch_assoc();
		// echo '<pre>';
		// print_r($object);
		// echo '</pre>';	
	}
	
	// Load the view file
	include 'formula-solver-show-view.php';
}


// Load the create page
function create() {
	include 'formula-solver-create-view.php';
}

?>