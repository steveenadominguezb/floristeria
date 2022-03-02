<?php
    class Usuario{
        private $cedula;
        private $nombre="";
        private $apellido;
        private $usuario;
        private $contraseña;
        private $edad;

        function Usuario($cedula,$nombre,$apellido,$usuario,$contraseña,$edad){
            $this->cedula = $cedula;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->usuario = $usuario;
            $this->contraseña = $contraseña;
            $this->edad = $edad;
        }
        function set_nombre($nombre){
            $this->nombre = $nombre;
        }
        function get_nombre(){
            return $this->nombre;
        }

        function insertarUsuario(){
            require("conexionDB.php");

           $consulta = "INSERT INTO usuarios (CEDULA,NOMBRE,APELLIDO,USUARIO,CONTRASEÑA,EDAD) VALUES
            ('$this->cedula','$this->nombre','$this->apellido','$this->usuario','$this->contraseña',$this->edad);";
            $query= mysqli_query($conexion,$consulta);
            if($query){
                echo "<h1 style='text-align:center;'>Usuario registrado</h1>";
            }else{
                echo "<h1 style='text-align:center;'>Eror al agregar usuario nuevo</h1>";
            }
        }
    }
?>
