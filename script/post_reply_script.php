<?php
	session_start();
	date_default_timezone_set("CET");
	$uuid = $_SESSION['uuid'];
	include 'db_login.php';
	if (empty($_POST['msg_un'])) {
		$username = "Anon";
	} else {
		$username = htmlspecialchars($_POST['msg_un']);
	}
	if (empty($_POST['msg_txt'])) {
		return;
	} else {
		$text = htmlspecialchars($_POST['msg_txt']);
	}

	if (empty($_POST['reply_id'])) {
		return;
	} else {
		$replyid = $_POST['reply_id'];
	}
    $time = date('Y-m-d H:i:s');
	$type = 'reply';
	$stmt = $conn->prepare("INSERT INTO messageboard (msg_un,uuid,reply_id,msg_date,msg_cnt,msg_type) VALUES (?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssss", $username, $uuid, $replyid, $time, $text, $type);
	$stmt->execute();
	$stmt->close();
	$conn->close();
?>