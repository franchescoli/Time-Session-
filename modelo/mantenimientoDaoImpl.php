<?php

require_once '../database/dataBase.php';


class Mantenimiento {

    function __construct() {
        
    }
    
    //TODO CATEGORIA
    
    public static function ListaCategoria($id){
        $query = "SELECT categoria_id, nombre, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM categoria WHERE categoria_id=".$id;
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
    
    public static function ListaCategoriaEstado($estado){
        $query = "SELECT categoria_id, nombre, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM categoria WHERE estado=".$estado;
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
    
    public static function AgregarCategoria($nombre, $user) {
        try {
            $query = "INSERT INTO categoria(nombre, estado, usuario_id_reg) "
                    . "VALUES ($nombre, '1', $user)";
            //Preparar la sentencia
            $comando = Database::getInstance()->getDb()->prepare($query);

            //ejecutar
            $comando->execute();

            return $comando;
        } catch (PDOException $e) {
            return false;
        } 
    }
    
    //eliminar un registro de la persona, en realida cambiar el estado a 0 :)
    public static function EliminarCategoria($categoria_id) {
        try {
            $query = "UPDATE categoria SET estado=0 WHERE categoria_id=".$categoria_id;
            //Preparar la sentencia
            $comando = Database::getInstance()->getDb()->prepare($query);

            //ejecutar
            $comando->execute();

            return $comando;
        } catch (PDOException $e) {
            return false;
        }
        
    }
    
    //Editar los datos de una persona :D
    public static function editCategoria($categoria_id, $nombre_cat, $user) {
        try {
            $query = "UPDATE categoria SET nombre=".$nombre_cat.", usuario_id_reg=".$user." WHERE categoria_id=".$categoria_id;
            //Preparar la sentencia
            $comando = Database::getInstance()->getDb()->prepare($query);

            //ejecutar
            $comando->execute();

            return $comando;
        } catch (PDOException $e) {
            return false;
        } 
    }
    
    
    //TODO ESTADO CIVIL
    public static function ListaEstadoCivil(){
        $query = "SELECT estado_civil_id, nombre_estado, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM estado_civil";
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
    
    public static function ListaEstadoCivilEstado($estado){
        $query = "SELECT estado_civil_id, nombre_estado, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM estado_civil WHERE estado=".$estado;
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

    //TODO MARCA
    public static function ListaMarca(){
        $query = "SELECT marca_id, nombre, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM marca";
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
    
    public static function ListaMarcaEstado($estado){
        $query = "SELECT marca_id, nombre, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM marca WHERE estado=".$estado;
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
    
    //TODO GRADO DE INSTRUCCION
    public static function ListaGradoInstruccion(){
        $query = "SELECT grado_instruccion_id, nombre_grado, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM grado_instruccion";
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
    
    public static function ListaGradoInstruccionEstado($estado){
        $query = "SELECT grado_instruccion_id, nombre_grado, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM grado_instruccion where estado=".$estado;
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
    

    //TODO PERSONA
    //
    //obtener lista de la persona por estado
    public static function getPersonaEst($estado) {
        $query = "SELECT persona_id, nombres, apellidos, procedencia, date_format(fech_nac,'%d/%m/%y') as f_nac, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM persona WHERE estado=".$estado;
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

    //obtener lista de la persona por id
    public static function getPersonaId($id) {
        $query = "SELECT persona_id, nombres, apellidos, procedencia, date_format(fech_nac,'%d/%m/%y') as f_nac, case estado when 1 then 'Activo' when 2 then 'Inactivo' END as estado FROM persona WHERE estado=".$id;
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
    
    //Agregar los datos de una persona :D
    public static function AgregarPersona($nombres, $apellidos, $procedencia, $ubigeo, $nacimiento, $genero, $user) {
        try {
            $query = "INSERT INTO persona(nombres, apellidos, procedencia, ubigeo_id, fech_nac, genero, estado, usuario_id_reg) "
                    . "VALUES ($nombres, $apellidos, $procedencia, $ubigeo, $nacimiento, $genero, '1', $user)";
            //Preparar la sentencia
            $comando = Database::getInstance()->getDb()->prepare($query);

            //ejecutar
            $comando->execute();

            return $comando;
        } catch (PDOException $e) {
            return false;
        } 
    }
    
    //eliminar un registro de la persona, en realida cambiar el estado a 0 :)
    public static function deletePersona($persona_id) {
        try {
            $query = "UPDATE persona SET estado=0 WHERE persona_id=".$persona_id;
            //Preparar la sentencia
            $comando = Database::getInstance()->getDb()->prepare($query);

            //ejecutar
            $comando->execute();

            return $comando;
        } catch (PDOException $e) {
            return false;
        }
        
    }
    
    //Editar los datos de una persona :D
    public static function editPersona($persona_id) {
        try {
            $query = "UPDATE persona SET estado=0 WHERE persona_id=".$persona_id;
            //Preparar la sentencia
            $comando = Database::getInstance()->getDb()->prepare($query);

            //ejecutar
            $comando->execute();

            return $comando;
        } catch (PDOException $e) {
            return false;
        } 
    }
    
    //TODO PRODUCTO
    public static function ListaProducto() {
        $query = "SELECT p.producto_id, p.nombre, p.descripcion, p.imagen, case p.estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado, m.nombre as marca, c.nombre as categoria FROM producto p, categoria c, marca m WHERE p.categoria_id=c.categoria_id AND p.marca_id=m.marca_id";
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
    
    public static function ListaProductoEstado($estado) {
        $query = "SELECT p.producto_id, p.nombre, p.descripcion, p.imagen, case p.estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado, m.nombre as marca, c.nombre as categoria FROM producto p, categoria c, marca m WHERE p.categoria_id=c.categoria_id AND p.marca_id=m.marca_id AND p.estado=".$estado;
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
    
    //TODO UNIDAD MEDIDA
    
    public static function ListaUnidadMedida() {
        $query = "SELECT unidad_medida_id, nomb_uni_med, abreviatura, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM unidad_medida";
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
    
    public static function ListaUnidadMedidaEstado($estado) {
        $query = "SELECT unidad_medida_id, nomb_uni_med, abreviatura, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM unidad_medida WHERE estado=".$estado;
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
    
    //TODO SUCURSAL
    public static function ListaSucursal() {
        $query = "SELECT sucursal_id,nombre, direccion, telefono, codigo_postal, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM sucursal";
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
    
    public static function ListaSucursalEstado($estado) {
        $query = "SELECT sucursal_id,nombre, direccion, telefono, codigo_postal, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM sucursal WHERE estado=".$estado;
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
    
    //TODO TIPO CMPROBANTE
    public static function ListaTipoComprobante() {
        $query = "SELECT tipo_comprobante_id, descripcion, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM tipo_comprobante";
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
    
    public static function ListaTipoComprobanteEstado($estado) {
        $query = "SELECT tipo_comprobante_id, descripcion, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM tipo_comprobante WHERE estado=".$estado;
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
    
    //TODO TIPO MOVIMIENTO
    public static function ListaTipoMovimiento() {
        $query = "SELECT tipo_movimiento_id, nombre_movimiento, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM tipo_movimiento";
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
    
    public static function ListaTipoMovimientoEstado($estado) {
        $query = "SELECT tipo_movimiento_id, nombre_movimiento, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM tipo_movimiento WHERE estado=".$estado;
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
    
    //TODO TIPO DOCUMENTO
    public static function ListaTipoDocumento() {
        $query = "SELECT tipo_documento_id, nombre, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM tipo_documento";
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
    
    public static function ListaTipoDocumentoEstado($estado) {
        $query = "SELECT tipo_documento_id, nombre, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM tipo_documento WHERE estado=".$estado;
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
    
    //TODO TIPO DOCUMENTO
    public static function ListaTipoTransaccion() {
        $query = "SELECT tipo_transaccion_id, descripcion, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM tipo_transaccion";
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
    
    public static function ListaTipoTransaccionEstado($estado) {
        $query = "SELECT tipo_transaccion_id, descripcion, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM tipo_transaccion WHERE estado=".$estado;
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
    
    //TODO TIPO DOCUMENTO
    public static function ListaArea() {
        $query = "SELECT area_id, nombre_area, case tipo when 1 then 'Principal' when 0 then 'Secundaria' END as tipo, case estado when 1 then 'Activo' when 2 then 'Inactivo' END as estado FROM area";
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
    
    public static function ListaAreaEstado($estado) {
        $query = "SELECT area_id, nombre_area, case tipo when 1 then 'Principal' when 0 then 'Secundaria' END as tipo, case estado when 1 then 'Activo' when 2 then 'Inactivo' END as estado FROM area WHERE estado=".$estado;
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
    
    public static function ListaUnidadEmpaque($estado) {
        $query = "SELECT unidad_empaque_id, nombre_empaque, cantidad, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM unidad_empaque WHERE estado=".$estado;
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
    
    public static function ListaLote($estado) {
        $query = "SELECT lote_id, numero_lote, fecha_vencimiento, fecha_produccion, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM lote WHERE estado=".$estado;
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
    
    public static function ListaPresentacion($estado) {
        $query = "SELECT presentacion_id, nombre_presentacion, case estado when 1 then 'Activo' when 0 then 'Inactivo' END as estado FROM presentacion WHERE estado=".$estado;
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

