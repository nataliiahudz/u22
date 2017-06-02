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
<body data-lang="ru">

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
		       			<form class="ajf" action="modules/ord/sender.php?c=form" method="post" id="form_modal">
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
					<h4>ОТОПИТЕЛЬНАЯ ТЕХНИКА ОТ ЧЕШСКОГО ПРОИЗВОДИТЕЛЯ</h4>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-12 head_right">
					<a href="index.php?lang=ua"><span class="lang">УКР</span></a>
					<a href="index.php?lang=ru"><span class="lang">РУС</span></a>
					<div class="zamovyty_dzvinok">
						<a class="contakt_tel" href="tel:+380679425502"><b>+380679425502</b></a>
						<button data-form="call" class="modal_open">Заказать звонок</button>
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
	        <li class="active"><a href="#">Главная<span class="sr-only">(current)</span></a></li>
	        <li><a class="scrollto"  href="#kotel">Котел</a></li>
	        <li style="width: 150px;"><a class="scrollto"  href="#perevagy">Преимущества</a></li>
	        <li><a class="scrollto"  href="#kontakt">Филиалы</a></li>
	        <li><a class="scrollto"  href="#gurt">На опт</a></li>
	      </ul>
	     </div>
     </div>

	<div class="header section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 header_text">
					<h3>Продажа чугунных<br><b>твердотопливных<br> котлов №1</b></h3><br>
					<span>VIADRUS U22</span>
					<h4 class="header_main">по цене производителя<br>с бесплатной доставкой<br>по всей Україне</h4>
					<button data-form="buy" class="modal_open">Купить</button>
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
						<p>Котел 20 лет на<br>рынке Украини</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 section1_item">
					<div class="gray_elipse_item">
						<img src="templates/<?=$cf['tplName']?>/img/gray2.png">
						<p>Продано больше<br>35 000 единиц<br>даной модели</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 section1_item">
					<div class="gray_elipse_item">
						<img src="templates/<?=$cf['tplName']?>/img/gray3.png">
						<p>Изготовлен<br>из высококачественного<br>чешского чугуна</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 section1_item">
					<div class="gray_elipse_item">
						<img src="templates/<?=$cf['tplName']?>/img/gray4.png">
						<p>Гидравлическое<br>испытание<br>под давлением<br>каждого котла</p>
					</div>
				</div>
			</div>
			<section id="kotel">
			<div class="row hercules22">
				<h2>Котел твердотопливный</h2>
				<h2 class="herules_name">VIADRUS U22 C/D</h2>
				<div class="col-lg-offset-1 col-lg-7 col-md-offset-1 col-md-7 hercules22_content">
					<p>Преимуществом котла является низкие требования к дымовой тяги, a также годами проверенная конструкция. Модификация котла VIADRUS U22 D по сравнению с котлом типа VIADRUS U22 С имеет преимущество: увеличен отверстие топки, который позволяет закладывать в топку и сжигать большие куски дерева диаметром до 220 мм.</p>
					<p>U22 C - основное топливо - уголь, дополнительное дерево. Модельный ряд от 2 до 10 секций.</p>
					<p>U22 D - основное топливо - дерево, дополнительное угля. Модельный ряд от 4 до 10 секций.</p>
					<button class="table_show">Основные технические параметры</button>
				</div>


				<div class="col-lg-4 col-md-3 kotel">
					<img src="templates/<?=$cf['tplName']?>/img/kotel.png">
					<button data-form="buy" class="modal_open">Купить</button>
				</div>
				<div class="row">
					<div class="col-lg-offset-1 col-lg-11 col-md-offset-1 col-md-11 col-sm-12 col-xs-12">
						<div class="table_kotel">
							<table class="table table-striped">
								<tr>
									<th>Количество секций</th>
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
									<th>Номинальная мощность U22 C-кокс и уголь</th>
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
									<th>Номинальная мощность U22 D-древесина</th>
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
									<th>Расход топлива-U22 C, кокс</th>
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
									<th>Расход топлива-U22 C, уголь</th>
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
									<th>Расход топлива-U22 D, древесина</th>
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
									<th>КПД U22 C-кокс и уголь</th>
									<td>%</td>
									<td colspan="9">75-80</td>
								</tr>
								<tr>
									<th>КПД U22 D-древесина</th>
									<td>%</td>
									<td>&#9675;</td>
									<td>&#9675;</td>
									<td colspan="7">75</td>
								</tr>
								<tr>
									<th>Макс.темп. продуктов сгорания-U22 C, кокс и уголь</th>
									<td>&#176С</td>
									<td colspan="9"><280</td>
								</tr>
								<tr>
									<th>Макс.темп. продуктов сгорания-U22 D, древесина</th>
									<td>&#176С</td>
									<td>&#9675;</td>
									<td>&#9675;</td>
									<td colspan="7"><280</td>
								</tr>
								<tr>
									<th>Габариты-высота со шкафом управления</th>
									<td>мм</td>
									<td colspan="9">1010</td>
								</tr>
								<tr>
									<th>Габариты-высота без шкафа управления</th>
									<td>мм</td>
									<td colspan="9">990</td>
								</tr>
								<tr>
									<th>Габариты-ширина</th>
									<td>мм</td>
									<td colspan="9">550</td>
								</tr>
								<tr>
									<th>Габариты-глубина</th>
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
									<th>Вес-U22 C</th>
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
									<th>Вес-U22 D</th>
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
									<th>Глубина камеры сгорания</th>
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
									<th>Рекомендуемая должина полена</th>
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
									<th>Диаметр дымохода</th>
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
									<th>Тяга дымохода</th>
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
									<th>Подключение отопительной и обратной воды</th>
									<td></td>
									<td colspan="9">DN50</td>
								</tr>
								<tr>
									<th>Рабочее давление воды</th>
									<td>Па</td>
									<td colspan="9">50-400</td>
								</tr>
								<tr>
									<th>Испытательное давление воды</th>
									<td>Па</td>
									<td colspan="9">800</td>
								</tr>
								<tr>
									<th>Рекомендуемая рабочая температура отопительной воды</th>
									<td>Па</td>
									<td colspan="9">60-90</td>
								</tr>
								<tr>
									<th>Минимальная температура обратной воды</th>
									<td>Па</td>
									<td colspan="9">60</td>
								</tr>
								<tr>
									<th>Объем водяного пространства-U22 C</th>
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
									<th>Объем водяного пространства-U22 D</th>
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
									<th>Уровень шума</th>
									<td>дБ</td>
									<td colspan="9"><65дБ(А)</td>
								</tr>
							</table>
							<img class="kotel_parametry" src="templates/<?=$cf['tplName']?>/img/kotel_parametry.png">
							<button class="table_hide">Скрыть параметры</button>
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
					<h2>24 месяца</h2>
					<h4>Гарантия на Viadrus U22 с даты ввода котла в эксплуатацию</h4>
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
			<h3>Преимуществa котлов VIADRUS U22</h3>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<span class="item24m_red">ДОЛГОВЕЧНОСТЬ</span>
						<p>теплообменника</p>
						<p>с чешского чугуна</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<span class="item24m_red">ПРОВЕРЕННАЯ</span><br>
						<span class="item24m_red">ГОДАМИ</span>
						<p>конструкция</p>
						<p>котла</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<p>возможность</p>
						<span class="item24m_red">СЖИГАНИЯ ДРЕВЕСИНЫ</span><br>
						<span class="item24m_red">ПОВЫШЕННОЙ ВЛАЖНОСТИ</span>
						<p>(20-25%)</p>
					</div>
				</div>
			</div>
			<div class="row perevagy_content">
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<p>низкие</p>
						<p>требования к</p>
						<span class="item24m_red">ДЫМОВОЙ ТЯГИ</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<p>котел</p>
						<p>оборудован</p>
						<span class="item24m_red">РЕГУЛЯТОРОМ</span><br>
						<span class="item24m_red">ТЯГИ</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 item24m">
					<div class="item24m_content">
						<span class="item24m_red">ЛЕГКИЙ МОНТАЖ</span>
						<p>котла благодаря</p>
						<p>резьбовым фланцам</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>


	<div class="hercules section">
		<div class="container">
			<h2>VIADRUS U22</h2>
			<h3>продано больше, чем 35000 шт.</h3>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules1.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Изготовлен из качественного чугуна</p>
							<p>Котлы вылитые в Чехии, одним из крупнейших производителей чугуна в Европе</p>
						</div>
					</div>
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules3.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Замена отдельных секций</p>
							<p>Если отдельная секция вышла из строя, есть возможность заменить только ее, а не весь котел</p>
						</div>
					</div>
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules5.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Каждый котел проходит опрессовку</p>
							<p>Каждый котел проходит тест под водным давлением для выявления возможных дефектов. Только котлы, которые показали лучшие результаты, поступающие на следующий этап.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules2.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Можно сжечь все</p>
							<p>Котел не прихотлив к топливу</p>
						</div>
					</div>
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules4.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Энергонезависимый</p>
							<p>Котел может работать без помощи электроэнергии</p>
						</div>
					</div>
					<div class="row hercules_item">
						<div class="col-lg-5 col-md-5 col-sm-5 co-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/hercules6.png">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<p class="hercules_head">Низкая цена</p>
							<p>При изготовлении котлов Viadrus использует литейный чугун, который сам и выливает у себя на производстве. Благодаря этому стоимость котла существенно уменьшается.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="palyvo section">
		<div class="container">
			<h3>Использование любого топлива</h3>
			<h5>Котел Viadrus U22 может работать на любом виде топлива</h5>
			<h5>Это могут быть:</h5>
			<div class="row palyvo_content">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 palyvo_item">
					<div class="palyvo_item1">
						<h5>ДРОВА</h5>
					</div>
					<p>Время горения от<br>15 часов до 3 суток</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 palyvo_item">
					<div class="palyvo_item2">
						<h5>УГОЛЬ</h5>
					</div>
					<p>Время горения от<br>1 часа до 10 суток</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 palyvo_item">
					<div class="palyvo_item3">
						<h5>ПАЛЛЕТИ</h5>
					</div>
					<p>Время горения от<br>15 часов до 3 суток</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 palyvo_item">
					<div class="palyvo_item4">
						<h5>БРИКЕТЫ</h5>
					</div>
					<p>Время горения от<br>15 часов до 3 суток</p>
				</div>
			</div>
		</div>
	</div>

	<div class="pryklady section">
		<div class="container">
			<div class="row">
				<h4>Примеры смонтированных котлов</h4>
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
	</div>



	<div class="ideal section">
		<div class="container">
			<div class="row">
				<div class="ideal_content">
					<h4><b>Котел подходит идеально для:</b></h4>
					<div class="row">
						<div class="red_elipse col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/ideal1.png">
							<p>Отопления частных<br>домов и коттеджей</p>
						</div>
						<div class="red_elipse col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/ideal2.png">
							<p>Отопление мастерских</p>
						</div>
						<div class="red_elipse col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/ideal3.png">
							<p>Отопление теплиц</p>
						</div>
						<div class="red_elipse col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<img src="templates/<?=$cf['tplName']?>/img/ideal4.png">
							<p>Отопление магазинов<br>и складов</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="montagh section">
		<h5>Монтаж</h5>
		<p class="monaghniki">Подберем проверенных монтажников<br>в Вашем регионе</p>
	</div>


	<div class="schema section">
		<div class="container">
			<h4>Мы работаем по схеме</h4>
			<div class="row">
				<div class="number1 number">
					<img src="templates/<?=$cf['tplName']?>/img/gray_elipse_1.png">
					<p>Бесплатная<br> консультация</p>
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
		<h4>Товар всегда есть в наличии на складе</h4>
			<div class="sklad">
				<h2>1116 м&sup2;</h2>
				<h3>складских помещений</h3>
			</div>
			<div class="dostavka">
				<h3>Доставка продукции от трех дней по всей Украине</h3>
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
			<h4>Особые условия для оптовых клиентов</h4>
			<p>Для оптовых покупателей в зависимости от партии мы предоставляем существенные скидки. Отправьте заявку прямо сейчас на получение полного оптового прайс-листа с особыми условиями</p>
			<button data-form="price" class="modal_open">Получить прайс</button>
		</div>
	</div>
</section>


	<div class="bohemia_main">
		<div class="container">
			<div class="bohemia">
				<img class="bohemia_logotype" src="templates/<?=$cf['tplName']?>/img/bohemia_logo.png">
				<h5>Официальный представитель Viadrus на территории Украины</h5>
				<p>Компания Богемия уже 20 лет поставляет высококачественное и надежное оборудование из Чехии и Словакии. Доставка продукции осуществляется с 4-х складов, расположенных во Львове, Киеве, Виннице и Днепре.</p>
				<h5>Главными составляющими работы компании Богемия являются:</h5>
				<div class="row bohemia_icons">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bohemia_icons_item">
						<img src="templates/<?=$cf['tplName']?>/img/bohemia_quality.png">
						<p>Высокое качество продукции</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bohemia_icons_item">
						<img src="templates/<?=$cf['tplName']?>/img/bohemia_tovar.png">
						<p>Широкий выбор продукции на складах</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bohemia_icons_item">
						<img src="templates/<?=$cf['tplName']?>/img/bohemia_remont.png">
						<p>Ремонт и сервисное обслуживание</p>
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
					<h5><b>Наши филиалы и контакты</b></h5>
					<div class="row adress">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kontakt_item">
							<p><b>г. Киев</b></p>
							<p>ул. Семьи Хохловых, 11/2 на территории "САН ПАРК"</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kontakt_item">
							<p><b>г. Львов</b></p>
							<p>ул. Шевченко, 154</p>
						</div>
					</div>
					<div class="row adress">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kontakt_item">
							<p><b>г. Днепр</b></p>
							<p>ул. Маршала Малиновского, 2 ТРЦ "Вавилон"</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kontakt_item">
							<p><b>г. Винница</b></p>
							<p>ул. Грибоедова, 17 район "Можайка"</p>
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
					<h4>Если у Вас остались вопросы, задайте их нашему <b>менеджеру Роману</b></h4>
					<button data-form="cons" class="modal_open">Получить консультацию</button>
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
					<h5>Напишите нам!</h5>
					<p>- хотите стать официальным дистрибьютором чешских производителей отопительной техники</p>
					<p>- Вы хотите приобрести любое изделие</p>
					<p>- Вы монтажник и хотите стать нашим представителем</p>
					<p>- у Вас остались вопросы</p>
					<p>- есть что нам предложить</p>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<form class="ajf" action="modules/ord/sender.php?c=form" method="post" id="form_modal">
						<input type="text" name="writeus_name" placeholder="Ім'я">
						<input type="text" name="writeus_tel" placeholder="Телефон">
						<textarea type="text" name="writeus_text" placeholder="Доброго дня. Мене цікавить..."></textarea>
						<button type="submit" class="modal_submit">ОТПРАВИТЬ СООБЩЕНИЕ</button>
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
	        <li class="active"><a href="#">Главная<span class="sr-only">(current)</span></a></li>
	        <li><a class="scrollto"  href="#kotel">Котел</a></li>
	        <li style="width: 150px;"><a class="scrollto"  href="#perevagy">Преимущества</a></li>
	        <li><a class="scrollto"  href="#kontakt">Филиалы</a></li>
	        <li><a class="scrollto"  href="#gurt">На опт</a></li>
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
					<h4>ОТОПИТЕЛЬНАЯ ТЕХНИКА ОТ ЧЕШСКОГО ПРОИЗВОДИТЕЛЯ</h4>
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