
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?=base_url('Css/Register.css')?>">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet"> 
<script src="https://kit.fontawesome.com/4a67feb1fe.js" crossorigin="anonymous"></script>

  <title>Formulario Registro</title>
</head>

</script>
<body>

  
  <form method="POST" action="/MercadoDigital/public/Principal/insertar">
  <section class="form-register">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" values="nombre" name="nombre" id="nombre" placeholder="Ingrese su Nombre" required>
    <input class="controls" type="text" values="apellidos"  name="apellidos" id="apellidos" placeholder="Ingrese su Apellido"required>
    <input class="controls" type="email" values="correo"  name="correo" id="correo" placeholder="Ingrese su Correo" required>
    <input class="controls" type="password" values="password"  name="password" id="password" placeholder="Ingrese su Contraseña" required>
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar">
    <p><a href="/MercadoDigital/public/Principal/index">¿Ya tengo Cuenta?</a></p>
  </section>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>