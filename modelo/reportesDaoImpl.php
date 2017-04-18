<?php

require_once '../database/dataBase.php';

class Reportes {

  function __construct(){

  }

  // Lista de los Reportes de Ventas
  public static function getReporteVenta() {
      $query = "SELECT * FROM persona";
      try {
          //Preparar la sentencia
          $comando = Database::getInstance()->getDb()->prepare($query);

          //ejecutar
          $comando->execute();

          return $comando->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
          return false;
      }
  }

  // Lista de los Reportes de Ventas
  public static function getReporteCompras() {
      $query = "SELECT * FROM persona";
      try {
          //Preparar la sentencia
          $comando = Database::getInstance()->getDb()->prepare($query);

          //ejecutar
          $comando->execute();

          return $comando->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
          return false;
      }
  }

}


?>
