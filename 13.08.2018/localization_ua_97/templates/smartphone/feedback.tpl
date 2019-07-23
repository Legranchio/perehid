<div class="title"><strong>Зворотній зв'язок</strong></div>
<div class="post">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
[not-logged]
                            <tr>
                              <td width="120" height="25">Ваше Ім'я:</td>
                              <td><input type="text" maxlength="35" name="name" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td width="120" height="25">Ваша E-Mail:</td>
                              <td><input type="text" maxlength="35" name="email" class="f_input" /></td>
                            </tr>
[/not-logged]
                            <tr>
                              <td width="120" height="25">Заголовок:</td>
                              <td><input type="text" maxlength="45" name="subject" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td width="120" height="25">Отримувач:</td>
                              <td>{recipient}</td>
                            </tr>
							</table>
						    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td >Повідомлення:<br /><textarea name="message" style="width: 97%; height: 90px;" class="f_textarea" /></textarea></td>
                            </tr>
							</table>
						    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            [sec_code]<tr>
                              <td width="120" height="25">Код безпеки:</td>
                              <td><br />{code}</td>
                            </tr>[/sec_code]
                            [recaptcha] <tr>
                        <td colspan="2" height="25"><strong>Введіть два слова, зазначених на зображенні:</strong></td>
                      </tr>
                      <tr>
                        <td colspan="2" height="25">{recaptcha}</td>
                      </tr>[/recaptcha]
                            <tr>
                              <td width="120" height="25">Введіть код:</td>
                              <td><input type="text" maxlength="45" name="sec_code" style="width:115px" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td width="120" height="25">&nbsp;</td>
                              <td><input type="submit" value=" Надіслати " /></td>
                            </tr>
                          </table>
</div>