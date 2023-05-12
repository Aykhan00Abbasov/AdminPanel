
																										<!-- Login -->

<?php

@include 'Connect.php';

session_start();

if(isset($_POST['submit'])){
	
	$Login = mysqli_real_escape_string($conn, $_POST['Login']);
	$Password = md5($_POST['Password']);
	
	$select = " SELECT * FROM `koika` WHERE Login = '$Login' && Password = '$Password' " ;
	
	$result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

		$row = mysqli_fetch_array($result);

			if($row['Panel'] == 'Müəllim/Müəllimə'){
			
						if($row['Cins'] == 'Kişi'){
								$_SESSION['pln'] = "Müəllim";
								
						}elseif($row['Cins'] == 'Qadın'){
								$_SESSION['pln'] = "Müəllimə";
						};
							
				header('location:Koika_elanlar.php');

				}elseif($row['Panel'] == 'Tələbə'){
					$_SESSION['pln'] = $row['Panel'];
					header('location:Koika_elanlar.php');
				}
				
		$_SESSION['Name'] = $row['Ad'];
		$_SESSION['email'] = $row['Mail'];
		$_SESSION['İdentifikator'] = $row['Login'];
		$_SESSION['Surname'] = $row['Soyad'];	
		$_SESSION['Fname'] = $row['Ata_adı'];
		$_SESSION['Seria_number'] = $row['SVSN'];
		$_SESSION['sex'] = $row['Cins'];
		$_SESSION['education_type'] = $row['TN'];
		$_SESSION['Phone'] = $row['Telefon'];
		$_SESSION['education_form'] = $row['TF'];
		$_SESSION['faculty_name'] = $row['FA'];
		$_SESSION['Specialty_name'] = $row['IA'];
		$_SESSION['date'] = $row['QebulTarixi'];
		
	 
   }else{
      $error[] = 'incorrect email or password!';
   }
   
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sign In Start -->
	
	
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">

<form action="" method="POST">  	

					<div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>AZTU</h3>
                            </a>
                        </div>
						
                        <div class="form-floating mb-3">
                            <input type="text" name="Login" class="form-control" id="floatingInput">
                            <label for="floatingInput">Your Login</label>
                        </div>
						
                        <div class="form-floating mb-4">
                            <input type="password" name="Password" class="form-control" id="floatingPassword">
                            <label for="floatingPassword">Password</label>
                        </div>
						
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
								<a href="update.php">Forgot Password</a>
                        </div>
						
                        <input type="submit" name="submit" value="sign in" class="btn btn-primary py-3 w-100 mb-4">
                        <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p>
						
                    </div>
				
		<?php
				
				  if(isset($error)){
					 foreach($error as $error){
						echo '<span class="error-msg">'.$error.'</span>';
					 };
				  };
				  
		?>

</form>	
				
			
	
                </div>
            </div>
        </div>
        <!-- Sign In End -->

	
</div>

</body>

</html>