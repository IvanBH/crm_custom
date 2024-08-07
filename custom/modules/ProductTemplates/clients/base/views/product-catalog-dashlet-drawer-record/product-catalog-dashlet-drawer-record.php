<?php
$viewdefs['ProductTemplates'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'product-catalog-dashlet-drawer-record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'view',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'button',
            'event' => 'button:add_to_quote_button:click',
            'name' => 'add_to_quote_button',
            'label' => 'LBL_ADD_TO_QUOTE_BUTTON',
            'css_class' => 'btn btn-primary',
            'showOn' => 'view',
            'showOnModules' => 
            array (
              'Quotes' => 
              array (
                0 => 'create',
                1 => 'record',
              ),
              'Opportunities' => 
              array (
                0 => 'create',
                1 => 'record',
              ),
            ),
            'events' => 
            array (
              'click' => 'button:add_to_quote_button:click',
            ),
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labels' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 'status',
              2 => 
              array (
                'name' => 'website',
                'type' => 'url',
              ),
              3 => 'active_status',
              4 => 'date_available',
              5 => 'tax_class',
              6 => 'qty_in_stock',
              7 => 'category_name',
              8 => 'manufacturer_name',
              9 => 'mft_part_num',
              10 => 'service',
              11 => 'renewable',
              12 => 
              array (
                'name' => 'service_duration',
                'type' => 'fieldset',
                'css_class' => 'service-duration-field',
                'label' => 'LBL_SERVICE_DURATION',
                'inline' => true,
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
              ),
              13 => 
              array (
                'name' => 'lock_duration',
              ),
              14 => 
              array (
              ),
              15 => 
              array (
                'name' => 'vendor_part_num',
                'span' => 12,
              ),
              16 => 'weight',
              17 => 'type_name',
              18 => 
              array (
                'name' => 'cost_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'cost_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
                'convertToBase' => true,
                'showTransactionalAmount' => true,
              ),
              19 => 'cost_usdollar',
              20 => 'date_cost_price',
              21 => 
              array (
                'name' => 'discount_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'discount_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
                'convertToBase' => true,
                'showTransactionalAmount' => true,
              ),
              22 => 'discount_usdollar',
              23 => 
              array (
                'name' => 'list_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'list_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
                'convertToBase' => true,
                'showTransactionalAmount' => true,
              ),
              24 => 'list_usdollar',
              25 => 
              array (
                'name' => 'pricing_formula',
                'related_fields' => 
                array (
                  0 => 'pricing_factor',
                ),
              ),
              26 => 'support_name',
              27 => 'support_description',
              28 => 'support_contact',
              29 => 'support_term',
              30 => 
              array (
                'name' => 'team_name',
              ),
              31 => 
              array (
              ),
              32 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
