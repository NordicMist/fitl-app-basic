<?php

$id = $_REQUEST['id'];

$object = array(
		'formula_name' => '',
		'page_title' => '',
		'formula_mathjax' => '',
		'formula_solver_script' => '',
		'formula_varibale_definitions' => '',
);


// Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check for connection error
if ($connection->connect_error) {
	echo 'Connection failed: ' . $connection->connect_error;
	exit;	
}

// Otherwise, connected successfully!
// echo 'Connected successfully!';

// Connect to the 'fitl' database
$connection->select_db('fitl');

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

?>


<!doctype html>
<html><head>
		<meta charset="UTF-8">
		<title><?php echo $object['page_title']; ?></title>
	</head>

	<body>
    
		<h1><?php echo $object['formula_name']; ?></h1>
        <p><?php echo $object['formula_mathjax']; ?></p>
    	<pre>
        	<?php echo $object['formula_solver_script']; ?>
        </pre>
        <p><?php echo $object['formula_varibale_definitions']; ?></p>
    </body>
</html>
