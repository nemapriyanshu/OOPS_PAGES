<?php
    include("class.php");

    session_start();
    if (!empty($_SESSION['Email']))
    {
        header("Location:dashboard.php");
    }



    if(isset($_POST['Submit']))
    {
    
       $obj2=new project();
       $msg=$obj2->Login_user($_POST['Email'],$_POST['Password']);
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

<div class="container mt-5 text-center text-warning">
    <div class="display-2 mb-5 text-warning">Login </div>

    <?php  if(!empty($msg)){
        ?>
<div class="alert alert-warning"><?php echo $msg; ?></div>
<?php
    }

?>      


<form method="post">
 <input type="text" name="Email" placeholder="EMAIL" class="h2 myboot  border-warning border-top-0 border-right-0 border-left-0 "> <br>
                
        <input type="text" name="Password"  placeholder="Password" class="h2 myboot border-warning border-top-0 border-right-0 border-left-0"> <br>

        <input type="submit" value="Login" name="Submit" class="btn btn-warning">
       <a href="register.php" class="btn btn-success">Register</a>

</form>    
</div>

</body>
</html>