<?php
require_once('../controller/c_pastel_ingrediente.php');

header("HTTP/1.1 200");
header('Content-Type: application/json; charset=utf-8');

if($_SERVER['REQUEST_METHOD']=='POST'){
echo 'id Pastel: ' . $_POST['p_id'] . "<br>";
echo 'id ingrediente:  ' . $_POST['i_id'] . "<br>";


RegistrarPastel_Ingrediente($_POST['p_id'],$_POST['i_id']);

}


if($_SERVER['REQUEST_METHOD']=='PUT'){
    parse_str(file_get_contents("php://input"),$put_vars);
    var_dump($put_vars);
    echo 'id Pastel: ' . $put_vars['p_id'] . "<br>";
    echo 'id ingrediente:  ' . $put_vars['i_id'] . "<br>";
    
    echo 'id: '. $put_vars['id'] . "<br>";
    
   editarPastel_Ingrediente($put_vars['p_id'],$put_vars['i_id'],$put_vars['id']);
    
    }


    if($_SERVER['REQUEST_METHOD']=='DELETE'){
        parse_str(file_get_contents("php://input"),$put_vars);
        var_dump($put_vars);
       
       echo 'id: '. $put_vars['id'] . "<br>";
        
       eliminarPastel_Ingrediente($put_vars['id']);

    }


    if($_SERVER['REQUEST_METHOD']=='GET'){
        parse_str(file_get_contents("php://input"),$put_vars);
        var_dump($put_vars);

       $tabla= ExtraerPastel_Ingrediente();
      while($fila=mysqli_fetch_array($tabla)){
        echo $fila['ID_PASTEL_INGREDIENTE'] . "<br>";
        echo $fila['PASTEL_ID'] . "<br>";
        echo $fila['INGREDIENTE_ID'] . "<br>";
        
      }

        }