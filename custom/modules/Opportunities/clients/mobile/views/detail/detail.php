<?php
// created: 2023-12-02 04:58:39
$viewdefs['Opportunities']['mobile']['view']['detail'] = array (
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
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'name' => 'LBL_PANEL_DEFAULT',
      'columns' => '1',
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
        1 => 'amount',
        2 => 'account_name',
        3 => 'date_closed',
        4 => 'sales_stage',
        5 => 'tag',
        6 => 'assigned_user_name',
        7 => 'team_name',
        8 => 'forecasted_likely',
        9 => 'commit_stage',
        10 => 'lost',
        11 => 
        array (
          'name' => 'sales_status',
          'readonly' => true,
          'studio' => true,
          'label' => 'LBL_SALES_STATUS',
        ),
        12 => 
        array (
          'name' => 'service_start_date',
          'comment' => 'Service start date field.',
          'related_fields' => 
          array (
          ),
          'studio' => 
          array (
            'calculated' => false,
          ),
          'label' => 'LBL_SERVICE_START_DATE',
        ),
        13 => 
        array (
          'name' => 'renewal_parent_name',
          'label' => 'LBL_RENEWAL_PARENT',
        ),
      ),
    ),
  ),
);