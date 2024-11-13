<?php

function obtener_servicios() {
 try {
    // Importar las credenciales de la base de datos
   require 'database.php';

   //consulta sql
   $sql = "SELECT * FROM servicios;";

   //realizar la consulta
   $consulta = mysqli_query($db, $sql);

   return $consulta;
    
 } catch (\Throwable $th) {
    var_dump($th);
 }
}

obtener_servicios();
