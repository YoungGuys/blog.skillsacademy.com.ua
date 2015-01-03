


<script type="text/javascript" src="/lib/semantic_master/dist/semantic.js"></script>
<script type="text/javascript" src="/lib/semantic_master/dist/components/dropdown.js"></script>
<script type="text/javascript" src="/lib/semantic_master/dist/components/dimmer.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&language=ua" ></script>
<script type="text/javascript" src="/lib/gmaps.js"></script>
<script type="text/javascript">
    $('.dropdown')
        .dropdown({
            // you can use any ui transition
            transition: 'drop'
        })
    ;

    $('.ui.radio.checkbox')
        .checkbox()
    ;


    $('.special.cards .image').dimmer({
        on: 'hover'
    });
</script>
<script>
    var map1;
    var map2;
    var city_1_lat,
        city_1_lng,
        city_2_lat,
        city_1_lng;
    $(document).ready(function(){
        var lang,latt;
        map = new GMaps({
            el: '#map',
            lat: -12.043333,
            lng: -77.028333,
            rightclick: function(e) {
                lang = e.latLng.D;
                latt = e.latLng.k;
                $("#langit").val(lang);
                $("#lantit").val(latt);
                map.addMarker({
                    lat: latt,
                    lng: lang,
                    click: function(marker) {
                        map.removeMarker(marker);
                    }
                });
            }
        });
        GMaps.geolocate({
            success: function(position) {
                map.setCenter(position.coords.latitude, position.coords.longitude);
            }
        });

        /*$('.btn-1').click(function(e){
            e.preventDefault();
            GMaps.geocode({
                address: $('#address-1').val().trim(),
                callback: function(results, status){
                    if(status=='OK'){
                        var latlng = results[0].geometry.location;

                        map.setCenter(latlng.lat(), latlng.lng());
                        map.addMarker({
                            lat: latlng.lat(),
                            lng: latlng.lng()
                        });
                        city_1_lat = latlng.lat();
                        city_1_lng = latlng.lng();
                        $('.start_station_lo').val(city_1_lat);
                        $('.start_station_la').val(city_1_lng);
                    }
                }
            });
        });
        $('.btn-2').click(function(e){
            e.preventDefault();
            GMaps.geocode({
                address: $('#address-2').val().trim(),
                callback: function(results, status){
                    if(status=='OK'){
                        var latlng = results[0].geometry.location;
                        map.setCenter(latlng.lat(), latlng.lng());
                        map.addMarker({
                            lat: latlng.lat(),
                            lng: latlng.lng()
                        });
                        city_2_lat = latlng.lat();
                        city_2_lng = latlng.lng();
                        $('.final_station_lo').val(city_2_lat);
                        $('.final_station_la').val(city_2_lng);
                    }
                }
            });
        });*/
    });

</script>




<?php $arraytrue = [
    "Збс!",
    "Кажись спрацювало)",
    "Стопудово спрацювало)",
    "Якщо натиснути окей, то все буде добре",
    "Круто!",
    "Спрацювало!"
];
$arrayfalse = [
    "Всьо плохо. Спробуй зробити це ще раз.",
    "Неудача:( Спробуй ще раз",
    "А ну-ка спробуй ще раз"
];
shuffle($arrayfalse);
shuffle($arraytrue);?>
<div class="modal_bg">




    <div class="modal_window" id="mod_edit">
        <form class="edit_form"
              id="edit_form"
              action="<?php echo $_SESSION['site']; ?>/core/index.php"
              enctype="multipart/form-data"
              method="post">
        </form>
        <i class="icon-close--black btn-mod_close js-close_modal"></i>
    </div>
    <i class="js-mod js-mod_edit"></i>

    <div class="modal_window" id="mod_preload">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    <div class="modal_window" id="mod_event_true">
        <div class="mod mod_header">
            <h2 class="t-center"><?= $arraytrue[1]; ?></h2>
            <br/>
        </div>
        <div class="mod__footer">
            <button class="btn btn--large btn--black js-okeyreload">Окей</button>
        </div>
    </div>


    <div class="modal_window" id="mod_eventTrue">
        <div class="mod mod_header">
            <h2 class="t-center"><?= $arraytrue[1]; ?></h2>
            <br/>
        </div>
        <div class="mod__footer">
            <button class="btn btn--large btn--black js-close_modal">Окей</button>
        </div>
    </div>

    <div class="modal_window" id="mod_event_false">
        <div class="mod mod_header">
            <h2 class="t-center"><?= $arrayfalse[1]; ?></h2>
            <br/>
        </div>
        <div class="mod__footer">
            <button class="btn btn--large btn--black js-okeyreload">Окей</button>
        </div>
    </div>



</div>


</body>