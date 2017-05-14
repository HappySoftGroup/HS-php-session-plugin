<?php
	//Copyright 2017 HappySoft
	//https://www.apache.org/licenses/LICENSE-2.0.html
	if (!isset($_SESSION['sessionstarted'])) {
		session_start();
		$_SESSION['sessionstarted'] = '';
		if (isset($_GET['develop'])) {
			echo "<script>console.log 'session is started';</script>";
		} else {}
	} else {
		if (isset($_GET['develop'])) {
			echo "<script>console.log 'session is already started';</script>";
		} else {}
	}
?>
