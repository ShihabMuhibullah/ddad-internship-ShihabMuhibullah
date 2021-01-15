<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Number</title>
</head>
<body>
    <form method="POST" >
    <b>Enter The Number of terms:</b><br>
    <input type="number" name="number" id="number">
    <input type="submit" name="submit" value="submit">
    </form>
<?php
    if ($_POST) {
        $fibo = 0;
        $fibo2 = 1;
        $num = $_POST['number'];
        echo "Fibonacci series of the number: ";
        

        if ($num <= 1 or $num >= 20) {
            echo "Please enter number between 1 to 19";
        } else {
            for ($i=1; $i <= $num; $i++) {
                if ($i<$num) {
                    echo $fibo;
                    echo ", ";
                } elseif($i=$num) {
                    echo $fibo;
                }
                 
                $cal = $fibo + $fibo2;
                $fibo = $fibo2;
                $fibo2 = $cal;
            }
           
        }
        
    }

?>
</body>
</html>