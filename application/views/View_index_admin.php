
<b>Сортировать по:</b>
<form action="<?php echo SITE."/admin/page/".$currentpage."/";?>" method="get" >
    <select name="s">
        <option value="1"<?if($typesort=="?s=1"){echo "selected";}?> >Имя пользователя по возрастанию</option>
        <option value="2"<?if($typesort=="?s=2"){echo "selected";}?> >Имя пользователя по убыванию</option>
        <option value="3"<?if($typesort=="?s=3"){echo "selected";}?>>Email по возрастанию</option>
        <option value="4"<?if($typesort=="?s=4"){echo "selected";}?>>Email по убыванию</option>
        <option value="5"<?if($typesort=="?s=5"){echo "selected";}?>>Статус по возрастанию</option>
        <option value="6"<?if($typesort=="?s=6"){echo "selected";}?>>Статус по убыванию</option>
    </select>
    <input type="submit"  value="Отсортировать" />
</form>

<?
if( $_SESSION['admin']=="yes") {
    while ($myrow = mysqli_fetch_array($data)) {
        echo '<div class="prevNews">Имя пользователя:' . $myrow['username'] . "<br>Email:" . $myrow['email'] .
            "<br> Статус:";

        if ($myrow['status'] == "в работе") {
            echo "<font color='green'>" . $myrow['status'] . "</font>";
        } else {
            echo "<font color='red'>" . $myrow['status'] . "</font>";
        };


        echo "<br><font size='5'>Текст задачи:</font><br>
        <form method=post action=".SITE."/admin/change/".$myrow['id']."/".$currentpage."/".$typesort."><textarea name=text>"
            . $myrow['text'] . "</textarea><br>
<input type=checkbox name=status value=complete>Выполнено<Br>
<input type=submit value=Сохранить >
</form>";
        if ($myrow['admin_edit'] != "0") echo "<font color='red'>".$myrow['admin_edit']."</font>";
        echo "<hr />";
    }

    echo "<p align='center'>";
    echo "Cтраница ".$currentpage."&ensp;</p><p align='center'>";
    for ($page=1; $page<=$totalpages; $page++)
        echo "<a href=".SITE.'/admin/page/'.$page."/"."$typesort>".$page."</a>&ensp;";
    echo "</p>";

}else{

echo "Войдите в панель администрации";
}
?>