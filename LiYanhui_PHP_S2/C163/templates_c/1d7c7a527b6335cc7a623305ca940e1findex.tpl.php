<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>自定义模板</title>
</head>
<body>

<!-- 我是静态注释 -->

<?php /* 我是PHP中的注释，在静态中是看不到的，只有在PHP源代码才可以看到 */ ?>

<?php echo $this->vars['name'];?><?php echo $this->vars['content'];?>

<br />

<?php if ($this->vars['a']) {?>
	<div>我是1号界面</div>
<?php } else {?>
	<div>我是2号界面</div>
<?php } ?>

</body>
</html>