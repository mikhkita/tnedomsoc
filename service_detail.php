<?
$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4)));
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no">
	
	<? if( $mobile ): ?>
        <meta name="viewport" content="width=750, user-scalable=no">
    <? else: ?>
        <meta name="viewport" content="width=device-width, user-scalable=no">
    <? endif; ?>

	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.datetimepicker.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">

	<link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 767px)" href="css/layout-mobile.css" />

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/fastclick.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.sticky.js"></script>
	<script type="text/javascript" src="js/KitProgress.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.datetimepicker.full.min.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<!-- <ul class="ps-lines">
		<li class="v" style="margin-left:-581px"></li>
		<li class="v" style="margin-left:580px"></li>
		<li class="v" ></li>
	</ul> -->
	<div class="b-mobile-menu">
        <a href="index.php" class="b-logo"></a>
        <span class="b-close-mobile icon-close"></span>
        <ul>
        	<li><a href="index.php" class="b-mobile-menu-a">Главная</a></li>
        	<li><a href="services.php" class="b-mobile-menu-a">Услуги</a></li>
			<li><a href="doctors.php" class="b-mobile-menu-a">Врачи</a></li>
			<li><a href="actions.php" class="b-mobile-menu-a">Акции</a></li>
			<li><a href="reviews.php" class="b-mobile-menu-a">Отзывы</a></li>
			<li><a href="works.php" class="b-mobile-menu-a">Работы</a></li>
			<li><a href="articles.php" class="b-mobile-menu-a">Статьи</a></li>
			<li><a href="contacts.php" class="b-mobile-menu-a">Контакты</a></li>
        </ul>
    </div>
	<div class="b-header-fixed">
		<div class="b-header b-block clearfix">
			<a href="index.php" class="logo left"></a>
			<ul class="left clearfix">
				<li><a href="services.php">Услуги</a></li>
				<li><a href="doctors.php">Врачи</a></li>
				<li><a href="actions.php">Акции</a></li>
				<li><a href="reviews.php">Отзывы</a></li>
				<li><a href="works.php">Работы</a></li>
				<li><a href="articles.php">Статьи</a></li>
				<li><a href="contacts.php">Контакты</a></li>
			</ul>
			<div class="phone-cont right">
				<h3>+7 (3822) 202 332</h3>
				<h4><a href="#">Иркутский тракт, 5</a></h4>
			</div>
			<div class="search right icon-search">
				<form action="#">
					<input type="text" name="q" placeholder="Поиск по сайту" required style="display: none;">
					<input type="submit" style="display: none;">
				</form>
			</div>
		</div>
	</div>
	<div class="b b-other" data-parallax="scroll" data-image-src="i/services.jpg">
		<div class="b-block">
			<div class="b-header clearfix">
				<a href="index.php" class="logo left"><img src="i/logo.png"></a>
				<ul class="left clearfix">
					<li><a href="services.php">Услуги</a></li>
					<li><a href="doctors.php">Врачи</a></li>
					<li><a href="actions.php">Акции</a></li>
					<li><a href="reviews.php">Отзывы</a></li>
					<li><a href="works.php">Работы</a></li>
					<li><a href="articles.php">Статьи</a></li>
					<li><a href="contacts.php">Контакты</a></li>
				</ul>
				<div class="phone-cont right">
					<h3>+7 (3822) 202 332</h3>
					<h4><a href="#">Иркутский тракт, 5</a></h4>
				</div>
				<div class="b-mobile-header">
					<a href="tel:83822202332" class="b-phone"></a>
					<a href="#" class="b-burger"></a>
				</div>
				<div class="search right icon-search">
					<form action="#">
						<input type="text" name="q" placeholder="Поиск по сайту" required style="display: none;">
						<input type="submit" style="display: none;">
					</form>
				</div>
			</div>
			<div class="b-other-text">
				<div>
					<h1>Услуги</h1>
					<form action="#" method="POST">
						<input class="input" type="text" name="search" placeholder="Поиск услуги" required>
						<button class="search-btn"></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-navigation">
		<ul class="b-block clearfix">
			<li><a href="#">Главная</a></li>
			<li><a href="#">Услуги</a></li>
			<li class="active"><a href="#" onclick="return false;">Диагностика</a></li>
		</ul>
	</div>
	<div class="b-other-content">
		<div class="b-block text-contain clearfix">
			<div class="service-text left">
				<div class="b-text">
					<h2>ДИАГНОСТИКА</h2>
					<p>Комплексная диагностика&nbsp;&mdash; обязательное условие любой процедуры по&nbsp;лечению заболеваний зубов и&nbsp;полости рта. Только на&nbsp;основании тщательных исследований зубочелюстной системы (а&nbsp;возможно и&nbsp;расчетов&nbsp;&mdash; в&nbsp;случае ортодонтического и&nbsp;ортопедического лечения) врач сможет ознакомить своего нового пациента с&nbsp;оптимальным планом лечения, его длительностью и&nbsp;конечным результатом.</p>
					<h4>ДЕТАЛЬНЫЙ ОСМОТР И&nbsp;ОПРОС ПАЦИЕНТА&nbsp;&mdash; НЕПРЕМЕННАЯ ЧАСТЬ ДИАГНОСТИКИ</h4>
					<p>Стоматолог должен не&nbsp;только визуально осмотреть полость рта пациента, но&nbsp;и&nbsp;самым внимательным образом выслушать, расспросить его о&nbsp;жалобах, давности возникновения проблемы, выяснить особенности роста и&nbsp;развития, узнать о&nbsp;наличии вредных привычек, генетических особенностях. Все это&nbsp;&mdash; важная часть диагностики.</p>
					<h4><nobr>3D-ДИАГНОСТИКА</nobr> ЗУБОВ С&nbsp;ПОМОЩЬЮ КОМПЬЮТЕРНОГО ТОМОГРАФА</h4>
					<p>В&nbsp;COSMODENT используется ультрасовременный <nobr>конусно-лучевой</nobr> компьютерный томограф. КТ&nbsp;обеспечивает наиболее прогрессивный и&nbsp;совершенный метод диагностики кариеса и&nbsp;других заболеваний полости рта. Высочайшая точность в&nbsp;измерениях доходит до&nbsp;долей миллиметра. С&nbsp;помощью такой аппаратуры возможна ранняя диагностика кариеса и&nbsp;процессов, идущих в&nbsp;тканях, плохо поддающихся другим способам исследования.</p>
					<p>Стоматологи всех специальностей на&nbsp;практике подтверждают несомненные преимущества этого вида диагностики:</p>
					<ul>
						<li>Отсутствие геометрических искажений изображения;</li>
						<li>Возможность увидеть любую рассматриваемую область со всех сторон, возможность послойного анализа изображений;</li>
						<li>Массив данных, полученных одним КТ исследованием неизмеримо больше, чем данные, полученные  обычным снимком;</li>
						<li>Отсутствие дискомфорта для пациента при исследовании;</li>
						<li>Отсутствие наложения структур друг на друга;</li>
						<li>Существенная экономия времени - съемка всей зубочелюстной системы пациента происходит гораздо быстрее съемки каждого зуба по отдельности;</li>
						<li>Низкая лучевая нагрузка на организм пациента.</li>
					</ul>
					<h4>ДЕТАЛЬНЫЙ «ПРИЦЕЛЬНЫЙ СНИМОК»</h4>
					<p>Такой снимок выполняется, когда нужна быстрая диагностика кариеса, оценка работы непосредственно в процессе лечения, динамический контроль процесса приживления имплантата. Преимущества «прицельного снимка»:</p>
					<ul>
						<li>Разрешение такого снимка достаточно высоко</li>
						<li>Небольшая доза облучения для пациента</li>
						<li>Невысокая стоимость диагностики</li>
						<li>Однако при исследовании с помощью прицельных снимков съемка доступна с очень ограниченных углов, возможно искажение форм и размеров объектов на снимках, поэтому при таком методе диагностики -очень важно мастерство рентгенолога или лаборанта.</li>
					</ul>
					<h4>ДИАГНОКАМ (DIAGNOСAM) - ЛАЗЕРНАЯ ДИАГНОСТИКА КАРИЕСА БЕЗ ОБЛУЧЕНИЯ</h4>
					<p>Современные методы диагностики кариеса зубов стремятся к комфорту и полной безопасности. Компактный и удобный аппарат Диагнокам разработан и выпущен на медицинский рынок нашими деловыми партнерами – крупнейшей немецкой компанией KaVo.</p>
					<p>При помощи препарата Диагнокам стоматологи в режиме реального времени без рентгеновского излучения могут проводить:</p>
					<ul>
						<li>Визуальную диагностику кариеса на самых ранних этапах</li>
						<li>Эффективную диагностику наддесневых поверхностей зуба и вторичного кариеса</li>
						<li>Выявление трещин эмали без применения стоматологического микроскопа и т.д.</li>
						<li>Диагнокам можно использовать для диагностики кариеса у ослабленных пациентов с сопутствующими хроническими заболеваниями и у беременных.</li>
					</ul>
					<h4>ГДЕ МОЖНО ПРОВЕСТИ ПОЛНУЮ ДИАГНОСТИКУ, 3D-ДИАГНОСТИКУ ЗУБОВ</h4>
					<p>В COSMODENT можно провести полную диагностику полости рта перед любой стоматологической манипуляцией. Комфорт и безопасность нашей диагностической аппаратуры, а также большой опыт персонала позволяют провести диагностику даже самым "сложным" пациентам: маленьким детям, беременным или людям с ослабленным здоровьем и хроническими заболеваниями.</p>
					<h4>СТОИМОСТЬ КАЧЕСТВЕННОЙ ДИАГНОСТИКИ ЗУБОВ В COSMODENT</h4>
					<p>В COSMODENT стоимость прицельной рентгенографии составляет 990 рублей; компьютерной диагностики зубов – 4 890 рублей (КЛКТ + запись на CD); описание 1 сектора – 1 190 рублей. Первичная консультация стоматолога, включающая тщательный осмотр, сбор анамнеза и составление плана лечения – 1 290 руб.</p>
					<a href="#">Прайс-лист на услуги COSMODENT</a>
				</div>
			</div>
			<div class="service-accord right">
				<h3 data-href="http://google.ru"><i class="diag"></i><span>ДИАГНОСТИКА</span></h3>
				<div>
					<a href="#">Компьютерная томография зубов</a>
					<a href="#">Лазерная диагностика кариеса ДИАГНОКАМ (DIAGNOcam)</a>
					<a href="#">Визиограф</a>
					<a href="#">Рентген-диагностика состояния зубов</a>
				</div>
				<h3 data-href="http://google.ru"><i class="terapevt"></i><span>ТЕРАПЕВТИЧЕСКАЯ СТОМАТОЛОГИЯ</span></h3>
				<div>
					<a href="#">Лечение кариеса</a>
					<a href="#">Лечение зубов без бормашины</a>
					<a href="#">Лечение кариеса методом ICON</a>
					<a href="#">Лечение пульпита</a>
					<a href="#">Лечение корневых каналов зaубов (эндодонтия)</a>
					<a href="#">Лечение зубов под микроскопом</a>
					<a href="#">Лечение зубов в седации (закись азота)</a>
					<a href="#">Лечение зубов под общим наркозом в Москве</a>
					<a href="#">«Здоровая мама» – программа для беременных</a>
					<a href="#">Озонотерапия: лечение кариеса и заболеваний десен</a>
					<a href="#">Лечение травм зубов и десен</a>
					<a href="#">Индивидуальные спортивные каппы</a>
					<a href="#">Лечение десен</a>
				</div>
				<h3 data-href="http://google.ru"><i class="estet"></i><span>ЭСТЕТИЧЕСКАЯ СТОМАТОЛОГИЯ</span></h3>
				<div>
					<a href="#">Эстетическая стоматология</a>
					<a href="#">Виниры и люминиры</a>
					<a href="#">Композитные виниры</a>
					<a href="#">Стоматология Anti-Age</a>
				</div>
				<h3 data-href="http://google.ru"><i class="implant"></i><span>ИМПЛАНТАЦИЯ</span></h3>
				<div>
					<a href="#">Эстетическая стоматология</a>
					<a href="#">Виниры и люминиры</a>
					<a href="#">Композитные виниры</a>
					<a href="#">Стоматология Anti-Age</a>
				</div>
				<h3 data-href="http://google.ru"><i class="ortopedia"></i><span>ПРОТЕЗИРОВАНИЕ</span></h3>
				<div>
					<a href="#">Эстетическая стоматология</a>
					<a href="#">Виниры и люминиры</a>
					<a href="#">Композитные виниры</a>
					<a href="#">Стоматология Anti-Age</a>
				</div>
				<h3 data-href="http://google.ru"><i class="ortodontia"></i><span>ОРТОДОНТИЯ</span></h3>
				<div>
					<a href="#">Эстетическая стоматология</a>
					<a href="#">Виниры и люминиры</a>
					<a href="#">Композитные виниры</a>
					<a href="#">Стоматология Anti-Age</a>
				</div>
				<h3 data-href="http://google.ru"><i class="hiryrg"></i><span>ХИРУРГИЯ</span></h3>
				<div>
					<a href="#">Эстетическая стоматология</a>
					<a href="#">Виниры и люминиры</a>
					<a href="#">Композитные виниры</a>
					<a href="#">Стоматология Anti-Age</a>
				</div>
				<h3 data-href="http://google.ru"><i class="gigiena"></i><span>ПРОФГИГИЕНА И ОТБЕЛИВАНИЕ</span></h3>
				<div>
					<a href="#">Эстетическая стоматология</a>
					<a href="#">Виниры и люминиры</a>
					<a href="#">Композитные виниры</a>
					<a href="#">Стоматология Anti-Age</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-other-content b-grey">
		<div class="b-block">
			<h2 class="title">Лечащие врачи</h2>
			<div class="doctors-slider">
				<div style="background-image: url('i/doctor-1.jpg');">	
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,<br>
								имплантолог,<br>
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</div>
				<div style="background-image: url('i/doctor-1.jpg');">	
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,<br>
								имплантолог,<br>
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</div>
				<div style="background-image: url('i/doctor-1.jpg');">	
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,<br>
								имплантолог,<br>
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</div>
				<div style="background-image: url('i/doctor-1.jpg');">	
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,<br>
								имплантолог,<br>
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</div>
				<div style="background-image: url('i/doctor-1.jpg');">	
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,<br>
								имплантолог,<br>
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</div>
				<div style="background-image: url('i/doctor-1.jpg');">	
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,<br>
								имплантолог,<br>
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-callback">
		<div class="b-callback-i">
			<div class="b-block">
				<h2 class="title">ОСТАЛИСЬ ВОПРОСЫ?<br>МЫ ПЕРЕЗВОНИМ</h2>
				<form action="kitsend.php" method="POST" data-block="#b-popup-2">
					<input class="input" type="text" name="name" placeholder="Вас зовут" required>
					<input class="input" type="text" name="phone" placeholder="Ваш телефон" required>
					<button class="ajax btn">Заказать звонок</button>
				</form>
			</div>
		</div>
	</div>
	<div class="b b-footer">
		<div class="b-block">
			<div class="top clearfix">
				<ul class="soc left">
					<li><a href="#">Instagram</a></li>
					<li><a href="#">Вконтакте</a></li>
				</ul>
				<ul class="left">
					<li><a href="#">Диагностика</a></li>
					<li><a href="#">Терапевтическая стоматология</a></li>
					<li><a href="#">Эстетическая стоматология</a></li>
					<li><a href="#">Имплантация</a></li>
					<li><a href="#">Протезирование (ортопедия)</a></li>
				</ul>
				<ul class="left">
					<li><a href="#">Ортодонтия</a></li>
					<li><a href="#">Хирургия</a></li>
					<li><a href="#">Профгигиена и отбеливание</a></li>
					<li><a href="#">Акции</a></li>
					<li><a href="#">Прайс-лист</a></li>
				</ul>
				<ul class="left">
					<li>Томск, Иркутсктий тракт, 5</li>
					<li>+7 (3822) 202 332</li>
					<li>info@cosmodent.su</li>
				</ul>
			</div>
			<div class="bot clearfix">
				<div class="left">
					Все права защищены &copy; 2016
				</div>
				<div class="right">
					<a href="http://redder.pro" class="b-redder" target="_blank">REDDER</a>
				</div>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<div id="b-popup-rec">
			<div class="b-popup">
				<h3>записаться на&nbsp;прием</h3>
				<form action="kitsend.php" method="POST" id="b-form-1" data-block="#b-popup-2">
					<div class="clearfix">
						<input class="input left input-half" type="text" name="name" required placeholder="Вас зовут" />
						<input class="input right input-half" type="text" name="phone" required placeholder="Ваш телефон"/>
					</div>
					<input class="input" type="email" name="email" required placeholder="E-mail"/>
					<select class="input" name="doctor" id="spec-select">
						<option selected disabled>Выберите специалиста</option>
						<option value="Ортодонт">Гигиенист стоматологический</option>
						<option value="Ортодонт">Ортодонт</option>
						<option value="Ортопед">Ортопед</option>
						<option value="Стоматолог-терапевт">Стоматолог-терапевт</option>
						<option value="Хирург-имплантолог">Хирург-имплантолог</option>
					</select>
					<select class="input" name="doctor-name" id="name-select">
						<option selected disabled>Выберите доктора</option>
						<option value="Куркина Алена Евгеньевна">Куркина Алена Евгеньевна</option>
						<option value="Гурген Хачатрян">Гурген Хачатрян</option>
					</select>
					<input class="input" type="text" name="date" id="datepicker" required placeholder="Дата и время записи"/>
					<input type="hidden" name="subject" value="Запись на прием"/>
					<button class="ajax btn btn-brown">Отправить</button>
				</form>
			</div>
		</div>
		<div id="b-popup-review">
			<div class="b-popup">
				<h3>Оставить отзыв</h3>
				<form action="kitsend.php" method="POST" id="b-form-1" data-block="#b-popup-2">
					<div class="clearfix">
						<input class="input left input-half" type="text" name="name" required placeholder="Вас зовут" />
						<input class="input right input-half" type="text" name="phone" required placeholder="Ваш телефон"/>
					</div>
					<input class="input" type="text" name="email" required placeholder="E-mail"/>
					<textarea class="input" name="1" placeholder="Текст отзыва"></textarea>
					<input type="hidden" name="subject" value="Отзыв"/>
					<button class="ajax btn btn-brown">Отправить</button>
				</form>
			</div>
		</div>
		<div id="b-popup-full">
			<div class="b-popup full-review">
				<div class="photo-cont clearfix">
					<div style="background-image: url('i/review.jpg');" class="img left"></div>
					<div class="text left">
						<h3>Алена водонаева</h3>
						<h4>27.05.2016</h4>
					</div>
				</div>
					<p>В&nbsp;очередной раз спасибо.<br />
					Хожу раз в&nbsp;полгода на&nbsp;профессиональную гигиену к&nbsp;Татьяне Степановне Гузун на&nbsp;Проспект Мира. И&nbsp;у&nbsp;нее&nbsp;же мой <nobr>15-летний</nobr> сын лечит зубы. Доктор замечательная, как и&nbsp;вся клиника, впрочем. Уже с&nbsp;порога чувствуешь себя, как в&nbsp;гостях у&nbsp;хороших друзей&nbsp;&mdash; так тебе рады.<br />
					Ну&nbsp;и&nbsp;подход к&nbsp;лечению, оборудование, атмосфера&nbsp;&mdash; все на&nbsp;высшем уровне. Спасибо за&nbsp;лечение, консультации и&nbsp;советы!</p>
			</div>
		</div>
		<div id="b-popup-auth">
			<div class="b-popup">
				<h3>оставить отзыв</h3>
				<h4>Для того, чтобы оставить отзыв, требуется авторизоваться через Вконтакте</h4>
				<button type="button" class="btn btn-brown">Войти</button>
			</div>
		</div>
		<div id="b-popup-2">
			<div class="b-popup">
				<h3>Спасибо!</h3>
				<h4>Ваша заявка отправлена. В&nbsp;ближайшее время наши менеджеры свяжутся с&nbsp;вами.</h4>
				<button type="button" class="btn btn-brown" onclick="$.fancybox.close(); return false;">Закрыть</button>
			</div>
		</div>
		<div id="b-popup-error">
			<div class="b-popup">
				<h3>Ошибка отправки!</h3>
				<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
				<button type="button" class="btn btn-brown" onclick="$.fancybox.close(); return false;">Закрыть</button>
			</div>
		</div>
	</div>
</body>
</html>