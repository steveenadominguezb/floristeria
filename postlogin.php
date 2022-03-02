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
            function darBienvenida($nombre,$contra){

                require("conexionDB.php");
                $nombre = $_POST["nombre_user"];
                $contra = $_POST["contra_user"];
                $sql = "SELECT CEDULA,NOMBRE FROM `USUARIOS` WHERE `USUARIO` LIKE ? AND `CONTRASEÑA` LIKE ?;";
               

                $stmt = mysqli_prepare($conexion,$sql);

                $bind = mysqli_stmt_bind_param($stmt,"ss",$nombre,$contra);

                if(mysqli_stmt_execute($stmt)){
                    if(mysqli_stmt_bind_result($stmt,$cedula,$nombre)){
                        while($result=mysqli_stmt_fetch($stmt)){
                            echo "<h1>Bienvenid@ $nombre</h1>";
                        }
                    }
                }else{
                    echo "Erro al ejecutar la consulta";
                }

                mysqli_close($conexion);
            }
        ?>
    </head>
    <body class="pagina_inicio">
        <div class="div_titulo">
            <p>OlmaFlowers</p>
        </div>
        <?php
            if($_POST["nombre_user"] != null){
                
                darBienvenida($_POST["nombre_user"],$_POST["contra_user"]);
            }

        ?>
    </body>
</html>