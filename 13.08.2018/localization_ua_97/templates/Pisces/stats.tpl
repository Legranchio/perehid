<h2 class="dpad heading">Статистика сайту</h2>
<div class="baseform"><div class="dcont">
	<div class="lines">
		<ul class="reset">
			<li>За добу: додано <b>{news_day} новин</b> і <b>{comm_day} коментарів</b>, зареєстровано <b>{user_day} користувачів</b></li>
			<li>За тиждень: додано <b>{news_week} новин</b> і <b>{comm_week} коментарів</b>, зареєстровано <b>{user_week} користувачів</b></li>
			<li>За місяць: додано <b>{news_month} новин</b> і <b>{comm_month} коментарів</b>, зареєстровано <b>{user_month} користувачів</b></li>
		</ul>
	</div>
</div></div>
<div class="dpad">
	<div class="basecont statistics">
		<ul class="lcol reset">
			<li><h5 class="green">Новини:</h5></li>
			<li>Загальна к-сть новин: <b class="blue">{news_num}</b></li>
			<li>З них опубліковано: <b class="blue">{news_allow}</b></li>
			<li>Опубліковано на головній: <b class="blue">{news_main}</b></li>
			<li>Очікують на модерацію: <b class="blue">{news_moder}</b></li>
		</ul>
		<ul class="lcol reset">
			<li><h5 class="green">Користувачі:</h5></li>
			<li>Загальна к-сть користувачів: <b class="blue">{user_num}</b></li>
			<li>З них забанено: <b class="blue">{user_banned}</b></li>
		</ul>
		<ul class="lcol reset">
			<li><h5 class="green">Коментарі:</h5></li>
			<li>К-сть коментарів: <b class="blue">{comm_num}</b></li>
			<li><a href="/?do=lastcomments">Переглянути останні</a></li>
		</ul>
		<br clear="all" />
	</div>
	<p><b>Загальний розмір бази даних: {datenbank}</b></p>
	<br /><br /><br />
	<div class="basecont">
		<h2 class="heading">Перелік кращих користувачів</h2>
		<table width="100%" class="userstop">{topusers}</table>
	</div>
</div>