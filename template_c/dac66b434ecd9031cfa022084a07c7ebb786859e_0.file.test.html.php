<?php
/* Smarty version 3.1.30, created on 2017-10-26 17:42:38
  from "E:\wamp\pro\wamp\www\smartyDemo01\tpl\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f2026e637dc4_13900097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac66b434ecd9031cfa022084a07c7ebb786859e' => 
    array (
      0 => 'E:\\wamp\\pro\\wamp\\www\\smartyDemo01\\tpl\\test.html',
      1 => 1509032511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:yinru.html' => 1,
  ),
),false)) {
function content_59f2026e637dc4_13900097 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'E:\\wamp\\pro\\wamp\\www\\smartyDemo01\\smarty\\plugins\\modifier.capitalize.php';
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
<br />
		
		调节器————escape转码，escape后面跟的是转码方式，此处是url转码方式,目的是不让url里的一些符号对php后续的一些处理产生影响<br />
		<?php echo rawurlencode($_smarty_tpl->tpl_vars['taobaoUrl']->value);?>
<br />
		
		调节器————lower全部转成小写  <br />
		<?php echo mb_strtolower($_smarty_tpl->tpl_vars['daxiaoxie']->value, 'UTF-8');?>
<br />
		调节器————upper全部转成大写  <br />
		<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['daxiaoxie']->value, 'UTF-8');?>
 <br />
		
		调节器————nl2br转换成br换行符<br />
		<?php echo nl2br($_smarty_tpl->tpl_vars['huanhangfu']->value);?>
<br />
		
		smarty判断句式：<br />
		<?php if ($_smarty_tpl->tpl_vars['score']->value > 90) {?>
		你的成绩是：<br />
		优秀
		<?php } elseif ($_smarty_tpl->tpl_vars['score']->value > 60) {?>
		及格
		<?php } else { ?>
		不及格
		<?php }?>
		
		<br />
		
		测试数组的单一键值输出:
		<?php echo $_smarty_tpl->tpl_vars['stu']->value[0]['name'];?>

		<br />
		测试循环foreach方式 <br />
		
		
		<!--$num=>可以没有，即 直接写  foreach $fruit as $fruitName 也是可以的-->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fruit']->value, 'fruitName', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['fruitName']->value) {
?>
			第<?php echo $_smarty_tpl->tpl_vars['num']->value+1;?>
个水果是:<?php echo $_smarty_tpl->tpl_vars['fruitName']->value;?>

		<br />
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		
		
		<br />
		
		<!--此处的$num=>$stuInfo 可以不要$num，直接携程$stuInfo，如果没有$num就是在下面取不到数组的索引值了而已-->
		<!--$stu是被循环的数组 $stuInfo是每次循环输出的值-->
		<!--因为此处的$stu是索引类型的二维数组，所以每次循环出来的$stuInfo就是一个一维数组，所以循环语句内部的取值就变成了<?php echo $_smarty_tpl->tpl_vars['stuInfo']->value['name'];?>
这样了-->
		<!--此处的二维数组$stu是一个索引形式的数组，所以没有$key=>$value一说，如果是关联数组  此处的$num就相当于是键名了-->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stu']->value, 'stuInfo', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['stuInfo']->value) {
?>
			第<?php echo $_smarty_tpl->tpl_vars['num']->value+1;?>
位同学的资料是：<?php echo $_smarty_tpl->tpl_vars['stuInfo']->value['name'];?>

			<?php echo $_smarty_tpl->tpl_vars['stuInfo']->value['sex'];?>

			<br />
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		
		<br />
		
		<!--上面提到的关联类型的二维数组的输出案例-->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nbaStar']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
			<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
信息：<br />
			<?php if ($_smarty_tpl->tpl_vars['key']->value == 'team') {?>
			位置：<?php echo $_smarty_tpl->tpl_vars['value']->value['position'];?>
<br />
			名称：<?php echo $_smarty_tpl->tpl_vars['value']->value['teamName'];?>
 <br />
			<?php } else { ?>
			名字：<?php echo $_smarty_tpl->tpl_vars['value']->value['playerName'];?>
<br />
			号码：<?php echo $_smarty_tpl->tpl_vars['value']->value['number'];?>
 <br />
			<?php }?>
		<?php
}
} else {
?>

		<!--当数组为空时的默认输出信息-->
			没有相关信息
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		
		<!--smarty的文件引入 默认只有file一个属性  其他的属性都是给被引入的文件传值，注意是被引入的文件-->
		<!--传过去的sitename这个值将 只能被  yinru.html这个文件所使用，注意是只能被，连test.html都不能使用，最后都通过test.php输出出来-->
		<!--如果yinru.html文件中有sitename的同名变量，将被传过去的sitename替代-->
		<?php $_smarty_tpl->_subTemplateRender("file:yinru.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sitename'=>"陈波的测试站"), 0, false);
?>

		
		
		<!--注意此处传递的参数是一个数组类型的变量-->
		<?php echo $_smarty_tpl->tpl_vars['myObj']->value->meth1(array('苹果','熟了'));?>

		
		<br />
		
		
		
		<!--php内置函数代替 smarty调机器-->
		<?php echo $_smarty_tpl->tpl_vars['time']->value;?>

		<br />
		<!--此处用php内置的date函数来修改变量的格式，没有用smarty内置的，因为smarty在这方便麻烦，不方便-->
		<!--在使用php内置函数的时候，与调节器不同，注意注意注意，内置函数的情况是，函数的第一个参数是放在竖线前面的，第二个参数
		第三个参数是依次前面加上冒号后 放到 内置函数名的后面，如下-->
		<?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['time']->value);?>

		<!--而不是按调机器的思维：<?php echo date($_smarty_tpl->tpl_vars['time']->value,"Y-m-d");?>
  注意 不是这样，应该是上面那样-->
		<br />
		
		<!--str_replace把 abcdef中的d换成了h-->
		<?php echo str_replace('d','h',$_smarty_tpl->tpl_vars['str']->value);?>

		
		<br />
		
		<!--smarty自定义函数	-->
		
		<?php echo test(array('p1'=>'华为手机','p2'=>'360手机'),$_smarty_tpl);?>

		
		
	</body>
</html>


<?php }
}
