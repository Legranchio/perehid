<div class="base fullstory">
	<div class="dpad">
		<h3 class="btl">{title}</h3>
		<p class="binfo small">Автор: {author} від [day-news]{date}[/day-news], переглянуло: {views}</p>
		<div class="maincont">
			<span class="argcoms"><b>{comments-num}</b></span>
			{full-story}
			<div class="clr"></div>
		</div>
		<div class="storenumber">{pages}</div>
		[edit-date]<p class="editdate small"><i>Змінив: <b>{editor}</b>[edit-reason] Причина: {edit-reason}[/edit-reason]</i></p>[/edit-date]
		[tags]<div class="btags"><div class="btags small">Теги: {tags}</div></div>[/tags]
		<div class="mlink[tags] mlinktags[/tags]"><div class="mlink">
			[poll]<span class="argpoll"><a id="polllink" href="#"><b>Опитування</b></a></span>[/poll]
			[not-group=5]
			<ul class="isicons reset">
				<li>[edit]<img src="{THEME}/dleimages/editstore.png" title="Редагувати" alt="Редагувати" />[/edit]</li>
				<li>{favorites}</li>
			</ul>
			[/not-group]
			[rating]<div class="rate">{rating}</div>[/rating]
		</div></div>
		<p class="argcat small">Категорія: {link-category}</p>
	</div>
</div>
[related-news]
<div class="related">
	<div class="dtop"><span><b>А також:</b></span></div>
	<ul class="reset">
		{related-news}
	</ul>
</div>
[/related-news]
[group=5]
<div class="berrors" style="margin: 0;">
	Шановний відвідувачу! Ви увійшли на сайт як незареєстрований користувач.<br />
	Ми радимо Вам <a href="/index.php?do=register">зареєструватися</a> або увійти на сайт під своїм іменем.
</div>
[/group]
[poll]<div style="display: none;" id="polldialog" title="Опитування">{poll}</div>[/poll]