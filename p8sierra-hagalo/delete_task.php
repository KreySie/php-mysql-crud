<?php

include("db.php");

if(isset($_GET['IdPersona'])) {
  $IdPersona = $_GET['IdPersona'];
  $query = "DELETE FROM registros WHERE IdPersona = $IdPersona";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Article Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
