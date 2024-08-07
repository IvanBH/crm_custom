<?php
$viewdefs['Leads'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
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
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
                  1 => 'first_name',
                  2 => 'last_name',
                ),
                'link' => true,
                'label' => 'LBL_LIST_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'status',
                'type' => 'status',
                'label' => 'LBL_LIST_STATUS',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'account_id',
                  1 => 'converted',
                ),
              ),
              3 => 
              array (
                'name' => 'phone_work',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'email',
                'label' => 'LBL_LIST_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              8 => 
              array (
                'name' => 'primary_address_country',
                'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'lead_source',
                'label' => 'LBL_LEAD_SOURCE',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'campaign_name',
                'label' => 'LBL_CAMPAIGN',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'campaign_id',
                ),
                'id' => 'CAMPAIGN_ID',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'mkto_lead_score',
                'label' => 'LBL_MKTO_LEAD_SCORE',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
