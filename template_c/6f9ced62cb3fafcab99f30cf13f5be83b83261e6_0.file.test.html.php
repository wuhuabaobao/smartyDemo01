<?php
/* Smarty version 3.1.30, created on 2017-10-25 10:59:24
  from "D:\wamp\pro\wamp\www\smartyDemo01\tpl\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f0526c8157e7_27988269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f9ced62cb3fafcab99f30cf13f5be83b83261e6' => 
    array (
      0 => 'D:\\wamp\\pro\\wamp\\www\\smartyDemo01\\tpl\\test.html',
      1 => 1508921962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f0526c8157e7_27988269 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'D:\\wamp\\pro\\wamp\\www\\smartyDemo01\\smarty\\plugins\\modifier.capitalize.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $_smarty_tpl->tpl_vars['articletitle']->value;?>
</title>
	</head>
	<body>
		<?php echo $_smarty_tpl->tpl_vars['articletitle']->value;?>

		<br />
		<!--第一种输出方式：-->
		<?php echo $_smarty_tpl->tpl_vars['baby']->value['name'];?>

		
		<!--第二种输出方式-->
		<?php echo $_smarty_tpl->tpl_vars['baby']->value['age'];?>


		
		<br />
		
		<!--第一种输出方式：-->
		<?php echo $_smarty_tpl->tpl_vars['baby2']->value['babyInfo']['name'];?>

		
		<!--第二种输出方式-->
		<?php echo $_smarty_tpl->tpl_vars['baby2']->value['babyInfo']['age'];?>

		
		<br />
		调节器————首字母变大写<br />
		
		<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['tiaojieqi']->value);?>

		
		<br />
		调节器————连接字符串cat,
		cat后面的字符串加双引号,继续加字符串的话，就继续加冒号<br />
		<?php echo ($_smarty_tpl->tpl_vars['tiaojieqi']->value).("一生一世").("forever");?>

		
	</body>
</html>
<?php }
}
