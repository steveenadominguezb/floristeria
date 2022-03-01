<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OlmaFlowers</title>
        <style>
            .pagina_inicio{
            background-color:aquamarine;
            }
            .div_titulo{
                margin: auto;
                text-align: center;
                font-family: cursive;
                font-size:100px;
                text-shadow: 5px 5px 10px white;
                width: auto;
            }
            .div_usuario{
                text-align: right;
            }
            .boton_usuario{
                width: 100px;
                margin-right: 30px;
                margin-top: 20px;
                background-color: transparent;
                font-family: 'Courier New', Courier, monospace;
                font-size: large;
                border: none;
                font-weight: bold;
            }
            .resultado{
                font-family: Verdana, Geneva, Tahoma, sans-serif;

            }
            .centrado{
                text-align: center;
            }
            .divtable{
                text-align: center;
                margin: auto;
            }
            .tr{
                border: solid;
            }
        </style>
        <?php
            function darBienvenida($nombre){
                
            }
        ?>
    </head>
    <body class="pagina_inicio">
        <div class="div_usuario">
            <button class="boton_usuario"><a href="/floristeria/login.php">Login</a></button>
        </div>
        <div class="div_titulo">
            <p>OlmaFlowers</p>
        </div>
        <?php
            $username = $_GET["nombre_user"];
            require("conexionDB.php");
            $consulta = "SELECT * FROM `USUARIOS` WHERE `USUARIO` LIKE '$username';";
            
            $query = mysqli_query($conexion,$consulta);

            while($fila = mysqli_fetch_assoc($query)){
                foreach($fila as $key=>$valor){
                    if($key == "NOMBRE"){
                        echo "<h1>Bienvenido $valor</h1>";
                    }
                }
            }

        ?>
    </body>
</html>