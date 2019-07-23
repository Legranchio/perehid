<div class="pheading"><h2>Статистика сайту</h2></div>
<div class="basecont statistics">
	<ul class="lcol reset">
		<li><h5 class="blue">Новини:</h5></li>
		<li>Загальна к-сть новин: <b class="blue">{news_num}</b></li>
		<li>З них опубліковано: <b class="blue">{news_allow}</b></li>
		<li>Опубліковано на головній: <b class="blue">{news_main}</b></li>
		<li>Очікують на модерацію: <b class="blue">{news_moder}</b></li>
	</ul>
	<ul class="lcol reset">
		<li><h5 class="blue">Користувачі:</h5></li>
		<li>Загальна к-сть користувачів: <b class="blue">{user_num}</b></li>
		<li>З них забанено: <b class="blue">{user_banned}</b></li>
	</ul>
	<ul class="lcol reset">
		<li><h5 class="blue">Коментарі:</h5></li>
		<li>К-сть коментарів: <b class="blue">{comm_num}</b></li>
		<li><a href="/?do=lastcomments">Переглянути останні</a></li>
	</ul>
	<br clear="all" />
	<div class="dpad infoblock radial">
		<ul class="reset">
			<li>За добу: <span class="blue">додано {news_day} новин і {comm_day} коментарів, зареєстровано {user_day} користувачів</span></li>
			<li>За тиждень: <span class="blue">додано {news_week} новин і {comm_week} коментарів, зареєстровано {user_week} користувачів</span></li>
			<li>За місяць: <span class="blue">додано {news_month} новин і {comm_month} коментарів, зареєстровано {user_month} користувачів</span></li>
		</ul>
	</div>
</div>
<div class="pheading"><p><b>Загальний розмір бази даних: {datenbank}</b></p></div>
<div class="basecont">
	<div class="pheading">
		<h3 class="heading">Кращі користувачі</h3>
		<table width="100%" class="userstop">{topusers}</table>
	</div>
</div>