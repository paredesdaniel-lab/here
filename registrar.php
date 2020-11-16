<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <legend>Registro de Pago de Haberes</legend>
    Nombre del Empleado:<br>
    <input type="text" name="nombre"><br>
    Categoría:<br>
    <input type="text" name="categoria"><br>
    Básico:<br>
    <input type="text" name="basico"><br>
    Bonificación:<br>
    <input type="text" name="bonificacion"><br>
    Tipo de Aportación:<br>
    <input type="radio" id="AFP" name="tipo" value="AFP">
  <label for="AFP">AFP</label><br>
  <input type="radio" id="ONP" name="tipo" value="ONP">
  <label for="ONP">ONP</label><br>
<button type="submit" name="enviar">Enviar</button>
    </fieldset>
    
    </form>
<?php
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $basico = $_POST['basico'];
    $bonificacion = $_POST['bonificacion'];
    $tipo = $_POST['tipo'];

    include 'reg.php';
    $reg = new registrar($nombre,$categoria,$basico,$bonificacion,$tipo);

    $reg->imprimir();

}
?>


</body>
</html>