<div align="center">
    <h3> Добавить новую задачу </h3>
    <font color="red"> <?echo $array['error'];?> </font>
    <font color="red"><? echo $_SESSION['verify'];?></font>
    <form action="<? echo SITE.'/task/addtask'; ?>" method="post" >
        Введите имя пользователя <br>
        <input type="text" name ="username" value="<?echo $array['username'];?>">
        <br>Ваш емэил<br>
        <input type="text" name ="email" value=<?echo $array['email'];?>>
        <br>Ваше задание<br>
        <textarea name="task" id="task"><?echo $array['text'];?></textarea><br>
        <input type="submit" value="Создать">
    </form>

</div>