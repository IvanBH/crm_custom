<?php
// created: 2024-07-25 05:39:22
$viewdefs['RevenueLineItems']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'link' => true,
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'opportunity_name',
          'enabled' => true,
          'default' => true,
          'sortable' => true,
        ),
        2 => 
        array (
          'name' => 'account_name',
          'readonly' => true,
          'enabled' => true,
          'default' => true,
          'sortable' => true,
        ),
        3 => 
        array (
          'name' => 'sales_stage',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'probability',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'date_closed',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'commit_stage',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'product_template_name',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'category_name',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'quantity',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'worst_case',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
            2 => 'total_amount',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_price',
          ),
          'convertToBase' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
            2 => 'total_amount',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_price',
          ),
          'convertToBase' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'best_case',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
            2 => 'total_amount',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_price',
          ),
          'convertToBase' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
        ),
        13 => 
        array (
          'name' => 'assigned_user_name',
          'enabled' => true,
          'default' => true,
        ),
        14 => 
        array (
          'name' => 'date_modified',
          'enabled' => true,
          'default' => true,
        ),
        15 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => true,
        ),
        16 => 
        array (
          'name' => 'service_end_date',
          'label' => 'LBL_SERVICE_END_DATE',
          'type' => 'service-enddate',
          'default' => false,
          'enabled' => true,
        ),
        17 => 
        array (
          'name' => 'add_on_to_name',
          'type' => 'add-on-to',
          'default' => false,
          'enabled' => true,
        ),
        18 => 
        array (
          'name' => 'service_duration',
          'type' => 'fieldset',
          'css_class' => 'service-duration-field',
          'label' => 'LBL_SERVICE_DURATION',
          'inline' => true,
          'default' => false,
          'show_child_labels' => false,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'service_duration_value',
              'label' => 'LBL_SERVICE_DURATION_VALUE',
            ),
            1 => 
            array (
              'name' => 'service_duration_unit',
              'label' => 'LBL_SERVICE_DURATION_UNIT',
            ),
          ),
          'orderBy' => 'service_duration_unit',
          'related_fields' => 
          array (
            0 => 'service_duration_value',
            1 => 'service_duration_unit',
          ),
          'enabled' => true,
        ),
        19 => 
        array (
          'name' => 'service',
          'label' => 'LBL_SERVICE',
          'default' => false,
          'enabled' => true,
        ),
        20 => 
        array (
          'name' => 'service_start_date',
          'label' => 'LBL_SERVICE_START_DATE',
          'type' => 'date',
          'default' => false,
          'enabled' => true,
        ),
        21 => 
        array (
          'name' => 'renewable',
          'label' => 'LBL_RENEWABLE',
          'type' => 'bool',
          'default' => false,
          'enabled' => true,
        ),
      ),
    ),
  ),
);