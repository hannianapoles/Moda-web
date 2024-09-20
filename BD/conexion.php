<?php
$Servidor = "localhost";
$Usuario = "root";
$Pass = "";
$BD = "moda";

$Conection = new mysqli($Servidor, $Usuario, $Pass, $BD);
if($Conection->connect_errno){
die("Conexion fallida " . $Conection->connect_errno);
}
else{
    echo"Conectado";
}
?>