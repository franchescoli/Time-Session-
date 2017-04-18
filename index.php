<?php
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en" class="no-js" ng-app="MyApp">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Inicio de Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Agroveterinaria -- No se como se llama">
        <meta name="author" content="Juan -- Pedro -- Natalia -- Leydi -- Leidy -- Antony -- Deyvi -- Johann ">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="res/css/reset.css">
        <link rel="stylesheet" href="res/css/supersized.css">
        <link rel="stylesheet" href="res/css/style.css">

        <script type="text/javascript" src="res/angular/angular.js"></script>
        <script type="text/javascript" src="res/angular/angular.min.js"></script>
        <script type="text/javascript" src="res/js/inicio.js"></script>

    </head>

    <body ng-controller="MyController">

        <div class="page-container" ng-show="!buscar">
            <h1>Inicio de Sesión</h1>
            <form id="valid" role="form" method="post" action="controller/validacion.php">
                <input id="usuario" type="text" name="usuario" class="username" placeholder="Usuario" autofocus>
                <input type="password" name="contrasena" class="password" placeholder="Contraseña">
                <br>
                <a ng-click="buscar = !buscar" style="cursor: pointer;" align="left">¿Olvidó su Contraseña?</a>
                <button type="submmit" class="" >Ingresar</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
        <div class="page-container" ng-show="buscar">
            <div class="">
                <h1>Restablecer Contraseña &nbsp;&nbsp;&nbsp; <span ng-click="buscar = !buscar" class="cerrar">+</span></h1>
            </div>
            <form id="rest" role="form" method="post" action="">
                <input id="nomRes" type="text" name="nombres" class="username" placeholder="Ingrese su Nombre" autofocus>
                <input type="text" name="apellidos" class="password" placeholder="Ingrese sus Apellidos">
                <input required type="text" name="dni" class="dni" placeholder="Ingrese su DNI">
                <button type="submit">Restablecer</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>

        <!-- Javascript -->
        <script src="res/js/jquery-1.8.2.min.js"></script>
        <script src="res/js/supersized.3.2.7.min.js"></script>
        <script src="res/js/supersized-init.js"></script>
        <script src="res/js/scripts.js"></script>
    </body>

</html>
