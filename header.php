<!DOCTYPE html>
<html>
<head lang ="en">
   <meta charset="utf-8">
	 <meta name ="description" content>
	 <meta name ="viewport" content="width=device-width, intial-scale=1.0,userscalabe=no">

    <!-- Title -->
		<title> Tagtext </title>


	 <!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700&display=swap" rel="stylesheet">
		<link rel ="stylesheet" href ="style.css"
        <div class="container" id="main-content">


   <!--Tagtext Logo -->
	<img src="img/tagtextlogo.png" alt="logo">
	<!--h2>Tagtext</h-->
	<!--p>Making a purchase is as simple as texting a friend.</p-->
</div>
<body>
   <header>
		 <nav class "nav-header-main">
			 <a class ="header-logo" href="index.php">
			 <a href="#">
			 </a>
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Web</a></li>
		</ul>

			<div>
     <form action ="includes/login.inc.php?>" method="post">
			 <input type = "text" name ="mailuid" placeholder="Email or Phone number">
			 <input type = "password" name ="pwd" placeholder="Password">
			 <button type ="submit" name ='login-submit'>Login</button>
		 </form>
     <a href="signup.php">Signup</a>
		 <form action ="includes/logout.inc.php?>" method="post">
	 		<button type ="submit" name ='logoutsubmit'>Logout</button>
	 	</form>
	 </div>
 </nav>

			</div>
	</nav>
</header>

	 <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/6.6.2/firebase-app.js"></script>

     <!-- TODO: Add SDKs for Firebase products that you want to use
	 https://firebase.google.com/docs/web/setup#available-libraries -->

     <!-- Initialize Firebase -->
      <script src="/__/firebase/init.js"></script>
 </body>
       </html>
