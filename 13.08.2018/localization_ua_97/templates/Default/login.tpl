[not-group=5]
	<ul class="reset loginbox">
		<li class="loginava">
			<a href="{profile-link}">
				<img src="{foto}" alt="{login}" />
				<b>&nbsp;</b>
			</a>
		</li>
		<li class="loginbtn">
			<a class="lbn" id="logbtn" href="#"><b>{login}</b></a>
			<a class="thide lexit" href="{logout-link}">Вихід</a>
				<div id="logform" class="radial">
					<ul class="reset loginenter">
		[admin-link]<li><a href="{admin-link}" target="_blank"><b>Адмінпанель</b></a></li>[/admin-link]
					<li><a href="{profile-link}">Мій профіль</a></li>
					<li><a href="{favorites-link}">Мої закладки ({favorite-count})</a></li>
					<li><a href="{newposts-link}">Не прочитане</a></li>
					<li><a href="/?do=lastcomments">Останні коментарі</a></li>
					<li><a href="{stats-link}">Статистика</a></li>
				</ul>
			</div>
		</li>
		<li class="lvsep"><a href="{addnews-link}">Додати новину</a></li>
		<li class="lvsep"><a class="radial" href="{pm-link}">{new-pm}</a><a href="{pm-link}">Повідомлень</a></li>
	</ul>
[/not-group]
[group=5]
	<ul class="reset loginbox">
		<li class="loginbtn">
			<a class="lbn" id="logbtn" href="#"><b>Увійти</b></a>
			<form method="post" action="">
				<div id="logform" class="radial">
					<ul class="reset">
						<li class="lfield"><label for="login_name">{login-method}</label><input type="text" name="login_name" id="login_name" /></li>
						<li class="lfield lfpas"><label for="login_password">Гасло (<a href="{lostpassword-link}">Забули?</a>):</label><input type="password" name="login_password" id="login_password" /></li>
						<li class="lfield lfchek"><input type="checkbox" name="login_not_save" id="login_not_save" value="1"/><label for="login_not_save">&nbsp;Чужий комп'ютер</label></li>
						<li class="lbtn"><button class="fbutton" onclick="submit();" type="submit" title="Увійти"><span>Увійти</span></button></li>
					</ul>
					<input name="login" type="hidden" id="login" value="submit" />
				</div>
			</form>
		</li>
		<li class="lvsep"><a href="{registration-link}">Реєстрація</a></li>
	</ul>
[/group]