<?php
   class ConexionBD{
    private $Conexion;
    
    function AperturaConexion(){
        $usuario = "root";
        $contrasena = "";
        $servidor = "localhost";
        $basededatos = "prueba_tecnica";
        
        $this->Conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);  
        return $this->Conexion;
    }
    
    function CierreConexion(){
        mysqli_close($this->Conexion);
    }
}

?>