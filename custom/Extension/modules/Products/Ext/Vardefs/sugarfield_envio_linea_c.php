<?php
 // created: 2024-07-26 00:08:35
$dictionary['Product']['fields']['envio_linea_c']['duplicate_merge_dom_value']=0;
$dictionary['Product']['fields']['envio_linea_c']['labelValue']='PU+ENV-DESC';
$dictionary['Product']['fields']['envio_linea_c']['calculated']='1';
$dictionary['Product']['fields']['envio_linea_c']['formula']='add(subtract($discount_price,multiply($discount_price,$discount_amount_usdollar,0.01)),multiply(related($quotes,"porc_envio_c"),0.01,$discount_price))';
$dictionary['Product']['fields']['envio_linea_c']['enforced']='1';
$dictionary['Product']['fields']['envio_linea_c']['dependency']='';
$dictionary['Product']['fields']['envio_linea_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Product']['fields']['envio_linea_c']['required_formula']='';
$dictionary['Product']['fields']['envio_linea_c']['readonly_formula']='';

 ?>