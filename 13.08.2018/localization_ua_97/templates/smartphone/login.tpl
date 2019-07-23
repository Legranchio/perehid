[not-group=5]
<div class="panel">
<div style="padding-top:2px; padding-left:5px;">Привіт, <b>{login}</b>!</div>
<div style="padding-top:5px; padding-bottom:5px; padding-left:22px;">
    <a href="{profile-link}">Мій профіль</a><br />
    <a href="{pm-link}">ПП ({new-pm} | {all-pm})</a><br />
	<a href="{favorites-link}">Мої закладки</a><br />
	<a href="{stats-link}">Статистика</a><br />
	<a href="{newposts-link}">Не прочитане</a>
	</div>
<div style="padding-top:2px; padding-bottom:5px;"><a href="{logout-link}"><b>Завершити сеанс!</b></a></div>
<div style="padding-bottom:5px;">Ви переглядаєте мобільну версію сайту. <a href="/index.php?action=mobiledisable">Перейти на повну версію сайту.</a></div>
</div>
[/not-group]
[group=5]
<div class="panel"><form method="post">
              {login-method}&nbsp;&nbsp;&nbsp;<input type="text" name="login_name" style="width:103px; font-family:tahoma; font-size:11px;"><br />
              Гасло: <input type="password" name="login_password" style="width:103px; font-family:tahoma; font-size:11px;"> <input type="submit" value=" Увійти "><br />
					<input name="login" type="hidden" id="login" value="submit">
			  </form>
              <div style="padding-top:8px; padding-bottom:5px;"><a href="{registration-link}">Реєстрація на сайті!</a> <a href="{lostpassword-link}">Забули гасло?</a></div>
			  <div style="padding-bottom:5px;">Ви переглядаєте мобільну версію сайту. <a href="/index.php?action=mobiledisable">Перейти на повну версію сайту.</a></div>
</div>
[/group]