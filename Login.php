<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registro_Vehicular | Login<</title>
</head>
<body>  
     <div class="wrapper">
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2>Iniciar Sesión</h2>
             
            <?php
           include("Conexion.php");
           include("controlador.php");
            ?>

            <form method="post" action="login.php" >
                <div class="input-box">
                     <input id="Usuario"type="text" class="input" name="usuario" >
                     <label> Usuario</label>
                     <i class='bx bx-user' ></i>
                </div>
                <div class="input-box">
                     <input id="input"type="password" class="input" name="password">
                     <label > Contraseña</label>
                     <i class='bx bx-lock-alt' ></i>
                </div>
                <div class="view">
                      <div class="fas fa-eye verpassword" onclick="vista()" id="verPassword"></div>
                </div> 
                <button name="btnIngresar" type="submit"class="btn" value="Ingresar"> Ingresar </button>
                <div class="bottom">
                    <div class="left">
                         <input type="checkbox" id="check">
                         <label for="check"> Recordar </label>
                    </div>
                </div>
            </form>
            <div class="info-text login">  
                <h2>¡Bienvenido!</h2>
            
            </div>

        </div>
     </div>
</body>
</html>
