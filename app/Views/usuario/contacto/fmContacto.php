<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url();?>CSS/contacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Contactanos</title>
</head>

<body>

    <div class="conte">
    <section class="form_wrap">

<section class="cantact_info">
    <section class="info_title">
        <span class="fa fa-user-circle"></span>
        <h2>INFORMACION<br>DE CONTACTO</h2>
    </section>
    <section class="info_items">
        <p><span class="fa fa-envelope"></span> Lucy.contact@gmail.com</p>
        <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
    </section>
</section>

<form action="" class="form_contact">
    <h2>Envia un mensaje</h2>
    <div class="user_info">
        <label for="names">Nombres *</label>
        <input type="text" id="names">

        <label for="phone">Telefono / Celular</label>
        <input type="text" id="phone">

        <label for="email">Correo electronico *</label>
        <input type="text" id="email">

        <label for="mensaje">Mensaje *</label>
        <textarea id="mensaje"></textarea>

        <input type="button" value="Enviar Mensaje" id="btnSend">
    </div>
</form>

</section>


    </div>

</body>

</html>