<?php

$kineticDataPanel = array(
  'Accounts' => array(
    'newTab' => false,
    'panelDefault' => 'collapsed',
    'name' => 'panel_kinetic',
    'label' => 'LBL_PANEL_KINETIC',
    'columns' => 2,
    'placeholders' => 1,
    'fields' =>
    array(
      0 =>
      array(
        'readonly' => false,
        'name' => 'ecompany_c',
        'label' => 'LBL_EPICORCOMPANY',
      ),
      1 =>
      array(
        'readonly' => false,
        'name' => 'ecustid_c',
        'label' => 'LBL_EPICORCUSTID',
      ),
      2 =>
      array(
        'readonly' => false,
        'name' => 'esalesrepcode_c',
        'label' => 'LBL_EPICORSALESREPCODE',
      ),
      3 =>
      array(
        'readonly' => false,
        'name' => 'ecustnum_c',
        'label' => 'LBL_EPICORCUSTNUM',
      ),
      4 =>
      array(
        'readonly' => false,
        'name' => 'eterms_c',
        'label' => 'LBL_ETERMS',
      ),
      5 =>
      array(
        'readonly' => false,
        'name' => 'eterritory_c',
        'label' => 'LBL_ETERRITORY',
      ),
      6 =>
      array(
        'readonly' => false,
        'name' => 'ecredithold_c',
        'label' => 'LBL_EPICORCREDITHOLD',
      ),
      7 =>
      array(),
      8 =>
      array(
        'readonly' => false,
        'name' => 'esync_c',
        'label' => 'LBL_ESYNC',
      ),
      9 =>
      array(
        'readonly' => '1',
        'name' => 'esynced_c',
        'label' => 'LBL_ESYNCED',
      ),
      10 =>
      array(
        'readonly' => '1',
        'name' => 'sync_message_c',
        'label' => 'LBL_SYNC_MESSAGE',
        'span' => 12,
      ),
    ),
  ),
  'Contacts' => array(
    'newTab' => false,
    'panelDefault' => 'collapsed',
    'name' => 'panel_kinetic',
    'label' => 'LBL_PANEL_KINETIC',
    'columns' => 2,
    'placeholders' => 1,
    'fields' =>
    array(
      0 =>
      array(
        'readonly' => false,
        'name' => 'ecompany_c',
        'label' => 'LBL_ECOMPANY',
      ),
      1 =>
      array(
        'readonly' => false,
        'name' => 'ecustnum_c',
        'label' => 'LBL_ECUSTNUM',
      ),
      2 =>
      array(
        'readonly' => false,
        'name' => 'econnum_c',
        'label' => 'LBL_ECONNUM',
      ),
      3 =>
      array(),
      4 =>
      array(
        'readonly' => false,
        'name' => 'esync_c',
        'label' => 'LBL_ESYNC',
      ),
      5 =>
      array(
        'readonly' => '1',
        'name' => 'esynced_c',
        'label' => 'LBL_ESYNCED',
      ),
    ),
  ),
  'Opportunities' => array(
    'newTab' => false,
    'panelDefault' => 'collapsed',
    'name' => 'panel_kinetic',
    'label' => 'LBL_PANEL_KINETIC',
    'columns' => 2,
    'placeholders' => 1,
    'fields' =>
    array(
      0 =>
      array(
        'readonly' => '1',
        'name' => 'ecompany_c',
        'label' => 'LBL_ECOMPANY',
      ),
      1 =>
      array(
        'readonly' => '1',
        'name' => 'ecustid_c',
        'label' => 'LBL_ECUSTID',
      ),
      2 =>
      array(
        'readonly' => '1',
        'name' => 'eordernum_c',
        'label' => 'LBL_EORDERNUM',
      ),
      3 =>
      array(
        'readonly' => false,
        'name' => 'eneedbydate_c',
        'label' => 'LBL_ENEEDBYDATE',
      ),
      4 =>
      array(
        'readonly' => false,
        'name' => 'esync_c',
        'label' => 'LBL_ESYNC',
      ),
      5 =>
      array(
        'readonly' => '1',
        'name' => 'esynced_c',
        'label' => 'LBL_ESYNCED',
      ),
    ),
  ),
  'ProductTemplates' => array(
    'newTab' => false,
    'panelDefault' => 'expanded',
    'name' => 'panel_kinetic',
    'label' => 'LBL_PANEL_KINETIC',
    'columns' => 2,
    'placeholders' => 1,
    'fields' =>
    array(
      0 =>
      array(
        'readonly' => false,
        'name' => 'ecompany_c',
        'label' => 'LBL_ECOMPANY',
      ),
      1 =>
      array(),
      2 =>
      array(
        'readonly' => false,
        'name' => 'epricelist_c',
        'label' => 'LBL_EPRICELIST',
      ),
      3 =>
      array(
        'readonly' => false,
        'name' => 'epricelistdesc_c',
        'label' => 'LBL_EPRICELISTDESC',
      ),
      4 =>
      array(
        'readonly' => false,
        'name' => 'epricelistuom_c',
        'label' => 'LBL_EPRICELISTUOM',
      ),
      5 =>
      array(
        'readonly' => false,
        'name' => 'estockpricelistuom_c',
        'label' => 'LBL_ESTOCKPRICELISTUOM',
      ),
      6 =>
      array(
        'readonly' => false,
        'name' => 'esynced_c',
        'label' => 'LBL_ESYNCED',
      ),
      7 =>
      array(
        'readonly' => false,
        'name' => 'esync_message_c',
        'label' => 'LBL_SYNC_MESSAGE',
      ),
      8 =>
      array(
        'readonly' => false,
        'name' => 'esynced_timestamp_c',
        'label' => 'LBL_ESYNCED_TIMESTAMP',
      ),
      9 =>
      array(),
    ),
  ),
  'Quotes' => [ 
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => 'panel_kinetic',
      'label' => 'LBL_PANEL_KINETIC',
      'columns' => 2,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'readonly' => false,
          'name' => 'ecompany_c',
          'label' => 'LBL_ECOMPANY',
        ),
        1 => 
        array (
          'readonly' => false,
          'name' => 'equotenum_c',
          'label' => 'LBL_EQUOTENUM',
        ),
        2 => 
        array (
          'readonly' => false,
          'name' => 'ecurrencycode_c',
          'label' => 'LBL_ECURRENCYCODE',
        ),
        3 => 
        array (
          'readonly' => false,
          'name' => 'estatus_c',
          'label' => 'LBL_ESTATUS',
        ),
        4 => 
        array (
          'readonly' => false,
          'name' => 'equoted_c',
          'label' => 'LBL_EQUOTED',
        ),
        5 => 
        array (
          'readonly' => false,
          'name' => 'ecustnum_c',
          'label' => 'LBL_ECUSTNUM',
        ),
      ),
    ),
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => 'panel_kinetic_soi',
      'label' => 'LBL_PANEL_KINETIC_SOI',
      'columns' => 2,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'readonly' => '1',
          'name' => 'ecustid_c',
          'label' => 'LBL_ECUSTID',
        ),
        1 => 
        array (
          'readonly' => false,
          'name' => 'eneedbydate_c',
          'label' => 'LBL_ENEEDBYDATE',
        ),
        2 => 
        array (
          'readonly' => '1',
          'name' => 'eordernum_c',
          'label' => 'LBL_EORDERNUM',
        ),
        3 => 
        array (
          'readonly' => false,
          'name' => 'esync_c',
          'label' => 'LBL_ESYNC',
        ),
        4 => 
        array (
          'readonly' => '1',
          'name' => 'esynced_c',
          'label' => 'LBL_ESYNCED',
        ),
        5 => 
        array (
          'readonly' => '1',
          'name' => 'esynced_timestamp_c',
          'label' => 'LBL_ESYNCED_TIMESTAMP',
        ),
        6 => 
        array (
          'readonly' => '1',
          'name' => 'esynced_message_c',
          'label' => 'LBL_ESYNCED_MESSAGE',
          'span' => 12,
        ),
      ),
    ),
  ],
);
