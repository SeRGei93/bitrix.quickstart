<?php
// ????????? ???????? ????
IncludeModuleLangFile(__FILE__);

// ????????? ????? ???????? ????????????
$SUP_RIGHT = $APPLICATION->GetGroupRight("support");

// ???? ?????? ?? ??????? ??
if($SUP_RIGHT>"D")
{
   $aMenu[] = array(
		"parent_menu" => "global_menu_services",
		"sort" => 50,
		"text" => GetMessage("MAIN_MENU_UNISENDER"),
		"title" => GetMessage("MAIN_MENU_UNISENDER_ALT"),
		"url" => "unisender_index.php?lang=".LANGUAGE_ID,
		"more_url" => array("unisender_index.php"),
		"icon" => "uni_menu_icon",
		"page_icon" => "uni_page_icon",
	);
	return $aMenu;
}
?>