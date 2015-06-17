<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<section class="mainmenu">
	<div class="content-block">
		<nav>
			<ul>
				<?foreach($arResult as $arItem){?>
				<li <?if($arItem['SELECTED'] == '1'){?>class="active"<?}?>>
					<a href="<?=$arItem['LINK'];?>" <?foreach($arItem['PARAMS'] as $val => $arParam){?>
					   <?=$val;?>="<?=$arParam;?>"
					<?}?>>
						<?=$arItem['TEXT'];?>
					</a>
				</li>
				<?}?>
			</ul>
		</nav>
	</div>
</section>
<?endif?>
