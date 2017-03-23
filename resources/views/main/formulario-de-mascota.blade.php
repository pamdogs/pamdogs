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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "webpro.js", "jquery.musemenu.js", "musewpdisclosure.js", "jquery.watch.js", "require.js", "formulario-de-mascota.css"], "outOfDate":[]};
</script>

  <link rel="shortcut icon" href="{{ url('main/images/favicon.ico?crc=69713473') }}"/>
  <title>Formulario de mascota</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/site_global.css?crc=323482740') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/master_a-p_g_-maestra.css?crc=3939395310') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('main/css/formulario-de-mascota.css?crc=4086899383') }}" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_formulario-de-mascota.css?crc=47511128"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/source-sans-pro:n7,n6,i7,i6:default.js" type="text/javascript">\x3C/script>');
</script>
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
    <!--HTML Widget code-->
  <link rel="stylesheet" type="text/css" href="{{ url('main/scripts/jquery-ui/jquery-ui.css') }}"/>
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
   <div class="clearfix grpelem" id="pu18672"><!-- group -->
    <div class="grpelem" id="u18672"><!-- simple frame --></div>
    <div class="rounded-corners clearfix grpelem" id="u18673"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U18679-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u18679-4" data-muse-uid="U18679" data-muse-type="txt_frame"><!-- content -->
      <p>Foto de perfil *</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="rounded-corners clearfix grpelem" id="u18674"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U18680-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u18680-4" data-muse-uid="U18680" data-muse-type="txt_frame"><!-- content -->
      <p>Datos personales *</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="rounded-corners clearfix grpelem" id="u18675"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U29593-BP_infinity" template="formulario-de-mascota.html" data-type="image" -->
     <div class="clip_frame colelem" id="u29593" data-muse-uid="U29593" data-muse-type="img_frame"><!-- image -->
      <img class="block" id="u29593_img" src="{{ url('main/images/mascota.png?crc=3880994741') }}" alt="" data-muse-src="{{ url('main/images/mascota.png?crc=3880994741') }}" data-image-width="257" data-image-height="257"/>
     </div>
     <!-- /m_editable -->
     <div class="Button shadow rounded-corners clearfix colelem" id="buttonu18683"><!-- container box -->
      <!-- m_editable region-id="editable-static-tag-U18684-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u18684-4" data-muse-uid="U18684" data-muse-type="txt_frame"><!-- content -->
       <p>Subir nueva imagen</p>
      </div>
      <!-- /m_editable -->
     </div>
    </div>
    <div class="rounded-corners clearfix grpelem" id="u18676"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U18806-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u18806-4" data-muse-uid="U18806" data-muse-type="txt_frame"><!-- content -->
      <p>Nombre:</p>
     </div>
     <!-- /m_editable -->
    </div>
    <!-- m_editable region-id="editable-static-tag-U18677-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18677-4" data-muse-uid="U18677" data-muse-type="txt_frame"><!-- content -->
     <p>Crea tu cuenta</p>
    </div>
    <!-- /m_editable -->
    <div class="shadow rounded-corners grpelem" id="u18678"><!-- simple frame --></div>
    <form class="form-grp clearfix grpelem" id="widgetu18687" method="post" enctype="multipart/form-data" action="#"><!-- none box -->
      {{ csrf_field() }}
     <div class="fld-grp clearfix grpelem" id="widgetu18802" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18805-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu18802_input" name="nombre" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu18802_prompt" for="widgetu18802_input"><span class="actAsPara">Nombre de la mascota.</span></label></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U18767-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u18767-4" data-muse-uid="U18767" data-muse-type="txt_frame"><!-- content -->
      <p>Enviando formulario...</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U18766-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u18766-5" data-muse-uid="U18766" data-muse-type="txt_frame"><!-- content -->
      <p><span id="u18766">El servidor ha detectado un error</span>.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U18801-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u18801-4" data-muse-uid="U18801" data-muse-type="txt_frame"><!-- content -->
      <p>Formulario recibido.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U18757-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <button class="submit-btn NoWrap shadow rounded-corners clearfix grpelem" id="u18757-4" data-muse-uid="U18757" data-muse-type="txt_frame" value="Encontrar cuidadores" tabindex="22"><!-- content -->
      <div style="margin-top:-13px;height:13px;">
       <p>&nbsp;Encontrar cuidadores</p>
      </div>
     </button>
     <!-- /m_editable -->
     <div class="fld-grp clearfix grpelem" id="widgetu18758" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18761-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu18758_input" name="raza" tabindex="4"/><label class="wrapped-input fld-prompt" id="widgetu18758_prompt" for="widgetu18758_input"><span class="actAsPara">Raza de la mascota.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18762" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18765-4"><!-- content --><input class="wrapped-input" type="tel" spellcheck="false" id="widgetu18762_input" name="comida_tipo" tabindex="6"/><label class="wrapped-input fld-prompt" id="widgetu18762_prompt" for="widgetu18762_input"><span class="actAsPara">Tipo de comida.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18692" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18694-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu18692_input" name="nacimiento" tabindex="0"/><label class="wrapped-input fld-prompt" id="widgetu18692_prompt" for="widgetu18692_input"><span class="actAsPara">DD/MM/AA</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18777" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18779-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu18777_input" name="hora_paseo" tabindex="0"/><label class="wrapped-input fld-prompt" id="widgetu18777_prompt" for="widgetu18777_input"><span class="actAsPara">Horario de paseo.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18797" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18800-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu18797_input" name="duerme" tabindex="0"/><label class="wrapped-input fld-prompt" id="widgetu18797_prompt" for="widgetu18797_input"><span class="actAsPara">Describa donde suele dormir su mascota.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18731" data-required="true" data-type="radiogroup"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu18732" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18734-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18734-4" data-muse-uid="U18734" data-muse-type="txt_frame" for="widgetu18732_input"><!-- content --><span class="actAsPara">Masculino</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18733"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="Masculino" spellcheck="false" id="widgetu18732_input" name="genero" tabindex="0"/>
        <label for="widgetu18732_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu18736" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18737-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18737-4" data-muse-uid="U18737" data-muse-type="txt_frame" for="widgetu18736_input"><!-- content --><span class="actAsPara">Femenino</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18738"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="Femenino" spellcheck="false" id="widgetu18736_input" name="genero" tabindex="0"/>
        <label for="widgetu18736_input"></label>
       </div>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18785" data-required="true"><!-- none box -->
      <span class="fld-textarea actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18786-4"><!-- content --><textarea class="wrapped-input" id="widgetu18785_input" name="personalidad" tabindex="0"></textarea><label class="wrapped-input fld-prompt" id="widgetu18785_prompt" for="widgetu18785_input"><span class="actAsPara">Describa la personalidad de su mascota.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18718" data-required="true" data-type="radiogroup"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu18719" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18720-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18720-4" data-muse-uid="U18720" data-muse-type="txt_frame" for="widgetu18719_input"><!-- content --><span class="actAsPara">Sí</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18721"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="1" spellcheck="false" id="widgetu18719_input" name="salta" tabindex="13"/>
        <label for="widgetu18719_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu18724" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18725-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18725-4" data-muse-uid="U18725" data-muse-type="txt_frame" for="widgetu18724_input"><!-- content --><span class="actAsPara">No</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18726"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="0" spellcheck="false" id="widgetu18724_input" name="salta" tabindex="13"/>
        <label for="widgetu18724_input"></label>
       </div>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18744" data-required="true" data-type="radiogroup"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu18750" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18752-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18752-4" data-muse-uid="U18752" data-muse-type="txt_frame" for="widgetu18750_input"><!-- content --><span class="actAsPara">Sí</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18751"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="1" spellcheck="false" id="widgetu18750_input" name="celo" tabindex="14"/>
        <label for="widgetu18750_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu18745" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18746-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18746-4" data-muse-uid="U18746" data-muse-type="txt_frame" for="widgetu18745_input"><!-- content --><span class="actAsPara">No</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18747"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="0" spellcheck="false" id="widgetu18745_input" name="celo" tabindex="14"/>
        <label for="widgetu18745_input"></label>
       </div>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18768" data-required="true" data-type="radiogroup"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu18774" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18775-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18775-4" data-muse-uid="U18775" data-muse-type="txt_frame" for="widgetu18774_input"><!-- content --><span class="actAsPara">Sí</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18776"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="Sí" spellcheck="false" id="widgetu18774_input" name="con_perros" tabindex="11"/>
        <label for="widgetu18774_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu18770" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18772-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18772-4" data-muse-uid="U18772" data-muse-type="txt_frame" for="widgetu18770_input"><!-- content --><span class="actAsPara">No</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18771"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="No" spellcheck="false" id="widgetu18770_input" name="con_perros" tabindex="11"/>
        <label for="widgetu18770_input"></label>
       </div>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18705" data-required="true" data-type="radiogroup"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu18710" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18712-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18712-4" data-muse-uid="U18712" data-muse-type="txt_frame" for="widgetu18710_input"><!-- content --><span class="actAsPara">Sí</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18711"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="Sí" spellcheck="false" id="widgetu18710_input" name="con_chicos" tabindex="12"/>
        <label for="widgetu18710_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu18706" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18707-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18707-4" data-muse-uid="U18707" data-muse-type="txt_frame" for="widgetu18706_input"><!-- content --><span class="actAsPara">No</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18708"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="No" spellcheck="false" id="widgetu18706_input" name="con_chicos" tabindex="12"/>
        <label for="widgetu18706_input"></label>
       </div>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18789" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18791-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu18789_input" name="comida_hora" tabindex="7"/><label class="wrapped-input fld-prompt" id="widgetu18789_prompt" for="widgetu18789_input"><span class="actAsPara">Horario de comida.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18753" data-required="true"><!-- none box -->
      <span class="fld-textarea actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18756-4"><!-- content --><textarea class="wrapped-input" id="widgetu18753_input" name="rutina" tabindex="9"></textarea><label class="wrapped-input fld-prompt" id="widgetu18753_prompt" for="widgetu18753_input"><span class="actAsPara">Describa la rutina para las necesidades de su mascota.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18688" data-required="true"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18690-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu18688_input" name="vet_nombre" tabindex="17"/><label class="wrapped-input fld-prompt" id="widgetu18688_prompt" for="widgetu18688_input"><span class="actAsPara">Nombre del veterinario de su mascota.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18696" data-required="false" data-type="radiogroup"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu18700" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18701-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18701-4" data-muse-uid="U18701" data-muse-type="txt_frame" for="widgetu18700_input"><!-- content --><span class="actAsPara">Sí</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18702"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="1" spellcheck="false" id="widgetu18700_input" name="seguro" tabindex="20"/>
        <label for="widgetu18700_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu18697" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U18698-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u18698-4" data-muse-uid="U18698" data-muse-type="txt_frame" for="widgetu18697_input"><!-- content --><span class="actAsPara">No</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u18699"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="0" spellcheck="false" id="widgetu18697_input" name="seguro" tabindex="20"/>
        <label for="widgetu18697_input"></label>
       </div>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18781" data-required="false"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18784-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu18781_input" name="vet_telefono" tabindex="18"/><label class="wrapped-input fld-prompt" id="widgetu18781_prompt" for="widgetu18781_input"><span class="actAsPara">Número telefónico del veterinario de su mascota.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18727" data-required="false"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18728-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu18727_input" name="vet_direccion" tabindex="19"/><label class="wrapped-input fld-prompt" id="widgetu18727_prompt" for="widgetu18727_input"><span class="actAsPara">Dirección telefónico del veterinario de su mascota.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu18714" data-required="false"><!-- none box -->
      <span class="fld-input NoWrap actAsDiv rgba-background rounded-corners transition shadow clearfix grpelem" id="u18716-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu18714_input" name="compania_seguro" tabindex="21"/><label class="wrapped-input fld-prompt" id="widgetu18714_prompt" for="widgetu18714_input"><span class="actAsPara">Nombre de la empresa aseguradora de su mascota.</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu29491" data-required="true" data-type="radiogroup"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu29512" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U29514-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u29514-4" data-muse-uid="U29514" data-muse-type="txt_frame" for="widgetu29512_input"><!-- content --><span class="actAsPara">Sí</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u29513"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="1" spellcheck="false" id="widgetu29512_input" name="esterlizado" tabindex="16"/>
        <label for="widgetu29512_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu29521" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U29522-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u29522-4" data-muse-uid="U29522" data-muse-type="txt_frame" for="widgetu29521_input"><!-- content --><span class="actAsPara">No</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u29523"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="0" spellcheck="false" id="widgetu29521_input" name="esterlizado" tabindex="16"/>
        <label for="widgetu29521_input"></label>
       </div>
      </div>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu29530" data-required="true" data-type="radiogroup"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu29551" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U29552-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u29552-4" data-muse-uid="U29552" data-muse-type="txt_frame" for="widgetu29551_input"><!-- content --><span class="actAsPara">Sí</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u29553"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="1" spellcheck="false" id="widgetu29551_input" name="vacuna" tabindex="15"/>
        <label for="widgetu29551_input"></label>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu29560" data-required="false" data-type="radio"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U29561-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u29561-4" data-muse-uid="U29561" data-muse-type="txt_frame" for="widgetu29560_input"><!-- content --><span class="actAsPara">No</span></label>
       <!-- /m_editable -->
       <div class="fld-radiobutton rgba-background rounded-corners grpelem" id="u29562"><!-- simple frame -->
        <input class="wrapped-input" type="radio" value="0" spellcheck="false" id="widgetu29560_input" name="vacuna" tabindex="15"/>
        <label for="widgetu29560_input"></label>
       </div>
      </div>
     </div>
    </form>
    <!-- m_editable region-id="editable-static-tag-U18807-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18807-4" data-muse-uid="U18807" data-muse-type="txt_frame"><!-- content -->
     <p>Fecha de nacimiento:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18808-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18808-4" data-muse-uid="U18808" data-muse-type="txt_frame"><!-- content -->
     <p>Raza de la mascota:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18809-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18809-4" data-muse-uid="U18809" data-muse-type="txt_frame"><!-- content -->
     <p>Tipo y horario de comida:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18810-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18810-4" data-muse-uid="U18810" data-muse-type="txt_frame"><!-- content -->
     <p>Descripción de la mascota:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18811-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18811-4" data-muse-uid="U18811" data-muse-type="txt_frame"><!-- content -->
     <p>Horario de paseo:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18812-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18812-4" data-muse-uid="U18812" data-muse-type="txt_frame"><!-- content -->
     <p>Rutina para hacer sus necesidades:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18813-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18813-4" data-muse-uid="U18813" data-muse-type="txt_frame"><!-- content -->
     <p>¿Donde suele dormir?</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18814-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18814-4" data-muse-uid="U18814" data-muse-type="txt_frame"><!-- content -->
     <p>¿Se lleva bien con otros perros?</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18815-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18815-4" data-muse-uid="U18815" data-muse-type="txt_frame"><!-- content -->
     <p>¿Se lleva bien con niños?</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U29572-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u29572-4" data-muse-uid="U29572" data-muse-type="txt_frame"><!-- content -->
     <p>Vacunas actualizadas:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18816-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18816-4" data-muse-uid="U18816" data-muse-type="txt_frame"><!-- content -->
     <p>¿Salta sobre las personas?</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18817-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18817-4" data-muse-uid="U18817" data-muse-type="txt_frame"><!-- content -->
     <p>¿Esta en celo?</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18818-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18818-4" data-muse-uid="U18818" data-muse-type="txt_frame"><!-- content -->
     <p>Nombre del veterinario.</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18819-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18819-4" data-muse-uid="U18819" data-muse-type="txt_frame"><!-- content -->
     <p>Teléfono del veterinario.</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18820-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18820-4" data-muse-uid="U18820" data-muse-type="txt_frame"><!-- content -->
     <p>Dirección del veterinario.</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18821-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18821-4" data-muse-uid="U18821" data-muse-type="txt_frame"><!-- content -->
     <p>¿Posee seguro de salud?</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U18822-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u18822-4" data-muse-uid="U18822" data-muse-type="txt_frame"><!-- content -->
     <p>¿Que empresa?</p>
    </div>
    <!-- /m_editable -->
   </div>
   <div class="size_fixed grpelem" id="u7006"><!-- custom html -->
   </div>
   <div class="clearfix grpelem" id="pu18823-4"><!-- column -->
    <!-- m_editable region-id="editable-static-tag-U18823-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u18823-4" data-muse-uid="U18823" data-muse-type="txt_frame"><!-- content -->
     <p>Sexo:</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U29581-BP_infinity" template="formulario-de-mascota.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u29581-4" data-muse-uid="U29581" data-muse-type="txt_frame"><!-- content -->
     <p>Esterilizado:</p>
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
   @yield('section')
   <div class="verticalspacer" data-offset-top="3107" data-content-above-spacer="3107" data-content-below-spacer="219"></div>
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
Muse.Utils.initWidget('#widgetu18687', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu18687 */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu3503', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu3503 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){/*if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;*/}})})};

</script>
  @yield('scripts_bottom')
  <script type="text/javascript" src="{{ url('main/scripts/jquery-ui/jquery-ui.js') }}"></script>
  <script type="text/javascript">
    $(function(){

      $('input[name="nacimiento"]').datepicker({
        dateFormat: "dd/mm/yy",
        changeMonth: true,
        changeYear: true,
        beforeShow: function(input, inst) {
          setTimeout(function () {
            inst.dpDiv.css({
                top: widgetu18692.offsetTop + widgetu18692.offsetHeight + widgetu18687.offsetTop,
                'z-index': 1000
            });
          });
        },
        onSelect: function(date) {
          $("#widgetu18692").removeClass()
          $("#widgetu18692").addClass('fld-grp clearfix grpelem non-empty-st valid')
        }
      })

      $('#u18757-4').on('click',function(e){
        e.preventDefault()

        swal({
        	  title: "Un momento",
        	  text: "Enviando datos...",
        	  showConfirmButton: false
        	});
        $.post("{{ route('registro.mascota') }}",$('#widgetu18687').serialize(),function(data){

        }).done(function(data){
  			swal({
  			  title: "Recibido",
  			  text: "Exitoso",
  			  type: "success",
  			  showConfirmButton: false
  			});

  			setTimeout(function(){location.assign("{{ route('home') }}")},1000)

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
