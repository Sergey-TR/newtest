<?php

/*Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.*/

//ВЫВОЖУ ДАТУ, МЕСЯЦ, ГОД

$year = date('d M Y');

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<footer style="height: 70px;
    font-size: 20px;
    font-style: italic;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-right: 20px;
    background-color: #4169E1;">
	<i>Все права защищены</i> &copy;&nbsp; <?php echo $year; ?>
	</footer>
</body>
</html>