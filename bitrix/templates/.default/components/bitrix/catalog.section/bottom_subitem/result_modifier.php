<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
$newRes = array();

foreach($arResult['ITEMS'] as $arItem){
	if($GLOBALS['ITEM_ID'] == $arItem['ID'])continue;
	
	$newRes[] = $arItem;
}

unset($arResult['ITEMS']);

$arResult['ITEMS'] = $newRes;
