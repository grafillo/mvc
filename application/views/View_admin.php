
<div align="center">
    <font color="red"><?if ($data!=""){echo $data;}?></font>
<form action="<? echo SITE."/admin/check/1"; ?>" method="post" >
    Логин <br>
        <input type="text" name ="login" >
        <br>Пароль<br>
        <input type="password" name ="password" ><br>
        <input type="submit" value="Войти">
    </form>
</div>