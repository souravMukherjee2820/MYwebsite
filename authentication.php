<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "select *from login where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){  
        echo "<h1><center> Login successful </center></h1>";  
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }     
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 10px;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 10px;
        }
        .section {
            padding: 20px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            width: 80%;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Acess for the original dataset</h1>
</header>

<div class="section">
<h2>Download The Original Dataset</h2>
    <p>Click the link below to download the dataset:</p>
    <a href="dataSet.csv" download>Download Dataset</a>
    <h2>Download The Published Paper</h2>
    <p>Click the link below to download the published paper:</p>
    <a href="IJIRT162332_PAPER.pdf" download>Download Published Paper</a>

</div>

<footer>
    <p>&copy; 2024 Heritage Institute of Technology. All rights reserved.</p>
</footer>

</body>
</html>
