<?php
    class Usuario{
        private $code;
        private $nombre="";
        private $apellido;
        private $usuario;
        private $contraseña;
        private $fechanacim;
        private $celular;

        function Usuario($code,$nombre,$apellido,$usuario,$contraseña,$fechanacim,$celular){
            $this->code = $code;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->usuario = $usuario;
            $this->contraseña = $contraseña;
            $this->fechanacim = $fechanacim;
            $this->celular = $celular;
        }
        function set_nombre($nombre){
            $this->nombre = $nombre;
        }
        function get_nombre(){
            return $this->nombre;
        }

        function insertarUsuario(){
            require("conexionDB.php");

           $consulta = "INSERT INTO usuarios (CODE,NOMBRE,APELLIDO,USUARIO,CONTRASEÑA,FECHANACIM,CELULAR) VALUES
            ('$this->code','$this->nombre','$this->apellido','$this->usuario','$this->contraseña','$this->fechanacim','$this->celular');";
            $query= mysqli_query($conexion,$consulta);
            if($query){
                echo "<h1 style='text-align:center;'>Usuario registrado</h1>";
            }else{
                echo "<h1 style='text-align:center;'>Eror al agregar usuario nuevo</h1>";
            }
        }
    }
?>
