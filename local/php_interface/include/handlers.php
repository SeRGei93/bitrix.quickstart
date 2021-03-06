<?php
/**
 * Created by PhpStorm.
 * User: ASDAFF
 * Date: 16.05.2018
 * Time: 21:49
 *
 * Event handling.
 *
 * We strongly recommend to group event handlers in classes.
 *
 * For example, you can handle events "OnBeforeUserAdd" and "OnBeforeUserUpdate"
 * with methods UserHandlers::OnBeforeUserAdd() and UserHandlers::OnBeforeUserUpdate(), like this:
 *
 * AddEventHandler("main", "OnBeforeUserAdd", Array("UserHandlers", "OnBeforeUserAdd"));
 */

use \Bitrix\Main\Loader;

$eventManager = \Bitrix\Main\EventManager::getInstance();

////page start
//AddEventHandler("main", "OnPageStart", "loadLocalLib", 1);
//function loadLocalLib()
//{
//    Loader::includeModule('local.lib');
//}

AddEventHandler("main", "OnPageStart", array('ModelAuthEmailClass', 'auth')); // Авторизация с помощью EMAIL
AddEventHandler("main", "OnAfterEpilog", array('Urlrewrite', 'OnAfterEpilog')); // Сортировка urlrewrite

/**
 * Свойство инфоблока Привязка к медиабиблиотеке
 **/
AddEventHandler("main", "OnUserTypeBuildList", array('PropMediaLibUserType', 'GetUserTypeDescription'));
AddEventHandler("iblock", "OnIBlockPropertyBuildList", array('PropMediaLibIblockProperty', 'GetUserTypeDescription'));

/**
 * Пользовательские свойства для инфоблоков
 **/
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('CIBlockPropertyCRM', 'GetUserTypeDescription')); // свойство "Выбор компании из CRM"
AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('CIBlockPropertyColor', 'GetUserTypeDescription')); // свойство "Выбор цвета". Цвет хранится как строка вида ff0000 без знака #

/**
 * Пользовательское свойство инфоблока типа "Логическое" (true/false). Внешний вид - чекбокс.
 */
// добавляем тип для инфоблока
AddEventHandler("iblock", "OnIBlockPropertyBuildList", array("CUserTypeBool", "GetIBlockPropertyDescription"));
/*// добавляем тип для главного модуля
AddEventHandler("main", "OnUserTypeBuildList", array("CUserTypeBool", "GetUserTypeDescription"));*/

/**
 * Пользовательское свойство "Да/Нет в виде Input Checkbox (Флажок)
 */
AddEventHandler("iblock", "OnIBlockPropertyBuildList", array("CUserTypeYesNo", "GetUserTypeDescription"), 50);

/**
 * Подсветки PHP в редакторе
 **/
if ($_SERVER['SCRIPT_NAME'] == "/bitrix/admin/fileman_file_edit.php") {
    AddEventHandler("main", "OnEpilog", array("AdminArea", "InitPHPHighlight"));
}

/**
 * AdminArea
 **/


/**
 * IBlockProps
 **/
\Bitrix\Main\EventManager::getInstance()->addEventHandler("iblock", "OnIBlockPropertyBuildList", array('CAATIBlockPropSection', 'GetUserTypeDescription'));
\Bitrix\Main\EventManager::getInstance()->addEventHandler("iblock", "OnIBlockPropertyBuildList", array('CAATIBlockPropElement', 'GetUserTypeDescription'));
\Bitrix\Main\EventManager::getInstance()->addEventHandler("main", "OnUserTypeBuildList", array('PropertyHTML', 'GetUserTypeDescription'));


/**
 * order
 **/
\Bitrix\Main\EventManager::getInstance()->addEventHandler("main", "OnBeforeEventAdd", array('CEshopEmailFieldsHandlers', 'OnBeforeEventAdd'));

/**
 * property types
 **/


// Добавляем фильтр на изображение, если только в CFile::ResizeImageGet в $arFilters есть ключ irf_text
AddEventHandler('main', 'OnAfterResizeImage', Array('ImageResizeFilter', 'add'));


/**
 * user
 **/


/**
 * highload blocks
 **/
