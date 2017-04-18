<?php

  require_once 'modelo/perfil.php';

  session_start();

  if ($_SESSION["usuario_id"] == '' || $_SESSION["usuario_id"] == null) {
    header('Location: index.php');
  }

  $ListOpc = PerfilOpciones::ListaOpciones($_SESSION["perfil_id"].'');

  $id_menu = isset($_POST['id_menu']) ? $_POST['id_menu'] : '';

  $ListaSubOpciones = PerfilOpciones::ListaSubOpciones($id_menu, $_SESSION['perfil_id']);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reportes -- Greyli</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Agroveterinaria -- No se como se llama">
        <meta name="author" content="Juan -- Pedro -- Natalia -- Leydi -- Leidy -- Antony -- Deyvi -- Johann ">

        <link rel="stylesheet" type="text/css" href="recursos/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="recursos/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="recursos/css/local.css" />
        <link rel="stylesheet" type="text/css" href="res/css/perfil.css" />
        <link rel="stylesheet" type="text/css" href="res/css/barra.css" />

        <script type="text/javascript" src="recursos/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="recursos/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="res/js/funcionesAjaxReportes.js"></script>

        <!-- you need to include the shieldui css and js assets in order for the charts to work -->
        <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
        <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
        <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
    </head>
    <body>
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
                        <?php foreach ($ListaSubOpciones as $sub) { ?>
                          <li id="menu<?php echo $sub['opciones_id'] ?>" style="cursor: pointer;">
                            <a href="javascript:ir<?php echo $sub['opciones_id'] ?>();"><?php echo $sub['nombre_opcion'] ?></a>
                          </li>
                        <?php } ?>
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
                    <!-- usuario -->
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

            <div id="reportes" style="margin-top: -20px;">

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
        <script type="text/javascript">
          $(document).ready(function(){
            ir7();
          });
        </script>
    </body>
</html>
