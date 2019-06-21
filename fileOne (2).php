<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="fileOne.php"method="post"></form>
<input type="text"name="name" name="x"required/>
<input type="text" name="email"email="y"required>
<input type="text" name="password"password="z"required>
<input type="submit"name="btn-submit">
</html>
<?php
/**
 * Created by PhpStorm.
 * User: dankwild
 * Date: 6/20/19
 * Time: 2:06 PM
 */
if(isset($_POST['btn_submit'])){
    $name=$_POST['x'];
    $email=$_POST['y'];
    $pass=$_POST['z'];

//    connect to the db
    mysqli_connect("localhost","root","","vinnie");

//    check connection

    if(!$conn){
        echo "Connection Failed";

    }

//    save to the db
//    start by writing a querrr
    $insertquery="INSERT INTO `table1`( `name`, `emails`, `password`) VALUES ('$name','$email','$pass')";

// Check it the insert query was correct
    if (!$insertquery){
        echo "Query not correct";
//        finally proceed to save
        $save =mysqli_query($conn,$insertquery);
        if(!$save){
            echo "Record was not saved successfully";

        }else{
            echo "Record saved successfully";
        }
    }
}

?>