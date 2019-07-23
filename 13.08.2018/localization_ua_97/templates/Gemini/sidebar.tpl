<script type="text/javascript">//<![CDATA[
$(function(){
	$("#slidemenu").UlMenu();
});
//]]></script>
<div id="rightmenu" class="block">
	<div class="dtop"><h4 class="btl"><span>Навігація</span> по сайту</h4></div>
	<ul id="slidemenu" class="reset">
		<li><a href="#">Про сайт</a></li>
		<li><a href="#">У світі</a></li>
		<li><span class="sublnk">Економіка</span></li>
		<li class="submenu">
			<ul>
				<li><a href="#">Підпункт 3.1</a></li>
				<li><a href="#">Підпункт 3.2</a></li>
				<li><a href="#">Підпункт 3.3</a></li>
			</ul>
		</li>
		<li><span class="sublnk">Релігія</span></li>
		<li class="submenu">
			<ul>
				<li><a href="#">Підпункт 4.1</a></li>
				<li><a href="#">Підпункт 4.2</a></li>
				<li><a href="#">Підпункт 4.3</a></li>
			</ul>
		</li>
		<li><a href="#">Кримінал</a></li>
		<li><a href="#">Спорт</a></li>
		<li><a href="#">Культура</a></li>
		<li><a href="#">Інопреса</a></li>
	</ul>
	<div class="linesbg">
		<ul class="reset">
			<li><a href="http://dle-news.ru">Підтримка скрипта</a></li>
			<li><a href="/index.php?do=search&amp;mode=advanced">Розширений пошук</a></li>
			<li><a href="/index.php?do=lastnews">Всі останні новини</a></li>
			<li><a href="/index.php?action=mobile">Мобільна версія сайту</a></li>
		</ul>
	</div>
</div>

<div id="popular" class="block redb">
	<div class="dcont">
		<h4 class="btl">Популярні статті</h4>
		<ul>{topnews}</ul>
	</div>
	<div class="thide dbtm">------</div>
</div>

<div id="bcalendar" class="block">
	<div class="dtop"><h4 class="btl">Календар</h4></div>
	<div class="dcont">{calendar}</div>
</div>

<div id="change-skin" class="block">
	<div class="change-skin">
		<div class="rcol">{changeskin}</div>
		<h4 class="btl">Оформлення:</h4>
	</div>
</div>

{vote}

<div id="news-partner" class="block">
	<div class="dtop"><h4 class="btl"><span>Новини</span> партнерів</h4></div>
	{inform_dle}
</div>