
<?php
    
    $name = 'Наталья';
    $age = '200';
    $email = 'fitasha@mail.ru';
    $city = 'Новосибирск';
    $about = 'Full stack разработчик';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Введение в PHP</title>
	<style>
	body {
       font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;  
    }
    </style>
</head>
<body>

	<h1>Добро пожаловать на страницу пользователя <?php echo $name; ?></h1>

    <dl>
	    <dt><h4>Имя</h4></dt>
	    <dd><?php echo $name; ?></dd>
	    <dt><h4>Возраст</h4></dt>
	    <dd><?php echo $age; ?></dd>
	    <dt><h4>Адрес электронной почты</h4></dt>
	    <dd><a href="mailto:fitasha@mail.ru"><?php echo $email; ?></a></dd>
	    <dt><h4>Город</h4></dt>
	    <dd><?php echo $city; ?></dd>
	    <dt><h4>О себе</h4></dt>
	    <dd><?php echo $about; ?></dd>
	</dl>	

</body>
</html>


