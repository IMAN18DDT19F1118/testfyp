<?php
session_start();

if(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);

}
session_destroy();
header("Location: index.php");
die;
rujukan_delete.php
<?php
	$con = mysqli_connect('localhost','root','','bookingcalendar');
    $id = $_GET['dataDel2'];
    $query="DELETE FROM temujanji WHERE id=$id";
    $result=mysqli_query($con,$query);

    $query2="DELETE FROM rujukan WHERE id=$id";
    $result2=mysqli_query($con,$query2);
    ?><script>
		alert('Data telah dipadam')
		window.location='view_booking.php'
	</script>
