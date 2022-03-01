<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inicio de sesión</title>
        <style>
            A{
                text-decoration: none;
                color: black;
            }
            .login{
                background-color:aquamarine;
                
            }
            .divh1{
                margin: auto;
                text-align: center;
                font-family: cursive;
                font-size: x-large;
                margin-top: 100px;
                margin-bottom: 100px;
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
            .boton{
                margin-top: 10px;
                border-radius: 25px;
                padding: 5px;
                width: 100px;
                font-family: cursive;
            }
        </style>
    </head>
    <body class="login">
        <div class="divh1">
            <h1>Inicio de sesión</h1>
        </div>
        <div >
            <div class="divform">
                <form action="/floristeria/postlogin.php" method="post">
                    <div class="divart">
                            <label class="label">Nombre Usuario: </label>
                            <input type="text" name="nombre_user" id="nombre_user" placeholder="nombre de usuario" >
                    </div>
                    <div class="divart">
                        <label class="label">Contraseña: </label>
                        <input type="password" name="contra_user" id="contra_user" placeholder="**************">
                    </div>
                    <div class="divart">
                        <button class="boton" type="submit">Entrar</button>
                        <button class="boton" type="button"><a href="/floristeria/">Volver</a></button>
                    </div>
                </form>
            </div>
        </div>
        
    </body>
</html>