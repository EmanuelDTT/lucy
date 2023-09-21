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
      <form class="formulario" id="formAC" method="POST" action="<?php echo base_url('editar') ?>">
        <p>

          <label>Id</label>
          <input type="text" name="IdPersona" value="<?php echo $id ?>" required readonly="readonly">
        </p>

        <p>
          <label>Nombre</label>
          <input type="text" name="nombre" id="nombree" value="<?php echo $nombre ?>" required>
        </p>
        <p>
          <label>Teléfono</label>
          <input type="text" name="numero" id="number"value="<?php echo $numero ?>" required>
        </p>
        <p>
          <label>Correo</label>
          <input type="email" name="email" id="e-mail" value="<?php echo $email ?>" required>
        </p>
        
        <p>
        <label>Tipo de Usuario</label>
          <select class="form-control"  name="tipo_usuario" <?php if(session('tipoUsuario')!='Admin' and session('tipoUsuario')!='admin' ) echo "readonly" ?> >
              <option value="Usuario" <?php if($tipoUsuario=='Usuario') echo 'selected' ?> >Usuario</option>
              <option value="Admin" <?php if($tipoUsuario=='Admin') echo 'selected' ?> >Admin</option>


          </select>
          </p>
        
        <p>

          <label>Contraseña</label>
          <input type="text" name="Contra"  id ="Contra" value="<?php echo $contra ?>">
        </p>

        <p class="full">
          <button class="boton-enviar" id="actu" >actualizar</button>
        </p>
      </form>
    </div>
  </div>
</div>

<script src=" <?= base_url('./JS/validarAC.js'); ?>"></script>
