$("#submit").bind("click", function () {
	$.ajax ({
		url: "check.php",
		type: "POST",
		data: ({name: $("#login").val()}),
		dataType: "html",
		success: function (data) {
			if(data == "success")
				alert("Имя пользователя введено верно");
			else
				alert("Имя пользователя введено неверно");
		};
	});
});

