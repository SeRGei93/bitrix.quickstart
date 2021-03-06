<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Reviews");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"reviews",
	Array(
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "#CUSTOMERREVIEWS_IBLOCK_ID#",
		"NEWS_COUNT" => "12",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"AUTHOR_NAME",1=>"AUTHOR_JOB",2=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"RSMONOPOLY_AUTHOR_NAME" => "AUTHOR_NAME",
		"RSMONOPOLY_AUTHOR_JOB" => "AUTHOR_JOB",
		"RSMONOPOLY_SHOW_BLOCK_NAME" => "N",
		"RSMONOPOLY_USE_OWL" => "N",
		"RSMONOPOLY_COLS_IN_ROW" => "12",
		"PAGER_TEMPLATE" => "monopoly2",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "News",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"RSMONOPOLY_BLOCK_NAME_IS_LINK" => "N"
	)
);?><a name="addreview"></a><?$APPLICATION->IncludeComponent(
	"rsmonopoly:forms", 
	"monopoly", 
	array(
		"EVENT_TYPE" => "RS_MONOPOLY_REVIEWS",
		"FORM_TITLE" => "Add comments",
		"FORM_DESCRIPTION" => "The head objective of our company - to your satisfaction. Using the form below please provide an estimate of our work.",
		"EMAIL_TO" => "",
		"SHOW_FIELDS" => array(
			0 => "RS_NAME",
			1 => "RS_PHONE",
			2 => "RS_ORGANISATION_NAME",
			3 => "RS_TEXTAREA",
		),
		"REQUIRED_FIELDS" => array(
			0 => "RS_NAME",
			1 => "RS_PHONE",
			2 => "RS_TEXTAREA",
		),
		"USE_CAPTCHA" => "Y",
		"MESSAGE_AGREE" => "Thank you, your application is accepted!",
		"RS_MONOPOLY_EXT_FIELDS_COUNT" => "0",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>