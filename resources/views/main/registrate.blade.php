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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "musewpdisclosure.js", "jquery.watch.js", "require.js", "registrate.css"], "outOfDate":[]};
</script>

  <link rel="shortcut icon" href="{{ url('main/images/favicon.ico?crc=69713473') }}"/>
  <title>Registrate</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/site_global.css?crc=323482740') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/master_a-p_g_-maestra.css?crc=3939395310') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/registrate.css?crc=317509090') }}" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_registrate.css?crc=288721225"/>
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
   <div class="clearfix grpelem" id="pu1198"><!-- group -->
    <div class="grpelem" id="u1198"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U1201-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u1201-4" data-muse-uid="U1201" data-muse-type="txt_frame"><!-- content -->
     <p>Regístrate</p>
    </div>
    <!-- /m_editable -->
    <form class="form-grp clearfix grpelem" id="widgetu1260" method="post" enctype="multipart/form-data" action="#"><!-- none box -->
    {{ csrf_field() }}
     <div class="fld-grp clearfix grpelem" id="widgetu1262" data-required="true" data-type="email"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rounded-corners transition shadow clearfix grpelem" id="u1264-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu1262_input" name="email" tabindex="0"/><label class="wrapped-input fld-prompt" id="widgetu1262_prompt" for="widgetu1262_input"><span class="actAsPara">Dirección de email.</span></label></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U1261-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1261-4" data-muse-uid="U1261" data-muse-type="txt_frame"><!-- content -->
      <p>Enviando formulario...</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U1274-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1274-4" data-muse-uid="U1274" data-muse-type="txt_frame"><!-- content -->
      <p>El servidor ha detectado un error.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U1276-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1276-4" data-muse-uid="U1276" data-muse-type="txt_frame"><!-- content -->
      <p>Formulario recibido.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U1275-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <button class="submit-btn NoWrap shadow clearfix grpelem" id="u1275-4" data-muse-uid="U1275" data-muse-type="txt_frame" type="submit" value="Registrarte" tabindex="4"><!-- content -->
      <div style="margin-top:-9px;height:9px;">
       <p>Registrarte</p>
      </div>
     </button>
     <!-- /m_editable -->
     <div class="fld-grp clearfix grpelem" id="widgetu27757" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rounded-corners transition shadow clearfix grpelem" id="u27760-4"><!-- content --><input class="wrapped-input" type="password" spellcheck="false" id="widgetu27757_input" name="pass" tabindex="0"/><label class="wrapped-input fld-prompt" id="widgetu27757_prompt" for="widgetu27757_input"><span class="actAsPara">Contraseña.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu27769" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rounded-corners transition shadow clearfix grpelem" id="u27772-4"><!-- content --><input class="wrapped-input" type="password" spellcheck="false" id="widgetu27769_input" name="pass_confirm" tabindex="0"/><label class="wrapped-input fld-prompt" id="widgetu27769_prompt" for="widgetu27769_input"><span class="actAsPara">Confirmar contraseña.</span></label></span>
     </div>
    </form>
    <a class="Button shadow museBGSize rounded-corners clearfix grpelem" id="buttonu1312" href="{{ route('facebook') }}"><!-- container box -->
     <!-- m_editable region-id="editable-static-tag-U1313-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1313-4" data-muse-uid="U1313" data-muse-type="txt_frame"><!-- content -->
      <p>Registrarte con Facebook</p>
     </div>
     <!-- /m_editable -->
    </a>
    <div class="shadow rounded-corners grpelem" id="u1340"><!-- simple frame --></div>
    <div class="shadow rounded-corners grpelem" id="u1343"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U1347-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u1347-6" data-muse-uid="U1347" data-muse-type="txt_frame"><!-- content -->
     <p>¿Ya eres miembro? <a class="nonblock no-visited" href="{{ route('login') }}" data-href="page:U1454">Accede aquí</a></p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U1357-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u1357-5" data-muse-uid="U1357" data-muse-type="txt_frame"><!-- content -->
     <p id="u1357-3"><span id="u1357">Tomaremos algunos datos de tu perfil de Facebook para realizar tu registro</span><span id="u1357-2">.</span></p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U1351-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u1351-8" data-muse-uid="U1351" data-muse-type="txt_frame"><!-- content -->
     <p><span id="u1351">Al registrarte estás aceptando nuestros</span> <span id="u1351-3">términos y condiciones</span><span id="u1351-4"> y</span><span id="u1351-5"> política de privacidad.</span></p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U6759" template="registrate.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
    <button class="nonblock nontext Button shadow rounded-corners clearfix grpelem" id="buttonu6759" data-muse-uid="U6759"><!-- container box --><!-- m_editable region-id="editable-static-tag-U6760-BP_infinity" template="registrate.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u6760-4" data-muse-uid="U6760" data-muse-type="txt_frame"><!-- content --><p>Regístrate</p></div><!-- /m_editable --></button>
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
   <div class="verticalspacer" data-offset-top="584" data-content-above-spacer="750" data-content-below-spacer="1041"></div>
  </div>
  <div class="preload_images">
   <img class="preload" src="{{ url('main/images/f.png?crc=139556812') }}" alt=""/>
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
var muse_init=function(){require.config({baseUrl:"main/"});require(["jquery","museutils","whatinput","webpro","jquery.musepolyfill.bgsize","jquery.musemenu","musewpdisclosure","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#widgetu1260', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu1260 */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu3503', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu3503 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){/*if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;*/}})})};

</script>
  @yield('scripts_bottom')

  <script type="text/javascript">
  	$(document).ready(function(){

  		$('form').on('keypress',function(e){
  			if(e.which == 13){//Enter key pressed
  				e.preventDefault()
	            $('#buttonu6759').click();//Trigger search button click event
	        }
  		})

  		$('#buttonu6759').on('click',function(e){
        e.preventDefault()

        swal({
        	  title: "Un momento",
        	  text: "Enviando datos...",
        	  showConfirmButton: false
        	});
        $.post("{{ route('registro.cliente') }}",$('#widgetu1260').serialize(),function(data){

        }).done(function(data){
  			swal({
  			  title: "Recibido",
  			  text: "Exitoso",
  			  type: "success",
  			  showConfirmButton: false
  			});

  			setTimeout(function(){location.assign("{{ route('registro.cliente') }}")},1000)

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
