<?php
require_once('../model/conexion.php');
require_once('../model/pastel_ingrediente.php');

function RegistrarPastel_Ingrediente($p_id,$i_id){
    $con=new conexion();
    $con->conectar();
    $pastel_ingrediente=new pastel_ingrediente($p_id,$i_id);
    $con->enviar($pastel_ingrediente->guardarPastel_Ingrediente());
    $con->desconectar();
}


function editarPastel_Ingrediente($p_id,$i_id,$id){
    $con=new conexion();
    $con->conectar();
    $pastel_ingrediente=new pastel_ingrediente($p_id,$i_id);
    $con->enviar($pastel_ingrediente->editarPastel_Ingrediente($id));
    $con->desconectar();
}


function eliminarPastel_Ingrediente($id){
    $con=new conexion();
    $con->conectar();
    $pastel_ingrediente=new pastel_ingrediente('','');
    $con->enviar($pastel_ingrediente->eliminarPastel_Ingrediente($id));
    $con->desconectar();
}


function ExtraerPastel_Ingrediente(){
    $con=new conexion();
    $con->conectar();
    $pastel_ingrediente=new pastel_ingrediente('','');
   $tabla=$con->obtenerTabla($pastel_ingrediente->extraer());
    $con->desconectar();
    return $tabla;
}

?>