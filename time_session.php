<?php
  if ($_SESSION["autenticado"] == "SI") 
  {
//sino, calculamos el tiempo transcurrido  
         $fechaGuardada = $_SESSION["ultimoAcceso"];  
         $ahora = date("Y-n-j H:i:s"); 
         $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));   

        //comparamos el tiempo transcurrido
         
          if($tiempo_transcurrido >= 2)
          {  
           //si pasaron 10 minutos o más 
              
            session_destroy(); // destruyo la sesión  
            echo '<script language=javascript>
    alert("su sesion a sido caducada por seguridad, por favor ingrese nuevamente")
    self.location="index.php"</script>';
            //header("Location: index.php"); //envío al usuario a la pag. de autenticación  
        //sino, actualizo la fecha de la sesión  
          }else{  
                $_SESSION["ultimoAcceso"] = $ahora;  
               }
  }