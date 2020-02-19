<table class=tableAdmin>
<?//вход в админку 
while($myrow = mysqli_fetch_array($data))
	echo '<tr><td><img  src="'.$myrow['image'].'" alt="" width="100" height="" class="leftimg"></td><td><p><b>'
	.$myrow['header'].'</b></p></td><td width=150><a href='.SITE.'/admin/topic/'.$myrow['id'].
	'>Изменить</a> / <a href='.SITE.'/admin/del/'.$myrow['id'].'>Удалить</a></td></tr>';
?>
</table>
<table align=center><td><a href="<?php echo SITE;?>/admin/add/" align=center>Добавить новость</a> 
/ <a href="<?php echo SITE;?>/admin/exit/" >Выход</a></td></table>