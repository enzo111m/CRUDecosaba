<?php
class conexion{

    private $serverdor;
    private $usuario;
    private $clave;
    private $bdatos;
    private $con;

    public function __construct(){
        $this->servidor="localhost";
        $this->usuario="root";
        $this->clave="";
        $this->bdatos="pasteleria";
    }

    public function conectar(){
      $this->con=mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->clave,
            $this->bdatos
      );
    }
    //insert,delet, update
    public function enviar($sentciaSql){
        mysqli_query($this->con,$sentciaSql);
    }

    //estraer, buscar
    public function obtenerTabla($senteciaSql){
       $tabla=mysqli_query($this->con,$senteciaSql);
       return $tabla;
    }

    public function desconectar(){
        mysqli_close($this->con);
    }

}

?>