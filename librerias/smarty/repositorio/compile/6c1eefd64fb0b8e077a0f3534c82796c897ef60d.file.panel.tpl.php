<?php /* Smarty version Smarty-3.1.11, created on 2018-02-15 13:17:57
         compiled from "templates/plantillas/modulos/home/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11335688345a85dce52b26b3-10075093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c1eefd64fb0b8e077a0f3534c82796c897ef60d' => 
    array (
      0 => 'templates/plantillas/modulos/home/panel.tpl',
      1 => 1515780771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11335688345a85dce52b26b3-10075093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a85dce52cfdb2_11916514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a85dce52cfdb2_11916514')) {function content_5a85dce52cfdb2_11916514($_smarty_tpl) {?><div class="box">
	<div class="box-header">
		<h3>Bienvenido </h3>
	</div>
	<div class="box-body">
		<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getNombre();?>

	</div>
</div><?php }} ?>