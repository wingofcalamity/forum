<?php 
	require 'db_login.php';
	$sql = ("SELECT * FROM messageboard WHERE msg_type = 'post' ORDER BY msg_id DESC;");
	$query = $conn->query($sql);

	echo '<div class="id_content">';
    while($row = $query->fetch_assoc()) {
		$tag = substr($row['uuid'], -6);
        echo <<<EOF
		<article class="post">
			<div class="post__topic">
				<a class="msg_id" href="./thread/{$row['msg_id']}">
					&gt{$row['msg_id']} - {$row['msg_top']}</a>
				</div>
			<div class="post__spacer"></div>
			<div class="post__author">
				{$row['msg_un']}<span class="uuid">$tag</span><span class="post__datetime">@{$row['msg_date']}</span>
			</div>
		</article>
		EOF;
    }
	echo '</div>';
	$conn->close();
?>