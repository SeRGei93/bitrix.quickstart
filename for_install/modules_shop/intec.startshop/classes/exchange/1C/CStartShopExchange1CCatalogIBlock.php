<? $GLOBALS['_553554428_']=Array(); ?><? function _1551514439($i){$a=Array("������������","�����������������������","true");return $a[$i];} ?><? class CStartShopExchange1CCatalogIBlock{public $Id;public $Name;public $IsOnlyChanges=false;public static function GetByXml(&$_0){if($_0 instanceof CDataXML){$_1=$_0->SelectNodes("/����������������������/�������");if($_1 instanceof CDataXMLNode)return static::GetByXmlNode($_1);}return null;}public static function GetByXmlNode(&$_1){if($_1 instanceof CDataXMLNode){$_2=$_1->elementsByName("��");$_2=$_2[round(0)];$_3=$_1->elementsByName(_1551514439(0));$_3=$_3[round(0)];$_4=$_1->getAttribute(_1551514439(1));$_4=$_4[round(0)];if($_2 == null || $_3 == null)return null;$_5=new static;$_5->Id=CStartShopUtil::ConvertToSiteCharset($_2->textContent());$_5->Name=CStartShopUtil::ConvertToSiteCharset($_3->textContent());if($_4->textContent == _1551514439(2))$_5->IsOnlyChanges=true;return $_5;}return null;}} ?>
