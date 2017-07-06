<?php
session_start();
session_unset();
?>
<html>
    <head>
		<title>Millionaire</title>
		<link rel="stylesheet" type="text/css" media="all" href="homestyle.css"/>
    </head>
    <body>
        <?php
        // put your code here
        
        $_SESSION["bank"]=0;
        $_SESSION["question"] = 1;
        ?>	
	<body>
		<h2>Who Wants to be a Millionaire?</h2>
		<div>
			<h4><a href="mill1.php">Play</a></h4>
		</div>
    </body>
</html>
