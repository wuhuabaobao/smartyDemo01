<?php
/* Smarty version 3.1.30, created on 2017-10-25 10:46:37
  from "D:\wamp\pro\wamp\www\smartyDemo01\tpl\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f04f6dafc3b1_02071015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f9ced62cb3fafcab99f30cf13f5be83b83261e6' => 
    array (
      0 => 'D:\\wamp\\pro\\wamp\\www\\smartyDemo01\\tpl\\test.html',
      1 => 1508921094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f04f6dafc3b1_02071015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2531959f04f6dab5e99_93321653';
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

		
		<?php echo $_smarty_tpl->tpl_vars['tiaojieqi']->value;?>

	</body>
</html>
<?php }
}
