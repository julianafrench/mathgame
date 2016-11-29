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
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <h1>Math Game</h1>
            </div>
                <a href="logout.php" class="btn btn-danger">Log out</a>
        </div>
        <?php 
        // if available, extract post variables into session
        if (isset($_POST["first_number"])) {
            $_SESSION["first_number"] = $_POST["first_number"];
        }
        if (isset($_POST["second_number"])) {
            $_SESSION["second_number"] = $_POST["second_number"];
        }
        if (isset($_POST["operator"])) {
            $_SESSION["operator"] = $_POST["operator"];
        }   
        if (isset($_POST["answer"])) {
            $_SESSION["current_ans"] = $_POST["answer"];
        } 
        if (!isset($_SESSION["total"])) {
            $_SESSION["total"] = 0;
            $_SESSION["score"] = 0;
        }
        
        $operators = array('+', '-');
        $operator = $operators[rand(0, 1)];
        $first_number = rand(0, 20);
        $second_number = rand(0, 20);

        if ($operator == $operators[0]) {
            $_SESSION["current_correct"] = $first_number + $second_number;
        } else {
            $_SESSION["current_correct"] = $first_number - $second_number;
        }
        ?>
        <form action="index.php" method="post" class="form-horizontal" role="form">
            <div class="row">
                <div class="col-sm-3"></div>
                <label class="col-sm-2" for="first_number"><?php echo $first_number ?></label>
                <label class="col-sm-2" for="operator"><?php echo $operator ?></label>
                <label class="col-sm-2" for="second_number"><?php echo $second_number ?></label>
                <div class="col-sm-3"></div>
            </div>
            <input type="hidden" name="first_number" value="<?php echo $first_number; ?>" />
            <input type="hidden" name="operator" value="<?php echo $operator; ?>" />
            <input type="hidden" name="second_number" value="<?php echo $second_number; ?>" />
            <input type="hidden" name="total" value="<?php echo $total; ?>" />
            <input type="hidden" name="score" value="<?php echo $score; ?>" />
            
            <div class="form-group">
                <input type="number" required="true" class="form-control" id="answer" name="answer" placeholder="Enter answer" />
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Submit Answer</button>
                </div>
            </div>
            <hr />
        </form>
        
        <?php 
        if (isset($_SESSION["current_ans"])) {
            $_SESSION["prev_ans"] = $_SESSION["current_ans"];
            $nay = "<p style='color:red'>INCORRECT it was: " . $_SESSION["prev_correct"] ."</p>";
            $_SESSION["total"] = $_SESSION["total"] + 1;
            $yay = "<p style='color:green'>CORRECT!</p>";
            
            if (isset($_SESSION["prev_ans"])) {  
            }
            if ($_SESSION["prev_ans"] == $_SESSION["prev_correct"]) {
                $_SESSION["score"] = $_SESSION["score"] + 1;
                echo $yay;
            } elseif ($_SESSION["prev_ans"] != $_SESSION["prev_correct"]) {
                echo $nay;
            }
        }
        $_SESSION["prev_correct"] = $_SESSION["current_correct"];
        ?>
        <div class="row">
            <div class="col-sm-3">
                <p>Score: <?php echo $_SESSION["score"]; ?> / <?php echo $_SESSION["total"]; ?></p>
            </div>
        </div>
    </div>
</body>
</html>