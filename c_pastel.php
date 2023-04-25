<?php
require_once('../model/conexion.php');
require_once('../model/pastel.php');

function RegistrarPastel($nom,$des,$pre,$fc,$fv){
    $con=new conexion();
    $con->conectar();
    $pastel=new pastel($nom,$des,$pre,$fc,$fv);
    $con->enviar($pastel->guardarPastel());
    $con->desconectar();
}

function editarPastel($nom,$des,$pre,$fc,$fv,$id){
    $con=new conexion();
    $con->conectar();
    $pastel=new pastel($nom,$des,$pre,$fc,$fv);
    $con->enviar($pastel->editarPastel($id));
    $con->desconectar();
}

function eliminarPastel($id){
    $con=new conexion();
    $con->conectar();
    $pastel=new pastel('','','','','');
    $con->enviar($pastel->eliminarPastel($id));
    $con->desconectar();
}

function ExtraerPastel(){
    $con=new conexion();
    $con->conectar();
    $pastel=new pastel('','','','','');
   $tabla=$con->obtenerTabla($pastel->extraer());
    $con->desconectar();
    return $tabla;
}



?>