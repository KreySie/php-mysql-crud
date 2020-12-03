<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Producto_Comprado = $_POST['Producto_Comprado'];
  $Precio = $_POST['Precio'];
  $Cantidad = $_POST['Cantidad'];
  $Tema_Consulta = $_POST['Tema_Consulta'];
  $Problema_C_P = $_POST['Problema_C_P'];
  $query = "INSERT INTO registros(Nombre, Apellido, Producto_Comprado, Precio, Cantidad, Tema_Consulta, Problema_C_P) VALUES ('$Nombre', '$Apellido', '$Producto_Comprado', '$Precio', '$Cantidad', '$Tema_Consulta', '$Problema_C_P')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Article Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
