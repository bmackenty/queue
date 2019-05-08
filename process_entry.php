<?php 
include('access_control.php');
include('database_inc.php');

$description = $_POST['description'];
$id = $access_control['id'];
$course = $access_control['course'];
$status = "Active";
$date = date("Y-m-d G:i:s");

$result = mysqli_query($connect,"INSERT INTO `queue` (`student`, `course`, `status`, `date_added`,`description`) VALUES 
('$id','$course','$status','$date','$description');");

echo '<pre>';
print_r(get_defined_vars()); 
echo '</pre>';