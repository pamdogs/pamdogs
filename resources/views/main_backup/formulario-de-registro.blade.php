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
    if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.musemenu.js", "musewpdisclosure.js", "jquery.watch.js", "require.js", "formulario-de-registro.css"], "outOfDate":[]};
  </script>

  <link rel="shortcut icon" href="{{ url('main/images/favicon.ico?crc=69713473') }}"/>
  <title>Formulario de registro</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/site_global.css?crc=323482740') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/master_a-p_g_-maestra.css?crc=3939395310') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/formulario-de-registro.css?crc=4044779997') }}" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_formulario-de-registro.css?crc=485949051"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
  </script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/source-sans-pro:n7,n6,i7:default.js" type="text/javascript">\x3C/script>');
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
   <form id="widgetu2350_form" method="post" enctype="multipart/form-data" action="{{ route('registro.cliente.datos') }}">
     {{ csrf_field() }}

   <div class="clearfix grpelem" id="pu1563"><!-- group -->
    <div class="grpelem" id="u1563"><!-- simple frame --></div>
    <div class="rounded-corners clearfix grpelem" id="u1554"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U1658-BP_infinity" template="formulario-de-registro.html" data-type="image" -->
     <div class="clip_frame colelem div-circle" id="u1658" data-muse-uid="U1658" data-muse-type="img_frame"><!-- image -->
      <img class="block img-circle" id="u1658_img" src="{{ isset(Auth::user()->avatar) ? (starts_with(Auth::user()->avatar,'https') ? Auth::user()->avatar : url('images/avatars/users/'.Auth::user()->avatar)) : url('main/images/user.png?crc=4023152180') }}" alt=""  data-image-width="253" data-image-height="253"/>
     </div>
     <!-- /m_editable -->
     <div class="Button shadow rounded-corners clearfix colelem" id="buttonu1651"><!-- container box -->
      <!-- m_editable region-id="editable-static-tag-U1652-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u1652-4" data-muse-uid="U1652" data-muse-type="txt_frame"><!-- content -->
       <p>Subir nueva imagen</p>
      </div>

      <!-- /m_editable -->
     </div>
     <input id="avatar" type="file" name="avatar" accept="image/*" hidden>
    </div>
   </div>
   <div class="rounded-corners grpelem" id="u1560"><!-- simple frame --></div>
   <!-- m_editable region-id="editable-static-tag-U6752" template="formulario-de-registro.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
   <button class="nonblock nontext Button shadow rounded-corners clearfix grpelem" id="buttonu6752" data-redir="{{ route('registro.mascota') }}" data-muse-uid="U6752"><!-- container box --><!-- m_editable region-id="editable-static-tag-U6753-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u6753-4" data-muse-uid="U6753" data-muse-type="txt_frame"><!-- content --><p>Quiero encontrar cuidadores</p></div><!-- /m_editable --></button>
   <!-- /m_editable -->
   <div class="clearfix grpelem" id="pu1567-4"><!-- column -->
    <!-- m_editable region-id="editable-static-tag-U1567-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u1567-4" data-muse-uid="U1567" data-muse-type="txt_frame"><!-- content -->
     <p>Crea tu cuenta</p>
    </div>
    <!-- /m_editable -->
    <div class="shadow rounded-corners colelem" id="u1570"><!-- simple frame --></div>
    <div class="rounded-corners clearfix colelem" id="u1603"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U1573-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1573-4" data-muse-uid="U1573" data-muse-type="txt_frame"><!-- content -->
      <p>Foto de perfil *</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="rounded-corners clearfix colelem" id="u1609"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U1588-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u1588-4" data-muse-uid="U1588" data-muse-type="txt_frame"><!-- content -->
      <p>Datos personales *</p>
     </div>
     <!-- /m_editable -->
    </div>
    <!-- m_editable region-id="editable-static-tag-U2437-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u2437-4" data-muse-uid="U2437" data-muse-type="txt_frame"><!-- content -->
     <p>Nombre:</p>
    </div>
    <!-- /m_editable -->
    <div class="form-grp clearfix colelem" id="widgetu2350"><!-- none box -->


     <!-- m_editable region-id="editable-static-tag-U2358-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u2358-3" data-muse-uid="U2358" data-muse-type="txt_frame"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U2352-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u2352-3" data-muse-uid="U2352" data-muse-type="txt_frame"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U2357-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u2357-3" data-muse-uid="U2357" data-muse-type="txt_frame"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U2351-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u2351-3" data-muse-uid="U2351" data-muse-type="txt_frame" type="submit" value="&nbsp;" ><!-- content -->
      <div style="margin-top:-7px;height:7px;">
       <p>&nbsp;</p>
      </div>
     </button>
     <!-- /m_editable -->
     <div class="fld-grp clearfix grpelem" id="widgetu29248" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u29249-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu29248_input" name="nombre" tabindex="0" value="{{ Auth::user()->nombre }}"/><label class="wrapped-input fld-prompt" id="widgetu29248_prompt" for="widgetu29248_input"><span class="actAsPara">Introducir nombre.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu2377" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u2379-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu2377_input" name="apellido" tabindex="0" value="{{ Auth::user()->apellido }}"/><label class="wrapped-input fld-prompt" id="widgetu2377_prompt" for="widgetu2377_input"><span class="actAsPara">Ambos apellidos.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu2353" data-required="true" data-type="email"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u2355-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu2353_input" name="email" tabindex="0" value="{{ Auth::user()->email }}" /><label class="wrapped-input fld-prompt" id="widgetu2353_prompt" for="widgetu2353_input"><span class="actAsPara">Introducir email.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu2425" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u2426-4"><!-- content --><input class="wrapped-input justTab" type="text" id="widgetu2425_input" name="nacimiento" tabindex="0" value="{{ Auth::user()->nacimiento->format('d/m/Y') != '30/11/-0001' ? Auth::user()->nacimiento->format('d/m/Y') : '' }}"/><label class="wrapped-input fld-prompt" id="widgetu2425_prompt" for="widgetu2425_input"><span class="actAsPara">DD/MM/AA</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem empty" id="widgetu30516" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u30518-4"><!-- content --><!--<input class="wrapped-input" id="widgetu30516_input" name="custom_U30516" tabindex="5" type="text">-->
        <select class="wrapped-input" id="widgetu30516_input" name="genero" tabindex="0">
          <option value="">Seleccione</option>
          <option value="Femenino">Femenino</option>
          <option value="Masculino">Masculino</option>
        </select>
        <!--<label class="wrapped-input fld-prompt" id="widgetu30516_prompt" for="widgetu30516_input"><span class="actAsPara">Introducir texto</span></label></span>-->
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu2413" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u2416-4"><!-- content --><input class="wrapped-input" type="tel" spellcheck="false" id="widgetu2413_input" name="telefono" tabindex="0" value="{{ Auth::user()->telefono }}"/><label class="wrapped-input fld-prompt" id="widgetu2413_prompt" for="widgetu2413_input"><span class="actAsPara">Número telefónico.</span></label></span>
     </div>

     <div class="fld-grp clearfix grpelem" id="widgetu2470" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u2471-4"><!-- content --><!--<input class="wrapped-input" type="text" id="widgetu2470_input" name="dni_tipo" tabindex="6"/>-->
      <select class="wrapped-input" id="widgetu2470_input" name="dni_tipo" tabindex="0">
        <option value="Nacional">Cedula Nacional</option>
        <option value="Extranjero">Cedula Extranjera</option>
      </select>
      <label class="wrapped-input fld-prompt" id="widgetu2470_prompt" for="widgetu2470_input"><span class="actAsPara">Nacional / Extranjero.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu2485" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u2486-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu2485_input" name="dni_nro" tabindex="0" value="{{ Auth::user()->telefono }}"/><label class="wrapped-input fld-prompt" id="widgetu2485_prompt" for="widgetu2485_input"><span class="actAsPara">Número de documento.</span></label></span>
     </div>

   </div>
    <!-- m_editable region-id="editable-static-tag-U2440-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u2440-4" data-muse-uid="U2440" data-muse-type="txt_frame"><!-- content -->
     <p>Apellidos:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U28809-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u28809-4" data-muse-uid="U28809" data-muse-type="txt_frame"><!-- content -->
     <p>Correo:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U2449-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u2449-4" data-muse-uid="U2449" data-muse-type="txt_frame"><!-- content -->
     <p>Fecha de nacimiento:</p>
    </div>
    <!-- /m_editable -->

    <div class="clearfix colelem" id="u30532-4" data-muse-uid="U30532" data-muse-type="txt_frame"><!-- content -->
     <p>Género:</p>
    </div>

    <!-- m_editable region-id="editable-static-tag-U2446-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u2446-4" data-muse-uid="U2446" data-muse-type="txt_frame"><!-- content -->
     <p>Teléfono:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U2482-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u2482-4" data-muse-uid="U2482" data-muse-type="txt_frame"><!-- content -->
     <p>Documento:</p>
    </div>
    <!-- /m_editable -->
   </div>
   </form>
   <div class="size_fixed grpelem" id="u7006"><!-- custom html -->
   </div>
   <!-- m_editable region-id="editable-static-tag-U2320" template="formulario-de-registro.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
   <button class="nonblock nontext Button shadow rounded-corners clearfix grpelem" id="buttonu2320" data-redir="{{ route('registro.cuidador') }}" data-href="page:U24562" data-muse-uid="U2320"><!-- container box --><!-- m_editable region-id="editable-static-tag-U2321-BP_infinity" template="formulario-de-registro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u2321-4" data-muse-uid="U2321" data-muse-type="txt_frame"><!-- content --><p>Quiero ser cuidador</p></div><!-- /m_editable --></button>
   <!-- /m_editable -->
   <div class="size_fixed" id="u3502"><!-- custom html -->

        <button class="hamburger hamburger--slider">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

   </div>
   @yield('menu')
   <div class="verticalspacer" data-offset-top="1924" data-content-above-spacer="1924" data-content-below-spacer="220"></div>
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
var muse_init=function(){require.config({baseUrl:"../main/"});require(["jquery","museutils","whatinput","webpro","jquery.musemenu","musewpdisclosure","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#widgetu2350', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu2350 */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu3503', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu3503 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){/*if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;*/}})})};

</script>
  @yield('scripts_bottom')

    <script type="text/javascript">
      $(function(){

        loadAvatar($('#u1658'),$('#u1658_img'))

        selectedOption('#widgetu30516_input','{{ Auth::user()->genero }}')
        selectedOption('#widgetu2470_input','{{ Auth::user()->dni_tipo }}')

        uploadAvatar($('#buttonu1651'),$('#avatar'),$('#u1658'),$('#u1658_img'))

        $(window).resize(function(){
          var ancho = $('#u1658').width()
          $('#u1658').height(ancho)
        })

        $('input[name="nacimiento"]').datepicker({

          changeMonth: true,
          changeYear: true,
          yearRange:'1900:2010',
          beforeShow: function(input, inst) {
            setTimeout(function () {
              var offsets = $('#widgetu2425').offset().top
              inst.dpDiv.css({
                  top: widgetu2425.offsetTop + widgetu2425.offsetHeight + widgetu2350.offsetTop,
                  'z-index': 1000
              });
            });
          },
          onSelect: function(date) {
            $("#widgetu2425").removeClass()
            $("#widgetu2425").addClass('fld-grp clearfix grpelem non-empty-st valid')
          }
        })

        //Enviar formulario si quiere ser Cliente
        $('#buttonu6752').on('click',function(e){
          e.preventDefault()
          var redir = $(this).data('redir')
          send(redir)
        })

        //Enviar formulario si quiere ser Cuidador
        $('#buttonu2320').on('click',function(e){
          e.preventDefault()
          var redir = $(this).data('redir')
          send(redir)
        })
      })

      function send(url)
      {
        swal({
          title: "Un momento",
          text: "Enviando datos...",
          showConfirmButton: false
        });

        var formulario = $('#widgetu2350_form')

        $.ajax( {
          url: formulario.attr('action'),
          type: 'POST',
          data: new FormData( formulario[0] ),
          processData: false,
          contentType: false
        } ).done(function(data){
          swal({
            title: "Recibido",
            text: "Exitoso",
            type: "success",
            timer: 4000,
            showConfirmButton: false
          });
          location.assign(url)
        }).fail(function(jqXHR, textStatus, errorThrown){
          swal({
            title: "Error",
            text: takeErrors(jqXHR),
            type: "error",
            showConfirmButton: true
          });
        })

        /*$.post(formulario.attr('action'),send,function(){

        })*/
      }




    </script>


   </body>
</html>
