<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'connection.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $carrera = $_POST["carrera"];
    $año = $_POST["año"];
    $my_query = "update estudiante set nombre = '$nombre', apellido = '$apellido' , carrera = '$carrera', año = '$año' where id = '$id';";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}
?>