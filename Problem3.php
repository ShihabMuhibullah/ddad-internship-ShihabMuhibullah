<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <form method="POST" >
    <b>Enter The String:</b><br>
    <input type="text" name="text" id="text">
    <input type="submit" name="submit" value="submit">
    </form>
<?php
    if ($_POST) {
        
        $just = $_POST['text'];
        $text = strtolower($just);
        

        function Palin($str){   
            if ((strlen($str) == 1) || (strlen($str) == 0)){   
                if (strlen($str)%2 == 0) {
                    echo "Even Palindrome";
                } else {
                    echo "Odd Palindrome";
                }   
            } 
            else{ 
                if (substr($str,0,1) == substr($str,(strlen($str) - 1),1)){ 
              
                    // Checked letters are discarded and passed for next call 
                    return Palin(substr($str,1,strlen($str) -2)); 
                } 
                else{  
                    echo " Not a Palindrome"; } 
            } 
        }   
        
        Palin($text);
    }
?>
</body>
</html>