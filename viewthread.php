<?php 
	$page_title =  '>'.$_GET['thread'];
	include './header.php'
?>
<link rel="stylesheet" href=../style/thread.css?<?php echo time();?>">
<script src="../script/reply_script.js?<?php echo time();?>"></script>
<section id="mb_main">
<?php 
    global $id;
	$id = $_GET['thread'];
	echo $id;
	include './script/db_login.php';

	$sql = ("SELECT * FROM messageboard WHERE msg_id = '$id'");
	$query = $conn->query($sql);
    $op = $query->fetch_assoc();
	if(!$query || empty($op)) {
		header("Location: ../unavailable/".basename($_SERVER['REQUEST_URI']));
		return;
	}
	$tag = substr($op['uuid'], -6);
	echo '<div class="thread__content">';
	echo <<<EOF
		<div class="thread__header">
			<div class="thread__title">
					{$op['msg_top']} <h4 class="thread__id">&gt;<span id="postid">$id</span></h4>
			</div>
			<div class="thread__author">
				{$op['msg_un']}<span class="uuid">$tag</span>@{$op['msg_date']}
			</div>
		</div>
		<p class="content">{$op['msg_cnt']}</p>
	EOF;
	echo '</div>';
	$conn->close();
?>
<?php include './forms/replyform.php'?>
<div id="messageboard">
    <?php include "./script/reply_script.php";?>
</div>
</section>
<?php include 'footer.php'?>