<?php
// 设置utf-8编码
header('Content-Type:text/html;charset=utf-8');
// 网站根目录
define('ROOT_PATH', dirname(__FILE__));
// 模板文件目录
define('TPL_DIR', ROOT_PATH.'/templates/');
// 编译文件目录
define('TPL_C_DIR', ROOT_PATH.'/templates_c/');
// 缓存文件目录
define('CACHE', ROOT_PATH.'/cache/');
// 引入模板类
require ROOT_PATH.'/includes/Templates.class.php';
// 实例化模板类
$tpl = new Templates();

?>