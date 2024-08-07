<?php
// created: 2024-07-25 05:39:21
$viewdefs['PurchasedLineItems']['base']['view']['record'] = array (
  'buttons' => 
  array (
    0 => 
    array (
      'type' => 'rowaction',
      'event' => 'button:cancel_button:click',
      'name' => 'cancel_button',
      'label' => 'LBL_CANCEL_BUTTON_LABEL',
      'css_class' => 'btn btn-invisible btn-link',
      'showOn' => 'edit',
    ),
    1 => 
    array (
      'type' => 'rowaction',
      'event' => 'button:save_button:click',
      'name' => 'save_button',
      'label' => 'LBL_SAVE_BUTTON_LABEL',
      'css_class' => 'btn btn-primary',
      'showOn' => 'edit',
      'acl_action' => 'edit',
    ),
    2 => 
    array (
      'type' => 'actiondropdown',
      'name' => 'main_dropdown',
      'primary' => true,
      'showOn' => 'view',
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:edit_button:click',
          'name' => 'edit_button',
          'label' => 'LBL_EDIT_BUTTON_LABEL',
          'acl_action' => 'edit',
        ),
        1 => 
        array (
          'type' => 'shareaction',
          'name' => 'share',
          'label' => 'LBL_RECORD_SHARE_BUTTON',
          'acl_action' => 'view',
        ),
        2 => 
        array (
          'type' => 'create-add-on',
          'name' => 'create_add_on_button',
          'label' => 'LBL_CREATE_ADD_ON',
          'acl_action' => 'view',
        ),
        3 => 
        array (
          'type' => 'pdfaction',
          'name' => 'download-pdf',
          'label' => 'LBL_PDF_VIEW',
          'action' => 'download',
          'acl_action' => 'view',
        ),
        4 => 
        array (
          'type' => 'pdfaction',
          'name' => 'email-pdf',
          'label' => 'LBL_PDF_EMAIL',
          'action' => 'email',
          'acl_action' => 'view',
        ),
        5 => 
        array (
          'type' => 'divider',
        ),
        6 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:find_duplicates_button:click',
          'name' => 'find_duplicates_button',
          'label' => 'LBL_DUP_MERGE',
          'acl_action' => 'edit',
        ),
        7 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:duplicate_button:click',
          'name' => 'duplicate_button',
          'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
          'acl_module' => 'Products',
          'acl_action' => 'create',
        ),
        8 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:audit_button:click',
          'name' => 'audit_button',
          'label' => 'LNK_VIEW_CHANGE_LOG',
          'acl_action' => 'view',
        ),
        9 => 
        array (
          'type' => 'divider',
        ),
        10 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:delete_button:click',
          'name' => 'delete_button',
          'label' => 'LBL_DELETE_BUTTON_LABEL',
          'acl_action' => 'delete',
        ),
        11 => 
        array (
          'type' => 'divider',
        ),
      ),
    ),
    3 => 
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
        1 => 
        array (
          'name' => 'name',
          'label' => 'LBL_MODULE_NAME_SINGULAR',
        ),
        2 => 
        array (
          'name' => 'favorite',
          'label' => 'LBL_FAVORITE',
          'type' => 'favorite',
          'dismiss_label' => true,
        ),
        3 => 
        array (
          'name' => 'follow',
          'label' => 'LBL_FOLLOW',
          'type' => 'follow',
          'readonly' => true,
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
        0 => 'purchase_name',
        1 => 'date_closed',
        2 => 
        array (
          'name' => 'account_name',
          'readonly' => true,
        ),
        3 => 'product_template_name',
        4 => 'status',
        5 => 
        array (
          'name' => 'revenue',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'revenue',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        6 => 'quantity',
        7 => 
        array (
          'name' => 'total_amount',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'total_amount',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        8 => 
        array (
          'name' => 'discount_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'discount_price',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        9 => 
        array (
        ),
        10 => 
        array (
          'name' => 'discount_field',
          'type' => 'fieldset',
          'css_class' => 'discount-field',
          'label' => 'LBL_DISCOUNT_AMOUNT_COMBINED',
          'show_child_labels' => false,
          'sortable' => false,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'discount_amount',
              'label' => 'LBL_TOTAL_DISCOUNT_AMOUNT',
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
              'type' => 'discount-select',
              'name' => 'discount_select',
              'options' => 
              array (
              ),
            ),
          ),
          'enabled' => true,
          'default' => false,
        ),
        11 => 
        array (
        ),
        12 => 'revenuelineitem_name',
        13 => 'renewal',
        14 => 
        array (
          'name' => 'tag',
          'span' => 12,
        ),
        15 => 
        array (
          'name' => 'commentlog',
          'label' => 'LBL_COMMENTLOG',
          'span' => 12,
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_RECORD_SHOWMORE',
      'hide' => true,
      'columns' => 2,
      'placeholders' => true,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 'service',
        1 => 
        array (
          'name' => 'annual_revenue',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'annual_revenue',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        2 => 'service_start_date',
        3 => 'service_end_date',
        4 => 
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
        5 => 'renewable',
        6 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
        7 => 'assigned_user_name',
        8 => 'team_name',
        9 => 
        array (
          'name' => 'date_entered_by',
          'readonly' => true,
          'type' => 'fieldset',
          'inline' => true,
          'label' => 'LBL_DATE_ENTERED',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
            ),
            1 => 
            array (
              'type' => 'label',
              'default_value' => 'LBL_BY',
            ),
            2 => 
            array (
              'name' => 'created_by_name',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'date_modified_by',
          'readonly' => true,
          'type' => 'fieldset',
          'inline' => true,
          'label' => 'LBL_DATE_MODIFIED',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'date_modified',
            ),
            1 => 
            array (
              'type' => 'label',
              'default_value' => 'LBL_BY',
            ),
            2 => 
            array (
              'name' => 'modified_by_name',
            ),
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'useTabs' => false,
  ),
);