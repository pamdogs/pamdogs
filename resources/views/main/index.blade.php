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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "musewpdisclosure.js", "jquery.watch.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="{{ url('main/images/favicon.ico?crc=69713473') }}"/>
  <title>Inicio</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/site_global.css?crc=323482740') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/master_a-p_g_-maestra.css?crc=3939395310') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/index.css?crc=3811122764') }}" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?crc=439579204"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/source-sans-pro:n7,n9,i7,n3,n6:default;paytone-one:n4:default.js" type="text/javascript">\x3C/script>');
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
   <div class="size_fixed grpelem" id="u2503"><!-- custom html -->
    

   </div>
   <div class="size_fixed grpelem" id="u3507"><!-- custom html -->
     
   </div>
   <div class="SlideShowWidget clearfix HeroFillFrame grpelem" id="slideshowu624"><!-- none box -->
    <div class="popup_anchor" id="u643popup">
     <div class="SlideShowContentPanel clearfix" id="u643"><!-- stack box -->
      <!-- m_editable region-id="editable-static-tag-U644-BP_infinity" template="index.html" data-type="image" data-ice-options="srcAttr=data-src" -->
      <div class="SSSlide shadow clip_frame grpelem" id="u644" data-muse-uid="U644" data-muse-type="img_frame"><!-- image -->
       <img class="ImageInclude" id="u644_img" data-src="{{ url('main/images/s4qpfun9g5c-andrew-branch.jpg?crc=36939339') }}" src="{{ url('main/images/blank.gif?crc=4208392903') }}" alt="" data-width="1612" data-height="517" data-muse-src="{{ url('main/images/s4qpfun9g5c-andrew-branch.jpg?crc=36939339') }}"/>
      </div>
      <!-- /m_editable -->
     </div>
    </div>
   </div>
   <div class="browser_width" id="u14400-bw">
    <div class="shadow" id="u14400"><!-- simple frame --></div>
   </div>
   <a class="nonblock nontext MuseLinkActive museBGSize" id="u187" href="{{ url('/') }}" data-href="page:U93"><!-- simple frame --></a>
   <div class="clearfix grpelem" id="pu818-4"><!-- group -->
    <!-- m_editable region-id="editable-static-tag-U818-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u818-4" data-muse-uid="U818" data-muse-type="txt_frame"><!-- content -->
     <p>Un cuidador con un click.</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U822-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u822-4" data-muse-uid="U822" data-muse-type="txt_frame"><!-- content -->
     <p>Los mejores cuidadores de tu localidad</p>
    </div>
    <!-- /m_editable -->
   </div>
   <div class="clearfix grpelem" id="ppwidgetu893"><!-- column -->
    <div class="clearfix colelem" id="pwidgetu893"><!-- group -->
     <form class="form-grp clearfix grpelem" id="widgetu893" method="post" enctype="multipart/form-data" action="{{ url('scripts/form-u893.php') }}"><!-- none box -->
      <!-- m_editable region-id="editable-static-tag-U899-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u899-4" data-muse-uid="U899" data-muse-type="txt_frame"><!-- content -->
       <p>Enviando formulario...</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U898-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u898-4" data-muse-uid="U898" data-muse-type="txt_frame"><!-- content -->
       <p>El servidor ha detectado un error.</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U905-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u905-4" data-muse-uid="U905" data-muse-type="txt_frame"><!-- content -->
       <p>Formulario recibido.</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U900-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u900-4" data-muse-uid="U900" data-muse-type="txt_frame" type="submit" value="Encuentra un cuidador" tabindex="4"><!-- content -->
       <div style="margin-top:-15px;height:15px;">
        <p>Encuentra un cuidador</p>
       </div>
      </button>
      <!-- /m_editable -->
      <div class="fld-grp clearfix grpelem" id="widgetu969" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv museBGSize rounded-corners clearfix grpelem" id="u971-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu969_input" name="custom_U969" tabindex="1" placeholder=""/><label class="wrapped-input fld-prompt" id="widgetu969_prompt" for="widgetu969_input"><span class="actAsPara">&nbsp;Dirección</span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu1017" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv museBGSize clearfix grpelem" id="u1020-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu1017_input" name="custom_U1017" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu1017_prompt" for="widgetu1017_input"><span class="actAsPara">DD/MM/AA</span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu1051" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv museBGSize clearfix grpelem" id="u1054-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu1051_input" name="custom_U1051" tabindex="3"/><label class="wrapped-input fld-prompt" id="widgetu1051_prompt" for="widgetu1051_input"><span class="actAsPara">DD/MM/AA</span></label></span>
      </div>
     </form>
     <!-- m_editable region-id="editable-static-tag-U1879-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1879-4" data-muse-uid="U1879" data-muse-type="txt_frame"><!-- content -->
      <p>1. Busca</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U1885-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1885-4" data-muse-uid="U1885" data-muse-type="txt_frame"><!-- content -->
      <p>2. Reserva y pago</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="clearfix colelem" id="pu1837"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U1837-BP_infinity" template="index.html" data-type="image" -->
     <div class="clip_frame grpelem" id="u1837" data-muse-uid="U1837" data-muse-type="img_frame"><!-- image -->
      <img class="block" id="u1837_img" src="{{ url('main/images/lupa.png?crc=4173849094') }}" alt="" data-muse-src="{{ url('main/images/lupa.png?crc=4173849094') }}" data-image-width="244" data-image-height="243"/>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U1847-BP_infinity" template="index.html" data-type="image" -->
     <div class="clip_frame grpelem" id="u1847" data-muse-uid="U1847" data-muse-type="img_frame"><!-- image -->
      <img class="block" id="u1847_img" src="{{ url('main/images/reservaypaga.png?crc=4027234865') }}" alt="" data-muse-src="{{ url('main/images/reservaypaga.png?crc=4027234865') }}" data-image-width="244" data-image-height="243"/>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="colelem" id="u1904"><!-- simple frame --></div>
    <div class="colelem" id="u1910"><!-- simple frame --></div>
    <div class="clearfix colelem" id="pu1894-4"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U1894-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1894-4" data-muse-uid="U1894" data-muse-type="txt_frame"><!-- content -->
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in efficitur nunc. Nullam feugiat malesuada ipsum, ac semper nibh placerat nec.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U1898-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1898-4" data-muse-uid="U1898" data-muse-type="txt_frame"><!-- content -->
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in efficitur nunc. Nullam feugiat malesuada ipsum, ac semper nibh placerat nec.</p>
     </div>
     <!-- /m_editable -->
    </div>
   </div>
   <div class="size_fixed grpelem" id="u7006"><!-- custom html -->
   </div>
   <!-- m_editable region-id="editable-static-tag-U1126-BP_infinity" template="index.html" data-type="image" -->
   <div class="clip_frame grpelem" id="u1126" data-muse-uid="U1126" data-muse-type="img_frame"><!-- image -->
    <img class="block" id="u1126_img" src="{{ url('main/images/click.png?crc=4251137951') }}" alt="" data-muse-src="{{ url('main/images/click.png?crc=4251137951') }}" data-image-width="24" data-image-height="23"/>
   </div>
   <!-- /m_editable -->
   <div class="clearfix grpelem" id="pu1891-4"><!-- column -->
    <!-- m_editable region-id="editable-static-tag-U1891-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u1891-4" data-muse-uid="U1891" data-muse-type="txt_frame"><!-- content -->
     <p>3. Dueño y mascota felices</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U1854-BP_infinity" template="index.html" data-type="image" -->
    <div class="clip_frame colelem" id="u1854" data-muse-uid="U1854" data-muse-type="img_frame"><!-- image -->
     <img class="block" id="u1854_img" src="{{ url('main/images/mascotafeliz.png?crc=3958249015') }}" alt="" data-muse-src="{{ url('main/images/mascotafeliz.png?crc=3958249015') }}" data-image-width="244" data-image-height="243"/>
    </div>
    <!-- /m_editable -->
    <div class="colelem" id="u1913"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U1901-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u1901-4" data-muse-uid="U1901" data-muse-type="txt_frame"><!-- content -->
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in efficitur nunc. Nullam feugiat malesuada ipsum, ac semper nibh placerat nec.</p>
    </div>
    <!-- /m_editable -->
   </div>
   <div class="size_fixed" id="u3502"><!-- custom html -->
    
        <button class="hamburger hamburger--slider">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        
   </div>

   @yield('menu')

   <div class="verticalspacer" data-offset-top="1157" data-content-above-spacer="1157" data-content-below-spacer="519"></div>
  </div>
  <div class="preload_images">
   <img class="preload" src="{{ url('main/images/casilla-locacion.jpg?crc=3836058319') }}" alt=""/>
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
var muse_init=function(){require.config({baseUrl:"main/"});require(["jquery","museutils","whatinput","webpro","musewpslideshow","jquery.museoverlay","touchswipe","jquery.musepolyfill.bgsize","jquery.musemenu","musewpdisclosure","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#slideshowu624', ['#bp_infinity'], function(elem) { var widget = new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:3500,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,elastic:'fullWidth',resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false}); $(elem).data('widget', widget); return widget; });/* #slideshowu624 */
Muse.Utils.initWidget('#widgetu893', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu893 */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu3503', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu3503 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){/*if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;*/}})})};

</script>
	
	@yield('scripts_bottom')

  <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyDWBFZiDcF4U80G-iQRraEvhetVcTBlxYE&libraries=places"></script>
  <script type="text/javascript">
      google.maps.event.addDomListener(window, 'load', function () {
          var options = {
            types: ['(regions)'],
            componentRestrictions: {country: "co"}
          };
          var places = new google.maps.places.Autocomplete(document.getElementById('widgetu969_input'),options);
          google.maps.event.addListener(places, 'place_changed', function () {

          });
      });
  </script>
   </body>
</html>
