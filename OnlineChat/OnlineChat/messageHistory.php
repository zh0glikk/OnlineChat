<?php 
	include 'connection.php';

		$query = "SELECT * FROM  messages";
		$result=$conn->query($query);
		$var="xxxxxx";

	// выбрать из таблицы все сообщения c логинами, их количество -> передать массив сообщений и их количество в джс. Создать n-ное кол-во блоков и записать в них текст.

?>