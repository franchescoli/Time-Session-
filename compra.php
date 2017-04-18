<?php

  require_once 'modelo/perfil.php';

  session_start();

  if ($_SESSION["usuario_id"] == '' || $_SESSION["usuario_id"] == null) {
    header('Location: index.php');
  }

  $ListOpc = PerfilOpciones::ListaOpciones($_SESSION["perfil_id"].'');

?>

<script lang="javascript">
    function alert1(){
        alert("su sesion a sido caducada por seguridad, por favor ingrese nuevamente")
        self.location="index.php"
    }
</script>


<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <title>Compra -- Greyli</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Agroveterinaria -- No se como se llama">
        <meta name="author" content="Juan -- Pedro -- Natalia -- Leydi -- Leidy -- Antony -- Deyvi -- Johann ">

        <link rel="stylesheet" type="text/css" href="recursos/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="recursos/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="recursos/css/local.css" />
        <link rel="stylesheet" type="text/css" href="res/css/perfil.css" />
        <link rel="stylesheet" type="text/css" href="res/css/barra.css" />
        <link rel="stylesheet" type="text/css" href="recursos/css/jquery-ui.min.css"/>

        <script type="text/javascript" src="recursos/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="recursos/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="recursos/js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="recursos/js/jquery-ui.min.js"></script>

        <script type="text/javascript" src="res/angular/angular.js"></script>
        <script type="text/javascript" src="res/angular/angular.min.js"></script>

        <!-- you need to include the shieldui css and js assets in order for the charts to work -->
        <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
        <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
        <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
        <script type="text/javascript">
          var app = angular.module('myApp', []);
          app.controller('myController', function($scope){

          });
        </script>

    </head>
    <body ng-controller="myController" onLoad="cc= setTimeout('alert1();',180000)">
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="inicio.php">Agroveterinaria -- <kbd>"GREYLI"</kbd></a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <!-- SubMenu -->
                    <ul class="nav navbar-nav side-nav">
                        <li class="active"><a>Compra</a></li>
                    </ul>
                    <!-- Menus -->
                    <ul class="nav navbar-nav navbar-left navbar-user">
                        <?php foreach ($ListOpc as $opc) { ?>
                        <li id="menu<?php echo $opc['opciones_id']?>" style="cursor: pointer;">
                          <a onclick="javascript:ir<?php echo $opc['opciones_id'] ?>()">
                            <?php echo $opc['nombre_opcion'] ?>
                          </a>
                        </li>
                        <?php } foreach ($ListOpc as $opc) { ?>
                          <form role="form" method="post" action="<?php echo $opc['url'] ?>" name="<?php echo $opc['nombre_opcion'] ?>">
                              <input type="hidden" name="id_menu" value="<?php echo $opc['opciones_id'] ?>">
                          </form>
                          <script>
                              function ir<?php echo $opc['opciones_id'] ?>() {
                                  document.<?php echo $opc['nombre_opcion'] ?>.submit();
                              }
                          </script>
                        <?php } ?>
                    </ul>
                    <!-- Usuario -->
                    <ul class="nav navbar-nav navbar-left navbar-user">
                        <li id=""><a ></a></li>
                        <form role="form" method="post" action="paginas" name="<%=men.getNombreMenu()%>">
                            <input type="hidden" name="opcion" value="<%=men.getNombreMenu()%>">
                            <input type="hidden" name="url" value="<%=men.getUrl()%>">
                            <input type="hidden" name="idmenu" value="<%=men.getIdmenu()%>">
                        </form>
                        <script>
                            function ir<%=men.getIdmenu()%>() {
                                document.<%=men.getNombreMenu()%>.submit();
                            }
                        </script>
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['usuario'] ?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li style="cursor: pointer;">
                                  <a data-toggle="modal" data-target="#perfil">
                                    <i class="fa fa-user"></i>
                                    Perfil
                                  </a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="index.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="page-wrapper" style="margin-top: -20px;">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-search"></i> Agregar los Productos</h3>
                            </div>
                            <div class="panel-body">
                              <div class="form-group">
                                  <input class="form-control" placeholder="Ingrese el nombre del producto" name="buscar" id="buscar" autofocus onkeyup="busqueda();">
                              </div>
                              <form role="form">
                                <div class="row">
                                  <div class="form-group col-lg-12">
                                      <label>Producto</label>
                                      <input id="nomb_prod" class="form-control" placeholder="Producto" disabled>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-4">
                                      <label>Precio</label>
                                      <input id="prec_prod" class="form-control" placeholder="Precio">
                                  </div>
                                  <div class="form-group col-lg-4">
                                      <label>Cant.</label>
                                      <input ng-model="cant" id="cant_prod" class="form-control" placeholder="Cant.">
                                  </div>
                                  <div class="form-group col-lg-4">
                                      <label>Desc.</label>
                                      <input ng-model="desc" class="form-control" placeholder="Desc.">
                                  </div>
                                </div>
                                <hr>
                                <h4 align="center">
                                    <button ng-disabled="!cant || !desc" class="btn btn-success" type="submit">
                                        Agregar al Carrito &nbsp;&nbsp; <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </h4>
                              </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Carrito de Compra</h3>
                            </div>
                            <div class="panel-body">
                              <table class="table table-stripped table-hover table-resposive">
                                <thead class="bg-primary">
                                  <tr>
                                    <th>Item</th>
                                    <th>Producto</th>
                                    <th>Cant.</th>
                                    <th>Desc.</th>
                                    <th>Prec. Unit</th>
                                    <th>SubTotal</th>
                                    <th colspan="2">Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Veneno</td>
                                    <td>2</td>
                                    <td>.3</td>
                                    <td>25.00</td>
                                    <td>50.00</td>
                                    <td align="center">
                                      <a style="cursor: pointer;">
                                          <i class="fa fa-pencil"></i>
                                      </a>
                                    </td>
                                    <td>
                                      <a style="cursor: pointer;">
                                          <i class="fa fa-trash"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>Veneno</td>
                                    <td>2</td>
                                    <td>.3</td>
                                    <td>25.00</td>
                                    <td>50.00</td>
                                    <td align="center">
                                      <a style="cursor: pointer;">
                                          <i class="fa fa-pencil"></i>
                                      </a>
                                    </td>
                                    <td>
                                      <a style="cursor: pointer;">
                                          <i class="fa fa-trash"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                  <tr class="bg-primary">
                                    <td colspan="6" align="left">Total: </td>
                                    <td colspan="2" align="right">50.00</td>
                                  </tr>
                                </tfoot>
                              </table>
                              <h4 align="center">
                                  <button type="button" class="btn btn-default" onclick="cancelarMenu()"><!--  data-dismiss="modal" -->
                                      Cancelar &nbsp;&nbsp; <i class="glyphicon glyphicon-remove-circle"></i>
                                  </button>
                                  <button class="btn btn-primary" type="submit">
                                      Continuar la Venta &nbsp;&nbsp; <i class="glyphicon glyphicon-ok-circle"></i>
                                  </button>
                                  <button class="btn btn-success" type="submit">
                                      Agregar otro Producto &nbsp;&nbsp; <i class="glyphicon glyphicon-ok-circle"></i>
                                  </button>
                              </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Nuevo Producto</h3>
                            </div>
                            <div class="panel-body">
                              <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label for="nombres">Nombres</label>
                                            <input required type="text" pattern="^[A-Za-záéíóúÑñ ][A-Za-záéíóúÑñ ]*"  maxlength="39" class="form-control" id="nombres" placeholder="Nombres" name="nombres" data-error="Solo se permite letras no numeros">
                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label for="apellidos">Apellidos</label>
                                            <input required type="text" pattern="^[A-Za-záéíóúñÑ ][A-Za-záéíóúñÑ ]*" maxlength="39" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos" data-error="Solo se permite letras no numeros">
                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="tipo">Tipo de Documento</label>
                                            <select required class="form-control" id="tipo" name="tipoDocumentoId">
                                                <option hidden>Seleccionar Tipo de Documento</option>
                                                <option  value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label for="numeroDoc">N° Documento</label>
                                            <input required type="text" pattern="^[A-Za-z0-9]*" class="form-control"  data-minlength="8" maxlength="16" id="numeroDoc" placeholder="numero de Documento" name="numeroDoc">
                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label for="telefono">Teléfono</label>
                                            <input  type="text" pattern="^[#*0-9]*" maxlength="15" class="form-control" id="telefono" placeholder="Teléfono" name="telefono">
                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="genero">Género</label>
                                            <select required class="form-control" id="genero" name="genero">
                                                <option hidden>Seleccionar su Género</option>
                                                <option value="F">Mujer</option>
                                                <option value="M">Varón</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row hidden">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="imagen">Seleccione su Imagen</label>
                                            <input type="file" disabled id="imagen" name="img">
                                            <p class="help-block">Vayase a la ...</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h4 align="center">
                                    <button type="button" class="btn btn-danger">
                                        Cancelar &nbsp;&nbsp; <i class="glyphicon glyphicon-remove-circle"></i>
                                    </button>
                                    <button class="btn btn-primary" type="submit">
                                        Agregar &nbsp;&nbsp; <i class="glyphicon glyphicon-ok-circle"></i>
                                    </button>
                                </h4>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Datos del Proveedor</h3>
                            </div>
                            <div class="panel-body">
                              <form role="form">
                                <div class="row">
                                  <div class="form-group col-lg-4">
                                      <!-- <label>DNI</label> -->
                                      <input class="form-control" placeholder="Ingrese el N° DNI">
                                  </div>
                                  <div class="form-group col-lg-8">
                                      <!-- <label>Nombres y Apellidos</label> -->
                                      <input class="form-control" placeholder="Ingrese Nombres y Apellidos">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-4">
                                      <!-- <label>Teléfono</label> -->
                                      <input class="form-control" placeholder="Ingrese N° Télefono">
                                  </div>
                                  <div class="form-group col-lg-8">
                                      <!-- <label>Dirección</label> -->
                                      <input class="form-control" placeholder="Ingrese la Dirección">
                                  </div>
                                </div>
                                <div class="row">
                                    <article class="col-lg-4">
                                        <select id="" class="form-control" name="">
                                            <option hidden>Tipo de Comprobante</option>
                                            <option value="2">Pendiente</option>
                                            <option value="3">Inactivo</option>
                                        </select>
                                    </article>
                                    <article class="col-lg-4">
                                        <select id="" class="form-control" name="">
                                            <option hidden>Tipo de Venta</option>
                                            <option value="2">Pendiente</option>
                                            <option value="3">Inactivo</option>
                                        </select>
                                    </article>
                                    <article class="col-lg-4">
                                        <select id="" class="form-control" name="">
                                            <option hidden>Tipo de Pago</option>
                                            <option value="2">Pendiente</option>
                                            <option value="3">Inactivo</option>
                                        </select>
                                    </article>
                                </div>
                                <br>
                                <h4 align="center">
                                    <button type="button" class="btn btn-danger">
                                        Cancelar &nbsp;&nbsp; <i class="glyphicon glyphicon-remove-circle"></i>
                                    </button>
                                    <button class="btn btn-primary" type="submit">
                                        Terminar la Venta &nbsp;&nbsp; <i class="glyphicon glyphicon-ok-circle"></i>
                                    </button>
                                </h4>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="perfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header fondo-imagen" style="background-image: url(res/img/fondo.jpg);">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">Perfil del Usuario</h3>
                  </div>
                  <div class="modal-body text-center">
                    <img class="panel-profile-img" src="res/img/perfil.svg">
                    <h5 class="panel-title" style="margin: 5px;"><kbd>Johann James Valles Paz</kbd></h5>
                    <p class="m-b">Design at GitHub. Creator of Bootstrap. Previously at Twitter. Huge nerd.</p>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /#Modal -->
        </div>
    </body>
</html>
