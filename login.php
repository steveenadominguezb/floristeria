<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inicio de sesión</title>
        <style>
            .login{
                background-color:aquamarine;
            }
            .divh1{
                margin: auto;
                text-align: center;
                font-family: cursive;
                font-size: x-large;
            }
            .divform{
                margin: auto;
                margin-top: 30px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: x-large;
                width: 50%;
                border: solid;
            }
            .divart{
                margin-top: 10px;
                margin-left: 30px;
                margin-bottom: 10px;
                text-align: start;
            }
            .label{
                width: 30%;
                display: inline-block;
            }
        </style>
    </head>
    <body class="login">
        <div class="divh1">
            <h1>Inicio de sesión</h1>
        </div>
        <div class="divform">
            <form action="/floristeria/index.php" method="get">
                <div class="divart">
                        <label class="label">Nombre Usuario: </label>
                        <input type="text" name="nombre_user" id="nombre_user" placeholder="nombre de usuario" >
                </div>
                <div class="divart">
                    <label class="label">Contraseña: </label>
                    <input type="password" name="contra_user" id="contra_user" placeholder="**************">
                </div>
                <div class="divart">
                    <button type="submit">Enviar<a href="/floristeria/index.php"></a></button>
                </div>
            </form>
        </div>
    </body>
</html>