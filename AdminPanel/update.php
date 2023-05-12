
<!--  The "forgot password" part isn't working yet, but I'll fix it as soon as possible.  -->

<?
@include'Connect.php';

if(isset($_POST['submit'])){
	
	
		$exPassword = md5($_POST['Password']);
		$NewPassword = md5($_POST['NewPassword']);
		$cpassword = md5($_POST['cpassword']);
		
		
		$select = " SELECT * FROM `koika` WHERE Password = '$exPassword' " ;
		
		$sql=" UPDATE `koika` SET `Password`='$NewPassword' WHERE Password='$exPassword' ";
		$result=mysqli_query($conn, $sql);

		if($result) {
			
			header("Location:signin.php?msg=NEW koika update successfully");
			
		}else{
			
			echo "FILED:".mysqli_error($conn);
			
			}
		
};
?>



<!DOCTYPE>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Change - Password </title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="">

</head>
<body>
   
<form action="" method="POST">
   
   <div class="table">
	
		<div class="input">
			<input type="password" name="exPassword" class="" required>
			<label for="floatingPassword">latest password</label>
		</div>
		
		<div class="input">
			<input type="password" name="NewPassword" class="" required>
			<label for="floatingPassword">New Password</label>
		</div>
		
		<div class="input">
			<input type="password" name="cpassword" class="" required>
			<label for="floatingPassword">Comfirm Password</label>
		</div>
	
		<input type="submit" name="submit" class="" value="Change">
		
   </div>
   
</form>

</body>
</html>