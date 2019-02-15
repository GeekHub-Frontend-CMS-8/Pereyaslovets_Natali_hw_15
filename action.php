<?php
	//еще не сделана проверка на пустые поля 
	//отсутствует запись в бд нескольких значений
	//кодировка
	if (isset($_POST['name']) && isset($_POST['second_name']) ){

		// Переменные с формы
		$name = $_POST['name'];
		$second_name = $_POST['second_name'];
		if(isset($_POST['gender']))
			{
				$gender = $_POST['gender'];
			}
		$age = $_POST['age'];
		if(isset($_POST['partner']))
			{
				$partner = $_POST['partner'];
			}
		$b_date = $_POST['b_date'];
		$family_status = $_POST['family_status'];
		$social_status = $_POST['social_status'];
		$live = $_POST['live'];
		if(isset($_POST['weekends']))
			{
				$weekends = $_POST['weekends'];
			}		
		$about_forms = $_POST['about_forms'];
		if(isset($_POST['label_book']))
			{
				$label_book = $_POST['label_book'];
			}
		$text_comm = $_POST['text_comm'];
		$position = $_POST['position'];
		$name_field = $_POST['name_field'];
		$mail = $_POST['mail'];
		if(isset($_POST['spam_cat']))
			{
				$spam_cat = $_POST['spam_cat'];
			}
		$task = $_POST['task'];
				
		// Параметры для подключения
		$db_host = "localhost"; 
		$db_user = "Natali"; // Логин БД
		$db_password = "o9cT3KHj28rmpkp1"; // Пароль БД
		$db_base = 'wp_form_hw_15'; // Имя БД
		$db_table = "form"; // Имя Таблицы БД
		
		// Подключение к базе данных
		$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

		// Если есть ошибка соединения, выводим её и убиваем подключение
		if ($mysqli->connect_error) {
			die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}
		
		$result = $mysqli->query("INSERT INTO ".$db_table." (name,second_name,gender,age,partner,b_date,family_status,social_status,live,weekends,about_forms,label_book,text_comm ,position,name_field,mail,spam_cat,task) VALUES ('$name','$second_name', '$gender', '$age', '$partner', '$b_date', '$family_status', '$social_status', '$live', '$weekends', '$about_forms', '$label_book', '$text_comm', '$position', '$name_field', '$mail', '$spam_cat', '$task')");
		
		if ($result == true){
			echo "Информация занесена в базу данных";
		}else{
			echo "Информация не занесена в базу данных";
		}
	}
?>