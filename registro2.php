<!DOCTYPE html>
<html >
  <head>


  
    
    
    
        <link rel="stylesheet" href="registro.css">

    
     <meta charset="utf-8">

    <title>Registro</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    
  </head>


    <html lang="en-US">
  

  <body>

    <div class="contenedor">

      <div id="registro">

        <h2><span class="fontawesome-lock"></span>Registro</h2>

        <form action="registro.php" method="POST">

          <fieldset>

            <p><label for="text">Usuario</label></p>
            <p><input type="text" id="text" name="usuario" placeholder="Usuario"></p>

            <p><label for="password">Repetir Contraseña</label></p>
            <p><input type="email" id="mail" name="mail" placeholder="E-Mail"></p>

            <p><label for="password">Contraseña</label></p>
            <p><input type="password" id="password" name="contra" placeholder="Contraseña"></p>

            <p><label for="password">Repetir Contraseña</label></p>
            <p><input type="password" id="password" name="recontra" placeholder="Contraseña"></p>

            <p><input type="submit" name="submit" value="Registrar"></p>

          </fieldset>

        </form>

      </div> <!-- end login -->

    </div>
     <?php
         if(isset($_POST['submit'])){
      require("registro.php");
    }
      

     ?>
  </body>	
</html>
    
    
    
    
    
  </body>
</html>
