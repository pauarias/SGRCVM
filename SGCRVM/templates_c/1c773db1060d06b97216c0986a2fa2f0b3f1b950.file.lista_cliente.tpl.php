<?php /* Smarty version Smarty 3.1.4, created on 2012-07-10 22:34:57
         compiled from "./templates/lista_cliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9742108524ffcf03c490643-15370414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c773db1060d06b97216c0986a2fa2f0b3f1b950' => 
    array (
      0 => './templates/lista_cliente.tpl',
      1 => 1341977693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9742108524ffcf03c490643-15370414',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ffcf03c55e73',
  'variables' => 
  array (
    'array' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ffcf03c55e73')) {function content_4ffcf03c55e73($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/SGCRVM/smarty/libs/plugins/function.cycle.php';
?><div align="center">
<table>
	<tr style="background: gray">
	<td><b>Id </td>  <td><b> Cliente </td> <td><b> Visitador </td><td><b> Direccion </b></td>   <td><b> Telefono </td> <td> <b> Identificacion <td><b> Correo  </td></tr>
	<br>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<tr style="background: <?php echo smarty_function_cycle(array('values'=>'silver, gray'),$_smarty_tpl);?>
">
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
 </td>  <td> <?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
 </td>   <td> <?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
 </td> <td><?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
 </td></tr>
</tr>
<?php } ?>
</table>
</div>

<?php }} ?>