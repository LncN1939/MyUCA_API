<?php

$mysql = new mysqli("localhost","root","","dbuca");
if($mysql->connect_error){
    echo"Error";
    die("Error in connection");
}
else{
    echo"Conexion exitosa";
}

?>