<?php
$id = $datos[0]['id_Persona'];
$nombre = $datos[0]['Nombre'];
$numero = $datos[0]['Numero'];
$contra = $datos[0]['contra'];
$email = $datos[0]['Email'];
$tipoUsuario= $datos[0] ['tipoUsuario'];

?>

<link rel="stylesheet" href="<?=base_url();?>CSS/actualizar.css">
<link rel="stylesheet" href="<?=base_url();?>CSS/menu.css">



<div class="contenedor">

  <h1 class="logo"><span class="nombre-empresa">actualizar</span> Usuario</h1>
  <div class="wrapper animated bounceInLeft">
    <div class="info-empresa">
      <h3 class="htree">Datos Usuario</h3>
      <ul class="servicios">
        <li><i class="fa fa-map-marker"></i> </li>
        <li><i class="fa fa-mobile"></i> </li>
        <li><i class="fa fa-envelope"></i> </li>
      </ul>
    </div>
    <div class="contacto">
      <h3 class="htree">Enviar Correo</h3>
      <form class="formulario" method="POST" action="<?php echo base_url('editar') ?>">
        <p>

          <label>Id</label>
          <input type="text" name="IdPersona" value="<?php echo $id ?>" required readonly="readonly">
        </p>

        <p>
          <label>Nombre</label>
          <input type="text" name="nombre" value="<?php echo $nombre ?>" required>
        </p>
        <p>
          <label>Teléfono</label>
          <input type="text" name="numero" value="<?php echo $numero ?>" required>
        </p>
        <p>
          <label>Correo</label>
          <input type="email" name="email" value="<?php echo $email ?>" required>
        </p>
        <p>
          <label>Tipo de Usuario</label>
          <input type="text" name="usuario" value="<?php echo $tipoUsuario ?>" required>
        </p>
        <p>

          <label>Contraseña</label>
          <input type="text" name="Contra" value="<?php echo $contra ?>">
        </p>

        <p class="full">
          <button class="boton-enviar">actualizar</button>
        </p>
      </form>
    </div>
  </div>
</div>