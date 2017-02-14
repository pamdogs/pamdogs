@extends('form-registration.template')

@section('content')

<div class="clearfix grpelem" id="pu488"><!-- column -->
    <div class="clip_frame colelem" id="u488"><!-- image -->
     <img class="block" id="u488_img" src="{{ url('prev/images/pamdogs_ta1-cb-sf.png') }}" alt="" width="259" height="259"/>
    </div>
    <div class="clearfix colelem" id="pu632"><!-- group -->
     <div class="shadow rgba-background rounded-corners grpelem" id="u632"><!-- simple frame -->
         <form class="form-grp clearfix grpelem" id="widgetu550" method="post" enctype="multipart/form-data" action="{{ url('previa') }}"><!-- none box --> <!--scripts/form-u550.php-->
          {{ csrf_field() }}
          <div class="fld-grp clearfix grpelem" id="widgetu563" data-required="true"><!-- none box -->
           <label class="fld-label actAsDiv clearfix grpelem" id="u566-4" for="widgetu563_input"><!-- content -->
            <span class="actAsPara" id="u566-2">Nombre:</span>
           </label>
           <span class="fld-input NoWrap actAsDiv transition rgba-background clearfix grpelem" id="u564-4"><!-- content -->
              <input class="wrapped-input" type="text" spellcheck="false" id="widgetu563_input" name="name" tabindex="1"/>
                <label class="wrapped-input fld-prompt" id="widgetu563_prompt" for="widgetu563_input">
                    <span class="actAsPara">&nbsp; Nombre completo.</span>
                </label>
            </span>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu559" data-required="true" data-type="email"><!-- none box -->
           <label class="fld-label actAsDiv clearfix grpelem" id="u560-4" for="widgetu559_input"><!-- content -->
             <span class="actAsPara" id="u560-2">Email:</span>
           </label>
           <span class="fld-input NoWrap actAsDiv transition rgba-background clearfix grpelem" id="u561-4"><!-- content -->
             <input class="wrapped-input" type="email" spellcheck="false" id="widgetu559_input" name="email" tabindex="2"/>
            <label class="wrapped-input fld-prompt" id="widgetu559_prompt" for="widgetu559_input">
              <span class="actAsPara">&nbsp; Dirección de email.</span>
            </label>
           </span>
          </div>       
          <div class="fld-grp clearfix grpelem" id="widgetu555" data-required="true"><!-- none box -->
           <label class="fld-label actAsDiv clearfix grpelem" id="u556-4" for="widgetu555_input"><!-- content -->
             <span class="actAsPara" id="u556-2">Ciudad:</span>
           </label>
           <span class="fld-input actAsDiv transition rgba-background clearfix grpelem" id="u558-4"><!-- content -->
             <input class="wrapped-input" type="text" spellcheck="false" id="widgetu555_input" name="city" tabindex="3">
             <label class="wrapped-input fld-prompt" id="widgetu555_prompt" for="widgetu555_input">
               <span class="actAsPara">&nbsp; Ciudad donde reside.</span>
              </label>
           </span>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu7372" data-required="true"><!-- none box -->
           <label class="fld-label actAsDiv clearfix grpelem" id="u7374-4" for="widgetu7372_input"><!-- content -->
             <span class="actAsPara" id="u7374-2">Localidad:</span>
           </label>
           <span class="fld-input NoWrap actAsDiv transition rgba-background clearfix grpelem" id="u7375-4"><!-- content -->
             <input class="wrapped-input" type="text" spellcheck="false" id="widgetu7372_input" name="place" tabindex="4"/>
             <label class="wrapped-input fld-prompt" id="widgetu7372_prompt" for="widgetu7372_input">
               <span class="actAsPara">&nbsp; Localidad donde reside.</span>
             </label>
           </span>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu5482" data-required="false"><!-- none box -->
           <label class="fld-label actAsDiv clearfix grpelem" id="u5484-4" for="widgetu5482_input"><!-- content -->
             <span class="actAsPara" id="u5484-2">Teléfono:</span>
           </label>
           <span class="fld-input NoWrap actAsDiv transition rgba-background clearfix grpelem" id="u5485-4"><!-- content -->
             <input class="wrapped-input" type="tel" spellcheck="false" id="widgetu5482_input" name="phone" tabindex="5"/>
               <label class="wrapped-input fld-prompt" id="widgetu5482_prompt" for="widgetu5482_input">
                 <span class="actAsPara">&nbsp; Número telefónico.</span>
               </label>
             </span>
          </div>
          <div class="fld-grp clearfix grpelem" id="widgetu5656" data-required="true"><!-- none box -->
           <label class="fld-label actAsDiv clearfix grpelem" id="u5658-4" for="widgetu5656_input"><!-- content -->
             <span class="actAsPara" id="u5658-2">¿Cómo nos conociste?</span>
           </label>
           <span class="fld-input actAsDiv transition rgba-background clearfix grpelem" id="u5659-4"><!-- content -->
           <input class="wrapped-input" type="text" id="widgetu5656_input" spellcheck="false" name="desc" tabindex="6">
             <label class="wrapped-input fld-prompt" id="widgetu5656_prompt" for="widgetu5656_input">
               <span class="actAsPara">&nbsp; Escriba su mensaje.</span>
             </label>
           </span>
          </div>
          <div class="clearfix grpelem" id="u553-4"><!-- content -->
           <p>Enviando formulario...</p>
          </div>
          <div class="clearfix grpelem" id="u551-4"><!-- content -->
           <p>El servidor ha detectado un error.</p>
          </div>
          <div class="clearfix grpelem" id="u552-4"><!-- content -->
           <p>Formulario recibido.</p>
          </div>
          <div class="clearfix grpelem responseMsg" id="responses"><!-- content -->
           
          </div>

          <input class="submit-btn NoWrap transition grpelem" id="u554-17" type="submit" value="" tabindex="7"/><!-- state-based BG images -->

         </form>
     </div>
    </div>
   </div>
@endsection









