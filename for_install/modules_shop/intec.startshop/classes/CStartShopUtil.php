<? $GLOBALS['_1517440489_']=Array('def' .'ine','' .'defi' .'n' .'e','defin' .'e','defi' .'n' .'e','define','define','is_arra' .'y','str_replace','is_file','file_g' .'et_con' .'ten' .'ts','' .'file_pu' .'t_contents','is_' .'d' .'ir','' .'scandir','a' .'rr' .'ay_shift','a' .'rr' .'ay_shif' .'t','p' .'reg_replac' .'e','' .'i' .'s_dir','arra' .'y_key_exis' .'ts','ar' .'ray_key_exi' .'st' .'s','is' .'_arr' .'ay','a' .'rray_val' .'ues','is_ar' .'r' .'ay','is_array','str' .'val','' .'s' .'trv' .'al','p' .'arse_url','p' .'a' .'rse_s' .'tr','ur' .'l' .'encode','' .'urlencod' .'e','imp' .'lod' .'e','is_a' .'rray','is' .'_' .'array','s' .'trval'); ?><? function _1761499532($i){$a=Array('STARTSHOP_UTIL_ARRAY_FILTER_USE_VALUE','STARTSHOP_UTIL_ARRAY_FILTER_USE_KEY','STARTSHOP_UTIL_ARRAY_FILTER_USE_BOTH','STARTSHOP_UTIL_ARRAY_PREFIX_USE_KEY','STARTSHOP_UTIL_ARRAY_PREFIX_USE_VALUE','STARTSHOP_UTIL_ARRAY_PREFIX_USE_BOTH','#','#','/\/{2,}/','/','/','fragment','query','#','fragment','fragment','query','query','query','query','query','=','&','?','query','query',"UTF-8");return $a[$i];} ?><? $GLOBALS['_1517440489_'][0](_1761499532(0),0);$GLOBALS['_1517440489_'][1](_1761499532(1),round(0+0.33333333333333+0.33333333333333+0.33333333333333));$GLOBALS['_1517440489_'][2](_1761499532(2),round(0+0.5+0.5+0.5+0.5));$GLOBALS['_1517440489_'][3](_1761499532(3),0);$GLOBALS['_1517440489_'][4](_1761499532(4),round(0+0.33333333333333+0.33333333333333+0.33333333333333));$GLOBALS['_1517440489_'][5](_1761499532(5),round(0+1+1));class CStartShopUtil{public static function ReplaceMacros($_0,$_1){$_2=$_0;if($GLOBALS['_1517440489_'][6]($_1)&&!empty($_1)){foreach($_1 as $_3 => $_4){$_2=$GLOBALS['_1517440489_'][7](_1761499532(6) .$_3 ._1761499532(7),$_4,$_2);}}return $_2;}public static function ReplaceMacrosInFile($_5,$_1){if($GLOBALS['_1517440489_'][8]($_5)){$_6=$GLOBALS['_1517440489_'][9]($_5);$_6=static::ReplaceMacros($_6,$_1);$GLOBALS['_1517440489_'][10]($_5,$_6);}}public static function ReplaceMacrosInDir($_7,$_1){if($GLOBALS['_1517440489_'][11]($_7)){$_8=$GLOBALS['_1517440489_'][12]($_7);$GLOBALS['_1517440489_'][13]($_8);$GLOBALS['_1517440489_'][14]($_8);foreach($_8 as $_9){$_10=$GLOBALS['_1517440489_'][15](_1761499532(8),_1761499532(9),$_7 ._1761499532(10) .$_9);if($GLOBALS['_1517440489_'][16]($_10)){self::ReplaceMacrosInDir($_10,$_1);}else{self::ReplaceMacrosInFile($_10,$_1);}}}}public static function DBResultToArray(&$_11,$_12=false,$_13=false){$_14=array();if($_11 instanceof CDBResult)if(!$_13){while($_15=$_11->Fetch())if($_12 !== false){if($GLOBALS['_1517440489_'][17]($_12,$_15)&&!empty($_15[$_12]))$_14[$_15[$_12]]=$_15;}else{$_14[]=$_15;}}else{while($_15=$_11->GetNext())if($_12 !== false){if($GLOBALS['_1517440489_'][18]($_12,$_15)&&!empty($_15[$_12]))$_14[$_15[$_12]]=$_15;}else{$_14[]=$_15;}}return $_14;}public static function ArrayToDBResult($_16){if(!$GLOBALS['_1517440489_'][19]($_16))$_16=array();$_16=$GLOBALS['_1517440489_'][20]($_16);$_11=new CDBResult();$_11->InitFromArray($_16);return $_11;}public static function ArrayFilter($_16,$_17,$_18=0){$_19=array();if(!($_17 instanceof Closure)||!$GLOBALS['_1517440489_'][21]($_16))return $_19;foreach($_16 as $_12 => $_20){$_21=false;if($_18 == STARTSHOP_UTIL_ARRAY_FILTER_USE_VALUE)$_21=(bool)$_17($_20);if($_18 == STARTSHOP_UTIL_ARRAY_FILTER_USE_KEY)$_21=(bool)$_17($_12);if($_18 == STARTSHOP_UTIL_ARRAY_FILTER_USE_BOTH)$_21=(bool)$_17($_12,$_20);if($_21)$_19[$_12]=$_20;}return $_19;}public static function ArrayPrefix($_16,$_22=null,$_23=null,$_18=0){$_24=array();if(!$GLOBALS['_1517440489_'][22]($_16))return $_24;$_22=$GLOBALS['_1517440489_'][23]($_22);$_23=$GLOBALS['_1517440489_'][24]($_23);if(empty($_22)&& empty($_23))return $_16;if($_18 == STARTSHOP_UTIL_ARRAY_PREFIX_USE_KEY)foreach($_16 as $_12 => $_20)$_24[$_22 .$_12 .$_23]=$_20;if($_18 == STARTSHOP_UTIL_ARRAY_PREFIX_USE_VALUE)foreach($_16 as $_12 => $_20)$_24[$_12]=$_22 .$_20 .$_23;if($_18 == STARTSHOP_UTIL_ARRAY_PREFIX_USE_BOTH)foreach($_16 as $_12 => $_20)$_24[$_22 .$_12 .$_23]=$_22 .$_20 .$_23;return $_24;}public static function UrlDisassemble($_25){$_26=$GLOBALS['_1517440489_'][25]($_25);$_27=array();if(!empty($_26[_1761499532(11)])){$_26[_1761499532(12)].= _1761499532(13) .$_26[_1761499532(14)];unset($_26[_1761499532(15)]);}if(!empty($_26[_1761499532(16)]))$GLOBALS['_1517440489_'][26]($_26[_1761499532(17)],$_27);$_26[_1761499532(18)]=$_27;unset($_27);return $_26;}public static function UrlAssemble($_28){$_29=$_28['path'];$_30=array();if(!empty($_28[_1761499532(19)]))foreach($_28[_1761499532(20)]as $_12 => $_31)if(!empty($_12)){$_30[]=$GLOBALS['_1517440489_'][27]($_12) ._1761499532(21) .$GLOBALS['_1517440489_'][28]($_31);}$_30=$GLOBALS['_1517440489_'][29](_1761499532(22),$_30);if(!empty($_30))$_29 .= _1761499532(23) .$_30;return $_29;}public static function UrlParametersSet($_25,$_32=array()){if(!$GLOBALS['_1517440489_'][30]($_32))return false;$_28=static::UrlDisassemble($_25);foreach($_32 as $_12 => $_31)$_28[_1761499532(24)][$_12]=$_31;$_25=static::UrlAssemble($_28);return $_25;}public static function UrlParametersRemove($_25,$_32=array()){if(!$GLOBALS['_1517440489_'][31]($_32))return false;$_28=static::UrlDisassemble($_25);foreach($_32 as $_33)unset($_28[_1761499532(25)][$GLOBALS['_1517440489_'][32]($_33)]);$_25=static::UrlAssemble($_28);return $_25;}public static function ConvertToSiteCharset($_0){global $APPLICATION;return $APPLICATION->ConvertCharset($_0,"UTF-8",SITE_CHARSET);}public static function ConvertFromSiteCharset($_0){global $APPLICATION;return $APPLICATION->ConvertCharset($_0,SITE_CHARSET,_1761499532(26));}} ?>
