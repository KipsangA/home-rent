<?php 
$con = mysqli_connect("localhost","root","","newrent") or die("Connection was not established");

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$delete_post ="delete from room_rental_registrations where id='$id'";

    $run_delete = mysqli_query($con, $delete_post);

    if ($run_delete) {
    	echo "<script>alert('Room has been deleted')</script>";
    	echo "<script>window.open('../app/list.php', '_self')</script>";
    }
}
 ?>