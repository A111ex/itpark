<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc as Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
	"NAME" => Loc::getMessage('MYTIME_SHOWTIME_NAME'),
	"DESCRIPTION" => Loc::getMessage('MYTIME_SHOWTIME_DESCRIPTION'),
	"SORT" => 20,
	"PATH" => array(
		"ID" => 'mytime',
		"NAME" => Loc::getMessage('MYTIME_NAME'),
        "DESCRIPTION" => Loc::getMessage('MYTIME_DESCRIPTION'),
		"SORT" => 10,
	),
);

?>