<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Millionaire</title>
		<link rel="stylesheet" type="text/css" media="all" href="homestyle.css"/>
	</head>
	<body>
            
                <form action="mill1.php" method="post">
		<?php                
                $answer = $_POST['q1'];
                if($_SESSION["question"]===2){
                    
                    if($answer == 'A'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 100;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===3){
                    
                    if($answer == 'B'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 200;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===4){
                    
                    if($answer == 'C'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 300;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===5){
                    
                    if($answer == 'D'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 500;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===6){
                    
                    if($answer == 'A'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 1000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===7){
                    
                    if($answer == 'B'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 2000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===8){
                    
                    if($answer == 'C'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 4000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===9){
                    
                    if($answer == 'D'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 8000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===10){
                    
                    if($answer == 'A'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 16000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===11){
                    
                    if($answer == 'B'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 32000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===12){
                    
                    if($answer == 'C'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 64000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===13){
                    
                    if($answer == 'D'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 125000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===14){
                    
                    if($answer == 'A'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 250000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===15){
                    
                    if($answer == 'B'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 500000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===16){
                    
                    if($answer == 'C'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 1000000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>You won!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>'; 
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4>Current Bank: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="index.php">Play Again</a></h4>';
                    }
                }
                ?>
                </form>
                </body>
</html>
