<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Math Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" />
    <meta charset="utf-8" />
</head>
<body>
    <div class="container">
        <?php 
        $operators = array('+', '-');
        $operator = $operators[rand(0, 1)];
        $first_number = rand(0, 20);
        $second_number = rand(0, 20);
        ?>
        <form action="index.php" method="post" class="form-horizontal" role="form">
        
            <input type="hidden" name="first_number" value="$first_number" />
            <input type="hidden" name="operator" value="$operator" />
            <input type="hidden" name="second_number" value="$second_number" />
            <input type="hidden" name="total" value="$?" />
            <input type="hidden" name="score" value="$?" />
        </form> 
        
        
    
    </div>
</body>
</html>