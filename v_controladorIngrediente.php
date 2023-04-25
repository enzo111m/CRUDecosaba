<?php
require_once('../controller/c_ingrediente.php');

header("HTTP/1.1 200");
header('Content-Type: application/json; charset=utf-8');

if($_SERVER['REQUEST_METHOD']=='POST'){
    echo 'nombre Ingrediente: ' . $_POST['nombre'] . "<br>";
    echo 'descripcion:  ' . $_POST['descrip'] . "<br>";
    echo 'fecha creacion: ' . $_POST['fcreacion'] . "<br>";
    echo 'fecha vencimiento: ' . $_POST['fvencimiento'] . "<br>";
    
    RegistrarIngrediente($_POST['nombre'],$_POST['descrip'],$_POST['fcreacion'],$_POST['fvencimiento']);
    
}

    if($_SERVER['REQUEST_METHOD']=='PUT'){
        parse_str(file_get_contents("php://input"),$put_vars);
        var_dump($put_vars);
        echo 'nombre Ingrediente: ' . $put_vars['nombre'] . "<br>";
        echo 'descripcion:  ' . $put_vars['descrip'] . "<br>";
        echo 'fecha creacion: ' . $put_vars['fcreacion'] . "<br>";
        echo 'fecha vencimiento: ' . $put_vars['fvencimiento'] . "<br>";
        echo 'id: '. $put_vars['id'] . "<br>";
        
       editarIngrediente($put_vars['nombre'],$put_vars['descrip'],$put_vars['fcreacion'],$put_vars['fvencimiento'],$put_vars['id']);
        
        }



        if($_SERVER['REQUEST_METHOD']=='DELETE'){
            parse_str(file_get_contents("php://input"),$put_vars);
            var_dump($put_vars);
           echo 'id: '. $put_vars['id'] . "<br>";
            
           eliminarIngrediente($put_vars['id']);
            
        }



        if($_SERVER['REQUEST_METHOD']=='GET'){
            parse_str(file_get_contents("php://input"),$put_vars);
            var_dump($put_vars);
    
           $tabla= ExtraerIngrediente();
          while($fila=mysqli_fetch_array($tabla)){
            echo $fila['ID_INGREDIENTE'] . "<br>";
            echo $fila['NOMBRE_I'] . "<br>";
            echo $fila['DESCR_I'] . "<br>";
            echo $fila['FECHA_CREA_I'] . "<br>";
            echo $fila['FECHA_VENCI_I'] . "<br>";
          }

            }




    

?>