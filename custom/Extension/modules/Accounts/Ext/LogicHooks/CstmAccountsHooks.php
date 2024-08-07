<?php
    $hook_version = 1;
    $hook_array = isset($hook_array) ? $hook_array : array();
    $hook_array['after_save'] = isset($hook_array['after_save']) ? $hook_array['after_save'] : array();
    $hook_array['after_save'][] = array(
        1,
        'Numero de cliente',
        'custom/modules/Accounts/CstmAccountsHooks.php',
        'CstmAccountsHooks',
        'numero_cliente'
    );