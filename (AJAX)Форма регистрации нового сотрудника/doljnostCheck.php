<?php
	if($_GET["otdel"] == 1) echo json_encode (array ("1" => "Главный бухгалтер", "2" => "Экономист"));
	else if ($_GET["otdel"] == 2) echo json_encode (array ("3" => "Главный инженер", "4" => "Инженер конструктор"));
?>