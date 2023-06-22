<?php
    global $id;
    if (empty($id)) {
        $id = $_GET['id'];
    }
	
    require 'db_login.php';
	$sql = ("SELECT * FROM messageboard WHERE reply_id = '$id' ORDER BY msg_id DESC;");
	$query = $conn->query($sql);
    if (!$query) {
        return;
    }
    while($reply = $query->fetch_assoc()) {
        $tag = substr($reply['uuid'], -6);
        $replied = '>>'.$reply['reply_id'];
        $un = $reply['msg_un'];
        $content = $reply['msg_cnt'];
        $datetime = $reply['msg_date'];
		echo <<<EOF
            <div class="message__reply">
                <p class="message__reply--author">$un<span class="uuid">$tag</span>@$datetime:</p>
                <p>$replied</p>
                <p class="message__reply--content content">$content</p>
            </div>
        EOF;
	}
    $conn->close();
?>
