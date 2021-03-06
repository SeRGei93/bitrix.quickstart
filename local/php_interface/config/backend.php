<?php
/**
 * Created by PhpStorm.
 * User: ASDAFF
 * Date: 26.02.2018
 * Time: 20:56
 */

/**
 * Тут описаны все js библиотеки, которые можно подключить через CJsCore
 */

$arLibs = array(

    /**
     * 'Название библиотеки' => array( // Стоит давать осмысленное название так, чтобы оно было понятно всем разработчикам
     *      'js'                => '', // Путь до библиотеки от корня сайта
     *      'css'               => '', // Путь до css файла библиотеки от корня сайта. Может быть массивом
     *      'lang'              => '', // Путь до обычного lang файла с php массивом, который будет транслирован в js
     *      'rel'               => '', // массив библиотек, от которых зависит данная библиотека
     *      'use'               => '', // CJSCore::USE_PUBLIC || CJSCore::USE_ADMIN,
     *      'skip_core'         => '', // отключает необходимость загрузки ядра JS битрикс
     *      'lang_additional'   => '', // Путь до дополнительного lang файла с php массивом, который будет транслирован в js
     * )
     *
     * Для подключения зарегистрированной библиотеки на какой-то странице сайта, используйте конструкцию:
     *      CJSCore::Init(array('library_name'));
     * Ваша библиотека будет подключена с использованием AddHeadScript.
     */

    'jquery_ui' => array(
        'js' => '/local/lib/frontend/jquery_ui/jquery-ui.min.js',
        'css' => '/local/lib/frontend/jquery_ui/jquery-ui.min.css',
        'rel' => array('jquery'),
    ),
    'jquery_fancybox' => array(
        'js' => '/local/codenails/frontend/lib/fancybox/jquery.fancybox.min.js',
        'css' => '/local/codenails/frontend/lib/fancybox/jquery.fancybox.min.css',
        'rel' => array('jquery'),
    ),
    'iblock_props' => array(
        'js' => '/local/codenails/frontend/lib/iblockprops/js/interface.js',
        'css' => '/local/codenails/frontend/lib/iblockprops/css/interface.css',
    ),
    'mask_input' => array(
        'js' => '/local/codenails/frontend/lib/mask_input/mask.input.js',
    )

);

foreach ($arLibs as $libName => $arLib) {
    if (!isset($arLib['skip_core'])) {
        $arLib['skip_core'] = true;
    }
    //Проверка на имя из ядра. Не будем давать подключать библиотеку с неправильным именем
    //чтобы имя всегда соответствовало ключу массива, иначе битрикс его подменит, сделав удаление всех неугодных ему символов
    if (!preg_match('~[a-z0-9_]+~', $libName)) {
        throw new \Exception('Попытка зарегистрировать библиотеку с некорректным именем - "' . $libName . '"');
    }

    if (strlen($arLib['js']) === 0) {
        throw new \Exception('Попытка зарегистрировать библиотеку без js файла - "' . $libName . '"');
    }

    CJSCore::RegisterExt($libName, $arLib);
}