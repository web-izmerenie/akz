<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<?if(!empty($arResult['ITEMS'])){?>
	<section class="other-item">
		<div class="content-block">
			<h1>В этом же цвете:</h1>
			<ul>
				<?foreach($arResult['ITEMS'] as $arItem){?>
					<li>
						<a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
							<img src="<?=$arItem['DETAIL_PICTURE']['SRC'];?>">
							<?=$arItem['PROPERTIES']['ATT_PROPERTY']['VALUE']['1'];?>
							<?=$arItem['PROPERTIES']['ATT_PROPERTY']['VALUE']['2'];?>
						</a>
					</li>
				<?}?>
			</ul>
		</div>
	</section>
<?}?>
