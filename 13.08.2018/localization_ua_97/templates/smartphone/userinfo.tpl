<div class="title"><strong>Користувач: {usertitle}</strong></div>
<div class="panel">
    <div class="news">Повне ім'я: {fullname}
                              <br />Дата реєстрації: {registration}
                              <br />Останнє відвідування: {lastdate}
                              <br />Група:    <font color="red">{status}</font>[time_limit] в групі до: {time_limit}[/time_limit]
                              <br /><br />Місце проживання: {land}
                              <br />Номер ICQ: {icq}
                              <br />Про себе:<br />{info}<br /><br />Кількість публікацій:     {news-num}<br />[ {news} ] [rss]<img src="{THEME}/css/rss_icon.gif" border="0" />[/rss]
                              <br /><br />Кількість коментарів: {comm-num}<br />[ {comments} ]<br /><br />[ {email} ]<br />[ {pm} ]<br />{edituser}</div>
</div>



[not-logged]
<div id="options" style="display:none;">
<div class="title"><strong>Редагування інформації</strong></div>
<div class="post"> 
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="120" height="25">Ваша E-Mail:</td>
                              <td ><input type="text" name="email" value="{editmail}" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>{hidemail}</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="25">Ваше Ім'я:</td>
                              <td><input type="text" name="fullname" value="{fullname}" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25"><nobr>Місце проживання:  </nobr></td>
                              <td><input type="text" name="land" value="{land}" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25">Номер ICQ:</td>
                              <td><input type="text" name="icq" value="{icq}" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="25">Старий пароль:</td>
                              <td><input type="password" name="altpass" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25">Новий пароль:</td>
                              <td><input type="password" name="password1" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td height="25">Повторіть:</td>
                              <td><input type="password" name="password2" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="25">Блокування по IP:<br /><textarea name="allowed_ip" style="width:97%; height:70px" class="f_textarea" />{allowed-ip}</textarea><br />Ваша поточна IP: <strong>{ip}</strong><br /><br /><font style="color:red;font-size:10px;">* Увага! Будьте уважні при зміні даного налаштування. Доступ до Вашого аккаунту буде можливим виключно з тієї IP-адреси чи підмережі, яку Ви зазначите. Ви можете зазначити декілька IP-адрес, по одній адресі в кожному рядку.<br />Приклад: 192.48.25.71 або 129.42.*.*</font></td>
                            </tr>
                          </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="25">Аватар:</td>
                              <td><input type="file" name="image" class="f_input" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input type="checkbox" name="del_foto" value="yes" />  Видалити аватар</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="25">Про себе:<br /><textarea name="info" style="width:97%; height:70px" class="f_textarea" />{editinfo}</textarea></td>
                            </tr>
                            <tr>
                              <td height="25">Підпис:<br /><textarea name="signature" style="width:97%; height:70px" class="f_textarea" />{editsignature}</textarea></td>
                            </tr>
                          </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
{xfields}
                            <tr>
                              <td colspan="2" height="25"><div style="padding-top:2px; padding-left:0px;">
                              <input type="submit" value=" Надіслати " /><br />
                              <input name="submit" type="hidden" id="submit" value="submit" />
                              </div></td>
                            </tr>
                          </table>
</div>
</div>
[/not-logged]