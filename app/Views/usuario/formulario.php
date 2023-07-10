<!doctype html>
<html lang="en">

<head>
	<title>Ingreso</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="<?= base_url('CSS/formulario.css'); ?>">

</head>

<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Ingreso </span><span>Registro</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">

											<form method="POST" action="<?php echo base_url('/ingresar') ?>">
												<h4 class="mb-4 pb-3">Ingreso</h4>
												<div class="form-group">
													<input type="email" class="form-style" name="email" placeholder="E-mail">
													<i class="input-icon uil uil-at"></i>

												</div>
												<div class="form-group mt-2">
													<input type="password" class="form-style" name="contra" placeholder="Contraseña">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button href="" class="btn mt-4">Ingreso</button>
												<p class="mb-0 mt-4 text-center"><a href="" class="link">¿se te olvido tu contraseña?</a></p>
										</div>
									</div>
								</div>
								</form>



								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">

											<form method="POST" action="<?php echo base_url('/crear') ?>" id="formRe" class="formRe">

												<h4 class="mb-3 pb-3">Registro</h4>
												<div class="form-group">
													<input type="text" class="form-style" name="nombre" placeholder="Nombre Completo" id="name">
													<i class="input-icon uil uil-user"></i>
													<i class="fas fa-check-circle"></i>

												</div>
												<div class="form-group mt-2">
													<input type="tel" class="form-style" name="numero" placeholder="Numero de Telefono" id="telefono">
													<i class="input-icon uil uil-phone"></i>
													<i class="fas fa-check-circle"></i>

												</div>
												<div class="form-group mt-2">
													<input type="email" class="form-style" name="email" placeholder="Lucy@gmail.com" id="email">
													<i class="input-icon uil uil-at"></i>
													<div class="errorMSG">El correo ya esta en uso</div>
												</div>
												<div class="form-group mt-2">
													<input title="" type="password" class="form-style" name="contra" placeholder="contraseña" id="contra">
													<i class="input-icon uil uil-lock-alt"></i>
													<i class="fas fa-check-circle"></i>
													<i class="fas fa-exclamation-circle"></i>
													<div id="strengthMessage"></div>
												</div>

												<button href="" class="btn mt-4" id="enviar" value="registrar" type="submit">Registro</button>



											</form>

										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src=" <?= base_url('./JS/validacion.js'); ?>"></script>
	<script src=" <?= base_url('./JS/contra.js'); ?>"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





	<script type="text/javascript">
		let mensaje = '<?php echo $mensaje ?>';

		if (mensaje == '1') {
			swal('Registrado', 'se ha registrado con extio!', 'success');
		} else if (mensaje == '0') {
			swal('Error', 'Hubo un fallo en el registro!', 'error');
		} else if (mensaje == '2') {
			swal('Actualizado', 'Actualización exitoza!', 'success');
		} else if (mensaje == '3') {
			swal('Error', 'Hubo un fallo en actualizar!', 'error');
		} else if (mensaje == '4') {
			swal('Eliminado', 'Se ha eliminado con exito!', 'succes');
		} else if (mensaje == '5') {
			swal('Error', 'Hubo un fallo al eliminar!', 'error');
		}
	</script>
</body>

</html>