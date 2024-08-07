<?php

class CstmQuotesHooks{

    public function cotizacionesRechazadas($bean, $event, $arguments){   
        $conn = $GLOBALS['db']->getConnection();

        if($bean->quote_stage == "Confirmed"){
            
            $id = $bean->id;
            $idC = $bean->billing_account_id;
            $idO = $bean->opportunity_id;

            $queryU = "SELECT DISTINCT  q.id,q.name  from accounts a 
            inner join quotes_accounts qa on a.id = qa.account_id 
            inner join quotes q on qa.quote_id = q.id 
            inner join quotes_opportunities qo on qo.quote_id = q.id 
            inner join opportunities o on o.id =qo.opportunity_id 
            where a.id ='{$idC}' AND o.id='{$idO}'";

            $cotisStmt = $conn->executeQuery($queryU);
            $cotis = $cotisStmt->fetchAll();

            foreach($cotis as $cot){
                $idCot = $cot['id'];
                if($id != $idCot){
                    
                    $updateU = "UPDATE quotes q set q.quote_stage = 'Cancelled'
                    WHERE q.id = '{$idCot}'";
                    $conn->executeQuery($updateU);

                    $updateO = "UPDATE opportunities o set o.sales_stage = 'Closed Won'
                    WHERE o.id = '{$idO}'";
                    $conn->executeQuery($updateO);
                }
            }
        }
    }  
    
    public function concatenartNombre($bean, $event, $arguments){   
        $conn = $GLOBALS['db']->getConnection();

        if(!$arguments['isUpdate']){
            $id = $bean->id;
            $idO = $bean->opportunity_id;

            $select = "SELECT oc.letra_control_c,o.name FROM opportunities_cstm oc
            inner join opportunities o on oc.id_c = o.id
            where oc.id_c='{$idO}'";
            
            $oppStmt = $conn->executeQuery($select);
            $opp = $oppStmt->fetchAll();
           
            $name = $opp[0]['name'];
            $codigo = $opp[0]['letra_control_c'];
            
            $letra = chr($codigo);
            $nombre = $name.'-'.$letra;
            
            
            $query = "UPDATE quotes q set q.name = '$nombre'
            WHERE q.id= '$id';";            
            $conn->executeQuery($query); 
            
            $codigo++;

            $queryO = "UPDATE opportunities_cstm q set q.letra_control_c ='$codigo'
            WHERE q.id_c= '$idO';";            
            $conn->executeQuery($queryO); 
       }        
    }
}


?>