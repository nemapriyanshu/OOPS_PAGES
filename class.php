<?php

error_reporting(0);

class project
{
    private $conn;
    public $err;
    public $pemail;
    public $epass;
    public $ename;

// Connection
        function __construct()
        {
            $this->conn=mysqli_connect("localhost","root","","oops");
        }

//Register Code
        function Register_user($email,$name,$password)
        {
            if(mysqli_query($this->conn,"insert into data (Email,Name,Password) values('$email','$name','$password')"))
            {
                // $this->err="User maked Successfull";
                header("Location:Login.php");
                // return $this->err;
            }
            else
            {
                $this->err="Error is there when we create a user";
                return $this->err;
            }
        }


//Login CODE
        function Login_user($email,$password)
        {
            // echo "LODIN PAGEE";
            $sq=mysqli_query($this->conn,"select * from data where Email='$email'  ");
            $arr=mysqli_fetch_assoc($sq);

            if($arr['Password']==$password)
            {
                session_start();
                $_SESSION['Email']=$email;
                header("Location:dashboard.php");
            }
            else
            {
                $this->err="Email or Password not matched";
                return $this->err;

            }
        }



//Dashboard  CODE
function Dashboard()
{
    session_start();
    $email=$_SESSION['Email'];
   

    $sq=mysqli_query($this->conn,"select * from data where Email='$email' ");
    $arr=mysqli_fetch_assoc($sq);

    // echo $email.$pass;
        $this->pemail=$email;
        $this->epass=$arr['Password'];
        $this->ename=$arr['Name'];

}


//Change PAssword   CODE
function Change_Password($old,$new,$connew)
{
    session_start();
    $email=$_SESSION['Email'];

    $sq=mysqli_query($this->conn,"select * from data where Email='$email' ");
    $arr=mysqli_fetch_assoc($sq);

    $oldpassword=$arr['Password'];
    $eemail=$arr['Email'];
    if($oldpassword==$old)
    {
            if($new==$connew)
            {
                    if(mysqli_query($this->conn,"update data set Password='$new' where Email='$eemail'"))
                    {
                        $this->epass=$new;
                        // echo $this->epass;
                        header("Location:Dashboard.php");
                    }
                    else
                    {
                        $this->err="Changing Error";
                        return $this->err;
                    }
            }
            else
            {
                $this->err="New or Confirm not matched";
                return $this->err;
            }

    }
    else
    {
        $this->err="Old Password not matched";
        return $this->err;
    }
   

}


//Destructor Code
        function __destruct()
        {
            mysqli_close($this->conn);
        }
}
?>