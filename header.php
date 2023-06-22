<?php
if (!isset($_SESSION['uuid'])) {
	function guidv4($data = null) {
		$data = $data ?? random_bytes(16);
		assert(strlen($data) == 16);
		$data[6] = chr(ord($data[6]) & 0x0f | 0x40);
		$data[8] = chr(ord($data[8]) & 0x3f | 0x80);
		return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
	}
	$_SESSION['uuid'] = guidv4();	
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<BASE href="forum">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page_title;?></title>
	<link rel="stylesheet" href="/forum/style/default.css?<?php echo time(); ?>">
	<script src="/libs/jquery.js"></script>
