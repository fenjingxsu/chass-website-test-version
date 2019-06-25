<table>
	<tr><td>公告編輯</td><td colspan="2"></td><td><button onclick="close_edit()">關閉</button></td></tr>
	<tr><td></td><td>標題</td><td colspan=""><input name="input_edit_title" form="edit_form" /></td><td></td></tr>
	<tr><td></td><td>網址</td><td colspan=""><input name="input_edit_link" form="edit_form"/></td><td></td></tr>
	<tr><td></td><td>時間</td><td colspan=""><input name="input_edit_time" form="edit_form"/></td><td></td></tr>
	<tr><td colspan="3"></td><td><button id="edit_confirm_btn" type="submit" onclick="close_edit(); refresh();" form="edit_form">確定</button></td></tr>
</table>