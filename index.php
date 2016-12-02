<?php 
    session_start();
    extract($_POST);

    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
    }
?>
<!DOCTYPE HTML>
<html lang="en">

    <head>
        <title>Math Game</title>
        <link href="styles/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="styles/styles.css/" rel="stylesheet" media="screen">
        <meta charset="utf-8" />
    </head>
    <body>
        <div class="page">
<?php

    if (!isset($score) || !isset($total)) {
        $score = 0;
        $total = 0;
    }
    
    if (!isset($answerText)) {
        $answerText = "";
    }
    
$num1 = rand(0,20);
    $num2 = rand(0,20);
    $plusMinusID = rand(0, 1);
    if ($plusMinusID == 0) {
        $plusMinus = "+";
    } else {
        $plusMinus = "-";
    }
    
    if ( isset($firstNumber) 
        && isset($plusMinus) 
        && isset($secondNumber) 
        && isset($answer) 
    ) {
        
        $answerText = "";
        if (!is_numeric($answer) ) {
            $answerText = "<p class='red'>You entered a non numeric answer</red>";
        }
        
        
        switch ($operation) {
            case "+":
                $result = $firstNumber + $secondNumber;
                if ($result == $answer) {
                    $answerText = "<p class='green'>Correct</p>";
                    $score++;
                } else {
                    $answerText = "<p class='red'>INCORRECT, $firstNumber + $secondNumber is $result.</p>";
                }
                $total++;
                $plusMinusID = rand(0, 1);
                break;
            case "-":
                $result = $firstNumber - $secondNumber;
                if ($result == $answer) {
                    $answerText = "<p class='green'>Correct</p>";
                    $score++;                    
                } else {
                    $answerText = "INCORRECT, $firstNumber - $secondNumber is $result.";
                }
                $total++;
                $plusMinusID = rand(0, 1);
                break;
        }
    }
    
    
    
?>


            
            
        <form action="index.php" method="post" role="form" class="form-horizontal">
            
            <div class="row">
                <div class="col-sm-3 col-sm-offset-3"><h1>Math Game</h1></div>
                <div class="col-sm-3"><a href="logout.php" class="btn btn-danger">Logout</a></div>
            </div>
            
            <div class="row">
                <label class="col-sm-1 col-sm-offset-4"><?php echo $num1; ?></label>
                <label class="col-sm-1"><?php echo $plusMinus; ?></label>
                <label class="col-sm-1"><?php echo $num2; ?></label>
                <div class="col-sm-5"></div>
            </div>

            <input type="hidden" name="firstNumber" value="<?php echo $num1; ?>" />
            <input type="hidden" name="operation" value="<?php echo $plusMinus; ?>" />
            <input type="hidden" name="secondNumber" value="<?php echo $num2; ?>" />
            <input type="hidden" name="total" value="<?php echo $total; ?>" />
            <input type="hidden" name="score" value="<?php echo $score; ?>" />

            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-4">
                    <input type="text" class="form-control" id="answer" name="answer" placeholder="Answer goes here">
                </div>
                <div class="col-sm-5"></div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    <button type="submit" class="btn btn-success">
                    Submit</button>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
        <br/>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <?php echo $answerText; ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">Score: <?php echo "$score / $total" ?></div>
            <div class="col-sm-4"></div>
        </div>
            
            
        </div>
    </body>
</html>