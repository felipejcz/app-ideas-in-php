<?php
if(isset($_POST['string'])){//Verify if input string exists
$string = $_POST['string'];
if(strlen($string)>8){//Verify if string length is greater than eight
    echo "string size is greater than 8";
    exit(1);//break aplication
}
$binary = true;
for ($i=0; $i < strlen($string); $i++) {//Count to string length
    if($string[$i] == '1' || $string[$i] == '0'){//If index string is different from 1 or 2
       $binary = true;
    }else{
        $binary = false;
        break;
    }
}

if(!$binary){//If var binary is false
    echo "String is not binary.";
}else{
    echo "String binary: '".$string."' in decimal is: '".bindec($string)."'";
}
echo "<br><a href='index.php'>Back</a>";
exit(1);
}else{
    //Below the html code
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Bin2Dec - App Ideas in PHP</title>
</head>
<body>
    <form action="index.php" method="post">
        <div>
            <label for="string">String:</label>
            <input type="text" name="string" id="string" placeholder="Enter binary string..." required>
            <input type="submit" value="Convert">
        </div>
    </form>
</body>
</html>


<?php
}
?>