<html>
<head>
	<title>Форма добавления нового пользователя</title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="form1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="form1.js"></script>

</head>
<body>
	<div class="form" container>
		<h2 class="h2">Добавление нового пользователя</h2>
		<form class="form1" action="#" method="post">
			<label class="form1__label" for="fio"> Введите ФИО нового сотрудника:
				<input class="form1__input" type="text" name="fio" id="fio" placeholder="ФИО" autofocus required>
			</label>
			<br><label class="form1__label" for="login"> Введите логин нового сотрудника:
				<input class="form1__input" type="text" name="login" id="login" placeholder="Логин" required>
			</label>
			<br>
			<label class="form1__label" for="password"> Введите пароль нового сотрудника:
				<input class="form1__input" type="password" name="password" id="password" placeholder="Пароль" required>
			</label>
			<br>
			<label class="form1__label" for="otdel"> Вберите отдел нового сотрудника:
				<select class="form1__input" name="otdel" id="otdel" required size="1">
              		<option value="0" selected></option>
              		<option value="1">Экономический отдел</option>
					<option value="2">Конструкторский отдел</option>
            	</select>
			</label>
            <br>
			<label class="form1__label" for="doljnost"> Вберите должность нового сотрудника:
				<select class="form1__input" name="doljnost" id="doljnost" required size="1">
              		<option value="0" selected></option>
            	</select>	
            <br>
			</label>
			<input class="form1__button" type="submit"  id="submit" value="Создать">
			<input class="form1__button" type="reset" id="reset" value="Очистить">
		</form>
	</div>
</body>
</html>
