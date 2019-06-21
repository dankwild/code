<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <style>
        #form{
            overflow: hidden;
            background-color: aqua;
            margin: 0 auto;
           vertical-align: center;
            padding: 50px;
            justify-content: center;
            width: 400px;
            height: 300px;
        }
        .input
        {
            margin-top: 10px;
            width: 400px;
            background-color: white;
            margin-bottom: 20px;
            height: 30px;
           
        }
        #reg
        {
            background-color: green;
            width: 200px;
            margin:0 auto;
            height: 30px;
        
        }
    </style>
</head>
<body>
<div id="form">
<form action="fileOne.php"method="post">
    <label>Name</label><br>
    <input type="text" placeholder="name here"  class="input" name="x"required> <br>
     <label>Email</label><br>
    <input type="email" placeholder="email here"class="input" name="y"required><br>
     <label>Password</label><br>
    <input type="password" placeholder="password here" class="input"name="z"required> <br>
    <input id="reg" type="submit" value="REGISTER" name="btn-submit"> Already registered?<a href="login.php"> Login</a>

     </form>
    </div>
<?php
if(isset($_POST['btn-submit']))
{
    $name=$_POST['x'];
    $email=$_POST['y'];
    $pass=$_POST['z'];


//    connect to the db
    $conn=mysqli_connect("localhost","root","","vinnie");

//    check connection

    if(!$conn)
    {
        echo "Connection Failed";

    }
    else
    {

           //    save to the db
           //    start by writing a query
            $query="insert into table1(name, emails, password) values ('$name','$email','$pass')";
           // Check it the insert query was correct
           if (!$query) {
               echo "Query not correct";
           }
//        finally proceed to save
               $save = mysqli_query($conn, $query);
               if (!$save) {
                   echo "Record was not saved successfully";

               } else {
                   echo "Record saved successfully";
               }



    }
}

?>

</body>
</html>
