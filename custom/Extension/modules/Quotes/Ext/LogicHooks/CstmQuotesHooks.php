<?php
    $hook_version = 1;
    $hook_array = isset($hook_array) ? $hook_array : array();
    $hook_array['after_save'] = isset($hook_array['after_save']) ? $hook_array['after_save'] : array();
    $hook_array['after_save'][] = array(
        2,
        'Etapa de Cotización',
        'custom/modules/Quotes/CstmQuotesHooks.php',
        'CstmQuotesHooks',
        'cotizacionesRechazadas'
    );
    $hook_version = 1;
    $hook_array = isset($hook_array) ? $hook_array : array();
    $hook_array['after_save'] = isset($hook_array['after_save']) ? $hook_array['after_save'] : array();
    $hook_array['after_save'][] = array(
        1,
        'Nombre de Cotización',
        'custom/modules/Quotes/CstmQuotesHooks.php',
        'CstmQuotesHooks',
        'concatenartNombre'
    );