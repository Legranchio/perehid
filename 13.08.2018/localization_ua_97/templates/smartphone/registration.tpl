<div class="panel">
    [registration]Реєстрація нового користувача[/registration][validation]Оновлення профілю користувача[/validation]
</div> 
<div class="post">
[registration]
<strong>Вітаємо вас, шановний відвідувачу нашого сайту!</strong><br /><br />Реєстрація на нашому сайті дозволить Вам бути його повноцінним учасником. Ви зможете додавати новини на сайт, залишати свої коментарі, переглядати прихований текст та багато іншого.<br /><br />У випадку виникнення проблем з реєстрацією, зверніться до адміністратора сайту.<br /><br />
[/registration]

[validation]
<strong>Шановний відвідувачу</strong>,<br /><br />Ваш аккаунт був зареєстрований на нашому сайті, однак інформація про Вас є неповною, тому заповніть додаткові поля у Вашому профілі.<br /><br />
[/validation]
</div>
<div class="panel">&nbsp;</div>
<table width="100%">
[registration]
                            <tr>
                              <td height="25" width="150">Логін:</td>
                              <td><input type="text" name="name" id='name' class="f_input" /><br /><input style="height:18px; font-family:tahoma; font-size:11px; border:1px solid #DFDFDF; background: #FFFFFF" title="Перевірити доступність логіну для реєстрації" onclick="CheckLogin(); return false;" type="button" value="Перевірити ім'я" /><div id='result-registration'></div></td>
                            </tr>
                            <tr>
                              <td height="25">Пароль:</td>
                              <td><input type="password" name="password1" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25">Повторіть пароль:</td>
                              <td><input type="password" name="password2" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25">Ваша E-Mail:</td>
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
                              <td colspan="2" height="25"><strong>Підтвердження коду безпеки</strong></td>
                            </tr>
                            <tr>
                              <td height="25">Код безпеки:</td>
                              <td>{reg_code}</td>
                            </tr>
                            <tr>
                              <td height="25">Введіть код:</td>
                              <td><input type="text" name="sec_code" style="width:115px" class="f_input" /></td>
                            </tr>
[/sec_code]
[recaptcha]
                      <tr>
                        <td colspan="2" height="25"><strong>Введіть два слова, зазначених на зображенні:</strong></td>
                      </tr>
                      <tr>
                        <td colspan="2" height="25">{recaptcha}</td>
                      </tr>
[/recaptcha]
[/registration]
[validation]
                            <tr>
                              <td height="25">Ваше Ім'я:</td>
                              <td><input type="text" name="fullname" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25"><nobr>Місце проживання:  </nobr></td>
                              <td><input type="text" name="land" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25">Номер ICQ:</td>
                              <td><input type="text" name="icq" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25">Фото:</td>
                              <td><input type="file" name="image" style="width:304px; height:18px" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25">Про себе:</td>
                              <td><textarea name="info" style="width:98%; height:70px" /></textarea></td>
                            </tr>
{xfields}
[/validation]
</div>
                            <tr>
                              <td height="25">&nbsp;</td>
                              <td><div style="padding-top:2px; padding-left:0px;">
                              <input type="submit" value=" Надіслати "></div>
                              </td>
                            </tr>
                          </table>