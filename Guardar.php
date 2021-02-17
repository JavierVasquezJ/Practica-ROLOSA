<?php 
require('EnlaceBd.php');
$Conn = new ConexionBD();
$Apertura = $Conn->AperturaConexion();  


$Nombre = $_POST["Nombre"];
$Correo = $_POST["Correo"];
$Telefono = $_POST["Telefono"];
$Edad = $_POST["Edad"];
$Provincia = $_POST["Provincia"];
$genero = $_POST["genero"];
$Fecha = $_POST["Fecha"];

if($Nombre!="" || $Correo!="" || $Telefono="" || $Edad=""){
    
$Consulta = "CALL Insert_Contacto('$Nombre','$Correo','$Telefono',
'$Edad','$Provincia','$genero','$Fecha')";
$Resultado = mysqli_query($Apertura,$Consulta); 

       echo '<script language="javascript">';
       echo 'alert("Datos guardados correctamente")';
       echo '</script>';
       echo ("<script>location.href='Admin.php'</script>"); 
$Conn->CierreConexion();
    
}
?>