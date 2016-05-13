 * @author anael hernadez rivera
 * @version 1.0 
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
        <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round"> 
  </head>

  

  <body>

<?php

if (isset($_GET["nosession"])) echo "tu usuario y contraseña son incorrectos";

?>
    <div class="contenedor">

      <div id="login">

        <h2><span class="fontawesome-lock"></span>Entrar</h2>

         <form action="valida.php" method="post">

           <fieldset>

            <p><label for="text">Usuario</label></p>
            <p><input type="text" id="text" name="usuario" placeholder="Usuario"></p>

            <p><label for="password">Contraseña</label></p>
            <p><input type="password" id="password" name="contra" placeholder="Contraseña"></p>

            <p><input type="submit" name="entrar" value="Entrar"></p>

          </fieldset>

        </form>

      </div> <!-- end login -->

    </div>
     
  </body>	
</html>
    
    
    
    
    
  </body>
</html>
