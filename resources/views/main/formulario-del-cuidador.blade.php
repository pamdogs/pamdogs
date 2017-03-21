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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.musepolyfill.bgsize.js", "jquery.musemenu.js", "musewpdisclosure.js", "jquery.watch.js", "require.js", "formulario-del-cuidador.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="{{ url('main/images/favicon.ico?crc=69713473') }}"/>
  <title>Formulario del cuidador</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/site_global.css?crc=323482740') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/master_a-p_g_-maestra.css?crc=3939395310') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/formulario-del-cuidador.css?crc=440542466') }}" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_formulario-del-cuidador.css?crc=4115101265"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/source-sans-pro:n6,n7,i7,i6,n4:default.js" type="text/javascript">\x3C/script>');
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
   <div class="grpelem" id="u24563"><!-- simple frame --></div>
   <div class="rounded-corners grpelem" id="u24566"><!-- simple frame --></div>
   <div class="clearfix grpelem" id="pu24568-4"><!-- column -->
    <!-- m_editable region-id="editable-static-tag-U24568-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u24568-4" data-muse-uid="U24568" data-muse-type="txt_frame"><!-- content -->
     <p>Crea tu cuenta</p>
    </div>
    <!-- /m_editable -->
    <div class="shadow rounded-corners colelem" id="u24569"><!-- simple frame --></div>
    <div class="rounded-corners clearfix colelem" id="u24564"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U24570-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24570-4" data-muse-uid="U24570" data-muse-type="txt_frame"><!-- content -->
      <p>Foto de perfil *</p>
     </div>
     <!-- /m_editable -->
    </div>
    <!-- m_editable region-id="editable-static-tag-U24576-BP_infinity" template="formulario-del-cuidador.html" data-type="image" -->
    <div class="clip_frame colelem" id="u24576" data-muse-uid="U24576" data-muse-type="img_frame"><!-- image -->
     <img class="block" id="u24576_img" src="{{ url('main/images/user-22.png?crc=4023152180') }}" alt="" data-muse-src="{{ url('main/images/user-22.png?crc=4023152180') }}" data-image-width="253" data-image-height="253"/>
    </div>
    <!-- /m_editable -->
    <div class="Button shadow rounded-corners clearfix colelem" id="buttonu24574"><!-- container box -->
     <!-- m_editable region-id="editable-static-tag-U24575-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24575-4" data-muse-uid="U24575" data-muse-type="txt_frame"><!-- content -->
      <p>Subir nueva imagen</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="clearfix colelem" id="pu24565"><!-- group -->
     <div class="rounded-corners grpelem" id="u24565"><!-- simple frame --></div>
     <!-- m_editable region-id="editable-static-tag-U24571-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24571-4" data-muse-uid="U24571" data-muse-type="txt_frame"><!-- content -->
      <p>Datos del cuidador *</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="clearfix colelem" id="pu24567"><!-- group -->
     <div class="rounded-corners grpelem" id="u24567"><!-- simple frame --></div>
     <form class="form-grp clearfix grpelem" id="widgetu24578" method="post" enctype="multipart/form-data" action="{{ url('main/scripts/form-u24578.php') }}"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu24624" data-required="true" data-type="email"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u24625-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu24624_input" name="Email" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu24624_prompt" for="widgetu24624_input"><span class="actAsPara">Max 50 caracteres.</span></label></span>
      </div>
      <!-- m_editable region-id="editable-static-tag-U24613-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u24613-4" data-muse-uid="U24613" data-muse-type="txt_frame"><!-- content -->
       <p>Enviando formulario...</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U24579-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u24579-5" data-muse-uid="U24579" data-muse-type="txt_frame"><!-- content -->
       <p><span id="u24579">El servidor ha detectado un error</span>.</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U24614-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u24614-4" data-muse-uid="U24614" data-muse-type="txt_frame"><!-- content -->
       <p>Formulario recibido.</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U24598-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <button class="submit-btn NoWrap shadow rounded-corners clearfix grpelem" id="u24598-4" data-muse-uid="U24598" data-muse-type="txt_frame" type="submit" value="Guardar" tabindex="39"><!-- content -->
       <div style="margin-top:-13px;height:13px;">
        <p>Guardar</p>
       </div>
      </button>
      <!-- /m_editable -->
      <div class="fld-grp clearfix grpelem" id="widgetu24669" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u24671-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu24669_input" name="custom_U24669" tabindex="3"/><label class="wrapped-input fld-prompt" id="widgetu24669_prompt" for="widgetu24669_input"><span class="actAsPara">Escriba sus años de experiencia.</span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24693" data-required="true"><!-- none box -->
       <span class="fld-textarea actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u24694-4"><!-- content --><textarea class="wrapped-input" id="widgetu24693_input" name="custom_U24693" tabindex="2"></textarea><label class="wrapped-input fld-prompt" id="widgetu24693_prompt" for="widgetu24693_input"><span class="actAsPara">Espacio para conocimientos, experiencia y características de tus servicios&nbsp; (mínimo 200 caracteres).</span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24607" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu24610" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24612"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="si" spellcheck="false" id="widgetu24610_input" name="custom_U24607" tabindex="7"/>
         <label for="widgetu24610_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24580" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu24586" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24588"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="si" spellcheck="false" id="widgetu24586_input" name="custom_U24580" tabindex="5"/>
         <label for="widgetu24586_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu24582" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24583"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="no" spellcheck="false" id="widgetu24582_input" name="custom_U24580" tabindex="5"/>
         <label for="widgetu24582_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24697" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu24703" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24705"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="si" spellcheck="false" id="widgetu24703_input" name="custom_U24697" tabindex="6"/>
         <label for="widgetu24703_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu24698" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24700"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="no" spellcheck="false" id="widgetu24698_input" name="custom_U24697" tabindex="6"/>
         <label for="widgetu24698_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24685" data-required="false" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24687"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24685_input" name="custom_U24685" tabindex="9"/>
        <label for="widgetu24685_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24615" data-required="false" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu24621" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24623"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="si" spellcheck="false" id="widgetu24621_input" name="custom_U24615" tabindex="4"/>
         <label for="widgetu24621_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu24616" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24617"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="no" spellcheck="false" id="widgetu24616_input" name="custom_U24615" tabindex="4"/>
         <label for="widgetu24616_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24628" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24630"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24628_input" name="custom_U24628" tabindex="10"/>
        <label for="widgetu24628_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24649" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24651"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24649_input" name="custom_U24649" tabindex="8"/>
        <label for="widgetu24649_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24640" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu24646" data-required="false" data-type="radio"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U24648-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u24648-4" data-muse-uid="U24648" data-muse-type="txt_frame" for="widgetu24646_input"><!-- content --><span class="actAsPara">No</span></label>
        <!-- /m_editable -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24647"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="No" spellcheck="false" id="widgetu24646_input" name="custom_U24640" tabindex="11"/>
         <label for="widgetu24646_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu24643" data-required="false" data-type="radio"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U24645-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u24645-4" data-muse-uid="U24645" data-muse-type="txt_frame" for="widgetu24643_input"><!-- content --><span class="actAsPara">Sí</span></label>
        <!-- /m_editable -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24644"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Sí" spellcheck="false" id="widgetu24643_input" name="custom_U24640" tabindex="11"/>
         <label for="widgetu24643_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24589" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu24595" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24596"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Etiqueta de botón de opción" spellcheck="false" id="widgetu24595_input" name="custom_U24589" tabindex="12"/>
         <label for="widgetu24595_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu24591" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u24592"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Etiqueta de botón de opción" spellcheck="false" id="widgetu24591_input" name="custom_U24589" tabindex="12"/>
         <label for="widgetu24591_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24710" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24713"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24710_input" name="custom_U24710" tabindex="13"/>
        <label for="widgetu24710_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24661" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u24662-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu24661_input" name="custom_U24661" tabindex="14"/><label class="wrapped-input fld-prompt" id="widgetu24661_prompt" for="widgetu24661_input"><span class="actAsPara">Introducir texto</span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24653" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u24655-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu24653_input" name="custom_U24653" tabindex="16"/><label class="wrapped-input fld-prompt" id="widgetu24653_prompt" for="widgetu24653_input"><span class="actAsPara">Introducir texto</span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24632" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u24634-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu24632_input" name="custom_U24632" tabindex="15"/><label class="wrapped-input fld-prompt" id="widgetu24632_prompt" for="widgetu24632_input"><span class="actAsPara">Introducir texto</span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24677" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u24679-3"><!-- content --><input class="wrapped-input" type="text" id="widgetu24677_input" name="custom_U24677" tabindex="18"/></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24599" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u24602-3"><!-- content --><input class="wrapped-input" type="text" id="widgetu24599_input" name="custom_U24599" tabindex="19"/></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24689" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u24692-3"><!-- content --><input class="wrapped-input" type="text" id="widgetu24689_input" name="custom_U24689" tabindex="27"/></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24603" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24606"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24603_input" name="custom_U24603" tabindex="20"/>
        <label for="widgetu24603_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24681" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24684"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24681_input" name="custom_U24681" tabindex="21"/>
        <label for="widgetu24681_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24706" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24707"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24706_input" name="custom_U24706" tabindex="22"/>
        <label for="widgetu24706_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24673" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24675"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24673_input" name="custom_U24673" tabindex="23"/>
        <label for="widgetu24673_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24657" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24659"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24657_input" name="custom_U24657" tabindex="24"/>
        <label for="widgetu24657_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24665" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24666"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24665_input" name="custom_U24665" tabindex="25"/>
        <label for="widgetu24665_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu24636" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u24637"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu24636_input" name="custom_U24636" tabindex="26"/>
        <label for="widgetu24636_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25191" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u25193-3"><!-- content --><input class="wrapped-input" type="text" id="widgetu25191_input" name="custom_U25191" tabindex="28"/></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25203" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u25205-3"><!-- content --><input class="wrapped-input" type="text" id="widgetu25203_input" name="custom_U25203" tabindex="30"/></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25215" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu25236" data-required="false" data-type="radio"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U25238-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u25238-4" data-muse-uid="U25238" data-muse-type="txt_frame" for="widgetu25236_input"><!-- content --><span class="actAsPara">Diurno</span></label>
        <!-- /m_editable -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u25237"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Diurno" spellcheck="false" id="widgetu25236_input" name="custom_U25215" tabindex="29"/>
         <label for="widgetu25236_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu25245" data-required="false" data-type="radio"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U25246-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u25246-4" data-muse-uid="U25246" data-muse-type="txt_frame" for="widgetu25245_input"><!-- content --><span class="actAsPara">Nocturno</span></label>
        <!-- /m_editable -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u25247"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Nocturno" spellcheck="false" id="widgetu25245_input" name="custom_U25215" tabindex="29"/>
         <label for="widgetu25245_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25287" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu25308" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u25310"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Etiqueta de botón de opción" spellcheck="false" id="widgetu25308_input" name="custom_U25287" tabindex="32"/>
         <label for="widgetu25308_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu25317" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u25318"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Etiqueta de botón de opción" spellcheck="false" id="widgetu25317_input" name="custom_U25287" tabindex="32"/>
         <label for="widgetu25317_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25326" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu25347" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u25348"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Etiqueta de botón de opción" spellcheck="false" id="widgetu25347_input" name="custom_U25326" tabindex="35"/>
         <label for="widgetu25347_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu25356" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u25357"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Etiqueta de botón de opción" spellcheck="false" id="widgetu25356_input" name="custom_U25326" tabindex="35"/>
         <label for="widgetu25356_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25365" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu25386" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u25387"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Etiqueta de botón de opción" spellcheck="false" id="widgetu25386_input" name="custom_U25365" tabindex="33"/>
         <label for="widgetu25386_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu25395" data-required="false" data-type="radio"><!-- none box -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u25397"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Etiqueta de botón de opción" spellcheck="false" id="widgetu25395_input" name="custom_U25365" tabindex="33"/>
         <label for="widgetu25395_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25404" data-required="true" data-type="checkbox"><!-- none box -->
       <div class="fld-checkbox rgba-background rounded-corners grpelem" id="u25406"><!-- simple frame -->
        <input class="wrapped-input" type="checkbox" value="1" id="widgetu25404_input" name="custom_U25404" tabindex="34"/>
        <label for="widgetu25404_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25420" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u25421-3"><!-- content --><input class="wrapped-input" type="text" id="widgetu25420_input" name="custom_U25420" tabindex="31"/></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25432" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u25434-3"><!-- content --><input class="wrapped-input" type="text" id="widgetu25432_input" name="custom_U25432" tabindex="36"/></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu25450" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u25453-3"><!-- content --><input class="wrapped-input" type="text" id="widgetu25450_input" name="custom_U25450" tabindex="37"/></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu28812" data-required="true" data-type="radiogroup"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu28843" data-required="false" data-type="radio"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U28844-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u28844-4" data-muse-uid="U28844" data-muse-type="txt_frame" for="widgetu28843_input"><!-- content --><span class="actAsPara">Sí</span></label>
        <!-- /m_editable -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u28845"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="Sí" spellcheck="false" id="widgetu28843_input" name="custom_U28812" tabindex="38"/>
         <label for="widgetu28843_input"></label>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu28855" data-required="false" data-type="radio"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U28857-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u28857-4" data-muse-uid="U28857" data-muse-type="txt_frame" for="widgetu28855_input"><!-- content --><span class="actAsPara">No</span></label>
        <!-- /m_editable -->
        <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u28856"><!-- simple frame -->
         <input class="wrapped-input" type="radio" value="No" spellcheck="false" id="widgetu28855_input" name="custom_U28812" tabindex="38"/>
         <label for="widgetu28855_input"></label>
        </div>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu29113" data-required="true"><!-- none box -->
       <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u29116-3"><!-- content --><input class="wrapped-input" type="number" id="widgetu29113_input" name="numeros" tabindex="17"  min="100" max="1000" step="100" autocomplete="off"/></span>
      </div>
     </form>
     <!-- m_editable region-id="editable-static-tag-U24714-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24714-4" data-muse-uid="U24714" data-muse-type="txt_frame"><!-- content -->
      <p>Título:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24715-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24715-4" data-muse-uid="U24715" data-muse-type="txt_frame"><!-- content -->
      <p>Años de experiencia:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24716-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24716-4" data-muse-uid="U24716" data-muse-type="txt_frame"><!-- content -->
      <p>Tipo de vivienda:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24717-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24717-4" data-muse-uid="U24717" data-muse-type="txt_frame"><!-- content -->
      <p>Auto para emergencias:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24718-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24718-4" data-muse-uid="U24718" data-muse-type="txt_frame"><!-- content -->
      <p>Apartamento / Casa / Local</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24719-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24719-7" data-muse-uid="U24719" data-muse-type="txt_frame"><!-- content -->
      <p id="u24719-2">Fotos que ayuden a mostrar tus servicios,</p>
      <p id="u24719-4">Ej. Tus Mascotas, Lugares que frecuentaran las mascotas contigo, tu hogar, etc. (Minimo 3 – Max 20)</p>
      <p id="u24719-5">&nbsp;</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24720-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24720-4" data-muse-uid="U24720" data-muse-type="txt_frame"><!-- content -->
      <p>Cuidado de la mascota por una estancia de hasta 24 horas. El sistema cobrara horas adicionales.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24721-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24721-4" data-muse-uid="U24721" data-muse-type="txt_frame"><!-- content -->
      <p>Tarifa por estancia 24 horas:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25161-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25161-4" data-muse-uid="U25161" data-muse-type="txt_frame"><!-- content -->
      <p>Tarifa por hora:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25260-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25260-4" data-muse-uid="U25260" data-muse-type="txt_frame"><!-- content -->
      <p>Tarifa por hora:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24722-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24722-4" data-muse-uid="U24722" data-muse-type="txt_frame"><!-- content -->
      <p>Tarifa por hora extra:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25158-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25158-4" data-muse-uid="U25158" data-muse-type="txt_frame"><!-- content -->
      <p>Tarifa por mascota extra:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25263-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25263-4" data-muse-uid="U25263" data-muse-type="txt_frame"><!-- content -->
      <p>Tarifa por mascota extra:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25447-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25447-4" data-muse-uid="U25447" data-muse-type="txt_frame"><!-- content -->
      <p>Horario disponible:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25465-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25465-6" data-muse-uid="U25465" data-muse-type="txt_frame"><!-- content -->
      <p>¿Incluyes servicio a domicilio?</p>
      <p>&nbsp;Buscar y entregar la mascota en el domicilio del cliente</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24724-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24724-4" data-muse-uid="U24724" data-muse-type="txt_frame"><!-- content -->
      <p>Tarifa por mascota extra:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24732-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24732-6" data-muse-uid="U24732" data-muse-type="txt_frame"><!-- content -->
      <p>Recordatorio de que Pamdogs cobra 20% del precio establecido por el</p>
      <p>servicio que ofrece.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24733-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24733-4" data-muse-uid="U24733" data-muse-type="txt_frame"><!-- content -->
      <p>Cuidado de la mascota por una estancia de hasta 12 horas. El sistema cobrara horas adicionales.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24734-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24734-4" data-muse-uid="U24734" data-muse-type="txt_frame"><!-- content -->
      <p>El servicio es por hasta 1 hora de paseo:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24735-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24735-5" data-muse-uid="U24735" data-muse-type="txt_frame"><!-- content -->
      <p id="u24735-2">Confirmar ubicación en Google Maps.</p>
      <p id="u24735-3">&nbsp;</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24736-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24736-5" data-muse-uid="U24736" data-muse-type="txt_frame"><!-- content -->
      <p><span id="u24736">Localidad:</span></p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24737-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24737-4" data-muse-uid="U24737" data-muse-type="txt_frame"><!-- content -->
      <p>Barrio:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24738-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24738-4" data-muse-uid="U24738" data-muse-type="txt_frame"><!-- content -->
      <p>Dirección:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U29153-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u29153-4" data-muse-uid="U29153" data-muse-type="txt_frame"><!-- content -->
      <p>Rango:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24744-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24744-4" data-muse-uid="U24744" data-muse-type="txt_frame"><!-- content -->
      <p>Descripción personal:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24745-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24745-4" data-muse-uid="U24745" data-muse-type="txt_frame"><!-- content -->
      <p>Fotografías:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24746-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24746-4" data-muse-uid="U24746" data-muse-type="txt_frame"><!-- content -->
      <p>Ubicación:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24747-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24747-4" data-muse-uid="U24747" data-muse-type="txt_frame"><!-- content -->
      <p>Hospedaje:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24748-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24748-4" data-muse-uid="U24748" data-muse-type="txt_frame"><!-- content -->
      <p>Servicios a ofrecer:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24749-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24749-4" data-muse-uid="U24749" data-muse-type="txt_frame"><!-- content -->
      <p>Guardería:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24750-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24750-4" data-muse-uid="U24750" data-muse-type="txt_frame"><!-- content -->
      <p>Paseos:</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24759" template="formulario-del-cuidador.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
     <a class="nonblock nontext Button shadow rounded-corners clearfix grpelem" id="buttonu24759" href="formulario-de-registro.html" data-href="page:U1547" data-muse-uid="U24759"><!-- container box --><!-- m_editable region-id="editable-static-tag-U24760-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u24760-4" data-muse-uid="U24760" data-muse-type="txt_frame"><!-- content --><p>Cargar Imágenes</p></div><!-- /m_editable --></a>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U29143-BP_infinity" template="formulario-del-cuidador.html" data-type="image" -->
     <div class="clip_frame grpelem" id="u29143" data-muse-uid="U29143" data-muse-type="img_frame" style="min-height:230px"><!-- image -->
      <!--<img class="block" id="u29143_img" src="{{ url('main/images/images-crop-u29143.jpg?crc=3933808310') }}" alt="" data-muse-src="{{ url('main/images/images-crop-u29143.jpg?crc=3933808310') }}" data-image-width="374" data-image-height="244"/>-->
      <div id="map" style="width: 100%;height: 230px"></div>
     </div>
     <!-- /m_editable -->
    </div>
   </div>
   <div class="size_fixed grpelem" id="u7006"><!-- custom html -->
   </div>
   <div class="clearfix grpelem" id="pu24743-4"><!-- column -->
    <!-- m_editable region-id="editable-static-tag-U24743-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u24743-4" data-muse-uid="U24743" data-muse-type="txt_frame"><!-- content -->
     <p>Tamaños aceptados:</p>
    </div>
    <!-- /m_editable -->
    <div class="clearfix colelem" id="ppu24752"><!-- group -->
     <div class="clearfix grpelem" id="pu24752"><!-- group -->
      <div class="museBGSize grpelem" id="u24752"><!-- simple frame --></div>
      <!-- m_editable region-id="editable-static-tag-U24757-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u24757-4" data-muse-uid="U24757" data-muse-type="txt_frame"><!-- content -->
       <p>11 a 20Kg</p>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="pu24754"><!-- group -->
      <div class="museBGSize grpelem" id="u24754"><!-- simple frame --></div>
      <!-- m_editable region-id="editable-static-tag-U24756-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u24756-4" data-muse-uid="U24756" data-muse-type="txt_frame"><!-- content -->
       <p>&gt;40Kg</p>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="museBGSize grpelem" id="u24751"><!-- simple frame --></div>
     <div class="museBGSize grpelem" id="u24753"><!-- simple frame --></div>
     <!-- m_editable region-id="editable-static-tag-U24755-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24755-4" data-muse-uid="U24755" data-muse-type="txt_frame"><!-- content -->
      <p>&lt;10Kg</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24758-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24758-4" data-muse-uid="U24758" data-muse-type="txt_frame"><!-- content -->
      <p>21 a 40Kg</p>
     </div>
     <!-- /m_editable -->
    </div>
    <!-- m_editable region-id="editable-static-tag-U24741-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u24741-4" data-muse-uid="U24741" data-muse-type="txt_frame"><!-- content -->
     <p>Espacio libre:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U24739-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u24739-4" data-muse-uid="U24739" data-muse-type="txt_frame"><!-- content -->
     <p>Jardín&nbsp; / Balcón /&nbsp; Terraza</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U24742-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u24742-4" data-muse-uid="U24742" data-muse-type="txt_frame"><!-- content -->
     <p>Mascotas propias:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U24740-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u24740-4" data-muse-uid="U24740" data-muse-type="txt_frame"><!-- content -->
     <p>Perro&nbsp; / Gato /&nbsp; No</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U29159-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u29159-4" data-muse-uid="U29159" data-muse-type="txt_frame"><!-- content -->
     <p>metros.</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U24723-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u24723-4" data-muse-uid="U24723" data-muse-type="txt_frame"><!-- content -->
     <p>Día de la semana disponibles:</p>
    </div>
    <!-- /m_editable -->
    <div class="clearfix colelem" id="pu24725-4"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U24725-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24725-4" data-muse-uid="U24725" data-muse-type="txt_frame"><!-- content -->
      <p>L</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24726-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24726-4" data-muse-uid="U24726" data-muse-type="txt_frame"><!-- content -->
      <p>M</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24727-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24727-4" data-muse-uid="U24727" data-muse-type="txt_frame"><!-- content -->
      <p>M</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24728-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24728-4" data-muse-uid="U24728" data-muse-type="txt_frame"><!-- content -->
      <p>J</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24730-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24730-4" data-muse-uid="U24730" data-muse-type="txt_frame"><!-- content -->
      <p>V</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24729-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24729-4" data-muse-uid="U24729" data-muse-type="txt_frame"><!-- content -->
      <p>S</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U24731-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u24731-4" data-muse-uid="U24731" data-muse-type="txt_frame"><!-- content -->
      <p>D</p>
     </div>
     <!-- /m_editable -->
    </div>
    <!-- m_editable region-id="editable-static-tag-U25164-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u25164-4" data-muse-uid="U25164" data-muse-type="txt_frame"><!-- content -->
     <p>Disponibilidad:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U25417-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u25417-4" data-muse-uid="U25417" data-muse-type="txt_frame"><!-- content -->
     <p>Día de la semana disponibles:</p>
    </div>
    <!-- /m_editable -->
    <div class="clearfix colelem" id="pu25266-4"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U25266-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25266-4" data-muse-uid="U25266" data-muse-type="txt_frame"><!-- content -->
      <p>L</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25269-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25269-4" data-muse-uid="U25269" data-muse-type="txt_frame"><!-- content -->
      <p>M</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25272-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25272-4" data-muse-uid="U25272" data-muse-type="txt_frame"><!-- content -->
      <p>M</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25275-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25275-4" data-muse-uid="U25275" data-muse-type="txt_frame"><!-- content -->
      <p>J</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25278-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25278-4" data-muse-uid="U25278" data-muse-type="txt_frame"><!-- content -->
      <p>V</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25281-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25281-4" data-muse-uid="U25281" data-muse-type="txt_frame"><!-- content -->
      <p>S</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U25284-BP_infinity" template="formulario-del-cuidador.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u25284-4" data-muse-uid="U25284" data-muse-type="txt_frame"><!-- content -->
      <p>D</p>
     </div>
     <!-- /m_editable -->
    </div>
   </div>
   <div class="size_fixed" id="u3502"><!-- custom html -->
    
        <button class="hamburger hamburger--slider">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        
   </div>
   @yield('menu')
   <div class="verticalspacer" data-offset-top="3256" data-content-above-spacer="3256" data-content-below-spacer="219"></div>
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
var muse_init=function(){require.config({baseUrl:"../main/"});require(["jquery","museutils","whatinput","webpro","jquery.musepolyfill.bgsize","jquery.musemenu","musewpdisclosure","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#widgetu24578', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu24578 */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu3503', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu3503 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){/*if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;*/}})})};

</script>
  @yield('scripts_bottom')
     <script>

    document.getElementById('widgetu29113_input').defaultValue = '100'

var citymap = {
  newyork: {
    center: {lat: 40.714, lng: -74.005},
    population: 8405837
  }
}

function initMap() {
  // Create the map.
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: {lat: 40.714, lng: -74.005},
    mapTypeId: google.maps.MapTypeId.TERRAIN
  });

  // Construct the circle for each value in citymap.
  // Note: We scale the area of the circle based on the population.
  for (var city in citymap) {
    // Add the circle for this city to the map.
    cityCircle = new google.maps.Circle({
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 1,
      fillColor: '#FF0000',
      fillOpacity: 0.35,
      draggable: true,
      editable: false,
      map: map,
      center: citymap[city].center,
      radius: 100
    });
    console.log(cityCircle.getRadius())
  }

  // bounds of the desired area
  var allowedBounds = new google.maps.LatLngBounds(
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
  });
}



    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWBFZiDcF4U80G-iQRraEvhetVcTBlxYE&callback=initMap"></script>

    <script type="text/javascript">
      $('#widgetu29113_input').on('change',function(){
        cityCircle.setRadius(parseInt($(this).val()))
      }).on('keydown',function(e){
        e.preventDefault()
      })
    </script>
   </body>
</html>
