<?php /* Smarty version Smarty 3.1.4, created on 2012-07-10 22:15:12
         compiled from "./templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14569685144ff9ff486827e3-21547163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243b1378187b2878c10cdd133ad5f270cdcebcd8' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1341976509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14569685144ff9ff486827e3-21547163',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ff9ff487a443',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff9ff487a443')) {function content_4ff9ff487a443($_smarty_tpl) {?><div id="menu">
<ul id="sddm">
    <li><a href="#"
        onmouseover="mopen('m1')"
        onmouseout="mclosetime()">Administrar Usuarios</a>
        <div id="m1"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=usuario&accion=lista">Listar Usuarios</a>
        <a href="index.php?page=usuario&accion=crea">Crear Usuario</a>
        <a href="index.php?page=usuario&accion=actualiza">Actualizar Usuario</a>
        <a href="index.php?page=usuario&accion=borra">Borrar Usuario</a>
        </div>
    </li>
    <li><a href="#"
        onmouseover="mopen('m2')"
        onmouseout="mclosetime()">Menu2</a>
        <div id="m2"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=proyecto&accion=lista">Item1</a>
        <a href="index.php?page=proyecto&accion=crea">Item2</a>
        <a href="index.php?page=proyecto&accion=actualiza">Item3</a>
        <a href="index.php?page=proyecto&accion=borra">Item4</a>
        </div>
    </li>

    <li><a href="#"
        onmouseover="mopen('m3')"
        onmouseout="mclosetime()">Menu3</a>
        <div id="m3"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=etapa&accion=lista">Item1</a>
        <a href="index.php?page=etapa&accion=crea">Item2</a>
        <a href="index.php?page=etapa&accion=actualiza">Item3</a>
        <a href="index.php?page=etapa&accion=borra">Item4</a>
        <a href="index.php?page=actividad&accion=lista">Item5</a>
        <a href="index.php?page=actividad&accion=crea">Item6</a>
        <a href="index.php?page=actividad&accion=actualiza">Item7</a>
        <a href="index.php?page=actividad&accion=borra">Item8</a>
        </div>
    </li>

    <li><a href="#"
        onmouseover="mopen('m4')"
        onmouseout="mclosetime()">Listar</a>
        <div id="m4"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        <a href="index.php?page=cliente&accion=lista">Clientes</a>
        <a href="index.php?page=inventario&accion=lista">Inventario</a>
        <a href="index.php?page=movimiento&accion=lista">Item3</a>
        </div>
    </li>

    <li><a href="index.php?page=ayuda&accion=lista"
        onmouseover="mopen('m5')"
        onmouseout="mclosetime()">Ayuda</a>
        <div id="m5"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        </div>
    </li>
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>
?logout=1"
        onmouseover="mopen('m6')"
        onmouseout="mclosetime()">Salir</a>
        <div id="m6"
            onmouseover="mcancelclosetime()"
            onmouseout="mclosetime()">
        </div>
    </li>
</ul>
<td>
Usuario en el sistema : <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

</td>
<div style="clear:both"></div>
<br>
<?php }} ?>