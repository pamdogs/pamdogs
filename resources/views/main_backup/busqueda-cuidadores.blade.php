@extends('main.template')
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="es-ES">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.0.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "musewpdisclosure.js", "jquery.watch.js", "require.js", "cuidadores.css"], "outOfDate":[]};
</script>

  <link rel="shortcut icon" href="{{ url('main/images/favicon.ico?crc=69713473') }}"/>
  <title>Cuidadores</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/site_global.css?crc=323482740') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/master_a-p_g_-maestra.css?crc=4207519935') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/busqueda-cuidadores.css?crc=4280955230') }}" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_cuidadores.css?crc=3765166315"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/source-sans-pro:n7,n6,n9,i7:default.js" type="text/javascript">\x3C/script>');
</script>
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
    <!--HTML Widget code-->
    @yield('normalize_styles')

    @yield('script_pace')
 </head>
 <body>

  <!--HTML Widget code-->

	@yield('loader')


  <div class="clearfix borderbox" id="page"><!-- group -->
   <div class="size_fixed grpelem" id="u3507"><!-- custom html -->

   </div>
   <div class="size_fixed grpelem" id="u2503"><!-- custom html -->


   </div>
   <div class="clearfix grpelem" id="u31814" style=" max-height:600px;overflow:auto;"><!-- column -->
  <span style="display:none">{{$i = 0}}</span>
  @foreach ($users as $user)
    <div class="clearfix colelem c{{$i++}}" id="u31815"><!-- group -->
     <div class="clearfix grpelem" id="ppu31819"><!-- column -->
      <div class="clearfix colelem" id="pu31819"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U31819-BP_infinity" template="cuidadores.html" data-type="image" -->
       <div class="clip_frame grpelem div-circle" id="u31819" data-muse-uid="U31819" data-muse-type="img_frame"><!-- image -->
        <img class="block img-circle" id="u31819_img" src="{{ isset($user->avatar) ? (starts_with($user->avatar,'http') ? $user->avatar : url('images/avatars/users/'.$user->avatar)) : url('main/images/user-291x91.png?crc=85990611') }}" alt="" data-muse-src="{{ url('main/images/user-291x91.png?crc=85990611') }}" data-image-width="91" data-image-height="91"/>
       </div>
       <!-- /m_editable -->
       <div class="clearfix grpelem" id="pu31883-4"><!-- column -->
        <!-- m_editable region-id="editable-static-tag-U31883-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem" id="u31883-4" data-muse-uid="U31883" data-muse-type="txt_frame"><!-- content -->
         <p>{{ $user->nombre }} {{ $user->apellido }}</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U31895-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem" id="u31895-4" data-muse-uid="U31895" data-muse-type="txt_frame"><!-- content -->
         <p>{{ $user->cuidador->descripcion }}</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
      <div class="clearfix colelem" id="pu31827"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U31827-BP_infinity" template="cuidadores.html" data-type="image" -->
       <div class="clip_frame grpelem" id="u31827" data-muse-uid="U31827" data-muse-type="img_frame"><!-- image -->
        <img class="block" id="u31827_img" src="{{ url('main/images/placeholder-1.png?crc=453352705') }}" alt="" data-muse-src="{{ url('main/images/placeholder-1.png?crc=453352705') }}" data-image-width="20" data-image-height="20"/>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U31879-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u31879-4" data-muse-uid="U31879" data-muse-type="txt_frame"><!-- content -->
        <p>Ciudad de {{ $user->cuidador->ciudad }}</p>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
     <div class="clearfix grpelem" id="pu31887-4"><!-- column -->
      <!-- m_editable region-id="editable-static-tag-U31887-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u31887-4" data-muse-uid="U31887" data-muse-type="txt_frame"><!-- content -->
       <p>10$/Paseo</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U31891-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u31891-4" data-muse-uid="U31891" data-muse-type="txt_frame"><!-- content -->
       <p>Lorem ipsum dolor sit am</p>
      </div>
      <!-- /m_editable -->
      <div class="clearfix colelem" id="u31835"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U31840-BP_infinity" template="cuidadores.html" data-type="image" -->
       <div class="clip_frame grpelem" id="u31840" data-muse-uid="U31840" data-muse-type="img_frame"><!-- image -->
        <img class="block" id="u31840_img" src="{{ url('main/images/star_on.png?crc=3852363690') }}" alt="" data-muse-src="{{ url('main/images/star_on.png?crc=3852363690') }}" data-image-width="20" data-image-height="20"/>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U31842-BP_infinity" template="cuidadores.html" data-type="image" -->
       <div class="clip_frame grpelem" id="u31842" data-muse-uid="U31842" data-muse-type="img_frame"><!-- image -->
        <img class="block" id="u31842_img" src="{{ url('main/images/star_on.png?crc=3852363690') }}" alt="" data-muse-src="{{ url('main/images/star_on.png?crc=3852363690') }}" data-image-width="20" data-image-height="20"/>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U31844-BP_infinity" template="cuidadores.html" data-type="image" -->
       <div class="clip_frame grpelem" id="u31844" data-muse-uid="U31844" data-muse-type="img_frame"><!-- image -->
        <img class="block" id="u31844_img" src="{{ url('main/images/star_on.png?crc=3852363690') }}" alt="" data-muse-src="{{ url('main/images/star_on.png?crc=3852363690') }}" data-image-width="20" data-image-height="20"/>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U31836-BP_infinity" template="cuidadores.html" data-type="image" -->
       <div class="clip_frame grpelem" id="u31836" data-muse-uid="U31836" data-muse-type="img_frame"><!-- image -->
        <img class="block" id="u31836_img" src="{{ url('main/images/star_on.png?crc=3852363690') }}" alt="" data-muse-src="{{ url('main/images/star_on.png?crc=3852363690') }}" data-image-width="20" data-image-height="20"/>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U31838-BP_infinity" template="cuidadores.html" data-type="image" -->
       <div class="clip_frame grpelem" id="u31838" data-muse-uid="U31838" data-muse-type="img_frame"><!-- image -->
        <img class="block" id="u31838_img" src="{{ url('main/images/star_off.png?crc=115491527') }}" alt="" data-muse-src="{{ url('main/images/star_off.png?crc=115491527') }}" data-image-width="19" data-image-height="20"/>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
    </div>

  @endforeach

   </div>
   <form class="form-grp clearfix grpelem" id="widgetu31778" method="post" enctype="multipart/form-data" action="scripts/form-u31778.php"><!-- none box -->
     {{ csrf_field() }}
    <!-- m_editable region-id="editable-static-tag-U31801-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->

    <div class="clearfix grpelem" id="u31801-4" data-muse-uid="U31801" data-muse-type="txt_frame"><!-- content -->
     <p>Enviando formulario...</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U31800-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u31800-4" data-muse-uid="U31800" data-muse-type="txt_frame"><!-- content -->
     <p>El servidor ha detectado un error.</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U31810-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u31810-4" data-muse-uid="U31810" data-muse-type="txt_frame"><!-- content -->
     <p>Formulario recibido.</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U31791-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u31791-4" data-muse-uid="U31791" data-muse-type="txt_frame" type="submit" value="Encuentra un cuidador" tabindex="7"><!-- content -->
     <div style="margin-top:-15px;height:15px;">
      <p>Encuentra un cuidador</p>
     </div>
    </button>
    <!-- /m_editable -->
    <div class="fld-grp clearfix grpelem" id="widgetu31787" data-required="true"><!-- none box -->
     <span class="fld-input NoWrap actAsDiv museBGSize rounded-corners clearfix grpelem" id="u31789-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu31787_input" name="custom_U31787" tabindex="0" placeholder=""/><label class="wrapped-input fld-prompt" id="widgetu31787_prompt" for="widgetu31787_input"><span class="actAsPara">&nbsp;Dirección</span></label></span>
    </div>
    <div class="fld-grp clearfix grpelem" id="widgetu31792" data-required="true"><!-- none box -->
     <span class="fld-input NoWrap actAsDiv museBGSize clearfix grpelem" id="u31793-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu31792_input" name="custom_U31792" tabindex="0"/><label class="wrapped-input fld-prompt" id="widgetu31792_prompt" for="widgetu31792_input"><span class="actAsPara">DD/MM/AA</span></label></span>
    </div>
    <div class="fld-grp clearfix grpelem" id="widgetu31806" data-required="true"><!-- none box -->
     <span class="fld-input NoWrap actAsDiv museBGSize clearfix grpelem" id="u31808-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu31806_input" name="custom_U31806" tabindex="0"/><label class="wrapped-input fld-prompt" id="widgetu31806_prompt" for="widgetu31806_input"><span class="actAsPara">DD/MM/AA</span></label></span>
    </div>
    <div class="fld-grp clearfix grpelem" id="widgetu31802" data-required="true" data-type="checkbox"><!-- none box -->
     <!-- m_editable region-id="editable-static-tag-U31805-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <label class="fld-label actAsDiv clearfix grpelem" id="u31805-4" data-muse-uid="U31805" data-muse-type="txt_frame" for="widgetu31802_input"><!-- content --><span class="actAsPara">Hospedaje</span></label>
     <!-- /m_editable -->
     <div class="fld-checkbox museBGSize grpelem" id="u31804"><!-- simple frame -->
      <input class="wrapped-input" type="checkbox" value="1" id="widgetu31802_input" name="custom_U31802" tabindex="6"/>
      <label for="widgetu31802_input"></label>
     </div>
    </div>
    <div class="fld-grp clearfix grpelem" id="widgetu31796" data-required="true" data-type="checkbox"><!-- none box -->
     <!-- m_editable region-id="editable-static-tag-U31797-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <label class="fld-label actAsDiv clearfix grpelem" id="u31797-4" data-muse-uid="U31797" data-muse-type="txt_frame" for="widgetu31796_input"><!-- content --><span class="actAsPara">Guardería</span></label>
     <!-- /m_editable -->
     <div class="fld-checkbox museBGSize grpelem" id="u31799"><!-- simple frame -->
      <input class="wrapped-input" type="checkbox" value="1" id="widgetu31796_input" name="custom_U31796" tabindex="4"/>
      <label for="widgetu31796_input"></label>
     </div>
    </div>
    <div class="fld-grp clearfix grpelem" id="widgetu31779" data-required="true" data-type="checkbox"><!-- none box -->
     <!-- m_editable region-id="editable-static-tag-U31780-BP_infinity" template="cuidadores.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <label class="fld-label actAsDiv clearfix grpelem" id="u31780-4" data-muse-uid="U31780" data-muse-type="txt_frame" for="widgetu31779_input"><!-- content --><span class="actAsPara">Paseos</span></label>
     <!-- /m_editable -->
     <div class="fld-checkbox museBGSize grpelem" id="u31781"><!-- simple frame -->
      <input class="wrapped-input" type="checkbox" value="1" id="widgetu31779_input" name="custom_U31779" tabindex="5"/>
      <label for="widgetu31779_input"></label>
     </div>
    </div>
   </form>
   <div class="browser_width" id="u14400-bw">
    <div id="u14400"><!-- simple frame --></div>
   </div>
   <a class="nonblock nontext" id="u187" href="index.html" data-href="page:U93"><!-- simple frame --></a>
   <div class="size_fixed grpelem" id="u7006"><!-- custom html -->
   </div>
   <!-- m_editable region-id="editable-static-tag-U31811-BP_infinity" template="cuidadores.html" data-type="image" -->
   <div class="clip_frame grpelem" id="u31811" data-muse-uid="U31811" style="min-height:400px"><!-- image -->
    <!--<img class="block" id="u31811_img" src="{{ url('main/images/ny-google-maps-17-40-quality-preview-crop-u31811.jpg?crc=108366801') }}" alt="" data-muse-src="{{ url('main/images/ny-google-maps-17-40-quality-preview-crop-u31811.jpg?crc=108366801') }}" data-image-width="955" data-image-height="663"/>-->
    <div class="block" id="map" style="min-height:800px;width:600px;transform: matrix(0.00000000, 1.00000000, -1.00000000, 0.00000000, 900, 0);">

    </div>
   </div>
   <!-- /m_editable -->


   @yield('menu')

   <div class="verticalspacer" data-offset-top="975" data-content-above-spacer="974" data-content-below-spacer="650"></div>
  </div>
  <div class="preload_images">
   <img class="preload" src="{{ url('main/images/casilla-locacion.jpg?crc=3836058319') }}" alt=""/>
   <img class="preload" src="{{ url('main/images/moon1.png?crc=86274553') }}" alt=""/>
   <img class="preload" src="{{ url('main/images/moon2.png?crc=205289190') }}" alt=""/>
   <img class="preload" src="{{ url('main/images/house1.png?crc=4051795155') }}" alt=""/>
   <img class="preload" src="{{ url('main/images/house2.png?crc=4100913716') }}" alt=""/>
   <img class="preload" src="{{ url('main/images/paseo1.png?crc=4137058817') }}" alt=""/>
   <img class="preload" src="{{ url('main/images/paseo2.png?crc=291668141') }}" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="{{ url('main/scripts/jquery-1.8.3.min.js?crc=209076791') }}" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Puede que determinados archivos falten en el servidor o sean incorrectos. Limpie la cache del navegador e inténtelo de nuevo. Si el problema persiste, póngase en contacto con el administrador del sitio web.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:"main/"});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","webpro","jquery.musemenu","musewpdisclosure","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#widgetu31778', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu31778 */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu3503', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu3503 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>

    @yield('scripts_bottom')

    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyDWBFZiDcF4U80G-iQRraEvhetVcTBlxYE&libraries=places,geometry&language=es"></script>
    <script type="text/javascript">
      // Carga los servicios de Google Maps y Google Places.
      /*function initialize() {
        var pyrmont = new google.maps.LatLng(-33.8665, 151.1956);

        var map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15,
          scrollwheel: false
        });

        // Specify location, radius and place types for your Places API search.
        var request = {
          location: pyrmont,
          radius: '500',
          types: ['store']
        };

        var options = {
          types: ['(regions)'],
          componentRestrictions: {country: "co"}
        };

        var places = new google.maps.places.Autocomplete(document.getElementById('widgetu31787_input'),options);

        google.maps.event.addListener(places, 'place_changed', function () {
          placeObject = places.getPlace();
          console.log(placeObject)
        });
      }*/
      // Cuando cargue la ventana, llama a la funcion que inicializa el Google Maps
      google.maps.event.addDomListener(window, 'load', initMap);



      function initMap() {
        var options = {
          types: ['(regions)'],
          componentRestrictions: {country: "co"}
        };
        var places = new google.maps.places.Autocomplete(document.getElementById('widgetu31787_input'),options);

        google.maps.event.addListener(places, 'place_changed', function () {
          placeObject = places.getPlace();
          console.log(placeObject)
        });

        locations = [];

          @foreach($users as $user)

            locations.push([{{ $user->cuidador->latitud }},{{ $user->cuidador->longitud }}]);

          @endforeach

          // Create the map.

          map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: {lat: {{ $users[0]->cuidador->latitud }}, lng: {{ $users[0]->cuidador->longitud }}},
            mapTypeId: google.maps.MapTypeId.TERRAIN,
            disableDefaultUI: true
          });



          /*locations.push(['7.30699584' , '-75.57159886'])
          locations.push(['6.21570485' , '-75.59460149'])
          locations.push(['5.23567078' , '-75.55889592'])*/
          var bounds = new google.maps.LatLngBounds();

          for (i  = 0; i < locations.length; i++) {

            var latlng1 = new google.maps.LatLng(locations[i][0], locations[i][1]);
            //if (google.maps.geometry.spherical.computeDistanceBetween(latlng1,map.getCenter()) < 30000) {
            if (google.maps.geometry.spherical.computeDistanceBetween(latlng1,map.getCenter()) > 0) {
              //console.log(google.maps.geometry.spherical.computeDistanceBetween(latlng1,map.getCenter()))
              drivermarker=new google.maps.Marker({position:latlng1,icon:'http://vistas.pamdogs.com/images/placeholder.png'});
              drivermarker.setMap(map);
              var infowindow = new google.maps.InfoWindow();

              google.maps.event.addListener(drivermarker, 'mouseover', (function(marker, i) {
                return function() {
                  console.log('2) '+i)

                  $('.c'+i).css('background-color','rgba(255,255,255,0.5)')

                }
              })(drivermarker, i));

              google.maps.event.addListener(drivermarker, 'mouseout', (function(marker, i) {
                return function() {
                  console.log('3) '+i)

                  $('.c'+i).css('background-color','')

                }
              })(drivermarker, i));

              google.maps.event.addDomListener(document.getElementsByClassName("c"+i), 'mouseover', (function(marker, i) {
                return function() {
                  console.log('4) '+marker+' | '+i)
                  marker.setIcon('https://maps.google.com/mapfiles/kml/shapes/parking_lot_maps.png')
                  //$('#c'+i).css('background-color','rgba(255,255,0,0.5)')
                  $(this).css('background-color','red')

                }
              })(drivermarker, i));

              google.maps.event.addDomListener(document.getElementsByClassName("c"+i), 'mouseout', (function(marker, i) {
                return function() {
                  console.log('5) '+marker+' | '+i)
                  marker.setIcon('https://maps.google.com/mapfiles/kml/shapes/info-i_maps.png')
                  //$('#c'+i).css('background-color','rgba(255,255,0,0.5)')
                  $(this).css('background-color','transparent')

                }
              })(drivermarker, i));


              bounds.extend(latlng1);
            }
          }

          map.fitBounds(bounds);




          // bounds of the desired area
          /*var allowedBounds = new google.maps.LatLngBounds(
               new google.maps.LatLng(70.33956792419954, 178.01171875),
               new google.maps.LatLng(83.86483689701898, -88.033203125)
          );
          var lastValidCenter = map.getCenter();

          google.maps.event.addListener(map, 'center_changed', function() {
              if (allowedBounds.contains(map.getCenter())) {
                  // still within valid bounds, so save the last valid position
                  lastValidCenter = map.getCenter();
                  return;
              }

              // not valid anymore => return to last valid position
              map.panTo(lastValidCenter);
          });*/


          var geocoder = new google.maps.Geocoder();
          geocoder.geocode( { 'address': 'Medellín Colombia'}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
              resultados = results
              //console.log(resultados)
              map.setCenter(results[0].geometry.location);
              map.fitBounds(results[0].geometry.viewport);
              map.setZoom(12);
            }
          });

          /*var geocoder = new GClientGeocoder();
          //Fit map to a Country
          geocoder.getLocations("Colombia", function (locations) {

              var north = locations.Placemark[0].ExtendedData.LatLonBox.north;
              var south = locations.Placemark[0].ExtendedData.LatLonBox.south;
              var east  = locations.Placemark[0].ExtendedData.LatLonBox.east;
              var west  = locations.Placemark[0].ExtendedData.LatLonBox.west;

              // API version 3
              var bounds = new google.maps.LatLngBounds(new google.maps.LatLng(south, west),
                                                        new google.maps.LatLng(north, east));
              map.fitBounds(bounds);
          });*/


      }







        $(function(){
          var dateFormat = "dd/mm/yy"
          desde = $('#widgetu31792_input').datepicker({
            changeMonth: true,
            changeYear: true,
            //yearRange:'1900:2010',
            minDate: 0,
            //numberOfMonths: 2,
            beforeShow: function(input, inst) {
              setTimeout(function () {

                inst.dpDiv.css({
                    top: widgetu31778.offsetTop + widgetu31792_input.offsetHeight,
                    'z-index': 1000
                });
              });
            }
          })
          .on( "change", function() {
            console.log(hasta)
            hasta.datepicker( "option", "minDate", getDate( this ) );
            $("#widgetu31792").removeClass()
            $("#widgetu31792").addClass('fld-grp clearfix grpelem non-empty-st valid')
          })

          hasta = $( "#widgetu31806_input" ).datepicker({
            changeMonth: true,
            changeYear: true,
            //numberOfMonths: 2,
            beforeShow: function(input, inst) {
              setTimeout(function () {

                inst.dpDiv.css({
                    top: widgetu31778.offsetTop + widgetu31806_input.offsetHeight,
                    'z-index': 1000
                });
              });
            },
          })
          .on( "change", function() {
            console.log(desde)
            desde.datepicker( "option", "maxDate", getDate( this ) );
            $("#widgetu31806").removeClass()
            $("#widgetu31806").addClass('fld-grp clearfix grpelem non-empty-st valid')
          })

          function getDate( element ) {
            var date;
            try {
              date = $.datepicker.parseDate( dateFormat, element.value );
            } catch( error ) {
              date = null;
            }

            return date;
          }

          $('#u31791-4').on('click',function(e){
            e.preventDefault()
            swal({
              title: "Un momento",
              text: "Enviando datos...",
              showConfirmButton: true
            });
            var dataSend = $('#widgetu31778').serialize()
            dataSend += '&latitudCenter='+placeObject.geometry.location.lat()+'&longitudCenter='+placeObject.geometry.location.lng()
            //dataSend.append({'name': 'gMapObject', 'value': placeObject})
            console.log(dataSend)

            $.post("{{ route('busqueda') }}",dataSend,function(){

            }).done(function(data){
              swal({
                title: "Recibido",
                text: "Exitoso",
                type: "success",
                timer: 4000,
                showConfirmButton: true
              });
              //location.assign(url)
            }).fail(function(jqXHR, textStatus, errorThrown){
              swal({
                title: "Error",
                text: takeErrors(jqXHR),
                type: "error",
                showConfirmButton: true
              });
            })
          })
        })
    </script>
   </body>
</html>
