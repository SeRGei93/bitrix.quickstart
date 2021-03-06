<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arParams['form_index'] = $this->randString(4);
$arParams['FORM_ID'] = 'REPLIER'.$arParams['form_index'];
$arParams['MESSAGE_SEPARATOR'] = ':SEPARATOR:';

$ratingSum = 0;

$arResult["REVIEW_TEXT_EXT"] = getPostExt($arParams['MESSAGE_SEPARATOR'], $arResult["REVIEW_TEXT"]);
$ratingSum = 0;
if(!empty($arResult['MESSAGES']))
{
	foreach($arResult["MESSAGES"] as $key1 => $res)
	{
		// format messages
		$arResult["MESSAGES"][$key1]["POST_MESSAGE_TEXT_EXT"] = getPostExt(
			$arParams['MESSAGE_SEPARATOR'], 
			$res["POST_MESSAGE_TEXT"]
		);
		
		$ratingSum += (int) $arResult["MESSAGES"][$key1]["POST_MESSAGE_TEXT_EXT"]['RATING'];
	}
}

$arResult['NO_AVATAR'] = $this->GetFolder().'/images/noavatar.gif';

$countMessages = count($arResult['MESSAGES']);
$arResult['COMMON_RATING'] = $countMessages > 0 ? round($ratingSum / count($arResult['MESSAGES'])):0;
	
function getPostExt($separator, $message) 
{
	$message = htmlspecialcharsbx($message);
	$arrPostMessage = explode($separator, $message);
	return array(
		"RATING" => $arrPostMessage[0],
		"PLUS" => $arrPostMessage[1],
		"MINUS" => $arrPostMessage[2],
		"COMMENT" => $arrPostMessage[3],
	);
}

$arResult["ERROR_MESSAGE"] = preg_replace(array("/<br(.*?)><br(.*?)>/is", "/<br(.*?)>$/is"), array("<br />", ""), $arResult["ERROR_MESSAGE"]);
$arResult["OK_MESSAGE"] = preg_replace(array("/<br(.*?)><br(.*?)>/is", "/<br(.*?)>$/is"), array("<br />", ""), $arResult["OK_MESSAGE"]);