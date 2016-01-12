<?php

$title = 'Quadratic Equation Formula Solver';

$formula_name = 'Quadratic Equation';

$formula_mathjax = 'Selected formula displayed in MathJax';

$formula_solver = 'PHP code for quadratic equation formula solver';

$variable_definitions = 'List of variable specific definitions';

?>


<!doctype html>
<html><head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
	</head>

	<body>
		<h1><?php echo $formula_name; ?></h1>
        <p><?php echo $formula_mathjax; ?></p>
    	<pre>
        	<?php echo $formula_solver; ?>
        </pre>
        <p><?php echo $variable_definitions; ?></p>
    </body>
</html>
