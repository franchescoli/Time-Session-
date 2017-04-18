<?php

  require_once 'database/dataBase.php';

  class PerfilOpciones{

    function __construct(){}

    public static function ListaOpciones($perfil_id) {

      $consulta = "SELECT o.opciones_id, o.nombre_opcion, o.url FROM perfil p, opciones o, perfil_opciones po WHERE p.perfil_id = po.perfil_id AND po.opciones_id = o.opciones_id AND o.tipo = 1 AND o.estado = 1 AND P.ESTADO = 1 AND p.perfil_id = ".$perfil_id." ";

        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }

    public static function ListaSubOpciones($opcion_id, $perfil_id) {

      $consulta = "SELECT o.opciones_id, o.nombre_opcion, o.url FROM opciones o, perfil_opciones po, perfil p WHERE o.opciones_id = po.opciones_id AND po.perfil_id = p.perfil_id AND o.estado = 1 AND p.estado = 1 AND O.TIPO = 2 AND o.subopciones_id = ".$opcion_id." AND po.perfil_id = ".$perfil_id." ";

        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }

  }

?>
