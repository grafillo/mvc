<?//отображение формы входа?>
<div align="center">
	<font color="red"><? echo $_SESSION['verify'];?></font>
	<form action="<? echo SITE.'/admin'; ?>" method="post" >
		Логин<br>
		<input type="text" name ="login" value="<? echo $_POST['login'];?>">
		<br>Пароль<br>
		<input type="password" name ="password" >
		<br>
		<input type="submit" value="Войти">


</div>