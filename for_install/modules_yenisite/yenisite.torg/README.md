# Отзывы@mail.ru

Описание

Что такое Отзывы@Mail.Ru? Это система дистрибуции отзывов о товарах, предлагающая интернет-магазинам возможность получить доступ к многотысячной базе отзывов о товарах и использовать отзывы для повышения конверсии. 

Для использования системы Отзывы@Mail.Ru вам необходимо размещать товарные предложения в сервисе Товары@Mail.Ru. На основе привязки ваших товарных предложений к нашему каталогу мы знаем, какие отзывы могут быть показаны для каждого отдельно взятого товара. 
После того как вы установили виджет, при каждом заходе посетителя на страницу товарного предложения в вашем интернет-магазине ему показываются все отзывы для этого товара. Он может отсортировать их по дате, оценке и полезности для других посетителей.


Если ваш магазин зарегистрирован в системе Товары Mail.Ru: 
Зайдите в личный кабинет клиента в нашем сервисе. 
Выберите в меню пункт "Отзывы@Mail.Ru". 
Прочитайте и примите оферту сервиса. 
На странице настройки виджета выберите тип формирования URL в вашей системе управления сайтом:

Человеко-понятные URL (ЧПУ) - к примеру, вида http://yourshop.ru/phones/apple-iphone-4s/ 

URL с параметром идентификатора товара - например: http://yourshop.ru/phones/?GoodID=123456, где имя такого параметра"GoodID". 
5. Установите модуль 
6. Разместить на детальной странице компонент yenisite:torg 
Код вставки компонента на детальную страницу товара: 
  ```php
 <? $APPLICATION->IncludeComponent("yenisite:torg",  
                              ".default", array(), false); ?> 
```


 

7. Настройте параметры компонента 

Если ваш магазин НЕ зарегистрирован в системе Товары Mail.Ru: 
1. установить модуль 
2. разместить на детальной странице компонент yenisite:torg 
Код вставки компонента на детальную страницу товара 
```php
 <? $APPLICATION->IncludeComponent("yenisite:torg", ".default", array(  
      "MODEL" => $arResult["PROPERTIES"]["MAILRU_ID"]["VALUE"],   
   ),
   false 
); ?> 
```

У товара, должно быть заполнено свойство MAILRU_ID 
ID моделей можно посмотреть на сайте torg.mail.ru 
http://screencast.com/t/VZ2FUezvVZC 


Внимание! 
Модуль устанавливается только на ПО 1С-Битрикс с активной возможностью получения обновлений и технической поддержки.