<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="uk" lang="uk">
<head>
{headers}
<link rel="shortcut icon" href="{THEME}/images/favicon.ico" />
<link media="screen" href="{THEME}/style/styles.css" type="text/css" rel="stylesheet" />
<link media="screen" href="{THEME}/style/engine.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{THEME}/js/libs.js"></script>
</head>
<body>
{AJAX}
<div id="toolbar" class="wwide">
	<div class="wrapper"><div class="dpad">
		<span class="htmenu"><a href="#" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.ooooonline.com');">Зробити домашньою</a><span>|</span><a href="#" rel="sidebar" onclick="window.external.AddFavorite(location.href,'ooooonline.com'); return false;">Додати в улюблені</a></span>
		{login}
	</div></div>
	<div class="shadow">&nbsp;</div>
</div>
<div class="wrapper">
	<div id="header" class="dpad">
		<h1><a class="thide" href="/index.php" title="DataLife Engine - Softnews Media Group">DataLife Engine - Softnews Media Group</a></h1>
		<form action="" name="searchform" method="post">
			<input type="hidden" name="do" value="search" />
			<input type="hidden" name="subaction" value="search" />
			<ul class="searchbar reset">
				<li class="lfield"><input id="story" name="story" value="Пошук..." onblur="if(this.value=='') this.value='Пошук...';" onfocus="if(this.value=='Пошук...') this.value='';" type="text" /></li>
				<li class="lbtn"><input title="Знайти" alt="Знайти" type="image" src="{THEME}/images/spacer.gif" /></li>
			</ul>
		</form>
		<div class="headlinks">
			<ul class="reset">
				<li><a href="/index.php">Головна</a></li>
				[group=5]<li><a href="/index.php?do=register">Реєстрація</a></li>[/group]
				<li><a href="/index.php?do=feedback">Контакти</a></li>
				<li><a href="/index.php?do=rules">Правила</a></li>
			</ul>
		</div>
	</div>
	<div class="himage"><div class="himage"><div class="himage dpad">
		<h2>Багатокористувацький новинний движок,<br />
		призначений для організації власних<br />
		ЗМІ та блогів в Інтернеті.</h2>
	</div></div></div>
	<div class="mbar" id="menubar"><div class="mbar"><div class="mbar dpad">
		<div class="menubar">
			{include file="topmenu.tpl"}
		</div>
	</div></div></div>
	<div class="wtop wsh"><div class="wsh"><div class="wsh">&nbsp;</div></div></div>
	<div class="shadlr"><div class="shadlr">
		<div class="container">
			<div class="vsep">
				<div class="vsep">
					<div id="midside" class="rcol">
						[not-aviable=main]{speedbar}[/not-aviable]
						<div class="hbanner">
							<div class="dpad" align="center">{banner_header}</div>
							<div class="dbtm"><span class="thide">на правах реклами</span></div>
						</div>
						[sort]<div class="sortn dpad"><div class="sortn">{sort}</div></div>[/sort]
						{info}
						{content}
					</div>
					<div id="sidebar" class="lcol">
						{include file="sidebar.tpl"}
					</div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="footbox">
				<div class="rcol">
					<div class="btags">
						{tags}
						<div class="shadow">&nbsp;</div>
					</div>
				</div>
				<div class="lcol">
					<p>Шановні веб-майстри, Ви<br />
					переглядаєте тестову сторінку<br />
					<b>DataLife Engine</b>.<br />
					Поточна версія 9.7.</p>
				</div>
			</div>
		</div>
	</div></div>
	<div class="wbtm wsh"><div class="wsh"><div class="wsh">&nbsp;</div></div></div>
</div>
<div id="footmenu" class="wwide">
	<div class="wrapper"><div class="dpad">
		<ul class="reset">
			<li><a href="/index.php">Головна сторінка</a></li>
			[group=5]<li><a href="/index.php?do=register">Реєстрація</a></li>[/group]
			[not-group=5]<li><a href="/addnews.html">Додати новину</a></li>[/not-group]
			<li><a href="/newposts/">Нове на сайті</a></li>
			<li><a href="/statistics.html">Статистика</a></li>
			<li><a href="http://dle-news.ru">Підтримка скрипта</a></li>
		</ul>
	</div></div>
	<div class="shadow">&nbsp;</div>
</div>
<div id="footer" class="wwide">
	<div class="wrapper"><div class="dpad">
		<span class="copyright">
			Copyright &copy; 2004-2012 <a href="http://www.ooooonline.com/" target="_blank">DLE - Україна</a> All Rights Reserved.<br />
			Powered by DataLife Engine &copy; 2012
		</span>
		<div class="counts">
			<ul class="reset">
				<li><img src="{THEME}/images/count.png" alt="count 88x31px" /></li>
				<li><img src="{THEME}/images/count.png" alt="count 88x31px" /></li>
				<li><img src="{THEME}/images/count.png" alt="count 88x31px" /></li>
			</ul>
		</div>
		<div class="clr"></div>
	</div></div>
</div>
</body>
</html>