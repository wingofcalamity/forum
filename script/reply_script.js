$(function showMyData(){
	let id = $('#postid').text();
	$("#messageboard").load("../script/reply_script.php?id=" + id);
	window.setTimeout( showMyData, 10000);  
});
$(function () {
	$("#btn_mb").on("click", function () {
		$.ajax({
			url: '../script/post_reply_script.php',
			type: 'POST',
			data: $('#create_post').serialize(),
			success: function (data) {
				let id = $('#postid').text();
                $("#messageboard").load("../script/reply_script.php?id=" + id);
			}
		});
		$('#msg_txt').val('')
		$('#msg_cnt').val('');
		return false;
	});
});