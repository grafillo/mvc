<html><head><meta http-equiv="content-type" content="text/html; charset=utf-8" /><link href="<?php echo SITE."/application/views/style.css";?> " rel="stylesheet" type="text/css"></head><body><div id="main"><div id="top">Задачи</div><div id="leftMenu"><a href="<?php echo SITE;?>">На главную</a>    <br><br>    <a href="<?php echo SITE;?>/task/newtask">Создать новое задание</a>    <br> <br>    <a href="<?php echo SITE;?>/admin/entry">Войти администратором </a></div><div id="content"><?php	include Q_PATH.'/application/views/View_'.$view.'.php';?>	</div></div>	</body></html>