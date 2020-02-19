<div id="topic">
<?//отображение новости
while($myrow = mysqli_fetch_array($data))
	echo '<h2>'.$myrow['header'].'</h2><p class="category"><a href="'.SITE."/news/show/".$myrow['category'].'">'.$this->getCategory($myrow['category']).'</a></p><p class="text">
    <img  src="'.$myrow['image'].'" alt="" width="100" height="" class="topicimg">'.$myrow['alltext'].'</p><p class="autor">'.
	$myrow['autor']."</p>";
?>
</div>
