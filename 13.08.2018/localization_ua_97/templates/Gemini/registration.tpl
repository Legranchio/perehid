<h2 class="heading">
	[registration]Реєстрація нового користувача[/registration]
	[validation]Оновлення профілю користувача[/validation]
</h2>
<div class="brdform">
	<div class="baseform">
		<table class="tableform">
			<tr>
				<td colspan="2">
		[registration]
				<b>Вітаємо Вас, шановний відвідувачу нашого сайту!</b><br />
				Реєстрація на нашому сайті дозволить Вам бути його повноцінним учасником.
				Ви зможете додавати новини на сайт, залишати свої коментарі, переглядати прихований текст та багато іншого.
				<br />У випадку виникнення проблем з реєстрацією, зверніться до <a href="/index.php?do=feedback">адміністратора</a> сайту.
		[/registration]
		[validation]
				<b>Шановний відвідувачу,</b><br />
				Ваш обліковий запис був успішно створений на нашому сайті,
				проте інформація про Вас є не повною, тому заповніть додаткові поля у Вашому профілі.
		[/validation]
				</td>
			</tr>
		[registration]
			<tr>
				<td class="label">
					Логін:<span class="impot">*</span>
				</td>
				<td>
					<input type="text" name="name" id='name' style="width:175px; margin-right: 6px; float: left;" class="f_input" /><input class="bbcodes" style="font-size: 11px; float: left;" title="Перевірити доступність логіну для реєстрації" onclick="CheckLogin(); return false;" type="button" value="Перевірити ім'я" />
					<br /><br /><div id='result-registration'></div>
				</td>
			</tr>
			<tr>
				<td class="label">
					Гасло:<span class="impot">*</span>
				</td>
				<td><input type="password" name="password1" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">
					Повторіть гасло:<span class="impot">*</span>
				</td>
				<td><input type="password" name="password2" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Ваш E-Mail:<span class="impot">*</span></td>
				<td><input type="text" name="email" class="f_input" /></td>
			</tr>
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
				<div><input type="text" name="question_answer" class="f_input" /></div>
			</td>
		</tr>
		[/question]
			[sec_code]
			<tr>
				<td class="label">
					Введіть код<br />з картинки:<span class="impot">*</span>
				</td>
				<td>
					<div>{reg_code}</div>
					<div><input type="text" name="sec_code" style="width:115px" class="f_input" /></div>
				</td>
			</tr>
			[/sec_code]
			[recaptcha]
			<tr>
				<td class="label">
					Введіть два слова, зазначених на зображенні: <span class="impot">*</span>
				</td>
				<td>
					<div>{recaptcha}</div>
				</td>
			</tr>
			[/recaptcha]
		[/registration]
		[validation]
			<tr>
				<td class="label">Ваше ім'я:</td>
				<td><input type="text" name="fullname" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Місце проживання:</td>
				<td><input type="text" name="land" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Номер ICQ:</td>
				<td><input type="text" name="icq" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Аватар:</td>
				<td><input type="file" name="image" style="width:304px; height:18px" class="f_input" /></td>
			</tr>
			<tr>
				<td class="label">Про себе:</td>
				<td><textarea name="info" style="width: 98%;" rows="8" class="f_textarea" /></textarea></td>
			</tr>
			{xfields}
		[/validation]
		</table>
		<div class="fieldsubmit">
			<button name="submit" class="fbutton" type="submit"><span>Надіслати</span></button>
		</div>
	</div>
</div>