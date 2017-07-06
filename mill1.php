<?php
session_start();
?>
<html>
    <head>
		<title>Millionaire</title>
		<link rel="stylesheet" type="text/css" media="all" href="style.css"/>
    </head>
    <body>
        <?php
        
        if($_SESSION["question"]===1){
            echo "Stage 1";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
                if($random === 1){
                        echo '<div id="question"><h2>In the Harry Potter series, what is Dumbledore\'s full name?</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. Albus Percival Wulfric Brian Dumbledore</td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. Albus Percivus Reginald Malta Dumbledore</td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. Albus Merlin Phillip Verick Dumbledore</td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. Albus Gerald Gillfrey Gast Dumbledore</td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Question 2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Question 3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }                                                                      
        }
        else if($_SESSION["question"]===2){
            echo "Stage 2";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===3){
            echo "Stage 3";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===4){
            echo "Stage 4";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===5){
            echo "Stage 5";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===6){
            echo "Stage 6";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===7){
            echo "Stage 7";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===8){
            echo "Stage 8";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===9){
            echo "Stage 9";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===10){
            echo "Stage 10";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===11){
            echo "Stage 11";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===12){
            echo "Stage 12";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===13){
            echo "Stage 13";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===14){
            echo "Stage 14";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }
        else if($_SESSION["question"]===15){
            echo "Stage 15";
            echo '<br />';
            $random = rand(1,3);
            $_SESSION["question"]++; 
            if($random === 1){
                        echo '<div id="question"><h2>Q1</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 2){
                        echo '<div id="question"><h2>Q2</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        }
                        else if($random === 3){
                            echo '<div id="question"><h2>Q3</h2></div>';
                        echo '<form action="check1.php" method="post">';
                        echo '<table>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="A">A. </td>';
                                        echo '<td><input type="radio" name="q1" value="C">C. </td>';
                                echo '</tr>';
                                echo '<tr>';
                                        echo '<td><input type="radio" name="q1" value="B">B. </td>';
                                        echo '<td><input type="radio" name="q1" value="D">D. </td>';
                                echo '</tr>';
                        echo '</table>';
                        } 
        }                
             
        echo "Current bank:  $" . $_SESSION["bank"] . "<br>";
        ?>
        <p><input id="submit" type="submit" value="Final Answer" name="submit" /></p>
		
        </form>
    <body>	
    </body>
</html>
