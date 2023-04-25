<?php

class pastel_ingrediente{
    private $pastel_id;
    private $ingrediente_id;
    

 public function __construct($p_id,$i_id){
    $this->pastel_id=$p_id;
    $this->ingrediente_id=$i_id;
   
 } 


 public function guardarPasteL_Ingrediente(){
    return "INSERT INTO pastel_ingrediente (PASTEL_ID, INGREDIENTE_ID) VALUES ('$this->pastel_id', '$this->ingrediente_id')";
 }


 public function editarPastel_Ingrediente($id){
    return "UPDATE pastel_ingrediente SET PASTEL_ID='$this->pastel_id',INGREDIENTE_ID='$this->ingrediente_id' WHERE ID_PASTEL_INGREDIENTE=$id";
 }


 public function eliminarPastel_Ingrediente($id){
    return "DELETE FROM pastel_ingrediente WHERE ID_PASTEL_INGREDIENTE=$id";
 }


 public function buscar($id){
    return "select * from  pastel_ingrediente WHERE ID_PASTEL_INGREDIENTE=$id";
 }


 public function extraer(){
    return "SELECT * FROM pastel_ingrediente";
 }

}

 ?>