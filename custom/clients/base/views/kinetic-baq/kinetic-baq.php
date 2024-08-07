<?php
$viewdefs['base']['view']['kinetic-baq'] = array(
	'dashlets' => array(
		array(
			'label' => 'Kinetic BAQ Display',
			'description' => 'Display extra information from a Kinetic BAQ.',
            'config' => array(
            ),
			'preview' => array(),
			'filter' => array(
			)
		),
	),
    'panels' => array(
        array(
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
                array(
                    'name' => 'instance_url',
                    'label' => 'Kinetic URL',
                    'type' => 'text',
                    'span' => 6,
                    'required' => true,
                ),
                array(
                    'name' => 'api_key',
                    'label' => 'Kinetic API Key',
                    'type' => 'text',
                    'span' => 6,
                    'required' => true,
                ),
                array(
                    'name' => 'instance_user',
                    'label' => 'Username',
                    'type' => 'text',
                    'span' => 6,
                    'required' => true,
                ),
                array(
                    'name' => 'instance_pass',
                    'label' => 'Password',
                    'type' => 'password',
                    'span' => 6,
                    'required' => true,
                ),
                array(
                    'name' => 'baqid',
                    'label' => 'Query ID',
                    'type' => 'string',
                    'span' => 6,
                    'required' => true,
                ),
                array(
                    'name' => 'parameters',
                    'label' => 'Parameters',
                    'type' => 'string',
                    'span' => 6,
                    'required' => false,
                ),
                array(
                    'name' => 'maxrecords',
                    'label' => 'Max. Records to display',
                    'type' => 'integer',
                    'span' => 6,
                    'required' => true,
                ),
                array(
                    'name' => 'viewastable',
                    'label' => 'Display Records as Table',
                    'type' => 'bool',
                    'span' => 6,
                    'required' => false,
                ),
                array(
                    'name' => 'disablehref',
                    'label' => 'Disable Hyperlinks',
                    'type' => 'bool',
                    'span' => 6,
                    'required' => false,
                ),
            ),
        ),
    ),    
);
?>