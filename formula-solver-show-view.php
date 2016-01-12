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
