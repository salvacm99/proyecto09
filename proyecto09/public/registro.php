<?php
require "./../src/conexion.php";
require "./../src/Jugador.php";
  $j=new Usuario();
  $error=$j->comprobarCampos($_POST);
  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $j->conectar();
        $j->insertarJugador();
      }
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
        <link rel="stylesheet" href="css/proyecto(08).css">
  </head>
  <body>
    <?php
    if(isset($error)){
        if($error!="") echo "<h4>ERROR:$error</h4>";
    }
    ?>
<?php include "./assets/navSup.php"; ?>
<br>
    <div>
    <div class="form">
<form class="" action="registro.php" method="post">
  NOMBRE:
  <input type="text" name="nombre" value="" id="nombre">
  <div id="oculto" style='display:none;'>Debes rellenar este campo</div>
  <br>
  APELLIDOS:
  <input type="text" name="apellidos" value="" id="apellidos">
  <div id="oculto1" style='display:none;'>Debes rellenar este campo</div>
  <br>
  EDAD:
  <input type="text" name="edad" value="" id="edad">
  <div id="oculto2" style='display:none;'>Debes rellenar este campo</div>
  <div id="oculto3" style='display:none;'>Tiene que ser un número</div>
  <br>
  CURSO:
  <input type="text" name="curso" value="" id="curso">
  <div id="oculto4" style='display:none;'>Debes rellenar este campo</div>
  <div id="oculto5" style='display:none;'>Tiene que ser un número</div>
  <br>
  <input type="submit" name="" value="Enviar" onclick="return comprobar();">
</form>
    </div>

<script type="text/javascript" src="js/comprobar.js"></script>
      <?php include "./assets/footer.php"; ?>
  </body>

</html>
