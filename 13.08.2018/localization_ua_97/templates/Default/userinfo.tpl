<div class="pheading">
	<h2 class="lcol">Користувач: <span>{usertitle}</span></h2>
	<div class="ratebox"><div class="rate">{rate}</div><span>Рейтинг:</span></div>
	<div class="clr"></div>
</div>
<div class="basecont"><div class="dpad">
	<div class="userinfo">
		<div class="lcol">
			<div class="avatar"><img src="{foto}" alt=""/></div>
			<ul class="reset">
				<li>{email}</li>
				[not-group=5]
				<li>{pm}</li>
				[/not-group]
			</ul>
		</div>
		<div class="rcol">
			<ul>
				<li><span class="grey">Повне ім'я:</span> <b>{fullname}</b></li>
				<li><span class="grey">Група:</span> {status} [time_limit]&nbsp;В групі до: {time_limit}[/time_limit]</li>
				<li><span class="grey">ICQ:</span> <b>{icq}</b></li>
			</ul>
			<ul class="ussep">
				<li><span class="grey">Кількість публікацій:</span> <b>{news-num}</b> [{news}][rss]<img src="{THEME}/images/rss.png" alt="rss" style="vertical-align: middle; margin-left: 5px;" />[/rss]</li>
				<li><span class="grey">Кількість коментарів:</span> <b>{comm-num}</b> [{comments}]</li>
				<li><span class="grey">Дата реєстрації:</span> <b>{registration}</b></li>
				<li><span class="grey">Останнє відвідування:</span> <b>{lastdate}</b></li>
				<li><span class="grey">Статус:</span> [online]<img src="{THEME}/images/online.png" style="vertical-align: middle;" title="Користувач Онлайн" alt="Користувач Онлайн" />[/online][offline]<img src="{THEME}/images/offline.png" style="vertical-align: middle;" title="Користувач offline" alt="Користувач offline" />[/offline]</li>
			</ul>
			<ul class="ussep">
				<li><span class="grey">Місце проживання:</span> {land}</li>
				<li><span class="grey">Про себе:</span> {info}</li>
			</ul>
			<span class="small">[not-logged] [ {edituser} ] [/not-logged]</span>
		</div>
		<div class="clr"></div>
	</div>
</div></div>
[not-logged]
<div id="options" style="display:none;">
	<br /><br />
	<div class="pheading"><h2>Редагування профілю</h2></div>
	<div class="baseform">
		<table class="tableform">
			<tr>
				<td class="label">Ваше ім'я:</td>
				<td><input type="text" name="fullname" value="{fullname}" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Ваш E-Mail:</td>
				<td><input type="text" name="email" value="{editmail}" class="f_input" /><br />
				<div class="checkbox">{hidemail}</div>
				<div class="checkbox"><input type="checkbox" id="subscribe" name="subscribe" value="1" /> <label for="subscribe">Відмовитися від підписок на новини</label></div></td>
			</tr>
			<tr>
				<td class="label">Місце проживання:</td>
				<td><input type="text" name="land" value="{land}" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Перелік ігнорованих користувачів:</td>
				<td>{ignore-list}</td>
			</tr>
			<tr>
				<td class="label">Номер ICQ:</td>
				<td><input type="text" name="icq" value="{icq}" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Старе гасло:</td>
				<td><input type="password" name="altpass" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Нове гасло:</td>
				<td><input type="password" name="password1" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Повторіть:</td>
				<td><input type="password" name="password2" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label" valign="top">Блокування по IP:<br />Ваша IP: {ip}</td>
				<td>
				<div><textarea name="allowed_ip" style="width:98%;" rows="5" class="f_textarea">{allowed-ip}</textarea></div>
				<div>
					<span class="small" style="color:red;">
					* Увага! Будьте уважні при зміні даних налаштувань.
					Доступ до Вашого облікового запису буде можливим виключно з тієї IP-адреси чи підмережі, яку Ви зазначите.
					Ви можете зазначити декілька IP-адрес, по одній адресі в кожному рядку.
					<br />
					Приклад: 192.48.25.71 або 129.42.*.*</span>
				</div>
				</td>
			</tr>
			<tr>
				<td class="label">Аватар:</td>
				<td>
				<input type="file" name="image" class="f_input" /><br />
				<div class="checkbox"><input type="checkbox" name="del_foto" id="del_foto" value="yes" /> <label for="del_foto">Видалити аватар</label></div>
				</td>
			</tr>
			<tr>
				<td class="label">Про себе:</td>
				<td><textarea name="info" style="width:98%;" rows="5" class="f_textarea">{editinfo}</textarea></td>
			</tr>
			<tr>
				<td class="label">Підпис:</td>
				<td><textarea name="signature" style="width:98%;" rows="5" class="f_textarea">{editsignature}</textarea></td>
			</tr>
			{xfields}
		</table>
		<div class="fieldsubmit">
			<input class="fbutton" type="submit" name="submit" value="Надіслати" />
		</div>
	</div>
</div>
[/not-logged]