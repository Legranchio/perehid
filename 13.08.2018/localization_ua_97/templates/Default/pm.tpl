[pmlist]
<div class="pheading"><h2>Перелік повідомлень</h2></div>
[/pmlist]
[newpm]
<div class="pheading"><h2>Нове повідомлення</h2></div>
[/newpm]
[readpm]
<div class="pheading"><h2>Ваші повідомлення</h2></div>
[/readpm]
<div class="basecont">
<div class="dpad">
<div class="pm_status">
	<div class="pm_status_head">Стан папок</div>
	<div class="pm_status_content">Папки персональних повідомлень заповнені на:
{pm-progress-bar}
{proc-pm-limit}% від ліміту ({pm-limit} повідомлень)
	</div>
</div>
<div style="padding-top:10px;">[inbox]Вхідні повідомлення[/inbox]<br /><br />
[outbox]Надіслані повідомлення[/outbox]<br /><br />
[new_pm]Надіслати повідомлення[/new_pm]</div>
</div><br />
<div class="clr"></div>
<br />
[pmlist]
<div class="dpad">{pmlist}</div>
[/pmlist]
[newpm]
<div class="baseform">
	<table class="tableform">
		<tr>
			<td class="label">
				Кому:
			</td>
			<td><input type="text" name="name" value="{author}" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">
				Тема:<span class="impot">*</span>
			</td>
			<td><input type="text" name="subj" value="{subj}" class="f_input" /></td>
		</tr>
		<tr>
			<td class="label">
				Повідомлення:<span class="impot">*</span>
			</td>
			<td class="editorcomm">
			{editor}<br />
			<div class="checkbox"><input type="checkbox" id="outboxcopy" name="outboxcopy" value="1" /> <label for="outboxcopy">Зберегти повідомлення в папці "Надіслані"</label></div>
			</td>
		</tr>
		[sec_code]
		<tr>
			<td class="label">
				Код:<span class="impot">*</span>
			</td>
			<td>
				<div>{sec_code}</div>
				<div><input type="text" name="sec_code" id="sec_code" style="width:115px" class="f_input" /></div>
			</td>
		</tr>
		[/sec_code]
		[recaptcha]
		<tr>
			<td class="label">
				Введіть два слова, зазначених на зображенні:<span class="impot">*</span>
			</td>
			<td>
				<div>{recaptcha}</div>
			</td>
		</tr>
		[/recaptcha]
		[question]
			<tr>
				<td class="label">
					Запитання:
				</td>
				<td>
					<div>{question}</div>
				</td>
			</tr>
			<tr>
				<td class="label">
					Відповідь:<span class="impot">*</span>
				</td>
				<td>
					<div><input type="text" name="question_answer" id="question_answer" class="f_input" /></div>
				</td>
			</tr>
		[/question]
	</table>
	<div class="fieldsubmit">
		<button type="submit" name="add" class="fbutton"><span>Надіслати</span></button>
		<input type="button" class="fbutton" onclick="dlePMPreview()" title="Перегляд" value="Перегляд" />
	</div>	
</div>
[/newpm]
[readpm]
<div class="bcomment">
	<div class="dtop">
		<div class="lcol"><span><img src="{foto}" alt=""/></span></div>
		<div class="rcol">
			<span class="reply">[reply]<b>Відповісти</b>[/reply]</span>
			<ul class="reset">
				<li><h4>{author}</h4></li>
				<li>{date}</li>
			</ul>
			<ul class="cmsep reset">
				<li>Група: {group-name}</li>
				<li>ICQ: {icq}</li>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
	<div class="cominfo"><div class="dpad">
		<div class="comedit">
			<ul class="reset">
				<li>[complaint]Поскаржитися[/complaint]</li>
				<li>[ignore]Ігнорувати[/ignore]</li>
				<li>[del]Видалити[/del]</li>
			</ul>
		</div>
		<ul class="cominfo reset">
			<li>Реєстрація: {registration}</li>
			<li>Коментарів: {comm-num}</li>
			<li>Публікацій: {news-num}</li>
		</ul>
	</div>
	<span class="thide">^</span>
	</div>
	<div class="dcont">
		<h3 style="margin-bottom: 0.4em;">[reply]{subj}[/reply]</h3>
		{text}
		[signature]<br clear="all" /><div class="signature">--------------------</div><div class="slink">{signature}</div>[/signature]
		<div class="clr"></div>
	</div>
</div>
[/readpm]
</div>