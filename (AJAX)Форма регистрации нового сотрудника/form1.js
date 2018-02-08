$(document).ready (function () {    						//функция начинает загружаться после полной загрузки web страницы
	$("select[name='otdel']").bind("change", function () {  //выбираем select otdel, подключаем обработчик bind при изменении поля select происходит подключение функции
		$("select[name='doljnost']").empty();  //очистка поля doljnost при выборе нового otdel
		$.get("doljnostCheck.php", {otdel: $//передаем файлу doljnostCheck.php через метод .get значение val переменной otdel select
			("select[name='otdel']").val()}, function (data) {//при успешном получении данных data срабатывает функция
				data = JSON.parse(data); //происходит раскодировка данных data через формат JSON
				for(var id in data) { //в этом цикле перебераем полученные данные data
					$("select[name='doljnost']").append($("<option value=''" + id + ">" + data[id] + "</option>"));// и по очереди присваиваем новые должности для каждого пункта 
					}
				});
			});
		});