<?php
global $conf;

$conf['unidades'] = array(
	'vista' => 'unidades/panel.tpl',
	'descripcion' => 'unidades',
	'seguridad' => true,
	'js' => array('unidad.class.js'),
	'jsTemplate' => array('unidades.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['listaunidades'] = array(
	'controlador' => 'unidades.php',
	'vista' => 'unidades/lista.tpl',
	'descripcion' => 'Lista de unidades',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['cunidades'] = array(
	'controlador' => 'unidades.php',
	'descripcion' => 'Controlador de unidades',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>