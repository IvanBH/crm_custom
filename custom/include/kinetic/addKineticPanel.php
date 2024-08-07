<?php

function addKineticPanel($viewdefs, $module, $key)
{
    require_once('modules/Administration/clients/base/api/handlers/ConfigApiHandler.php');

    $api = new RestService();
    $current_user = new User();
    $current_user->getSystemUser();
    $api->user = $current_user;
    $apiClass = new ConfigApiHandler();
    $kpConfigs = $apiClass->getConfig($api, array('category' => 'kp'));

    if (isset($kpConfigs["kp_{$key}_enabled"]) && $kpConfigs["kp_{$key}_enabled"]) {

        $putFirst = isset($kpConfigs["kp_{$key}_position"]) ? $kpConfigs["kp_{$key}_position"] : false;
        $panels = isset($viewdefs[$module]['base']['view']['record']['panels']) ? $viewdefs[$module]['base']['view']['record']['panels'] : array();
    
        include('dataPanels.php');
    
        if (!empty($panels)) {
            $newPanels = array();
    
            foreach ($panels as $key => $panel) {
                if ($key == 0) {
                    array_push($newPanels, $panel);
                } else if ($key == 1 && $putFirst) {
                    if($module != 'Quotes'){
                        array_push($newPanels, $kineticDataPanel[$module]);
                    } else {
                        array_push($newPanels, $kineticDataPanel[$module][0]);
                        array_push($newPanels, $kineticDataPanel[$module][1]);
                    }
                    array_push($newPanels, $panel);
                } else {
                    array_push($newPanels, $panel);
                }
            }
    
            if (!$putFirst) {
                if($module != 'Quotes'){
                    array_push($newPanels, $kineticDataPanel[$module]);
                } else {
                    array_push($newPanels, $kineticDataPanel[$module][0]);
                    array_push($newPanels, $kineticDataPanel[$module][1]);
                }
            }
    
            $viewdefs[$module]['base']['view']['record']['panels'] = $newPanels;
        }
    }

    return $viewdefs;
}
