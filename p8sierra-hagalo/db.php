<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_sierra_hagalo'
) or die(mysqli_error($mysqli));

?>
