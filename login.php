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
            <div class="col-xs-12"><h1>Please login to play!</h1></div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <?php
                if (isset($_GET["msg"])) {
                echo $_GET["msg"];    
                } 
            ?>
            </div>
        </div>
        <form class="form-horizontal" role="form" action="authorize.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-4" for="email">Email: </label>
                <div class="col-sm-8">
                    <input type="text" required="true" class="form-control" id="email" name="email" placeholder="Email" size="6" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Password:</label>
                <div class="col-sm-8">
                    <input type="text" required="true" class="form-control" id="password" name="password" placeholder="Password" size="6" />
                </div>
            </div>
            <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
        </form>
        
    </div> 
</body>
</html>