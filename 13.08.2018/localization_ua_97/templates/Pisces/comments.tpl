	<div class="bcomment">
		<div class="lcol">
			<span class="thide arcom">&lt;</span>
			<div class="avatar">
				<img src="{foto}" alt=""/>
				{group-icon}
			</div>
			<ul class="small reset">
				<li>Публікацій: {news-num}</li>
				<li>Коментарів: {comm-num}</li>
				<li>ICQ: {icq}</li>
				[group=1]<li>{ip}</li>[/group]
			</ul>
		</div>
		<div class="rcol">
			<div class="dpad dtop">
				<span>{date}</span>
				<h3>{author}</h3>
			</div>
			<div class="dpad cominfo">
				<span class="argreply">[fast]<b>Цитата</b>[/fast]</span>
				<ul class="reset small">
					<li>Група: {group-name}</li>
					<li>Реєстрація: {registration}</li>
					<li>Статус: [online]<img src="{THEME}/images/online.png" style="vertical-align: middle;" title="Користувач Онлайн" alt="Користувач Онлайн" />[/online][offline]<img src="{THEME}/images/offline.png" style="vertical-align: middle;" title="Користувач offline" alt="Користувач offline" />[/offline]</li>
				</ul>
				<span class="dleft">&nbsp;</span>
			</div>
			<div class="dpad dcont">
				[aviable=lastcomments]<h3 style="margin-bottom: 0.4em;">{news_title}</h3>[/aviable]
				{comment}
				<br clear="all" />
				[signature]<div class="signature">--------------------</div><div class="slink">{signature}</div><br />[/signature]
			</div>
			[not-group=5]
			<div class="dpad comedit">
				<ul class="reset small">
					<li>[complaint]Скарга[/complaint]</li>
					<li>[com-edit]Змінити[/com-edit]</li>
					<li>[com-del]Видалити[/com-del]</li>
					[group=1]<li class="selectmass">{mass-action}</li>[/group]
				</ul>
			</div>
			[/not-group]					
		</div>
		<div class="clr"></div>
	</div>