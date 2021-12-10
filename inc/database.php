<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$conn -> set_charset("utf8");
		return $conn;
	} catch (Exception $e) {
		echo "<h3> Ocorreu um erro: " . $e->getMessage() . "</h3>";
		return null;
	}
}

function close_database($conn) {
	try {
		mysqli_close($conn);
	} catch (Exception $e) {
		echo "<h3> Ocorreu um erro: " . $e->getMessage() . "</h3>";
	}
}
?>
