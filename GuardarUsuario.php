<?php 
require('EnlaceBd.php');
$Conn = new ConexionBD();
$Apertura = $Conn->AperturaConexion();  

if (isset($_POST["Enviar"])){
$Usuario = $_POST["usuario"];
$Contra = $_POST["contra"];

if($Usuario!="" || $contra!=""){
   $Consulta = "CALL Insert_Usuario('$Usuario','$Contra')";
   $Resultado = mysqli_query($Apertura,$Consulta); 

       echo '<script language="javascript">';
       echo 'alert("Datos guardados correctamente")';
       echo '</script>';
       echo ("<script>location.href='index.html'</script>"); 
$Conn->CierreConexion(); 
}else{
    echo '<script language="javascript">';
       echo 'alert("complete los espacios en blanco")';
       echo '</script>';
       echo ("<script>location.href='Registro.html'</script>"); 
}

}
?>