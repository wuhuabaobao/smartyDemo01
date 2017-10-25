<?php
	
	require('/smarty/Smarty.class.php');
	$smarty = new Smarty();
	
//	五配置 两方法
	
	$smarty->left_delimiter="{";//左定界符
	$smarty->right_delimiter="}";//右定界符
	
//	tpl  存放smarty模板文件的地址
	$smarty->template_dir="tpl";//html模板的位置
	
//	template_c这个文件，在smarty编写的时候用到了很多smarty自己的语法，这些东西并不能为php编译和运行，
//	那么首先需要smarty自己对它进行编译，编译成php能够处理的语句，然后再执行，这样一来会消耗一些时间和资源，
//	为了避免时间和资源的浪费，会将编译好的文件放在compile_dir里，如果下次再用到这个模板，又没有任何的更改，
//	就不需要再次进行编译，直接从compile_dir里去取之前编译好的文件即可。
	$smarty->compile_dir="template_c";//模板编译生成的文件目录
	$smarty->cache_dir="cache";//缓存目录
	
//	要让上面的	$smarty->cache_dir="cache"; 生效 ，必须先设置好smarty下面的两个属性
//测试阶段关闭 缓存
	$smarty->caching=false;//开始缓存
	$smarty->cache_lifetime=120;//缓存时间
	
	
	
	
	
	
	
	
	
	
	
	
//	assign是在smarty里的模板里给变量赋值     此处是字符串的赋值
	$smarty->assign('articletitle','文章标题-Smartydemo01');

	
//数组的赋值
	$baby = array('name'=>'wuhua','age'=>'17month');
	$smarty->assign('baby',$baby);
	
//二维数组的赋值
	$baby2 = array('babyInfo' => array('name'=>'XXXX','age'=>'?????month'));
	$smarty->assign('baby2',$baby2);
	
	
//变量调节器	

	$smarty->assign('tiaojieqi','i am wuhua\'s father');

	
	
	$smarty->display('test.html');

?>