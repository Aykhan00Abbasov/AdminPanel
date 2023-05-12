<?
@include'Connect.php';

if(isset($_POST['submit'])){
	
	$Nömrə=$_POST['Nömrə'];
	$Bölmə=$_POST['Bölmə'];
	$Mövzu=$_POST['Mövzu'];
	$Müəllif=$_POST['Müəllif'];
	$Tərtib_tarixi=$_POST['Tərtib_tarixi'];
	
$sql="INSERT INTO user(Nömrə, Bölmə, Mövzu, Müəllif, Tərtib_tarixi)VALUES('$Nömrə', '$Bölmə', '$Mövzu', '$Müəllif', '$Tərtib_tarixi')";
$query=mysqli_query($conn,$sql);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AZTU -  Admin Panel</title>
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
    <link href="css/Table_style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin Panel</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/aztu_Icon.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h4 class="mb-0">AZTU</h4>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Əsas səhifə</a>
					
                    <a href="table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Elanlar</a>
					
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>İstifadəçilər</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.php" class="dropdown-item">Sign In</a>
                            <a href="signup.php" class="dropdown-item">Sign Up</a>
                        </div>
                    </div>
					
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
            </nav>
            <!-- Navbar End -->

            <!-- Elan table Start  -->
			
				<div class="Elan_table">
					<form action="" method="POST">
					
						<h1> Yeni Elan əlavə edin: </h1>
						
						<tr>
						
							<input type="number" name="Nömrə" class="input Nömrə" placeholder="Nömrə" required>
							
							<select class="select Bölmə" name="Bölmə" required>
								<option disabled selected> Bölmə  </option>
								<option value="Tələbə"> Tələbə </option>
								<option value="Müəllim"> Müəllim </option>
							</select>
							
							<input type="text" name="Mövzu" class="input Mövzu" placeholder="Mövzu" required>
							
							<select class="select" name="Müəllif" required>
								<option disabled selected> ---Müəllif---  </option>
								<option value="Admin"> Admin </option>
								<option value="Admistrator"> Admistrator </option>
							</select>
							
							<input type="date" name="Tərtib_tarixi" class="input Tarix" placeholder="Tərtib tarixi" required>
							
							<input type="submit" name="submit" class="input" value="Əlavə et">
							
						</tr>	
					</form>
				</div>
			<!-- Elan table End -->
		</div>
				

    </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>