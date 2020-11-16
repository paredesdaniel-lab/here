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
    <legend>Transportes</legend>
    Empresa:<br>
    <input type="radio" id="IVOVIC" name="tipo" value="IVOVIC">
  <label for="IVOVIC">IVOVIC</label><br>
  <input type="radio" id="Leonidas" name="tipo" value="Leonidas">
  <label for="Leonidas">Leonidas</label><br>
  Destinatario:<br>
    <input type="text" name="nombre"><br>
    Destino:<br>
    <input type="text" name="categoria"><br>
    Cantidad de TM:<br>
    <input type="text" name="basico"><br>
    
<button type="submit" name="enviar">Enviar</button>
    </fieldset>
    
    </form>
<?php
if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $basico = $_POST['basico'];
    $tipo = $_POST['tipo'];
    include 'trans.php';
    if($tipo=="IVOVIC"){
    $reg = new IVOVIC($nombre,$categoria,$basico);
    $reg->imprimir();
    }else {
        $reg = new LEONIDAS($nombre,$categoria,$basico);
        $reg->tarifario();
        $reg->imprimir();
    }

}
?>


</body>
</html>