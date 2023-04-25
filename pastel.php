<?php

class pastel{
    private $nombre;
    private $descripcion;
    private $preparado;
    private $fecha_cracion;
    private $fecha_vencimiento;

 public function __construct($nom,$des,$pre,$fc,$fv){
    $this->nombre=$nom;
    $this->descripcion=$des;
     $this->preparado=$pre;
     $this->fecha_cracion=$fc;
    $this->fecha_vencimiento=$fv;
 }  
 
 public function guardarPastel(){
    return "INSERT INTO pastel (NOMBRE_P, DESCR_P, PREPARADO_POR, FECHA_CREA_P, FECHA_VENCI_P) VALUES ('$this->nombre', '$this->descripcion', '$this->preparado', '$this->fecha_cracion', '$this->fecha_vencimiento')";
 }

 public function editarPastel($id){
    return "UPDATE pastel SET NOMBRE_P='$this->nombre',DESCR_P='$this->descripcion',PREPARADO_POR='$this->preparado',FECHA_CREA_P='$this->fecha_cracion',FECHA_VENCI_P='$this->fecha_vencimiento' WHERE ID_PASTEL=$id";
 }

 public function eliminarPastel($id){
    return "DELETE FROM pastel WHERE ID_PASTEL=$id";
 }

 public function buscar($id){
    return "select * from  pastel WHERE ID_PASTEL=$id";
 }

 public function extraer(){
    return "SELECT * FROM pastel";
 }



}


?>