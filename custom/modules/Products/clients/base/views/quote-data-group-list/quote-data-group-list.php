<?php
// created: 2024-07-29 21:21:22
$viewdefs['Products']['base']['view']['quote-data-group-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'products_quote_data_group_list',
      'label' => 'LBL_PRODUCTS_QUOTE_DATA_LIST',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'line_num',
          'label' => NULL,
          'widthClass' => 'cell-xsmall',
          'css_class' => 'line_num text-center',
          'type' => 'line-num',
          'readonly' => true,
        ),
        1 => 
        array (
          'name' => 'quantity',
          'label' => 'Cantidad',
          'labelModule' => 'Products',
        ),
        2 => 
        array (
          'name' => 'product_template_name',
          'type' => 'quote-data-relate',
          'label' => 'Producto',
          'labelModule' => 'Products',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'desc_producto_c',
          'type' => 'text',
          'label' => 'LBL_DESC_PRODUCTO',
          'labelModule' => 'Products',
        ),
        4 => 
        array (
          'name' => 'mft_part_num',
          'label' => 'Número de Pieza',
          'labelModule' => 'Products',
        ),
        5 => 
        array (
          'name' => 'discount_price',
          'label' => 'Precio Unitario',
          'labelModule' => 'Products',
        ),
        6 => 
        array (
          'name' => 'discount_field',
          'type' => 'fieldset',
          'label' => 'Cantidad Descontada',
          'labelModule' => 'Products',
          'css_class' => 'undefined discount-field quote-discount-percent',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'discount_amount',
              'label' => 'LBL_DISCOUNT_AMOUNT',
              'type' => 'discount-amount',
              'discountFieldName' => 'discount_select',
              'related_fields' => 
              array (
                0 => 'currency_id',
              ),
              'convertToBase' => true,
              'base_rate_field' => 'base_rate',
              'showTransactionalAmount' => true,
            ),
            1 => 
            array (
              'name' => 'discount_select',
              'type' => 'discount-select',
              'options' => 
              array (
              ),
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'envio_linea_c',
          'type' => 'currency',
          'label' => 'LBL_ENVIO_LINEA',
          'labelModule' => 'Products',
        ),
        8 => 
        array (
          'name' => 'total_amount',
          'label' => 'LBL_LINE_ITEM_TOTAL',
          'labelModule' => 'Quotes',
          'type' => 'currency',
          'widthClass' => 'cell-medium',
          'showTransactionalAmount' => true,
          'related_fields' => 
          array (
            0 => 'total_amount',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
        ),
        9 => 
        array (
          'name' => 'base_rate',
          'labelModule' => 'Products',
          'type' => 'textarea',
          'label' => 'LBL_CURRENCY_RATE',
        ),
      ),
    ),
  ),
);