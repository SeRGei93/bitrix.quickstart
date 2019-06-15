# Определение города по IP-адресу посетителя
Описание

Модуль «Определение города по IP-адресу посетителя» определяет по IP-адресу местоположение (город) посетителя вашего сайта. 

Модуль «Определение города по IP-адресу посетителя» может использовать: 
1. Онлайн-сервисы 
   - ipgeobase.ru 
   - geoip.elib.ru (с поддержкой кода пользователя) 
2. Локальные базы 
   - база онлайн-сервиса ipgeobase.ru 
   - база данных городов мира maxmind.com 
   - база из модуля веб-аналитики 1С-Битрикс. 

Особенности модуля: 
1. Использование БД КЛАДР 
Модуль автоматически найдет для сайта соответствие найденного города с базой данных КЛАДР, что бывает необходимо для расчета стоимости и времени доставки. 

2. Применяются локальные базы 
Преимущество локальной базы данных IP-адресов в том, что сайт не зависит от внешних сервисов геопозиционирования, и их функционирование не влияет на работу модуля. Недостаток — эти БД нужно периодически обновлять, для чего в настройках предусмотрен специальный интерфейс и напоминания. 

3. Автоматическое определение местоположения 
Решение автоматически определит город посетителя и может выводить окна с подтверждением города либо выбором другого, из списка или в строке поиска. 

4. Подстановка местоположения на странице заказа 
Скрипты модуля подставят местоположение в соответствующие поля на странице с компонентом оформления заказа, что поможет улучшить конверсию интернет-магазина. 

5. Работа с модулем веб-аналитики 
Если у вас на сайте установлен модуль веб-аналитики (statistics) от 1С-Битрикс, вы можете подключить его в настройках модуля. При этом у вас появляется возможность использовать любые базы IP-адресов, с которыми может работать модуль веб-аналитики. В данный модуль можно также загружать базы по всему миру. 

6. Поставляются готовые компоненты 
В модуле присутствуют компоненты, необходимые для отображения выбранного местоположения и возможности его изменения посетителем. Работу компонентов Вы увидите в публичке сразу после установки решения. 

7. Встроенное API 
Имеется API для определения города по IP и необходимые события в методах, если функционала компонентов будет недостаточно. 

8. Вывод контента с привязкой к местоположениям (геотаргетинг) 
Для избранных городов модуля есть возможность задать пользовательские поля (например, телефон, контактные данные, ссылку и др.) для каждого города и значения «по умолчанию» — для всех, а также вывести их компонентом. Это может быть полезным, если имеется несколько офисов компании в разных городах. 

9. Редирект по IP адресу 
На базе избранных городов возможен переход на соответствующий домен или URL-адрес при выборе посетителем данного города. Таким образом можно организовать маршрутизацию по поддоменам на основе выбранного города или захода с IP-адресов определенных городов. 


Модуль «Определение города по IP-адресу посетителя» работает на любой редакции «1С-Битрикс: Управление сайтом». 

На этапе установки модуля будет предложено "Создать таблицы и загрузить данные геопозиционирования с сайта ipgeobase.ru ". Оставьте галочки включенными, если вы хотите пользоваться указанной базой. 

Если галочки установлены, модуль автоматически скачает базу местоположений с сайта. 

После загрузки и установки базы данных ipgeobase модуль установит автоматически базу с городами из КЛАДР 

Подробнее: 
www.is-market.ru/bitrix-modules/other/altasib.geobase/
