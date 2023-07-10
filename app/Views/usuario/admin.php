<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>CSS/menu.css">
    <link rel="stylesheet" href="<?= base_url(); ?>CSS/admin.css">
    <link rel="stylesheet" href="./CSS/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    <title>usuarios</title>
</head>

<body>

    <div class="main">

    



        <section>
  <h1>Lista usuarios</h1>
  <div class="table-wrapper">
    <table class="fl-table" id="ajax">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Numero</th>
          <th>E-mail</th>
          <th>Contraseña</th>
          <th>Tipo de usuario</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $key) { ?>
        <tr>
          <td><?php echo $key->Nombre ?></td>
          <td><?php echo $key->Numero ?></td>
          <td><?php echo $key->Email ?></td>
          <td><?php echo $key->contra ?></td>
          <td><?php echo $key->tipoUsuario ?></td>
          <td>
            <a href="<?php echo base_url() . 'actualizar' . '/' . $key->id_Persona ?>" class="btn-update"><img src="IMG/editar.png" alt=""></a>
            <a href="<?php echo base_url() . 'eliminar' . '/' . $key->id_Persona ?>" class="btn-delete"><img src="IMG/papelera.png" alt=""></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>


    <script>
      let table = new DataTable('#ajax');
    </script>






</body>




</html>