<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<title><?=$cf['title']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="templates/<?=$cf['tplName']?>/css/bootstrap.css" rel="stylesheet">
    <link href="templates/<?=$cf['tplName']?>/css/font-awesome.css" rel="stylesheet">
    <link href="templates/<?=$cf['tplName']?>/css/bootstrap_skin.css" rel="stylesheet">
    <link href="templates/<?=$cf['tplName']?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" href="templates/<?=$cf['tplName']?>/img/bogemiaLogo.png" type="image/png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



	<base href="<?=$cf['liveSite']?>">

</head>
<body data-lang="ua">

	<div class="modal">
	   <div class="overlay"></div>
	   		<div class="container">
		      	<div class="visible">
			      	<div class="visible_content">
				      	<div class="modal_head"></div>
			    		<h5 class="modal_write"></h5>
			      	</div>
		      	<div class="modal_close"><i class="fa fa-close"></i></div>
		      		<div class="modal_content">
		       			<form class="ajf" action="modules/ord/sender.php?c=form" method="post">
							<input type="text" class="modal_name" id="name" name="name" placeholder="Ім'я"></input>
							<input type="tel" class="modal_tel" id="phone" name="phone" placeholder="Контактний телефон"></input>
							<input type="text" class="modal_message" id="message" name="message"> </input><br>
							<input type="submit" class="modal_submit" value="ЗАМОВИТИ ДЗВІНОК"></input>
						</form>
					</div>
		    </div>
		</div>
	</div>


<section id="main">
	<div class="header_menu section">
		<div class="container">
			<div class="row header_content">
				<div class="col-lg-3 col-md-3 col-sm-12 header_logo">
					<img src="templates/<?=$cf['tplName']?>/img/logo_viadrus.png">
				</div>
				<div class="col-lg-7 col-md-6 col-sm-12 head_text">
					<h4>ОПАЛЮВАЛЬНА ТЕХНІКА ВІД ЧЕСЬКОГО ВИРОБНИКА</h4>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-12 head_right">
					<a href="?lang=ua"><span class="lang">УКР</span></a>
					<a href="?lang=ru"><span class="lang">РУС</span></a>
					<div class="zamovyty_dzvinok">
						<a class="contakt_tel" href="tel:+380679425502"><b>+380679425502</b></a>
						<button data-form="call" class="modal_open">Замовити дзвінок</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		<div class="container">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Головна<span class="sr-only">(current)</span></a></li>
	        <li><a class="scrollto"  href="#kotel">Котел</a></li>
	        <li><a class="scrollto"  href="#perevagy">Переваги</a></li>
	        <li><a class="scrollto"  href="#kontakt">Філіали</a></li>
	        <li><a class="scrollto"  href="#gurt">На гурт</a></li>
	      </ul>
	     </div>
     </div>


	<div class="header section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 header_text">
					<h3>Продаж чавунних<br><b>твердопаливних<br> котлів №1</b></h3><br>
					<span>VIADRUS U22</span>
					
					<button data-form="buy" class="modal_open">Купити</button>
				</div>
			</div>
		</div>
	</div>



	<div class="section1 section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 section1_item">
					<div class="gray_elipse_item">
						<img src="templates/<?=$cf['tplName']?>/img/gray1.png">
						<p>Котел 20 років на<br>ринку України</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 section1_item">
					<div class="gray_elipse_item">
						<img src="templates/<?=$cf['tplName']?>/img/gray2.png">
						<p>Продано більше<br>35 000 одиниць<br>даної моделі</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 section1_item">
					<div class="gray_elipse_item">
						<img src="templates/<?=$cf['tplName']?>/img/gray3.png">
						<p>Виготовлений<br>з високоякісного<br>чеського чавуну</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 section1_item">
					<div class="gray_elipse_item">
						<img src="templates/<?=$cf['tplName']?>/img/gray4.png">
						<p>Гідравлічне<br>випробування<br>під тиском<br>кожного котла</p>
					</div>
				</div>
			</div>
			<section id="kotel">
			<div class="row hercules22">
				<h2>Котел твердопаливний</h2>
				<h2 class="herules_name">VIADRUS U22 C/D</h2>
				<div class="col-lg-offset-1 col-lg-7 col-md-offset-1 col-md-7 hercules22_content">
					<p>Перевагою котла є низькі вимоги до димової тяги, a також роками перевірена конструкція. Модифікація котла VIADRUS U22 D в порівнянні з котлом типу VIADRUS U22 С має перевагу: збільшений отвір топки, який дозволяє закладати в топку і спалювати великі шматки дерева діаметром до 220 мм.</p>
					<p>U22 C - основне паливо - вугілля, додаткове дерево. Модельний ряд від 2 до 10 секцій.</p>
					<p>U22 D - основне паливо - дерево, додаткове вугілля. Модельний ряд від 4 до 10 секцій.</p>
					<button class="table_show">Основні технічні параметри</button>
				</div>


				<div class="col-lg-4 col-md-3 kotel">
					<img src="templates/<?=$cf['tplName']?>/img/kotel.png">
					<button data-form="buy" class="modal_open">Купити</button>
				</div>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-11 col-md-offset-1 col-md-11 col-sm-12 col-xs-12">
						<div class="table_kotel">
							<table class="table table-striped">
								<tr>
									<th>Кількість секцій</th>
									<td>шт.</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
									<td>5</td>
									<td>6</td>
									<td>7</td>
									<td>8</td>
									<td>9</td>
									<td>10</td>
								</tr>
								<tr>
									<th>Номінальна потужність U22 C-кокс і вугілля</th>
									<td>кВт</td>
									<td>11,7</td>
									<td>17,7</td>
									<td>23,3</td>
									<td>29,1</td>
									<td>34,9</td>
									<td>40,7</td>
									<td>46,5</td>
									<td>52,3</td>
									<td>58,1</td>
								</tr>
								<tr>
									<th>Номінальна потужність U22 D-деревина</th>
									<td>кВт</td>
									<td>&#9675;</td>
									<td>&#9675;</td>
									<td>22,5</td>
									<td>27,5</td>
									<td>33,0</td>
									<td>38,5</td>
									<td>44,0</td>
									<td>49,5</td>
									<td>53,5</td>
								</tr>
								<tr>
									<th>Витрата палива-U22 C, кокс</th>
									<td>кг/год</td>
									<td>1,9</td>
									<td>2,9</td>
									<td>3,8</td>
									<td>4,7</td>
									<td>5,7</td>
									<td>6,6</td>
									<td>7,5</td>
									<td>8,5</td>
									<td>9,4</td>
								</tr>
								<tr>
									<th>Витрата палива-U22 C, вугілля</th>
									<td>кг/год</td>
									<td>2,0</td>
									<td>3,0</td>
									<td>4,0</td>
									<td>4,9</td>
									<td>5,9</td>
									<td>6,9</td>
									<td>7,9</td>
									<td>8,9</td>
									<td>9,9</td>
								</tr>
								<tr>
									<th>Витрата палива-U22 D, деревина</th>
									<td>кг/год</td>
									<td>&#9675;</td>
									<td>&#9675;</td>
									<td>6,4</td>
									<td>8,0</td>
									<td>9,6</td>
									<td>11,2</td>
									<td>12,8</td>
									<td>14,4</td>
									<td>15,7</td>
								</tr>
								<tr>
									<th>ККД U22 C-кокс і вугілля</th>
									<td>%</td>
									<td colspan="9">75-80</td>
								</tr>
								<tr>
									<th>ККД U22 D-деревина</th>
									<td>%</td>
									<td>&#9675;</td>
									<td>&#9675;</td>
									<td colspan="7">75</td>
								</tr>
								<tr>
									<th>Макс.темп. продуктів згорання-U22 C, кокс і вугілля</th>
									<td>&#176С</td>
									<td colspan="9"><280</td>
								</tr>
								<tr>
									<th>Макс.темп. продуктів згорання-U22 D, деревина</th>
									<td>&#176С</td>
									<td>&#9675;</td>
									<td>&#9675;</td>
									<td colspan="7"><280</td>
								</tr>
								<tr>
									<th>Габарити-висота з шафою керування</th>
									<td>мм</td>
									<td colspan="9">1010</td>
								</tr>
								<tr>
									<th>Габарити-висота без шафи керування</th>
									<td>мм</td>
									<td colspan="9">990</td>
								</tr>
								<tr>
									<th>Габарити-ширина</th>
									<td>мм</td>
									<td colspan="9">550</td>
								</tr>
								<tr>
									<th>Габарити-глибина</th>
									<td>мм</td>
									<td>590</td>
									<td>690</td>
									<td>780</td>
									<td>880</td>
									<td>980</td>
									<td>1070</td>
									<td>1170</td>
									<td>1260</td>
									<td>1360</td>
								</tr>
								<tr>
									<th>Вага-U22 C</th>
									<td>кг</td>
									<td>198</td>
									<td>218</td>
									<td>252</td>
									<td>282</td>
									<td>312</td>
									<td>347</td>
									<td>377</td>
									<td>417</td>
									<td>448</td>
								</tr>
								<tr>
									<th>Вага-U22 D</th>
									<td>кг</td>
									<td>&#9675;</td>
									<td>&#9675;</td>
									<td>247</td>
									<td>275</td>
									<td>305</td>
									<td>340</td>
									<td>365</td>
									<td>410</td>
									<td>441</td>
								</tr>
								<tr>
									<th>Глибина камери згорання</th>
									<td>мм</td>
									<td>150</td>
									<td>240</td>
									<td>340</td>
									<td>430</td>
									<td>530</td>
									<td>620</td>
									<td>720</td>
									<td>810</td>
									<td>910</td>
								</tr>
								<tr>
									<th>Рекомендована довжина поліна</th>
									<td>мм</td>
									<td>&#9675;</td>
									<td>&#9675;</td>
									<td>270</td>
									<td>360</td>
									<td>450</td>
									<td>540</td>
									<td>630</td>
									<td>720</td>
									<td>810</td>
								</tr>
								<tr>
									<th>Діаметр димоходу</th>
									<td>мм</td>
									<td>156</td>
									<td>156</td>
									<td>156</td>
									<td>156</td>
									<td>156</td>
									<td>156</td>
									<td>156</td>
									<td>176</td>
									<td>176</td>
								</tr>
								<tr>
									<th>Тяга димоходу</th>
									<td>Па</td>
									<td>&#8805;12</td>
									<td>&#8805;14</td>
									<td>&#8805;16</td>
									<td>&#8805;18</td>
									<td>&#8805;20</td>
									<td>&#8805;22</td>
									<td>&#8805;24</td>
									<td>&#8805;26</td>
									<td>&#8805;28</td>
								</tr>
								<tr>
									<th>Підключення опалювальної і зворотньої води</th>
									<td></td>
									<td colspan="9">DN50</td>
								</tr>
								<tr>
									<th>Робочий тиск води</th>
									<td>Па</td>
									<td colspan="9">50-400</td>
								</tr>
								<tr>
									<th>Випробувальний тиск води</th>
									<td>Па</td>
									<td colspan="9">800</td>
								</tr>
								<tr>
									<th>Рекомендована робоча температура опалювальної води</th>
									<td>Па</td>
									<td colspan="9">60-90</td>
								</tr>
								<tr>
									<th>Мінімальна температура зворотньої води</th>
									<td>Па</td>
									<td colspan="9">60</td>
								</tr>
								<tr>
									<th>Обсяг водяного простору-U22 C</th>
									<td>Па</td>
									<td>26,1</td>
									<td>31,5</td>
									<td>36,2</td>
									<td>40,9</td>
									<td>45,6</td>
									<td>50,3</td>
									<td>55,0</td>
									<td>59,7</td>
									<td>54,4</td>
								</tr>
								<tr>
									<th>Обсяг водяного простору-U22 D</th>
									<td>Па</td>
									<td></td>
									<td></td>
									<td>35.2</td>
									<td>38.9</td>
									<td>43,6</td>
									<td>48,3</td>
									<td>53,0</td>
									<td>57,7</td>
									<td>62,4</td>
								</tr>
								<tr>
									<th>Рівень шуму</th>
									<td>дБ</td>
									<td colspan="9"><65дБ(А)</td>
								</tr>
							</table>
							<img class="kotel_parametry" src="templates/<?=$cf['tplName']?>/img/kotel_parametry.png">
							<button class="table_hide">Приховати параметри</button>
						</div>
					</div>
				</div>
				</section>
			</div>
		</div>
	</div>


	<div class="month section">
		<div class="container">
			<div class="row month_content">
				<div class="col-lg-offset-2 col-lg-5 col-md-6">
					<h2>24 місяці</h2>
					<h4>Гарантія на Viadrus U22 від дати введення котла в експлуатацію</h4>
				</div>
				<div class="col-lg-5 col-md-6">
					<img src="templates/<?=$cf['tplName']?>/img/24m_viadrus.png">
				</div>
			</div>
		</div>
	</div>

	<section id="perevagy">
	<div class="perevagy section">
		<div class="container">
			<h3>Переваги котлів VIADRUS U22</h3>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<span class="item24m_red">ДОВГОВІЧНІСТЬ</span>
						<p>теплообмінника</p>
						<p>з чеського чавуну</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<span class="item24m_red">ПЕРЕВІРЕНА</span><br>
						<span class="item24m_red">РОКАМИ</span>
						<p>конструкція</p>
						<p>котла</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<p>можливість</p>
						<span class="item24m_red">СПАЛЮВАННЯ ДЕРЕВИНИ</span><br>
						<span class="item24m_red">ПІДВИЩЕНОЇ ВОЛОГОСТІ</span>
						<p>(20-25%)</p>
					</div>
				</div>
			</div>
			<div class="row perevagy_content">
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<p>низькі</p>
						<p>вимоги до</p>
						<span class="item24m_red">ДИМОВОЇ ТЯГИ</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<p>котел</p>
						<p>обладнаний</p>
						<span class="item24m_red">РЕГУЛЯТОРОМ</span><br>
						<span class="item24m_red">ТЯГИ</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<span class="item24m_red">ЛЕГКИЙ МОНТАЖ</span>
						<p>котла завдяки</p>
						<p>різьбовим фланцям</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>


	<div class="hercules section">
		<div class="container">
			<h2>VIADRUS U22</h2>
			<h3>продано більше, ніж 35000 шт.</h3>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules1.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Виготовлений з високоякісного чавуну</p>
							<p>Котли вилиті в Чехії, одним з найбільших виробників чавуну в Європі</p>
						</div>
					</div>
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules3.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Заміна окремих секцій</p>
							<p>Якщо окрема секція вийшла з ладу, є можливість замінити лише її, а не весь котел</p>
						</div>
					</div>
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules5.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Кожен котел проходить опресовку</p>
							<p>Кожен котел проходить тест під водним тиском для виявлення можливих дефектів. Лише котли, які показали найкращі результати, поступають на наступний етап.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules2.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Можна спалити все</p>
							<p>Котел не вибагливий до палива</p>
						</div>
					</div>
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules4.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Енергонезалежний</p>
							<p>Котел може працювати без допомоги електроенергії</p>
						</div>
					</div>
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules6.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Низька ціна</p>
							<p>При виготовленні котлів Viadrus використовує ливарний чавун, який сам і виливає у себе на виробництві. Завдяки цьому вартість котла суттєво зменшується.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="palyvo section">
		<div class="container">
			<h3>Використання будь-якого палива</h3>
			<h5>Котел Viadrus U22 може працювати на будь-якому типі палива</h5>
			<div class="row palyvo_content">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 palyvo_item">
					<div class="palyvo_item1">
						<h5>ДРОВА</h5>
					</div>
					<p>Час горіння від<br>15 годин до 3 діб</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 palyvo_item">
					<div class="palyvo_item2">
						<h5>ВУГІЛЛЯ</h5>
					</div>
					<p>Час горіння від<br>1 години до 10 діб</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 palyvo_item">
					<div class="palyvo_item3">
						<h5>ПАЛЕТИ</h5>
					</div>
					<p>Час горіння від<br>15 годин до 3 діб</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 palyvo_item">
					<div class="palyvo_item4">
						<h5>БРИКЕТИ</h5>
					</div>
					<p>Час горіння від<br>15 годин до 3 діб</p>
				</div>
			</div>
		</div>
	</div>

	<div class="pryklady section">
		<div class="container">
			<div class="row">
				<h4>Приклади змонтованих котлів</h4>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<img src="templates/<?=$cf['tplName']?>/img/pryklad_kotla1.jpg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<img src="templates/<?=$cf['tplName']?>/img/pryklad_kotla2.jpg">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<img src="templates/<?=$cf['tplName']?>/img/pryklad_kotla3.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="ideal section">
		<div class="container">
			<div class="row">
				<div class="ideal_content">
					<h4><b>Котел підходить ідеально для:</b></h4>
					<div class="row">
						<div class="red_elipse col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/ideal1.png">
							<p>Опалення приватних<br> будинків та котеджів</p>
						</div>
						<div class="red_elipse col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/ideal2.png">
							<p>Опалення майстерень</p>
						</div>
						<div class="red_elipse col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/ideal3.png">
							<p>Опалення теплиць</p>
						</div>
						<div class="red_elipse col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/ideal4.png">
							<p>Опалення магазинів<br> та складів</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="montagh section">
		<h5>Монтаж</h5>
		<p class="monaghniki">Підберемо перевірених монтажників<br> у Вашому регіоні</p>
	</div>


	<div class="schema section">
		<div class="container">
			<h4>Ми працюємо за схемою</h4>
			<div class="row">
				<div class="number1 number">
					<img src="templates/<?=$cf['tplName']?>/img/gray_elipse_1.png">
					<p>Безкоштовна<br> консультація</p>
				</div>
				<div class="strilka">
					<img src="templates/<?=$cf['tplName']?>/img/strilka.png">
				</div>
				<div class="number2 number">
				<img src="templates/<?=$cf['tplName']?>/img/gray_elipse_2.png">
					<p>Аванс</p>
				</div>
				<div class="strilka">
					<img src="templates/<?=$cf['tplName']?>/img/strilka.png">
				</div>
				<div class="number3 number">
					<img src="templates/<?=$cf['tplName']?>/img/gray_elipse_3.png">
					<p>Доставка</p>
				</div>
				<div class="strilka">
					<img src="templates/<?=$cf['tplName']?>/img/strilka.png">
				</div>
				<div class="number4 number">
					<img src="templates/<?=$cf['tplName']?>/img/gray_elipse_4.png">
					<p>Доплата</p>
				</div>
			</div>
		</div>
	</div>


	<div class="sklad_dostavka">
		<div class="container">
		<h4>Товар завжди є в наявності на складі</h4>
			<div class="sklad">
				<h2>1116 м&sup2;</h2>
				<h3>складських приміщень</h3>
			</div>
			<div class="dostavka">
				<h3>Доставка продукції від трьох днів по всій Україні</h3>
				<div class="row">
					<div class="col-lg-offset-4 col-lg-6 col-md-offset-4 col-md-6 col-sm-offset-1 col-sm-10 col-xs-12">
						<img src="templates/<?=$cf['tplName']?>/img/avto.png">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<img src="templates/<?=$cf['tplName']?>/img/dostavka_logo1.png">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<img src="templates/<?=$cf['tplName']?>/img/dostavka_logo2.png">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<img src="templates/<?=$cf['tplName']?>/img/dostavka_logo3.png">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<img src="templates/<?=$cf['tplName']?>/img/dostavka_logo4.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<section id="gurt">
	<div class="gurt section">
		<div class="container">
			<h4>Особливі умови для гуртових клієнтів</h4>
			<p>Для гуртових покупців в залежності від партії ми надаємо суттєві знижки. Відправте заявку прямо зараз на отримання повного оптового прайс-листа з особливими умовами</p>
			<button data-form="price" class="modal_open">Отримати прайс</button>
		</div>
	</div>
</section>


	<div class="bohemia_main">
		<div class="container">
			<div class="bohemia">
				<img class="bohemia_logotype" src="templates/<?=$cf['tplName']?>/img/bohemia_logo.png">
				<h5>Офіційний представник Viadrus на території України</h5>
				<p>Компанія Богемія уже 20 років постачає високоякісне та надійне обладнання з Чехії та  Словаччини. Доставка продукції здійснюється з 4-х складів, які розміщені у Львові, Києві, Вінниці та Дніпрі.</p>
				<h5>Головними складовими роботи компанїї Богемія є:</h5>
				<div class="row bohemia_icons">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bohemia_icons_item">
						<img src="templates/<?=$cf['tplName']?>/img/bohemia_quality.png">
						<p>Висока якість продукції</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bohemia_icons_item">
						<img src="templates/<?=$cf['tplName']?>/img/bohemia_tovar.png">
						<p>Широкий вибір продукції на складах</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bohemia_icons_item">
						<img src="templates/<?=$cf['tplName']?>/img/bohemia_remont.png">
						<p>Ремонт та сервісне обслуговування</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<section id="kontakt">
<div id="maps">
	<div class="kontakty section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 kontakty_content">
					<h5><b>Наші філіали і контакти</b></h5>
					<div class="row adress">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kontakt_item">
							<p><b>м. Київ</b></p>
							<p>вул. Сім'ї Хохлових, 11/2 на території "САН ПАРК"</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kontakt_item">
							<p><b>м. Львів</b></p>
							<p>вул. Шевченка, 154</p>
						</div>
					</div>
					<div class="row adress">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kontakt_item">
							<p><b>м. Дніпро</b></p>
							<p>вул. Маршала Малиновського, 2 ТРЦ "Вавілон"</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kontakt_item">
							<p><b>м. Вінниця</b></p>
							<p>вул. Грибоїдова, 17 район "Можайка"</p>
						</div>
					</div>
					<div class="row telephone">
						<div class="telephone_cont">
							<a href="tel:+380679425502" class="call">
							<img class="heart" src="templates/<?=$cf['tplName']?>/img/kontakty_tel.png" alt="Дзвінок">
							<big>+380679425502</big>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="map" id="map">
	</div>
</div>
</section>


	<div class="manager section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<h4>Якщо у Вас залишились запитання, задайте їх нашому <b>менеджеру Роману</b></h4>
					<button data-form="cons" class="modal_open">Отримати консультацію</button>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<img src="templates/<?=$cf['tplName']?>/img/manager.png">
				</div>
			</div>
		</div>
	</div>

	</div>

	<div class="writeus section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="templates/<?=$cf['tplName']?>/img/kotel2.png">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<h5>Напишіть нам!</h5>
					<p>- хочете стати офіційним дистриб'ютором чеських виробників опалювальної техніки</p>
					<p>- Ви хочете придбати будь-який виріб</p>
					<p>- Ви монтажник та хочете стати нашим представником</p>
					<p>- у Вас залишились запитання</p>
					<p>- маєте що нам запропонувати</p>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<form class="ajf" action="modules/ord/sender.php?c=form" method="post" id="form_modal">
						<input type="text" id="name" name="name" placeholder="Ім'я">
						<input type="text" id="phone" name="phone" placeholder="Телефон">
						<textarea type="text" id="message" name="message" placeholder="Доброго дня. Мене цікавить..."></textarea>
						<button type="submit" class="modal_submit">ВІДПРАВИТИ ПОВІДОМЛЕННЯ</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
		<div class="container">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Головна<span class="sr-only">(current)</span></a></li>
	        <li><a class="scrollto" href="#kotel">Котел</a></li>
	        <li><a class="scrollto" href="#perevagy">Переваги</a></li>
	        <li><a class="scrollto" href="#kontakt">Філіали</a></li>
	        <li><a class="scrollto" href="#gurt">На гурт</a></li>
	      </ul>
	     </div>
     </div>


	<div class="footer section">
		<div class="header_menu section">
		<div class="container">
			<div class="row header_content">
				<div class="col-lg-3 col-md-4 col-sm-12 head_right" style="margin-top: 50px;">
					<a class="contakt_tel" href="tel:+380679425502"><b>+380679425502</b></a>
					<p><b>info@viadrus-u22.com.ua</b></p>
				</div>
				<div class="col-lg-6 col-md-5 col-sm-12 head_text">
					<h4>ОПАЛЮВАЛЬНА ТЕХНІКА ВІД ЧЕСЬКОГО ВИРОБНИКА</h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 header_logo">
					<img src="templates/<?=$cf['tplName']?>/img/logo_viadrus.png">
				</div>
			</div>
		</div>
	</div>
	</div>

<div class="info-message"></div>

<script src="templates/<?=$cf['tplName']?>/js/bootstrap.js"></script>
<script type="text/javascript" src="templates/<?=$cf['tplName']?>/js/common.js"></script>
<script src="templates/<?=$cf['tplName']?>/js/salvattore.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7gvyL3iH6jkmjf2HqQFB_mEYDyffnwq0&callback=initMap" async defer></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-98458515-3', 'auto');
  ga('send', 'pageview');
 
</script>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter44534776 = new Ya.Metrika({ id:44534776, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <!-- /Yandex.Metrika counter -->


</body>
</html>