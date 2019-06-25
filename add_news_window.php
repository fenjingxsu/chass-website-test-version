<table>
	<tr><td>新增公告</td><td colspan="2"></td><td><button onclick="close_add()">關閉</button></td></tr>
	<tr><td></td><td>標題</td><td colspan=""><input name="input_add_title" form="add_form" /></td><td></td></tr>
	<tr><td></td><td>網址</td><td colspan=""><input name="input_add_link" form="add_form"/></td><td></td></tr>
	<tr><td></td><td>時間</td><td colspan=""><input name="input_add_time" form="add_form"/></td><td></td></tr>
	<tr><td colspan="3"></td><td><button id="add_confirm_btn" type="submit" onclick="close_add(); refresh();" form="add_form">確定</button></td></tr>
</table>