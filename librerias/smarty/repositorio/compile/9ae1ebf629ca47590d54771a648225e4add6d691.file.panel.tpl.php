<?php /* Smarty version Smarty-3.1.11, created on 2018-02-15 13:06:46
         compiled from "templates/plantillas/modulos/login/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6790672575a85d872ec30e6-71275394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae1ebf629ca47590d54771a648225e4add6d691' => 
    array (
      0 => 'templates/plantillas/modulos/login/panel.tpl',
      1 => 1518721605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6790672575a85d872ec30e6-71275394',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a85d872ec87e5_24896050',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a85d872ec87e5_24896050')) {function content_5a85d872ec87e5_24896050($_smarty_tpl) {?><div class="login-logo">
</div><!-- /.login-logo -->

<div class="login-box-body">
	<div class="row">
		<div class="col-xs-12 col-sm-offset-3 col-sm-6">
			<center><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
img/logo.png" class="img-responsive"/></center>
		</div>
	</div>
	<p class="login-box-msg">
		Identificate para iniciar sesión
	</p>
	<form action="#" id="frmLogin" method="post">
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Correo electrónico" id="txtUsuario" name="txtUsuario">
			<span class="glyphicon glyphicon-email form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="password" class="form-control" placeholder="Contraseña" id="txtPass" name="txtPass">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		<div class="row">
			<!-- /.col -->
			<div class="col-xs-4">
			</div>
			<div class="col-xs-offset-4 col-xs-4">
				<button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar</button>
			</div><!-- /.col -->
		</div>
	</form>		
</div><!-- /.login-box-body --><?php }} ?>