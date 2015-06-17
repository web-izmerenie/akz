<?php
$html_classes = array();
$main_classes = array();
// <html> classes
if(defined('404'))
	$html_classes = array('page404');
if(defined('CATALOG'))
	$html_classes = array('catalog');
if(defined('CONTACTS'))
	$html_classes = array('contacts');
if(defined('ABOUT'))
	$html_classes = array('about');
if(defined('BUILDERS'))
	$html_classes = array('builders');
if(defined('CATALOG_VIEW'))
	$main_classes = array('catalog-view');

$html_classes = implode(" ", $html_classes);
$main_classes = implode(" ", $main_classes);
$tplPath = "/bitrix/templates/main/";?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if gte IE 9]><link href="<?=$tplPath?>styles/src/ie.css" rel="stylesheet"><![endif]-->
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" href="<?=$tplPath;?>/images/favicon.ico" type="image/x-icon" />
		<?$APPLICATION->ShowMeta("keywords");?>
		<?$APPLICATION->ShowMeta("description");?>
		<?$APPLICATION->ShowHead();?>
		<link href="/bower_components/slick-carousel/slick/slick-theme.css" rel="stylesheet">
		<link href="/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
		<link href="/bower_components/fancybox/source/jquery.fancybox.css" rel="stylesheet">
		<link href="<?=$tplPath;?>styles/build/build.css" rel="stylesheet">
		<script src="/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="/bower_components/jquery-color/jquery.color.js"></script>
		<script src="/bower_components/fancybox/source/jquery.fancybox.pack.js"></script>
		<script src="/bower_components/slick-carousel/slick/slick.min.js"></script>
		<script src="/bower_components/InlineSVG/jquery.inlinesvg.js"></script>
		<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		<script src="<?=$tplPath;?>scripts/main.js"></script>
	</head>

	<body class="<?=$html_classes?>">
		<?$APPLICATION->ShowPanel();?>
		<div class="wrapper">

			<header class="header">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"main_menu",
					array(
						"ROOT_MENU_TYPE" => "top",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N"
					),
					false
				);?>
				<section class="main">
					<div class="content-block">
						<?if($_SERVER['REQUEST_URI'] == '/'){?>
							<div id="logo"></div>
						<?}else{?>
							<a href="/" id="logo"></a>
						<?}?>
						<div id="right">
							<h1><a href="tel:+7 (86350) 48-8-48">+7 (86350) 48-8-48</a></h1>
							<p><a href="tel:(863) 256-91-01">(863) 256-91-01</a></p>
						</div>
					</div>
				</section>
			</header><!-- .header-->

			<main class="content <?=$main_classes;?>">
				<?if(!defined('MAIN_PAGE') && !defined('404')){?>
					<?if(!defined('NO_CONTENT_BLOCK')){?>
						<section class="content-block">
					<?}?>
						<div class="content-block" style="padding:0;">
							<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "pathway", Array(
								"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
									"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
									"SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
								),
								false
									);?>
							<?if(!defined('NO_TITLE')){?>
								<h1><?$APPLICATION->ShowTitle(false);?><?$APPLICATION->ShowViewContent('top');?></h1>
							<?}?>
						</div>
				<?}?>

