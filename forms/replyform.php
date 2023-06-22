<form method="post" id="create_post">
    <input type="hidden" value="<?php echo $_GET['thread'];?>" name="reply_id">
    <p>Name (Optional)</p>	
    <textarea name="msg_un" id="msg_un" rows="1"></textarea>
    <p>Message<span class="red">*</span></p>
    <textarea name="msg_txt" required="required" id="msg_txt" rows="3"></textarea>
    <br>
    <button id="btn_mb">Post Message</button>
    <p id="output">&nbsp;</p>
</form>