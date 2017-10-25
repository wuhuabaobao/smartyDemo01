<?php
/* Smarty version 3.1.30, created on 2017-10-25 17:32:02
  from "E:\wamp\pro\wamp\www\smartyDemo01\tpl\yinru.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f0ae72184a76_13665708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fae3d85d152de10a93198aac700b5c90e5d073c0' => 
    array (
      0 => 'E:\\wamp\\pro\\wamp\\www\\smartyDemo01\\tpl\\yinru.html',
      1 => 1508945517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f0ae72184a76_13665708 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		我是被引入的文件内容
		<br />
		<br />
		传入的参数
		<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>

		
	</body>
</html>
<?php }
}
