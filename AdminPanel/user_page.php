<?php

@include 'Connect.php';

session_start();

if(!isset($_SESSION['Name'])){
	
   header('location:user_page.php');
   
};

?>

<!DOCTYPE>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Koika - Tələbə</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css\User.panel.css">

</head>
<body>
   
	<img class="font" src="css\Laser.gif">
	<h1 class="qarşılama" >Xoş gəldiniz, <a class="ad"> <?php echo $_SESSION['Name'] ?></a></h1>
	<h2  class="Admin" > Salam,<br>Siz  "<a class="adm">Tələbə</a>"<br>olaraq qatılmısınız. </h2>
     
   <div class="button">
      <a href="signin.php" class="btn"> <b>Login</b> </a>
      <a href="signup.php" class="btn"> <b>Qeydiyyat</b> </a>
      <a href="index.php" class="btn"> <b>Logout</b> </a>
   </div>


</body>
</html>