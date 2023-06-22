$(function showMyData(){
	$("#messageboard").load("./script/board_script.php");
	window.setTimeout( showMyData, 10000);
});
$(function () {
	$("#btn_mb").on("click", function () {
		$.ajax({
			url: './script/post_script.php',
			type: 'POST',
			data: $('#create_post').serialize(),
			success: function (data) {
                $("#messageboard").load("./script/board_script.php");
			}
		});
		$('#msg_txt').val('')
		$('#msg_cnt').val('');
		return false;
	});
});