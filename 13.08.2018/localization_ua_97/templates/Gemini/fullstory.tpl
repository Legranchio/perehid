<div class="base fullstory">
	<script type="text/javascript">//<![CDATA[
	$(function(){ $("#infb{news-id}").Button("#infc{news-id}"); });
	//]]></script>
	<div class="infbtn">
		<span id="infb{news-id}" class="thide" title="Інформація до новини">Інформація до новини</span>
		<div id="infc{news-id}" class="infcont">
			<ul>
				<li><i>Переглядів: {views}</i></li>
				<li><i>Автор: {author}</i></li>
				<li><i>Дата: {date}</i></li>
			</ul>
			[edit-date]<div class="editdate"><i>Змінив: <b>{editor}</b>[edit-reason]<br />Причина: {edit-reason}[/edit-reason]</i></div>[/edit-date]
			[rating]<div class="ratebox"><div class="rate">{rating}</div></div>[/rating]
		</div>
	</div>
	<span class="argbox">[day-news]<i>{date}</i>[/day-news]</span>
	<h3 class="btl">{title}</h3>
	<p class="argcat"><i>Категорія: {link-category}</i></p>
	<div class="maincont">
		{full-story}
		<div class="clr"></div>
		[tags]<p class="basetags"><i>Теги до статті: {tags}</i></p>[/tags]
	</div>
	<div class="storenumber">{pages}</div>
	<div class="mlink">
		<span class="argback"><a href="javascript:history.go(-1)"><b>Назад</b></a></span>
		[not-group=5]<span class="argedit">[edit]<i>Редагувати</i>[/edit]</span>[/not-group]
		<span class="argcoms"><i>Коментарів: {comments-num}</i></span>
	</div>
	<div class="linesbg related">
		<h4 class="btl"><span>Наш сайт</span> рекомендує:</h4>	
		<ul class="reset">
			{related-news}
		</ul>
		<div class="frbtns">
			{favorites}
			[print-link]<img class="printlink" src="{THEME}/images/spacer.gif" alt="Роздрукувати" title="Роздрукувати" />[/print-link]
		</div>
	</div>
</div>
[group=5]
<div class="berrors"><div class="berrors">
	Шановний відвідувачу! Ви увійшли на сайт як незареєстрований користувач.<br />
		Ми радимо Вам <a href="/index.php?do=register">зареєструватися</a> або увійти на сайт під своїм іменем.
</div></div>
[/group]
<div id="tabbs">
	<ul class="reset tabmenu">
		<li><a class="selected" href="#tabln1"><b>Коментарі ({comments-num})</b></a></li>
		[poll]<li><a href="#tabln2"><b>Опитування до статті</b></a></li>[/poll]
	</ul>
	<div class="tabcont" id="tabln1">
		{comments}
		{navigation}
		{addcomments}
	</div>
	[poll]<div class="tabcont" id="tabln2">
		{poll}
	</div>[/poll]
</div>