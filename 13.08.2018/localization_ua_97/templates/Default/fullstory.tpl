{poll}
<div class="base fullstory">
	<div class="dpad">
		<h3 class="btl">{title}</h3>
		<div class="bhinfo">
		[not-group=5]
			<ul class="isicons reset">
				<li>[edit]<img src="{THEME}/dleimages/editstore.png" title="Редагувати" alt="Редагувати" />[/edit]</li>
				<li>{favorites}</li>
				<li>[complaint]<img src="{THEME}/images/complaint.png" title="Повідомити про помилку" alt="Повідомити про помилку" />[/complaint]</li>
			</ul>
		[/not-group]
			<span class="baseinfo radial">
				Автор: {author} від [day-news]{date}[/day-news]
			</span>
			[rating]<div class="ratebox"><div class="rate">{rating}</div></div>[/rating]
		</div>
		<div class="maincont">
			{full-story}
			<div class="clr"></div>
			[edit-date]<p class="editdate"><br /><i>Новину відредагував: <b>{editor}</b> - {edit-date}
			<br />[edit-reason]Причина: {edit-reason}[/edit-reason]</i></p>[/edit-date]
			[tags]<br /><p class="basetags"><i>Теги: {tags}</i></p>[/tags]
		</div>
		<div class="storenumber">{pages}</div>
	</div>
	[related-news]<div class="related">
		<div class="dtop"><span><b>Схожі новини:</b></span></div>	
		<ul class="reset">
			{related-news}
		</ul>
		<br />
	</div>[/related-news]
	<div class="mlink">
		<span class="argback"><a href="javascript:history.go(-1)"><b>Назад</b></a></span>
		<span class="argviews"><span title="Переглядів: {views}"><b>{views}</b></span></span>
		<span class="argcoms">[com-link]<span title="Коментарів: {comments-num}"><b>{comments-num}</b></span>[/com-link]</span>
		<div class="mlarrow">&nbsp;</div>
		<p class="lcol argcat">Категорія: {link-category}</p>
	</div>
	[group=5]
	<div class="clr berrors" style="margin: 0;">
		Шановний відвідувачу! Ви увійшли на сайт як незареєстрований користувач.<br />
		Ми радимо Вам <a href="/index.php?do=register">зареєструватися</a> або увійти на сайт під своїм іменем.
	</div>
	[/group]
</div>
<div class="pheading">
	<h2 class="lcol">Коментарі:</h2>
	<a class="addcombtn" href="#" onclick="$('#addcform').toggle();return false;"><b>Додати коментар</b></a>
	<div class="clr"></div>
</div>
{addcomments}
{comments}
{navigation}