<?php

class CstmAccountsHooks{

    public function numero_cliente($bean, $event, $arguments){   
        $conn = $GLOBALS['db']->getConnection();

       if($bean->esync_c && !$bean->control_cliente_c){

            $id = $bean->id;
            
            $selectQ ="SELECT max(num_cliente_c) as max FROM accounts_cstm oc
            inner join accounts o on oc.id_c = o.id 
            where o.deleted = 0";
            $oppStmt = $conn->executeQuery($selectQ);
            $opp = $oppStmt->fetchAll();
            
            $number = $opp[0]['max'];
           
            $num = str_pad($number,5,'0', STR_PAD_LEFT);
           
            $nombre = 'C'.$num;
            $number++;
           
            $query = "UPDATE accounts_cstm oc inner join accounts o on oc.id_c = o.id  
            set oc.ecustid_c = '{$nombre}',oc.num_cliente_c = {$number}, oc.control_cliente_c=1
            WHERE o.id= '$id';";      
               
            $conn->executeQuery($query);  
       }        
    }
}

?>