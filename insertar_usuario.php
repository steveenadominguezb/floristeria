<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
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
    </head>
    <body class="pagina_inicio">
        <div class="div_titulo">
            <p>OlmaFlowers</p>
        </div>
        <?php
            if($_GET["contraseña"]==$_GET["confirmar_contraseña"]){
                require("usuario.php");
                $usuario = new Usuario();
                $usuario->Usuario($_GET["cedula"],$_GET["nombre"],$_GET["apellido"],$_GET["usuario"],$_GET["contraseña"],$_GET["fechanacim"],$_GET["celular"]);
                $usuario->insertarUsuario();
            }else{
                echo "las contraseñas no son iguales";
            }
        ?>
        <button type="button"><a href="/floristeria/">volver</a></button>
    </body>
</html>