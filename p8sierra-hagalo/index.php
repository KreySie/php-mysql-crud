<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Apellido" class="form-control" placeholder="Apellido" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Producto_Comprado" class="form-control" placeholder="Producto Comprado" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Precio" class="form-control" placeholder="Precio" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Cantidad" class="form-control" placeholder="Cantidad" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Tema_Consulta" class="form-control" placeholder="Tema de Consulta" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Problema_C_P" class="form-control" placeholder="Problema" autofocus>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar Registro">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Producto Comprado</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Tema de Consulta</th>
            <th>Problema</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM registros";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Apellido']; ?></td>
            <td><?php echo $row['Producto_Comprado']; ?></td>
            <td><?php echo $row['Precio']; ?></td>
            <td><?php echo $row['Cantidad']; ?></td>
            <td><?php echo $row['Tema_Consulta']; ?></td>
            <td><?php echo $row['Problema_C_P']; ?></td>
            <td>
              <a href="edit.php?IdPersona=<?php echo $row['IdPersona']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?IdPersona=<?php echo $row['IdPersona']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
