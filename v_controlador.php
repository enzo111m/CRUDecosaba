<?php
require_once('../controller/c_pastel.php');

header("HTTP/1.1 200");
header('Content-Type: application/json; charset=utf-8');

if($_SERVER['REQUEST_METHOD']=='POST'){
echo 'nombre Pastel: ' . $_POST['nombre'] . "<br>";
echo 'descripcion:  ' . $_POST['descrip'] . "<br>";
echo 'creado por: ' . $_POST['creadop'] . "<br>";
echo 'fecha creacion: ' . $_POST['fcreacion'] . "<br>";
echo 'fecha vencimiento: ' . $_POST['fvencimiento'] . "<br>";

RegistrarPastel($_POST['nombre'],$_POST['descrip'],$_POST['creadop'],$_POST['fcreacion'],$_POST['fvencimiento']);

}


if($_SERVER['REQUEST_METHOD']=='PUT'){
    parse_str(file_get_contents("php://input"),$put_vars);
    var_dump($put_vars);
    echo 'nombre Pastel: ' . $put_vars['nombre'] . "<br>";
    echo 'descripcion:  ' . $put_vars['descrip'] . "<br>";
    echo 'creado por: ' . $put_vars['creadop'] . "<br>";
    echo 'fecha creacion: ' . $put_vars['fcreacion'] . "<br>";
    echo 'fecha vencimiento: ' . $put_vars['fvencimiento'] . "<br>";
    echo 'id: '. $put_vars['id'] . "<br>";
    
   editarPastel($put_vars['nombre'],$put_vars['descrip'],$put_vars['creadop'],$put_vars['fcreacion'],$put_vars['fvencimiento'],$put_vars['id']);
    
    }

    if($_SERVER['REQUEST_METHOD']=='DELETE'){
        parse_str(file_get_contents("php://input"),$put_vars);
        var_dump($put_vars);
       // echo 'nombre Pastel: ' . $put_vars['nombre'] . "<br>";
       // echo 'descripcion:  ' . $put_vars['descrip'] . "<br>";
       // echo 'creado por: ' . $put_vars['creadop'] . "<br>";
       // echo 'fecha creacion: ' . $put_vars['fcreacion'] . "<br>";
       // echo 'fecha vencimiento: ' . $put_vars['fvencimiento'] . "<br>";
       echo 'id: '. $put_vars['id'] . "<br>";
        
       eliminarPastel($put_vars['id']);
        
        }

        if($_SERVER['REQUEST_METHOD']=='GET'){
            parse_str(file_get_contents("php://input"),$put_vars);
            var_dump($put_vars);
    
           $tabla= ExtraerPastel();
          while($fila=mysqli_fetch_array($tabla)){
            echo $fila['ID_PASTEL'] . "<br>";
            echo $fila['NOMBRE_P'] . "<br>";
            echo $fila['DESCR_P'] . "<br>";
            echo $fila['PREPARADO_POR'] . "<br>";
            echo $fila['FECHA_CREA_P'] . "<br>";
            echo $fila['FECHA_VENCI_P'] . "<br>";
          }

            }
  

?>