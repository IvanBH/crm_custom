<?php


//add the job key to the list of job strings
array_push($job_strings, 'nombre_productos');


function nombre_productos(){

    $query = "SELECT pt.id,ptc.control_nombre_c,pt.description,pt.name  from product_templates pt 
    inner join product_templates_cstm ptc on pt.id = ptc.id_c 
    where (ptc.control_nombre_c = 0 OR isNUll(ptc.control_nombre_c)) and pt.deleted = 0;";

    $conn = $GLOBALS['db']->getConnection();
    $productos = $conn->executeQuery($query);
    
    foreach ($productos->fetchAll() as $producto) {

        $id = $producto['id'];
        $descripcion = $producto['description'];
        $control = false;

        if(substr($descripcion,0,strpos($descripcion,PHP_EOL))){
            $texto = substr($descripcion,0,strpos($descripcion,PHP_EOL)); // buscamos si la descripción tiene un salto de linea, para procesa y solo quedarnos con el nombre y asi concaternar el nombre completo
            $control = true;
        }else{
            $texto = substr($descripcion,0,120);
            $control = true;
        }            
        
        $nombre = $producto['name'].' - '.$texto;

        if($control){        
            $update = "update product_templates pt inner join product_templates_cstm ptc on pt.id = ptc.id_c  set pt.name ='{$nombre}', ptc.control_nombre_c = 1 where pt.id ='{$id}';";
            $conn->executeQuery($update);       
        }

    }
    return true;
}
