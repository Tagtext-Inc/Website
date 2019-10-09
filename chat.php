 <?php
    require "login.inc.php";
  ?>


<!DOCTYPE html>
<html>
<head lang ="en">
   <meta charset="utf-8">
	 <meta name ="description" content>
	 <meta name ="viewport" content="width=device-width, intial-scale=1.0">
   <link rel = "stylesheet" type ="text/css" href="style.css">
		<title> Tagtext </title>
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700&display=swap" rel="stylesheet">
        <div class="container" id="main-content">
  <body>

	<!--h2>Tagtext</h-->
	<!--p>Making a purchase is as simple as texting a friend.</p-->
</div>
<body>
   <header>
     <nav class "nav-header-main">
			 <a class ="header-logo" href="index.php">
			 <img src="img/tagtextlogo.png" alt="logo" class="responsive">
			<ul>
			<!--li><a href="#">About</a></li-->
			<!--li><a href="#">Contact</a></li-->
			<!--li><a href="#">Web</a></li-->
		</ul>
  </a>

			<div class ="header-login">
      <div class ="boxgray">
     <form action ="includes/login.inc.php?>" method="post">
			 <input type = "text" name ="mailuid" placeholder="Email or Phone number">
			 <input type = "password" name ="pwd" placeholder="Password">
			 <button type ="submit" name ='login-submit'>Login</button>
       <a href="signup.php" class=boxtext>Don't have an account? <b>Signup</b></a>
     </div
   </div>
		 </form>
     <div class="header -logout">
		 <form action ="includes/logout.inc.php?>" method="post">
	  <!--button type ="submit" name ='logout-submit'>Logout</button-->
	 	</form>
	 </div>
 </nav>

			</div>
	</nav>
</header>
 </body>
       </html>
  ?>
