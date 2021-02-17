<?php
  require('EnlaceBd.php');
  $Conn = new ConexionBD();
  $Apertura = $Conn->AperturaConexion();   

  $Consulta = "CALL Select_Contacto";
  $Resultado = mysqli_query($Apertura,$Consulta); 
  
  $Conn->CierreConexion();
   
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Administración Contacto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="EstilosAdmin.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script>
    <script type="text/javascript" src="Funcion.js"></script>
     
</head>

<body>
    <div class="container">
      <form action="" method="post">
        <div class="row" id="Encabezado">
            <div class="col-sm-6 col-md-10 ">
                <h1>Administración de Contactos</h1>
            </div>
            <div class="col-sm-6 col-md-2 ">
                <button class="btn btn-secondary"><a href="Index.html" style="text-decoration:none" color="white">Cerrar Sesión</a></button>
            </div>
        </div>
        
        <div class="row" id="Contenedor">
           
            <div class="col-sm-12 col-md-2" id="Barra-Lateral">
                <div id="Imagen"></div>
              
            </div>
            <div class="col-sm-12 col-md-10" id="Contenido">
                <div class="row">
                    <div class="col-md-6" id="list_conta">
                        <h3>Contactos</h3>
                          <h3>Nombre</h3>
                        <ul>    
                            <?php
                        foreach($Resultado as $Dato){
                        echo '<li><a href="" onclick="CargarDatos('.$Dato["Nombre"].');" >'.$Dato["Nombre"].' </a></li>';
                          }
                        ?>
                        </ul>
                       
                    </div>
                    <div class="col-md-6" id="Formulario">
                        <h3>Formulario</h3>

                        <input type="text" class="Datos" id="Nombre" Name="Nombre" placeholder="Nombre">
                        <br>
                        <input type="email" class="Datos" id="Correo" Name="Correo" placeholder="Correo Electronico">
                        <br>
                        <input type="number" class="Datos" id="Telefono" Name="Telefono" placeholder="Telefono">
                        <br>
                        <input type="number" class="Datos" id="Edad" Name="Edad" placeholder="Edad">
                        <br>
                        <input type="date" id="Fecha" width="50%" id="Fecha" Name="Fecha">
                        <br>
                        <select class="" name="Provincia" id="Provincia" >
                            <option value="">Seleccione una Provincia</option>
                            <option value="San Jose">San Jose</option>
                            <option value="Alajuela">Alajuela</option>
                            <option value="Heredia">Heredia</option>
                            <option value="Cartago">Cartago</option>
                            <option value="Puntarenas">Puntarenas</option>
                            <option value="Limon">Limon</option>
                            <option value="Guanacaste">Guanacaste</option>
                        </select>
                        <br>
                        <div class="Genero">
                           <label for="">Genero  </label>                        
                           <input type="radio" id="genero" name="genero" value="Femenino">
                           <label for="" name="Femenino">Femenino</label>
                           <input type="radio" id="genero" name="genero" value="Masculino">
                           <label for="" name="Masculino">Masculino</label>
                        </div>
                       <br>
                       <div id="resultado"></div>
                       <button class="btn btn-secondary" name="Enviar" type="submit" id="Agregar" onclick="Guardar($('#Nombre').val(), $('#Correo').val(),$('#Telefono').val(),$('#Edad').val(),$('#Provincia').val(),$('#genero').val());return false;">Agregar</button>
                       <button class="btn btn-secondary" id="Modificar">Modificar</button>
                       <button class="btn btn-secondary" id="Eliminar">Eliminar</button>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row" id="Foother">
            <div class="col-sm-12 col-md-12">
                <h2>Prueba Técnica</h2>
                
            </div>
        </div>
        </form>
    </div>
</body>

</html>
