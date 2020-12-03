<?php
include("db.php");
$Nombre = '';
$Apellido= '';
$Producto_Comprado = '';
$Precio = '';
$Cantidad = '';
$Tema_Consulta = '';
$Problema_C_P = '';


if  (isset($_GET['IdPersona'])) {
  $IdPersona = $_GET['IdPersona'];
  $query = "SELECT * FROM registros WHERE IdPersona=$IdPersona";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 7) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Apellido = $row['Apellido'];
    $Producto_Comprado = $row['Producto_Comprado'];
    $Precio = $row['Precio'];
    $Cantidad = $row['Cantidad'];
    $Tema_Consulta = $row['Tema_Consulta'];
    $Problema_C_P = $row['Problema_C_P'];
  }
}

if (isset($_POST['update'])) {
  $IdPersona = $_GET['IdPersona'];
  $Nombre= $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Producto_Comprado= $_POST['Producto_Comprado'];
  $Precio= $_POST['Precio'];
  $Cantidad= $_POST['Cantidad'];
  $Tema_Consulta= $_POST['Tema_Consulta'];
  $Problema_C_P= $_POST['Problema_C_P'];

  $query = "UPDATE registros set Nombre = '$Nombre', Apellido = '$Apellido',
   Producto_Comprado = '$Producto_Comprado', Precio = '$Precio', Cantidad = '$Cantidad', Tema_Consulta = '$Tema_Consulta', Problema_C_P = '$Problema_C_P' WHERE IdPersona=$IdPersona";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Article Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?IdPersona=<?php echo $_GET['IdPersona']; ?>" method="POST">
        <div class="form-group">
          <input name="Nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Nombre">
        </div>
        <div class="form-group">
          <input name="Apellido" type="text" class="form-control" value="<?php echo $Apellido; ?>" placeholder="Apellido">
        </div>
        <div class="form-group">
          <input name="Producto_Comprado" type="text" class="form-control" value="<?php echo $Producto_Comprado; ?>" placeholder="Producto Comprado">
        </div>
        <div class="form-group">
          <input name="Precio" type="text" class="form-control" value="<?php echo $Precio; ?>" placeholder="Precio">
        </div>
        <div class="form-group">
          <input name="Cantidad" type="text" class="form-control" value="<?php echo $Cantidad; ?>" placeholder="Cantidad">
        </div>
          <div class="form-group">
            <input type="text" name="Tema_Consulta" class="form-control" placeholder="Tema de Consulta" autofocus>
          </div>
        <div class="form-group">
          <input name="Problema_C_P" type="text" class="form-control" value="<?php echo $Problema_C_P; ?>" placeholder="Problema">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
