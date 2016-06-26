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
	<link rel="stylesheet" media="screen and (min-width: 1025px)" href="css/layout-desktop.css" />

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/fastclick.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/carousel.lite.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
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
        	<li class="active"><a href="index.php" class="b-mobile-menu-a">Главная</a></li>
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
	<div class="b b-main">
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
			<div class="content">
				<div>
					<h1>Авторская клиника<br>эстетической стоматологии<br>и косметологии</h1>
					<button type="button" class="btn fancy" data-block="#b-popup-rec">Записаться на прием</button>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-what">
		<div class="b-block clearfix">
			<div class="right text">
				<h4>ЧТО ТАКОЕ</h4>
				<h2>cosmodent</h2>
				<div>
					<p>Здравствуйте! Меня зовут Гурген Хачатрян, я&nbsp;&mdash; генеральный директор авторской клиники эстетической стоматологии и&nbsp;косметологии Cosmodent.</p>
					<p>Клиника Cosmodent решает множество вопросов по&nbsp;оздоровлению и&nbsp;поддержанию естественной красоты, делая свой акцент на&nbsp;обворожительной улыбке и&nbsp;совершенной коже.</p>
					<p>Обладая самым современным техническим оснащением (KaVo, Германия), Cosmodent гарантирует качество своей работы и&nbsp;дает своим клиентам годовую страховку на&nbsp;предоставленные услуги. Cosmodent объединяет лучших высококвалифицированных специалистов по&nbsp;всем направления стоматологии и&nbsp;косметологии&nbsp;&mdash; это профессионалы высокой категории и&nbsp;с&nbsp;многолетним стажем усовершенствования человеческой красоты.</p>
				</div>
				<a href="#" class="link">Читать полностью</a>
			</div>
			<div class="left img"></div>
		</div>
	</div>
	<div class="b b-slider">
		<div class="slider-back">
			<div style='background-image: url("i/slider-back.jpg");'><span class="b-brown"></span></div>
			<div style='background-image: url("i/slider-back.jpg");'><span class="b-brown"></span></div>
			<div style='background-image: url("i/slider-back.jpg");'><span class="b-brown"></span></div>
			<div style='background-image: url("i/slider-back.jpg");'><span class="b-brown"></span></div>
		</div>
		<div class="b-block slider-cont">
			<div>
				<h3>передовые технологии<br>в нашей клинике</h3>
				<p>Лучшее стоматологиеческое оборудование из&nbsp;Европы.</p>
				<p>Лечение зубов пациентам по&nbsp;самым современным мировым стандартам.</p>
				<p class="last">Лечение кариеса и&nbsp;пульпита с&nbsp;использованием микроскопа, точнейшее протезирование и&nbsp;реставрация лучшими материалами.</p>
				<button class="btn">Узнать подробнее</button>
			</div>
			<div>
				<h3>передовые технологии<br>в нашей клинике</h3>
				<p>Лучшее стоматологиеческое оборудование из&nbsp;Европы.</p>
				<p>Лечение зубов пациентам по&nbsp;самым современным мировым стандартам.</p>
				<p class="last">Лечение кариеса и&nbsp;пульпита с&nbsp;использованием микроскопа, точнейшее протезирование и&nbsp;реставрация лучшими материалами.</p>
				<button class="btn">Узнать подробнее</button>
			</div>
			<div>
				<h3>передовые технологии<br>в нашей клинике</h3>
				<p>Лучшее стоматологиеческое оборудование из&nbsp;Европы.</p>
				<p>Лечение зубов пациентам по&nbsp;самым современным мировым стандартам.</p>
				<p class="last">Лечение кариеса и&nbsp;пульпита с&nbsp;использованием микроскопа, точнейшее протезирование и&nbsp;реставрация лучшими материалами.</p>
				<button class="btn">Узнать подробнее</button>
			</div>
			<div>
				<h3>передовые технологии<br>в нашей клинике</h3>
				<p>Лучшее стоматологиеческое оборудование из&nbsp;Европы.</p>
				<p>Лечение зубов пациентам по&nbsp;самым современным мировым стандартам.</p>
				<p class="last">Лечение кариеса и&nbsp;пульпита с&nbsp;использованием микроскопа, точнейшее протезирование и&nbsp;реставрация лучшими материалами.</p>
				<button class="btn">Узнать подробнее</button>
			</div>
		</div>
	</div>
	<div class="b b-services">
		<div class="b-block">
			<h2 class="title">Наши услуги</h2>
			<form action="#" method="POST" id="services-form">
				<input class="input" type="text" name="search" placeholder="Поиск услуги" required>
				<button class="search-btn"></button>
			</form>
			<ul class="clearfix">
				<li>
					<a href="#">
						<div class="diag"></div>
						<h3>ДИАГНОСТИКА</h3>
						<h4>
							Компьютерная томография зубов<br>
							Лазерная диагностика кариеса
						</h4>
					</a>
				</li>
				<li >
					<a href="#">
						<div class="terapevt"></div>
						<h3>ТЕРАПЕВТИЧЕСКАЯ СТОМАТОЛОГИЯ</h3>
						<h4>
							Лечение кариеса<br>
							Лечение зубов без бормашины<br>
							Лечение кариеса методом
						</h4>
					</a>
				</li>
				<li >
					<a href="#">
						<div class="estet"></div>
						<h3>ЭСТЕТИЧЕСКАЯ СТОМАТОЛОГИЯ</h3>
						<h4>
							Эстетическая стоматология<br>
							Виниры и люминиры<br>
							Композитные виниры<br>
							Стоматология Anti-Age
						</h4>
					</a>
				</li>
				<li >
					<a href="#">
						<div class="implant"></div>
						<h3>ИМПЛАНТАЦИЯ</h3>
						<h4>
							Зубные имплантаты (импланты)<br>
							Костная пластика
						</h4>
					</a>
				</li>
				<li >
					<a href="#">
						<div class="ortopedia"></div>
						<h3>ПРОТЕЗИРОВАНИЕ (ортопедия)</h3>
						<h4>
							Съемное протезирование зубов<br>
							Бюгельное протезирование<br>
							Мостовидные зубные 
						</h4>
					</a>
				</li>
				<li >
					<a href="#">
						<div class="ortodontia"></div>
						<h3>ОРТОДОНТИЯ (исправление прикуса)</h3>
						<h4>
							Брекеты для взрослых<br>
							Сапфировые брекеты<br>
							Керамические брекеты<br>
							Лингвальные невидимые 
						</h4>
					</a>
				</li>
				<li >
					<a href="#">
						<div class="hiryrg"></div>
						<h3>ХИРУРГИЯ</h3>
						<h4>
							Удаление зуба мудрости<br>
							Удаление ретинированого	зуба
						</h4>
					</a>
				</li>
				<li >
					<a href="#">
						<div class="gigiena"></div>
						<h3>ПРОФГИГИЕНА И ОТБЕЛИВАНИЕ</h3>
						<h4>
							Удаление зубного камня<br>
							Чистка зубов Air Flow<br>
							Фторирование и&nbsp;ремотерапия 
						</h4>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-doctors">
		<div class="b-block">
			<h2 class="title">Наши врачи</h2>
			<ul class="clearfix filter">
				<li class="active" data-filter="*">Все</li>
				<li data-filter=".gigienist-1">Гигиенист стоматологический</li>
				<li data-filter=".ortodont-1">Ортодонт</li>
				<li data-filter=".ortoped-1">Ортопед</li>
				<li data-filter=".stomatolog-1">Стоматолог-терапевт</li>
				<li data-filter=".hiryrg-1">Хирург-имплантолог</li>
			</ul>
			<ul class="doctors b-main-doctors clearfix" id="doctors">
				<li class="gigienist-1" style="background-image: url('i/doctor-1.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
				<li class="gigienist-1" style="background-image: url('i/doctor-2.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
				<li class="ortodont-1" style="background-image: url('i/doctor-3.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
				<li class="ortoped-1" style="background-image: url('i/doctor-4.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
				<li class="ortoped-1" style="background-image: url('i/doctor-5.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
				<li class="hiryrg-1" style="background-image: url('i/doctor-6.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
				<li class="stomatolog-1" style="background-image: url('i/doctor-7.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
				<li class="hiryrg-1" style="background-image: url('i/doctor-8.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
				<li class="hiryrg-1" style="background-image: url('i/doctor-9.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
				<li class="stomatolog-1" style="background-image: url('i/doctor-10.jpg');">
					<a class="desc-cont" href="#">
						<div class="b-mobile-bottom">
							<h3>Куркина Алена Евгеньевна</h3>
							<h4>
								Хирург-стоматолог,
								имплантолог,
								пародонтолог
							</h4>
							<h5 class="fancy" data-block="#b-popup-record">Записаться на прием</h5>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-reviews">
		<div class="b-block">
			<h2 class="title">Отзывы</h2>
			<div class="reviews-slider">
				<div>
					<div class="photo-cont clearfix">
						<div style="background-image: url('i/review.jpg');" class="left"></div>
						<h3 class="left">Валентина<br>Комарова</h3>
					</div>
					<p>Я&nbsp;полном восторге!!! Такого сервиса еще нет ни&nbsp;у&nbsp;кого!!!! Все предусмотрено, все для пациента))) , осталось еще на&nbsp;дом стоматолога для лечения зубов услугу добавить))))) удачи, и&nbsp;процветания!!!!</p>
					<a class="link fancy" href="#" data-block="#b-popup-full">Читать полностью</a>
				</div>
				<div>
					<div class="photo-cont clearfix">
						<div style="background-image: url('i/review.jpg');" class="left"></div>
						<h3 class="left">Алена<br>водонаева</h3>
					</div>
					<p>В&nbsp;очередной раз спасибо. Хожу раз в&nbsp;полгода на&nbsp;профессиональную гигиену. И&nbsp;у&nbsp;нее&nbsp;же мой <nobr>15-летний</nobr> сын лечит зубы. Доктор замечательная, как и&nbsp;вся клиника, впрочем. Уже с&nbsp;порога чувствуешь себя, как в&nbsp;гостях у&nbsp;хороших друзей&nbsp;&mdash; так тебе рады.</p>
				</div>
				<div>
					<div class="photo-cont clearfix">
						<div style="background-image: url('i/review.jpg');" class="left"></div>
						<h3 class="left">Валентина<br>Комарова</h3>
					</div>
					<p>Я&nbsp;полном восторге!!! Такого сервиса еще нет ни&nbsp;у&nbsp;кого!!!! Все предусмотрено, все для пациента))) , осталось еще на&nbsp;дом стоматолога для лечения зубов услугу добавить))))) удачи, и&nbsp;процветания!!!!</p>
				</div>
				<div>
					<div class="photo-cont clearfix">
						<div style="background-image: url('i/review.jpg');" class="left"></div>
						<h3 class="left">Алена<br>водонаева</h3>
					</div>
					<p>В&nbsp;очередной раз спасибо. Хожу раз в&nbsp;полгода на&nbsp;профессиональную гигиену. И&nbsp;у&nbsp;нее&nbsp;же мой <nobr>15-летний</nobr> сын лечит зубы. Доктор замечательная, как и&nbsp;вся клиника, впрочем. Уже с&nbsp;порога чувствуешь себя, как в&nbsp;гостях у&nbsp;хороших друзей&nbsp;&mdash; так тебе рады.</p>
				</div>
			</div>
			<button class="btn btn-brown fancy" data-block="#b-popup-auth">Оставить отзыв</button>
		</div>
	</div>
	<div class="b b-articles">
		<div class="b-block">
			<h2 class="title">Cтатьи</h2>
			<div class="articles-slider">
				<div>
					<div class="img" style='background-image: url("i/article-1.jpg");'></div>
					<div class="text">
						<h3>4 мифа о стоматологии</h3>
						<p>Современный стоматологический рентген не&nbsp;нанесет здоровью никакого вреда! В&nbsp;клинике COSMODENT установлены <nobr>рентген-аппараты</nobr> фирмы Gendex (Германия). Дозы излучения снижены настолько, что безопасно.</p>
						<a href="#" class="link">Читать полностью</a>
					</div>
				</div>
				<div>
					<div class="img" style='background-image: url("i/article-2.jpg");'></div>
					<div class="text">
						<h3>Передовое и уникальное оборудование</h3>
						<p>Современный стоматологический рентген не&nbsp;нанесет здоровью никакого вреда! В&nbsp;клинике COSMODENT установлены <nobr>рентген-аппараты</nobr> фирмы Gendex.</p>
						<a href="#" class="link">Читать полностью</a>
					</div>
				</div>
				<div>
					<div class="img" style='background-image: url("i/article-3.jpg");'></div>
					<div class="text">
						<h3>имплантация сразу после удаления зуба</h3>
						<p>Современный стоматологический рентген не&nbsp;нанесет здоровью никакого вреда! В&nbsp;клинике COSMODENT установлены <nobr>рентген-аппараты</nobr> фирмы Gendex (Германия).</p>
						<a href="#" class="link">Читать полностью</a>
					</div>
				</div>
				<div>
					<div class="img" style='background-image: url("i/article-1.jpg");'></div>
					<div class="text">
						<h3>4 мифа о стоматологии</h3>
						<p>Современный стоматологический рентген не&nbsp;нанесет здоровью никакого вреда! В&nbsp;клинике COSMODENT установлены <nobr>рентген-аппараты</nobr> фирмы Gendex (Германия). Дозы излучения снижены настолько, что безопасно.</p>
						<a href="#" class="link">Читать полностью</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-contacts">
		<div class="b-block">
			<h2 class="title">COsmodent в томске</h2>
			<h3>
				Ждем вас по будням с 9:00 до 20:00<br>
				и в субботу с 10:00 до 18:00
			</h3>
		</div>
	</div>
	<div id="map_canvas"></div>
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