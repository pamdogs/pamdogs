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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "musewpdisclosure.js", "jquery.watch.js", "require.js", "iniciar-sesion.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="{{ url('main/images/favicon.ico?crc=69713473') }}"/>
  <title>Iniciar sesion</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/site_global.css?crc=323482740') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/master_a-p_g_-maestra.css?crc=3939395310') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/iniciar-sesion.css?crc=4227810041') }}" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_iniciar-sesion.css?crc=4129149609"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/source-sans-pro:n6,i7,n7,n3:default.js" type="text/javascript">\x3C/script>');
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
   <div class="browser_width" id="u14400-bw">
    <div id="u14400"><!-- simple frame --></div>
   </div>
   <a class="nonblock nontext" id="u187" href="{{ url('/') }}" data-href="page:U93"><!-- simple frame --></a>
   <div class="clearfix grpelem" id="pu1455"><!-- group -->
    <div class="grpelem" id="u1455"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U1456-BP_infinity" template="iniciar-sesion.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u1456-4" data-muse-uid="U1456" data-muse-type="txt_frame"><!-- content -->
     <p>Iniciar sesión</p>
    </div>
    <!-- /m_editable -->
    <form class="form-grp clearfix grpelem" id="widgetu1457" method="post" enctype="multipart/form-data" action="{{ url('main/scripts/form-u1457.php') }}"><!-- none box -->
     <div class="fld-grp clearfix grpelem" id="widgetu1461" data-required="true" data-type="email"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rounded-corners transition shadow clearfix grpelem" id="u1464-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu1461_input" name="Email" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu1461_prompt" for="widgetu1461_input"><span class="actAsPara">Ingrese su usuario.</span></label></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U1458-BP_infinity" template="iniciar-sesion.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1458-4" data-muse-uid="U1458" data-muse-type="txt_frame"><!-- content -->
      <p>Enviando formulario...</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U1459-BP_infinity" template="iniciar-sesion.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1459-4" data-muse-uid="U1459" data-muse-type="txt_frame"><!-- content -->
      <p>El servidor ha detectado un error.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U1465-BP_infinity" template="iniciar-sesion.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1465-4" data-muse-uid="U1465" data-muse-type="txt_frame"><!-- content -->
      <p>Formulario recibido.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U1460-BP_infinity" template="iniciar-sesion.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <button class="submit-btn NoWrap shadow rounded-corners clearfix grpelem" id="u1460-4" data-muse-uid="U1460" data-muse-type="txt_frame" type="submit" value="Iniciar sesión" tabindex="3"><!-- content -->
      <div style="margin-top:-13px;height:13px;">
       <p>Iniciar sesión</p>
      </div>
     </button>
     <!-- /m_editable -->
     <div class="fld-grp clearfix grpelem" id="widgetu1518" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rounded-corners transition shadow clearfix grpelem" id="u1519-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu1518_input" name="custom_U1518" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu1518_prompt" for="widgetu1518_input"><span class="actAsPara">Ingrese su contraseña.</span></label></span>
     </div>
    </form>
    <div class="Button shadow museBGSize rounded-corners clearfix grpelem" id="buttonu1466"><!-- container box -->
     <!-- m_editable region-id="editable-static-tag-U1467-BP_infinity" template="iniciar-sesion.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1467-4" data-muse-uid="U1467" data-muse-type="txt_frame"><!-- content -->
      <p>Iniciar con Facebook</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="shadow rounded-corners grpelem" id="u1468"><!-- simple frame --></div>
    <div class="shadow rounded-corners grpelem" id="u1469"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U1470-BP_infinity" template="iniciar-sesion.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u1470-6" data-muse-uid="U1470" data-muse-type="txt_frame"><!-- content -->
     <p><span id="u1470">¿Olvidaste tu contraseña?</span> <span id="u1470-3">click aquí</span></p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U1471-BP_infinity" template="iniciar-sesion.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u1471-4" data-muse-uid="U1471" data-muse-type="txt_frame"><!-- content -->
     <p id="u1471-2"><span id="u1471">(solo si te has registrado de esta forma)</span></p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U1472-BP_infinity" template="iniciar-sesion.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u1472-7" data-muse-uid="U1472" data-muse-type="txt_frame"><!-- content -->
     <p><span id="u1472">¿No estás registrado?</span> <a class="nonblock" href="{{ route('registro.index') }}" data-href="page:U1194">click aquí</a></p>
    </div>
    <!-- /m_editable -->
   </div>
   <div class="size_fixed grpelem" id="u7006"><!-- custom html -->
   </div>
   <div class="size_fixed" id="u3502"><!-- custom html -->
    
        <button class="hamburger hamburger--slider">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        
   </div>
   @yield('menu')
   <div class="verticalspacer" data-offset-top="497" data-content-above-spacer="750" data-content-below-spacer="1127"></div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/f.png?crc=139556812" alt=""/>
  </div>

  @yield('scripts_bottom')
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Puede que determinados archivos falten en el servidor o sean incorrectos. Limpie la cache del navegador e inténtelo de nuevo. Si el problema persiste, póngase en contacto con el administrador del sitio web.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:"main/"});require(["jquery","museutils","whatinput","webpro","jquery.musepolyfill.bgsize","jquery.musemenu","musewpdisclosure","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#widgetu1457', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1457 */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu3503', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu3503 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>

   </body>
</html>
