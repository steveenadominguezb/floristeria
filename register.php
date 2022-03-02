<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <style>
            .fondo{
            background-color:aquamarine;
            }
            .titulo{
                text-align: center;
                margin-top: 100px;
                font-family: cursive;
                text-shadow: 5px 5px 5px white;
                font-size: x-large;
            }
            .formulario{
                background-color: #F7F7F7;
                border: solid;
                border-width: 2px;
                width: 75%;
                margin: auto;
                margin-top: 100px;
            }
            .divdatos{
                margin-top: 30px;
                margin-bottom: 10px;
                display: inline-block;
                width: 49%;
            }
            .divBoton{
                text-align: center;
                margin-bottom: 20px;
                margin-top: 20px;
            }
            .divlabel{
                margin: auto;
                margin-top: 30px;
                background-color: #D5D5D5;
                width: fit-content;
                border-color: black;
                border-radius: 20px;
                border-width: 1px;
                padding: 10px;
            }
            .labels{
                margin-right: 20px;
            }
            .boton{
                border-radius: 25px;
                padding: 10px;
                width: 100px;
                font-family: cursive;
            }
            A{
                text-decoration: none;
                color: black;
            }

        </style>
        <?php
            
        ?>
    </head>
    <body class="fondo">
        <div class="titulo">
            <h1>Formulario de registro</h1>
        </div>
        <form class="formulario" method="get" action="insertar_usuario.php">
            <div class="divdatos">
                <div class="divlabel">
                <label class="labels">Cedula: </label><input type="text" name="cedula" required placeholder="1234567890">
                </div>
                <div class="divlabel">
                <label class="labels">Nombre: </label><input type="text" name="nombre" required placeholder="Nombre">
                </div>
                <div class="divlabel">
                <label class="labels">Apellido: </label><input type="text" name="apellido" required placeholder="Apellido">
                </div>            
            </div>
            <div class="divdatos">
                <div class="divlabel">
                <label class="labels">Usuario: </label><input type="text" name="usuario" required placeholder="Usuario">
                </div>
                <div class="divlabel">
                <label class="labels">Contraseña: </label><input type="password" name="contraseña" required placeholder="*******">
                </div>
                <div class="divlabel">
                <label class="labels">Edad: </label><input type="text" name="edad" maxlength="2" required placeholder="xx">
                </div>
            </div>
            <div class="divBoton">
                <button class="boton" type="submit">Enviar</button>
                <button class="boton" type="button"><a href="/floristeria/">Volver</a></button>
            </div>
        </form>
    </body>
</html>