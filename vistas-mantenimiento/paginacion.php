<?php

require '../modelo/mantenimientoDaoImpl.php';

try{
    
    $base= new PDO("mysql: host=localhost; dbname=agroveterinaria", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $sql_total="SELECT Nombres,Procedencia, FechaNacimiento, Estado FROM PERSONA WHERE SECCION='mantenimiento' ";
    $resultado=$base->prepare($sql_total);
    $resultado->execute(array());
    
    while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
    
    echo "Nombres: " . $registro("Nombres") . "Procedencia: " . $registro("Procedencia") . "Fecha Nacimiento: " . $registro("FechaNacimiento") . "Estado: " . $registro("Estado") . "</br>";
    
    
} 

 $resultado->closeCursor();

}catch (Exception $e) {

    echo "Linea de error: " . $e->getLine();

}

?>