<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init(array("jquery")); ?>
<script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>

<div id="evalga_informer_location"></div>

<script>
    ymaps.ready(evalga_informer_init);

    function evalga_informer_init() {
        var geolocation = ymaps.geolocation;
        var show_country = '<?=$arParams['SHOW_COUNTRY']?>';
        var show_city = '<?=$arParams['SHOW_CITY']?>';
        var location = '';
        
        if (show_country == 'Y') location = geolocation.country;
        if (show_country == 'Y' && show_city == 'Y') location += ', '; 
        if (show_city == 'Y') location += geolocation.city;
        $("#evalga_informer_location").text(location);
    }
</script>
