<?php

  require_once '../database/dataBase.php';

  class Logeo{

    function __construct(){}

    public static function getLogin($user, $clave) {
//consulta de persona y usuario
        $consulta = "select u.*,p.* from usuario u,persona p where u.usuario_id=p.persona_id and u.usuario = '".$user."' and u.contrasena = '".$clave."' and u.estado=1 and p.estado=1 ";
         
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }

  }

?>
