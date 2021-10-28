<?php
session_start();
    include("class.php");
    $obj=new project();
    $obj->Dashboard();

    if (empty($_SESSION['Email']))
    {
        header("Location:login.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<?php 
    include("nav.php");
?>
    <div class="container bg-dark text-primary mt-5 display-4 text-center ">
        
        <div class="row">
        <div class="col-1 mr-3">
            <a href="changepass.php" class="btn table-warning btn-sm">Change pass</a> 
        </div>
        <div class="col-1">
            <a href="logout.php" class="btn table-success btn-sm">Logout</a>
        </div>


        <div class="display-1 text-warning col-9"> DASHBOARD</div>

            <div class="col-4">Email</div>
            <div class="col-8"><?php echo $obj->pemail ; ?></div>
            <div class="col-4">Name</div>
            <div class="col-8"><?php echo $obj->ename ; ?></div>
            <div class="col-4">Password</div>
            <div class="col-8"><?php echo $obj->epass ; ?></div>
        </div>
    </div>

</body>
</html>