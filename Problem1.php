<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <form method="POST" >
    <b>Enter The Number:</b><br>
    <input type="number" name="number" id="number">
    <input type="submit" name="submit" value="submit">
    </form>
<?php
    if ($_POST) {
        $facto = 1;
        $num = $_POST['number'];
        echo "Factorial of the number: ";
        

        if ($num <= 0 or $num >= 10) {
            echo "Please enter number between 1 to 9";
        } else {
            for ($i=1; $i <= $num; $i++) { 
                $facto = $facto * $i;
            }
            echo $facto. "<br>";
        }
        
    }

?>
</body>
</html>