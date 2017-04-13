$(function()
{
  $.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '< Ant',
    nextText: 'Sig >',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    weekHeader: 'Sm',
    dateFormat: "dd/mm/yy",
  }
  $.datepicker.setDefaults( $.datepicker.regional[ "es" ] );
})

function loadAvatar(cont,show)
{
  var containerImage = cont

  var ancho = containerImage.width()
  containerImage.height(ancho)

  var showImage = show

  if(showImage.width() < showImage.height())
  {
    showImage.css({width:'100%',height:'auto','margin-left':0})
    var diff = (containerImage.height() - showImage.height()) / 2
    showImage.css('margin-top',diff)
  }
  else if(showImage.width() >= showImage.height())
  {
    showImage.css({width:'auto',height:'100%','margin-top':0})
    var diff = (containerImage.width() - showImage.width()) / 2
    showImage.css('margin-left',diff)
  }
}

function uploadAvatar(button,inputFile,cont,show)
{
  button.on('click',function(){
    inputFile.click()
  })

  inputFile.on('change',function(){
    var avatar = $(this)[0].files
    previewImage(avatar[0],cont,show)
  })
}

function previewImage(image,cont,show)
{
  var reader = new FileReader();
  reader.onload = function(event) {
    var file = new Image;
    file.onload = function()
    {
      var containerImage = cont
      var showImage = show
      if(file.width < file.height)
      {
        showImage.css({width:'100%',height:'auto','margin-left':0})
        var diff = (containerImage.height() - showImage.height()) / 2
        showImage.css('margin-top',diff)
      }
      else if(file.width >= file.height)
      {
        showImage.css({width:'auto',height:'100%','margin-top':0})
        var diff = (containerImage.width() - showImage.width()) / 2
        showImage.css('margin-left',diff)
      }
    }
    file.src = reader.result

    show.attr("src", file.src);

  };
  reader.onerror = function(event) {
      alert("ERROR EN IMAGEN: " + event.target.error.code);
  };
  reader.readAsDataURL(image);
}

function selectedOption(input,auth)
{
  $(input+' > option').each(function(){
    if($(this).val() == auth)
    {
      $(this).attr('selected','selected')
    }
  })
}
