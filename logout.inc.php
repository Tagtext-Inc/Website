<?php
   require "header.php";
   require "login.inc.php";

   <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
      <a href="logout.php">Logout</a>
<?php }else{ ?>
     <a href="login.php">Login</a>
     <a href="register.php">Register</a>
<?php } ?>

   $error = ""; //Variable for storing our errors.
   if(isset($_POST["submit"]))
   {
       if(empty($_POST["username"]) || empty($_POST["password"]))
       {
           $error = "Both fields are required.";
       }else
       {
           // Define $username and $password
           $username=$_POST['username'];
           $password=$_POST['password'];

           // To protect from MySQL injection
           $username = stripslashes($username);
           $password = stripslashes($password);
           $username = mysqli_real_escape_string($db, $username);
           $password = mysqli_real_escape_string($db, $password);
           $password = md5($password);

           //Check username and password from database
           $sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
           $result=mysqli_query($db,$sql);
           $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

           //If username and password exist in our database then create a session.
           //Otherwise echo error.

           if(mysqli_num_rows($result) == 1)
           {
               $_SESSION['username'] = $username;
               header("location: index.php");
           }else
           {
               $error = "Incorrect username or password.";
           }

       }
   }

?>
