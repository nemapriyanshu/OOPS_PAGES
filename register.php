<?php
session_start();
 if (!empty($_SESSION['Email'])) 
 {
     header("location:dashboard.php");
 }
    include("class.php");
    if(isset($_POST['Submit']))
    {
       $obj=new project();
       $msg=$obj->Register_user($_POST['Email'],$_POST['Name'],$_POST['Password']);
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


<div class="container mt-5 text-center text-danger">
    <div class="display-2 mb-5 text-danger">Register</div>
    <?php  if(!empty($msg)){
        ?>
<div class="alert alert-warning"><?php echo $msg; ?></div>

<?php
    }


?>
<form method="post">
        <input type="text" name="Email" placeholder="EMAIL" class="h1 myboot  border-danger border-top-0 border-right-0 border-left-0 "> <br>
 
        <input type="text" name="Name"  placeholder="Name" class="h1 myboot  border-danger border-top-0 border-right-0 border-left-0"> <br>
               
        <input type="text" name="Password"  placeholder="Password" class="h1 myboot border-danger border-top-0 border-right-0 border-left-0"> <br>

        <input type="submit" value="Register" name="Submit" class="btn btn-danger">
        <a href="login.php" class="btn btn-secondary">Login</a>

</form>    
</div>

</body>
</html>