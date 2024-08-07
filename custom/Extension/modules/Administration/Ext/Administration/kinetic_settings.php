<?php
$name = "kinetic_panel_settings";
$admin_option_defs = array();
$admin_option_defs['Administration'][$name] = array(
  'Administration',
  'LBL_KP_SETTINGS',
  'LBL_KP_SETTINGS_DESCRIPTION',
  '#Administration/config/kp'
);
$admin_group_header[] = array('LBL_KP_SETTINGS_MANAGEMENT', '', false, $admin_option_defs, 'LBL_KP_SETTINGS_MANAGEMENT_DESC');
