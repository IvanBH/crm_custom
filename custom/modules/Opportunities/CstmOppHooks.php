<?php

class CstmOppHooks{
    
    public function concatenartNombre($bean, $event, $arguments){   
        $conn = $GLOBALS['db']->getConnection();
        $anio = date("y");
       
        if(!$arguments['isUpdate']){
            $id = $bean->id;
           
            $anioC = date('Y');

            $selectQ ="SELECT max(num_oportunidad_c) as max FROM opportunities_cstm oc
            inner join opportunities o on oc.id_c = o.id 
            where o.date_entered LIKE '{$anioC}-%' and o.deleted = 0";
            $oppStmt = $conn->executeQuery($selectQ);
            $opp = $oppStmt->fetchAll();
            
            if(!is_null($opp[0]['max'])){
                $number = $opp[0]['max'];
            }else{
               $number = $bean->num_oportunidad_c;
            }
           
            $num = str_pad($number,4,'0', STR_PAD_LEFT);
           
            $nombre = $anio.'-'.$num;
            $number++;
           
            $query = "UPDATE opportunities q inner join opportunities_cstm qc on q.id=qc.id_c 
            set q.name = '{$nombre}',qc.num_oportunidad_c = {$number}
            WHERE q.id= '$id';";      
               
            $conn->executeQuery($query);  
       }        
    }
}


?>