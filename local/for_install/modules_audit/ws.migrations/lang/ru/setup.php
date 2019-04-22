<?php
return array(
    'title' => 'Установка модуля миграций данных',
    'tab' => 'Данные установки',
    'description' => 'Необходимо указать каталог расположения файлов миграций. <b>Относительно корневой директории проекта. ($SERVER[\'DOCUMENT_ROOT\'])</b>',
    'fields' => array(
        'catalog' => 'Путь к каталогу',
        'useAutotests' => 'Использовать автотесты (для разработчиков)',
        'apply' => 'Установить'
    ),
    'errors' => array(
        'notCreateDir' => 'Невозможно создать директорию',
        'catalogFieldEmpty' => 'Постое значение каталога'
    ),
    'section' => array(
        'disableHandlers' => 'Применять синхронизацию'
    )
);