<?php
@include('connect.php');

$id = $_GET['id'];
$delete = "delete from forms WHERE id = '$id'";
$result = mysqli_query ($conn,$delete);



?>


