[searchposts]
[fullresult]
<div class="base shortstory">
		<script type="text/javascript">//<![CDATA[
		$(function(){ $("#infb{search-id}").Button("#infc{search-id}"); });
		//]]></script>
		<div class="infbtn">
			<span id="infb{search-id}" class="thide" title="Інформація до новини">Інформація до новини</span>
			<div id="infc{search-id}" class="infcont">
				<ul>
					<li><i>Переглядів: {views}</i></li>
					<li><i>Автор: {result-author}</i></li>
					<li><i>Дата: {result-date}</i></li>
				</ul>
			</div>
		</div>
		<span class="argbox">[result-link]<i>{result-date}</i>[/result-link]</span>

	<h3 class="btl">[result-link]{result-title}[/result-link]</h3>
	<p class="argcat"><i>Категорія: {link-category}</i></p>
	<div class="maincont">
		{result-text}
		<div class="clr"></div>
		[tags]<p class="basetags"><i>Теги до статті: {tags}</i></p>[/tags]
	</div>
	<div class="mlink">
		<span class="argmore">[result-link]<b>Детальніше</b>[/result-link]</span>
		[not-group=5]<span class="argedit">[edit]<i>Редагувати</i>[/edit]</span>[/not-group]
		<span class="argcoms"><i>Коментарів: {result-comments}</i></span>
	</div>
</div>
[/fullresult]
[shortresult]
<div class="searchitem">
	<h3>[result-link]{result-title}[/result-link]</h3>
	<b>{result-date}</b> | {link-category} | Автор: {result-author} | [not-group=5][edit]Редагувати[/edit][/not-group]
</div>
[/shortresult]
[/searchposts]
[searchcomments]
[fullresult]
<div class="basecont">
	<div class="bcomment">
		<div class="lcol">
			<span class="thide arcom">&lt;</span>
			<div class="avatar"><img src="{foto}" alt=""/></div>
			<h5>{result-author}</h5>
			<p>{result-date}</p>
		</div>
		<div class="rcol">
			<div class="combox">
				<script type="text/javascript">//<![CDATA[
				$(function(){ $("#cinfb{search-id}").Button("#cinfc{search-id}"); });
				//]]></script>
				<div class="infbtn">
					<span id="cinfb{search-id}" class="thide" title="Інформація до коментаря">Інформація до коментаря</span>
					<div id="cinfc{search-id}" class="infcont">
						<ul>
							<li><i>ICQ: {icq}</i></li>
							<li><i>Реєстрація: {registration}</i></li>
						</ul>
					</div>
				</div>
				<h3 style="margin-bottom: 0.4em;">[result-link]{result-title}[/result-link]</h3>
				{result-text}
				<div class="comedit">
					[not-group=5]
					<span class="arg">[com-del]Видалити[/com-del]</span>
					<span class="arg">[com-edit]Змінити[/com-edit]</span>
					[/not-group]
					<div class="clr"></div>
				</div>
			</div>
		</div>
		<div class="clr"></div>
	</div>
</div>
[/fullresult]
[shortresult]
<div class="searchitem">
	<h3>[result-link]{result-title}[/result-link]</h3>
	<b>{result-date}</b> | {link-category} | Автор: {result-author} | [com-edit]Змінити[/com-edit] | [com-del]Видалити[/com-del]
</div>
[/shortresult]
[/searchcomments]