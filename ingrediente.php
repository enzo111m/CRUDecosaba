<?php

class ingrediente{
    private $nombre;
    private $descripcion;
    private $fecha_cracion;
    private $fecha_vencimiento;


    public function __construct($nom,$des,$fc,$fv){
        $this->nombre=$nom;
        $this->descripcion=$des;
         $this->fecha_cracion=$fc;
        $this->fecha_vencimiento=$fv;
     }  


     public function guardarIngrediente(){
        return "INSERT INTO ingrediente (NOMBRE_I, DESCR_I, FECHA_CREA_I, FECHA_VENCI_I) VALUES ('$this->nombre', '$this->descripcion', '$this->fecha_cracion', '$this->fecha_vencimiento')";
     }     

     public function editarIngrediente($id){
        return "UPDATE ingrediente SET NOMBRE_I='$this->nombre',DESCR_I='$this->descripcion',FECHA_CREA_I='$this->fecha_cracion',FECHA_VENCI_I='$this->fecha_vencimiento' WHERE ID_INGREDIENTE=$id";
     }


     public function eliminarIngrediente($id){
        return "DELETE FROM ingrediente WHERE ID_INGREDIENTE=$id";
     }


     public function extraer(){
        return "SELECT * FROM ingrediente";
     }

    }

    ?>