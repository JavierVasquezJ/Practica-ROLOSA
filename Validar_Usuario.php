<?php 
require('EnlaceBd.php');

$Conn = new ConexionBD();
$Apertura = $Conn->AperturaConexion();   

if (isset($_POST["Enviar"])){   
$Usuario = $_POST["usuario"];
$Contraseña = $_POST["contra"];
}

$Consulta = "CALL Select_Usuario('$Usuario','$Contraseña')";
$Resultado = mysqli_query($Apertura,$Consulta);    
$Variable = mysqli_fetch_array($Resultado);
$Conn->CierreConexion();
 foreach($Variable as $value){ 
        $validar = $value;  
     break;
}

if($validar == 1){
       echo ("<script>location.href='Admin.php'</script>"); 
}else{
   
       echo '<script language="javascript">';
       echo 'alert("Correo o Contraseña equivocada")';
       echo '</script>';
       echo ("<script>location.href='Index.html'</script>");  
}

?>