<?

include "Connect.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="DELETE FROM user WHERE id=$id";
	$conn->query($sql);
	
}
header('location:index.php');

?>