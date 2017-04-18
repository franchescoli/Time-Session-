<?php
require_once ("modelo/buscadorq.php");
$texto = array();
$filtro =isset($_GET['term'])? $_GET['term']: '';
  $ListPro = Agrobusca::Buscador($filtro);

  if (count($ListPro) > 0) {
    foreach ($ListPro as $variable) {
        $tex["value"] = $variable['nomb'];
        $tex["nomb"] = $variable['nomb'];
        $tex["nombre"] = $variable['nombre'];
        $tex["producto_id"] = $variable['producto_id'];
        $tex["precio"] = $variable['precio'];
        array_push($texto,$tex);
    }
    echo json_encode($texto);
  }else {
    echo "No se encontraron resultados";
  }
?>
