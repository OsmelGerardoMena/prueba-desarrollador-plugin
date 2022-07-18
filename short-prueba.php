<?php

/**
    Plugin Name:	Shortcode Hola mundo
	Plugin URI:		https://www.linkedin.com/in/osmel-mena-09858493/
	Description:	Plugin
	Version: 		0.1
	Author:			Osmel Mena
	Author URI:		https://www.linkedin.com/in/osmel-mena-09858493/
	License:		GPLv2 or later
 **/


function test_hola_mundo_att($atts)
{
    $default = array(
        'nombre' => '',
    );
    $attsx = shortcode_atts($default, $atts);
    return '<span class="test-nombre">Hola mundo ' . $attsx['nombre'].'</span>';
}

add_shortcode('test_hola_mundo', 'test_hola_mundo_att');
