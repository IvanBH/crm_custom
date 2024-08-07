<?php
// created: 2024-07-29 21:21:22
$viewdefs['Quotes']['mobile']['view']['detail'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 'quote_num',
        1 => 
        array (
          'name' => 'name',
          'label' => 'LBL_QUOTE_NAME',
          'related_fields' => 
          array (
            0 => 
            array (
              'name' => 'bundles',
              'fields' => 
              array (
                0 => 'id',
                1 => 'bundle_stage',
                2 => 'currency_id',
                3 => 'base_rate',
                4 => 'currencies',
                5 => 'name',
                6 => 'deal_tot',
                7 => 'deal_tot_usdollar',
                8 => 'deal_tot_discount_percentage',
                9 => 'new_sub',
                10 => 'new_sub_usdollar',
                11 => 'position',
                12 => 'related_records',
                13 => 'shipping',
                14 => 'shipping_usdollar',
                15 => 'subtotal',
                16 => 'subtotal_usdollar',
                17 => 'tax',
                18 => 'tax_usdollar',
                19 => 'taxrate_id',
                20 => 'team_count',
                21 => 'team_count_link',
                22 => 'team_name',
                23 => 'taxable_subtotal',
                24 => 'total',
                25 => 'total_usdollar',
                26 => 'default_group',
                27 => 
                array (
                  'name' => 'product_bundle_items',
                  'fields' => 
                  array (
                    0 => 'quantity',
                    1 => 'product_template_name',
                    2 => 'desc_producto_c',
                    3 => 'mft_part_num',
                    4 => 'discount_price',
                    5 => 'discount_field',
                    6 => 'envio_linea_c',
                    7 => 'total_amount',
                    8 => 'base_rate',
                    9 => 'base_rate',
                    10 => 'deal_calc',
                    11 => 'discount_amount',
                    12 => 'discount_amount_usdollar',
                    13 => 'discount_price',
                    14 => 'discount_select',
                    15 => 'envio_linea_c',
                    16 => 'quantity',
                    17 => 'subtotal',
                    18 => 'tax_class',
                    19 => 'total_amount',
                    20 => 'service_duration_value',
                    21 => 'service_duration_unit',
                    22 => 'catalog_service_duration_value',
                    23 => 'catalog_service_duration_unit',
                    24 => 'description',
                    25 => 'currency_id',
                    26 => 'account_id',
                    27 => 'quote_id',
                    28 => 'name',
                    29 => 'position',
                    30 => 'product_template_id',
                    31 => 'product_template_name',
                  ),
                  'max_num' => -1,
                ),
              ),
              'max_num' => -1,
              'order_by' => 'position:asc',
            ),
          ),
        ),
        2 => 'billing_account_name',
        3 => 'quote_stage',
        4 => 'tag',
      ),
    ),
  ),
);