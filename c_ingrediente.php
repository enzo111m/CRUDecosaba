<?php
require_once('../model/conexion.php');
require_once('../model/ingrediente.php');


function RegistrarIngrediente($nom,$des,$fc,$fv){
    $con=new conexion();
    $con->conectar();
    $ingrediente=new ingrediente($nom,$des,$fc,$fv);
    $con->enviar($ingrediente->guardarIngrediente());
    $con->desconectar();
}

function editarIngrediente($nom,$des,$fc,$fv,$id){
    $con=new conexion();
    $con->conectar();
    $ingrediente=new ingrediente($nom,$des,$fc,$fv);
    $con->enviar($ingrediente->editarIngrediente($id));
    $con->desconectar();
}

function eliminarIngrediente($id){
    $con=new conexion();
    $con->conectar();
    $ingrediente=new ingrediente('','','','');
    $con->enviar($ingrediente->eliminarIngrediente($id));
    $con->desconectar();

}

function ExtraerIngrediente(){
    $con=new conexion();
    $con->conectar();
    $ingrediente=new ingrediente('','','','');
   $tabla=$con->obtenerTabla($ingrediente->extraer());
    $con->desconectar();
    return $tabla;
}

?>