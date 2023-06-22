<?php

	session_start();
	date_default_timezone_set("CET");
	include 'db_login.php';
	$uuid = $_SESSION['uuid'];
	if (empty($_POST['msg_un'])) {
		$username = "Anon";
	} else {
		$username = htmlspecialchars($_POST['msg_un']);
	}
	if (empty($_POST['msg_cnt'])) {
		return;
	} else {
		$content = htmlspecialchars($_POST['msg_cnt']);
	}
	if (empty($_POST['msg_txt'])) {
		return;
	} else {
		$text = htmlspecialchars($_POST['msg_txt']);
	}
    $time = date('Y-m-d H:i:s');
	$type = 'post';
/* 
	pg_prepare($db, "my_query", 'INSERT INTO messageboard (msg_un,uuid,msg_top,msg_date,msg_cnt,msg_type) VALUES ($1,$2,$3, $4, $5, $6);');
    pg_execute($db, "my_query", array());
    pg_close($db);
*/
	$stmt = $conn->prepare("INSERT INTO messageboard (msg_un,uuid,msg_top,msg_date,msg_cnt,msg_type) VALUES (?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssss", $username, $uuid, $content, $time, $text, $type);
	$stmt->execute();
	$stmt->close();
	$conn->close();
?>
