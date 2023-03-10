<?php
 use MyApp\query\Select;
 use MyApp\query\ejecuta;
         require("../../vendor/autoload.php");
         $insert= new ejecuta();
         $query = new Select();
session_start();

        

if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


</body>
</html>