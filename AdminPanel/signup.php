
																										<!-- Register -->

<?php

@include'Connect.php';

if(isset($_POST['submit'])){
		
		$Ad = mysqli_real_escape_string($conn, $_POST['Ad']);
		$Soyad = mysqli_real_escape_string($conn, $_POST['Soyad']);
		$Ata_adı = mysqli_real_escape_string($conn, $_POST['Ata_adı']);
		$SVSN = mysqli_real_escape_string($conn, $_POST['SVSN']);
		$Telefon = mysqli_real_escape_string($conn, $_POST['Telefon']);
		$Cins = $_POST['Cins'];
		$TN = $_POST['TN'];
		$TF = $_POST['TF'];
		$FA = $_POST['FA'];
		$IA = $_POST['IA'];
		$QebulTarixi = mysqli_real_escape_string($conn, $_POST['QebulTarixi']);
		$Login = mysqli_real_escape_string($conn, $_POST['Login']);
		$Mail = mysqli_real_escape_string($conn, $_POST['Mail']);
		$Password = md5($_POST['Password']);
		$cpassword = md5($_POST['cpassword']);
		$Panel =$_POST['Panel'];
		
		$select = " SELECT * FROM koika WHERE Mail = '$Mail' && Password = '$Password' " ;
				
		$result = mysqli_query($conn, $select);
				
		if(mysqli_num_rows($result) > 0){
					
			$error[] = 'User already exist!';
					
		}else{
					
				if($pass != $cpass){
							
			$error[] = 'Password not matched!';
									
				}else{
								
						$insert = "INSERT INTO koika (id, Ad, Soyad, Ata_adı, SVSN, Telefon, Cins, TN, TF, FA, IA, QebulTarixi, Login, Mail, Password, Panel) VALUES (NULL, '$Ad', '$Soyad', '$Ata_adı', '$SVSN', '$Telefon', '$Cins', '$TN', '$TF', '$FA', '$IA', '$QebulTarixi', '$Login', '$Mail', '$Password', '$Panel')";
						mysqli_query($conn, $insert);
						header('location: signin.php');
						}
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
	<link href="MYstyle.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Sign Up Start -->
		
	<form action="" method="POST">	
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>AZTU</h3>
                            </a>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="Ad" class="form-control" id="floatingText" required>
                            <label for="floatingText">Ad</label>
                        </div>
						
						<div class="form-floating mb-3">
                            <input type="text" name="Soyad" class="form-control" id="floatingText" required>
                            <label for="floatingText">Soyad</label>
                        </div>
						
						<div class="form-floating mb-3">
                            <input type="text" name="Ata_adı" class="form-control" id="floatingText" required>
                            <label for="floatingText">Ata adı</label>
                        </div>
												
						<div class="form-floating mb-3">
                            <input type="number" name="SVSN" class="form-control" id="floatingText" required>
                            <label for="floatingText">Şəxsiyyət vəsiqəsinin seriya və nömrəsi</label>
                        </div>
						
						<div class="form-floating mb-3">
                            <input type="number" name="Telefon" class="form-control" id="floatingText" required>
                            <label for="floatingText">Telefon</label>
                        </div>
									
						<select class="select" name="Cins" required>
							<option disabled selected > ---Cins---  </option>
							<option value="Kişi"> Kişi </option>
							<option value="Qadın"> Qadın </option>
						</select>

						<select class="select" name="TN" required>
							<option disabled selected> ---Təhsil növü---  </option>
							<option value="Ödənişli"> Ödənişli </option>
							<option value="Ödənişsiz"> Ödənişsiz </option>
						</select>
						
						<select class="select" name="TF" required>
							<option disabled selected> ---Təhsil forması---  </option>
							<option value="Əyani"> Əyani </option>
							<option value="Qiyabi"> Qiyabi </option>
						</select>
						
						<select class="select" name="FA" required> 
							<option disabled selected> ---Fakültənin adı---  </option>
							<option value="Nəqliyyat və logistika"> Nəqliyyat və logistika fakültəsi </option>
							<option value="Energetika və avtomatika"> Energetika və avtomatika fakültəsi </option>
							<option value="Metallurgiya və materialşunaslıq"> Metallurgiya və materialşunaslıq fakültəsi </option>
							<option value="Maşınqayırma və robototexnika"> Maşınqayırma və robototexnika fakültəsi </option>
							<option value="İnformasiya və telekommunikasiya texnologiyalar"> İnformasiya və telekommunikasiya texnologiyalar fakültəsi </option>
							<option value="Xüsusi texnika və texnologiyaları">  Xüsusi texnika və texnologiyaları fakültəsi </option>
							<option value="İqtisadiyyat və idarəetmə"> İqtisadiyyat və idarəetmə fakültəsi </option>
						</select>
											
						<select class="select" name="IA" required>
							<option disabled selected> ---İxtisas adı---  </option>
							
							<optgroup label="Nəqliyyat və logistika fakültəsi">
								  <option value="Nəqliyyat mühəndisliyi">050632 - Nəqliyyat mühəndisliyi</option>
								  <option value="Nəqliyyatda servis">050806 - Nəqliyyatda servis</option>
								  <option value="Logistika və nəqliyyat texnologiyalari mühəndisliyi">050621 - Logistika və nəqliyyat texnologiyalari mühəndisliyi</option>
							</optgroup>
							
							<optgroup label="Energetika və avtomatika fakültəsi">
								  <option value="Elektrik və elektronika mühəndisliyi">050607 - Elektrik və elektronika mühəndisliyi</option>
								  <option value="Energetika mühəndisliyi">050608 - Energetika mühəndisliyi</option>
								  <option value="Mühəndis fizikası">050630 - Mühəndis fizikası</option>
								  <option value="Proseslərin avtomatlaşdırılması mühəndisliyi">050634 - Proseslərin avtomatlaşdırılması mühəndisliyi</option>
							</optgroup>
							
							<optgroup label="Metallurgiya və materialşunaslıq fakültəsi">
								  <option value="Ekologiya mühəndisliyi">050606 - Ekologiya mühəndisliyi</option>
								  <option value="Həyat fəaliyyətinin təhlükəsizliyi mühəndisliyi">050614 - Həyat fəaliyyətinin təhlükəsizliyi mühəndisliyi</option>
								  <option value="Kimya mühəndisliyi">050618 - Kimya mühəndisliyi</option>
								  <option value="Materiallar mühəndisliyi">050623 - Materiallar mühəndisliyi</option>
								  <option value="Mədən mühəndisliyi">050624 - Mədən mühəndisliyi</option>
								  <option value="Metallurgiya mühəndisliyi">050627 - Metallurgiya mühəndisliyi</option>
							</optgroup>
							
							<optgroup label="Maşınqayırma və robototexnika fakültəsi">
								  <option value="Cihaz mühəndisliyi">050604 - Cihaz mühəndisliyi</option>
								  <option value="Maşın mühəndisliyi">050622 - Maşın mühəndisliyi</option>
								  <option value="Mexanika mühəndisliyi">050628 - Mexanika mühəndisliyi</option>
								  <option value="Mexatronika və robototexnika mühəndisliyi">050629 - Mexatronika və robototexnika mühəndisliyi</option>
								  <option value="Qida mühəndisliyi">050635 - Qida mühəndisliyi</option>
								  <option value="Sənaye mühəndisliyi">050638 - Sənaye mühəndisliyi</option>
							</optgroup>
							
							<optgroup label="İnformasiya və telekommunikasiya texnologiyalar fakültəsi">
								  <option value="Kompüter elmləri">050509 - Kompüter elmləri</option>
								  <option value="İnformasiya təhlükəsizliyi">050615 - İnformasiya təhlükəsizliyi</option>
								  <option value="İnformasiya texnologiyaları">050616 - İnformasiya texnologiyaları</option>
								  <option value="Kompüter mühəndisliyi">050620 - Kompüter mühəndisliyi</option>
								  <option value="Radiotexnika və telekommunikasiya mühəndisliyi">050636 - Radiotexnika və telekommunikasiya mühəndisliyi</option>
							</optgroup>
							
							<optgroup label="Xüsusi texnika və texnologiyaları fakültəsi">
								  <option value="Hərbi kompozisiya materialları mühəndisliyi">XTB050101 - Hərbi kompozisiya materialları mühəndisliyi</option>
								  <option value="Hərbi rabitə vasitələri mühəndisliyi">XTB050102 - Hərbi rabitə vasitələri mühəndisliyi</option>
								  <option value="Optotexnika mühəndisliyi">XTB050103 - Optotexnika mühəndisliyi</option>
								  <option value="Pirotexniki və partladıcı vasitələr mühəndisliyi">XTB050104 - Pirotexniki və partladıcı vasitələr mühəndisliyi</option>
								  <option value="Silah və silah sistemləri mühəndisliyi">XTB050106 - Silah və silah sistemləri mühəndisliyi</option>
								  <option value="Aerokosmik mühəndislik">050601 - Aerokosmik mühəndislik</option>
							</optgroup>
							
							<optgroup label="İqtisadiyyat və idarəetmə fakültəsi">
								  <option value="Beynəlxalq ticarət və logistika">050401 - Beynəlxalq ticarət və logistika</option>
								  <option value="Biznesin idarə edilməsi">050402 – Biznesin idarə edilməsi</option>
								  <option value="İqtisadiyyat">050405 – İqtisadiyyat</option>
								  <option value="Marketinq">050407 – Marketinq</option>
								  <option value="Menecment">050408 – Menecment</option>
								  <option value="Statistika">050410 - Statistika</option>
							</optgroup>
							
						</select>
					
						<div class="form-floating mb-3">
                            <input type="date" name="QebulTarixi" class="form-control" id="floatingText" required>
                            <label for="floatingText">Qəbul olma tarixi</label>
                        </div>
						
						<div class="form-floating mb-3">
                            <input type="email"  name="Mail" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Email address</label>
                        </div>
						
						<div class="form-floating mb-3">
                            <input type="number_format"  name="Login" class="form-control" id="floatingText" required>
                            <label for="floatingText">Login</label>
                        </div>
						
                        <div class="form-floating mb-4">
                            <input type="password" name="Password" class="form-control" id="floatingPassword" required>
                            <label for="floatingPassword">Password</label>
                        </div>
						
						<div class="form-floating mb-4">
						<input type="password" name="cpassword" class="form-control" id="floatingPassword" required>
						<label for="floatingPassword">Confirm Password</label>
						</div>
						
						<select class="select" name="Panel" required>
							<option disabled selected> ---Panel--- </option>
							<option value="Müəllim/Müəllimə"> Müəllim/Müəllimə </option>
							<option value="Tələbə"> Tələbə </option>
						</select>
						
			            <input type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4" value="Sign Up">
                        <p class="text-center mb-0">Already have an Account? <a href="signin.php">Sign In</a></p>
						
                    </div>
                </div>
            </div>
        </div>
		
	<form>	
        <!-- Sign Up End -->
    </div>
</body>

</html>