<?php

session_start();
if (empty($_SESSION['Email']))
{
    header("Location:login.php");
}


    include("class.php");
    if(isset($_POST['Submit']))
    {
    
       $obj2=new project();
       $msg=$obj2->Change_Password($_POST['old'],$_POST['new'],$_POST['connew']);
    }
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    input:focus {
    outline-width: 0;
}
</style>

</head>
<body>
<?php 
    include("nav.php");
?>
<div class="container mt-5 text-center text-primary">
    <div class="display-2 mb-5 text-primary">Change Password</div>


    <?php  if(!empty($msg)){
        ?>
<div class="alert alert-warning"><?php echo $msg; ?></div>
<?php
    }

?>      


<form method="post">
 <input type="text" name="old" placeholder="Old Password" class="h2 myboot  border-primary border-top-0 border-right-0 border-left-0 "> <br>
                
        <input type="text" name="new"  placeholder="New Password" class="h2 myboot border-primary border-top-0 border-right-0 border-left-0"> <br>
       
       
        <input type="text" name="connew"  placeholder="Confirm Password" class="h2 myboot border-primary border-top-0 border-right-0 border-left-0"> <br>

        <input type="submit" value="Change Password" name="Submit" class="btn btn-primary">

</form>    
</div>

</body>
</html>