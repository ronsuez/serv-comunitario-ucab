/*
 * Date of creation: 01/11/2013
 * Developers: Ronald Suez , Oscar Bastardo
 * University: Universidad Catolica Andres Bello - Guayana
 * Course: Desarrollo del Software
 * Application Name: Sistema de gestion del servicio comunitario (Servcom-UCAB)
 * Script purpose: This file is the core javascript, containig
 *           All the actions, consults, validations and 
 *           Data processing for the SERVCOM application.
 */  
  

//================================================================//
//================================================================//
//======================Variables goblales  ======================//
//================================================================//
//================================================================//
  
var mensajes = {

 reglas:{

   requerido: '*Este es campo es requerido',
   matches: 'The %s field does not match the %s field.',
   equalTo: "Las contrase&ntilde;as tienen que ser iguales",
   email : "*Introduzca una dirección de correo válida",
   numerico: "*Debe contener solo dígitos (0-9)",
   minimo_tlf: "*Debe tener 11 dígitos(e.g 0416585684)",
   maximo_tlf: "*Debe tener máximo 11 dígitos (e.g 0416585684).",
   localidad:"*Debe especificar la dirección de la localidad"

 },
 error:{
  campo_vacio: "No se permiten campos vacios.",
  form_nv : "Los datos del formulario no son validos",
  proyecto_nf:"No existen proyectos que coincidan con la busqueda.",
  prestador_nf:"Prestador no encontrado.",
  prestador_pnf:"No existen prestadores inscritos en el proyecto.",
  prestador_no_insertado:"No se pudo registrar el prestador",
  error_reporte_horas:"No se pudo insertar las horas",
  localidad_nf: "Localidad no encontrada.",
  localidad_no_insertada:"No se pudo registrar la localidad",
  select_user: "Debe seleccionar un usuario",
  usuario_no_registrado:"No se pudo registrar el usuario.",
  usuario_no_actualizado: "No se pudo actualizar el usuario",
  finalizar_proyecto: "No se pudo finalizar el proyecto"
},
success:{
  asesor_f:"Asesor encontrado",
  asesores_f:"Asesores encontrados",
  asesor_datos_cargados:"Los datos del asesor fueron cargados correctamente",
  prestador_f:"Prestador encontrado.",
  prestadores_f:"Prestadores encontrados.",
  prestador_datos_cargados:"Los datos del prestador fueron cargados correctamente",
  reporte_horas: "Horas Insertadas Satisfactoriamente",
  prestador_insertado:"El prestador fue inscrito en el Sistema",
  proyecto_f:"Proyecto encontrado.",
  proyectos_f:"Proyectos encontrados.",
  localidad_f: "Localidad  encontrada.",
  localidad_insertada:"La localidad se registro existosamente",
  coordinador:"ahora es el coordinador de la escuela de ",
  usuario_deshab:"esta deshabilitado",
  usuario_registrado:"El usuario ha sido registrado exitosamente",
  usuario_actualizado: "El usuario ha sido actualizado existosamente",
  finalizar_proyecto: "Finalizado el Proyecto exitosamente"

},
warning:{
  coor_principal: "El coordinador ya esta definido como principal",
  coor_deshabilitado: "Este coordinador ya se encuentra deshabilitado"
},

requerido: '*Este es campo es requerido',
matches: 'The %s field does not match the %s field.',
"default": 'The %s field is still set to default, please change.',
valid_email: 'The %s field must contain a valid email address.',
valid_emails: 'The %s field must contain all valid email addresses.',
min_length: 'The %s field must be at least %s characters in length.',
max_length: 'The %s field must not exceed %s characters in length.',
exact_length: 'The %s field must be exactly %s characters in length.',
greater_than: 'The %s field must contain a number greater than %s.',
less_than: 'The %s field must contain a number less than %s.',
alpha: 'The %s field must only contain alphabetical characters.',
alpha_numeric: 'The %s field must only contain alpha-numeric characters.',
alpha_dash: 'The %s field must only contain alpha-numeric characters, underscores, and dashes.',
numeric: 'The %s field must contain only numbers.',
integer: 'The %s field must contain an integer.',
decimal: 'The %s field must contain a decimal number.',
is_natural: 'The %s field must contain only positive numbers.',
is_natural_no_zero: 'The %s field must contain a number greater than zero.',
valid_ip: 'The %s field must contain a valid IP.',
valid_base64: 'The %s field must contain a base64 string.',
valid_credit_card: 'The %s field must contain a valid credit card number.',
is_file_type: 'The %s field must contain only %s files.',
pre: 'The %s field must contain a valid URL.'

};

var datos_de_prestador=[
'ci_prestador',
'nombre_prestador',
'apellido_prestador',
'email_prestador',
'celular_prestador',
'telefono_prestador',
'direccion_prestador',
'no_exp_prestador',
'escuela_prestador',
'mencion_prestador',
'semestre_prestador'
];


var main_datos={

        prestador : {
          cedula : "",
          nombre : "",
          apellido : "",
          email : "",
          celular: "",
          telefono: "",
          direccion: "",
          expediente : "",
          escuela : "",
          mencion: "",
          semestre: "",
        }
        
};

var datos_de_localidad=[
'nombre_localidad',
'representante_localidad',
'email_representante_localidad',
'telefono_representante_localidad',
'parroquia_localidad',
'direccion_localidad'
];



var datos_de_proyecto = ["nombre_proyecto",
"fecha_ini",
"estado_proyecto",
"id_proyecto",
"diagnostico_proyecto",
"justificacion_proyecto",
"impacto_proyecto",
"obj_generales_proyecto",
"obj_especificos_proyecto",
"metas_proyecto",
"producto_proyecto",
"plan_trabajo_proyecto",
"recursos_requeridos_proyecto",
"cronograma_proyecto"
];

var datos_de_usuario=[
'ci',
'user',
'pass',
'tipo_usuario',
'nombre',
'apellido',
'email',
'celular',
'telefono',
'escuela',
];

var escuela_usuario = "";
var act_datos_usuario = 0;
var act_datos_prestador = 0;
var prestador_tiene_proyectos=0;
var escuela = "";
var img_name = "";
var img_path = "http://1120.gogiro.com/wp-content/uploads/2012/04/facebook-profile-picture-no-pic-avatar.jpg";


//================================================================//
//================================================================//
//======================jQuery manejador de eventos===============//
//================================================================//
//================================================================//



 // using JQUERY's ready method to know when all dom elements are rendered
 $( document ).ready(function () {


// configuracion inicial de los mensajes de alerta.

toastr.options = {
  "closeButton": false,
  "debug": true,
  "positionClass": "toast-top-right",
  "onclick": function hola_mundo(){$(this).hide();},
  "showDuration": "100",
  "hideDuration": "100",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}



      // funciones para los handlers de las solicitudes via ajax.
      $( document ).ajaxStart(function() {
    
       console.log( "Triggered ajaxStart handler." );

     });


      $( document ).ajaxComplete(function() {
        console.log( "Triggered ajaxComplete handler." );

      });
      

/*
* Esta funcion se utiliza para cargar el contenido de 
* el nav principal (panel-de-control)
* navs => proyecto, prestador, localidades
*/

$("#main-panel a").on("click",function (e) {

  e.preventDefault();
  
  nav_pestanas_principal($(this).attr("id"),$(this).attr("href"),$(this).text(),null);  
  
});



/*
* Esta funcion se utiliza para cargar  
* para cargar el contenido de las  pestanas  del nav principal
* navs => proyecto    :{
*     Inscribir, Consultar/Modificar
*     }, 
*     prestador   :{
*        Inscribir ,Consultar/Modificar ,Asignar Proyecto
*
*     }, 
*     localidades :{
*      Registrar, Consultar/Modificar 
*     }
*/

// ajax request 


$(document).on("click",".nav-top li a",function (e) {


  e.preventDefault();

  url = $(this).attr("href");

  $(".nav-top li").removeClass("active");

  $(this).parent().addClass("active"); 

  $.ajax({
           beforeSend: function(){
               // Handle the beforeSend event
               $('#main-panel-body').html('<div id="loading"><img src="./jar-loading.gif"></div>');
               
             },
             type: "GET",
             url: url,
             success: function (data) {
                      // replace div's content with returned data
                      
                     setTimeout(function() {
                      $('#main-panel-body').html(data);
      
                    },1000);
              }               
          
});

});

$(document).on("click",".pestanas li a",function (e) {


  e.preventDefault();

  nav_tabs($(this));


});


$(document).on("click","#consultar_p",function (e) {


  e.preventDefault();

  nav_pestanas_principal("pestana-proyectos","gest-proyecto","Proyectos","consultar_proyecto"); 
  


});


$(document).on("click","#ver_pre",function (e) {


  e.preventDefault();

  nav_pestanas_principal("pestana-prestadores","gest-prestador","Prestadores","consultar_pre"); 
  


});


//Boton para definir el coordinador de cada escuela
$(document).on("click","#listado_usuarios a.coord",function (e) {

        
e.preventDefault();

      var usuario= $(this).closest('td').parent().find("td select option:selected");


      var escuela = $(this).closest('td').parent().find("td").eq(0);

      console.log(usuario.val());

          if(usuario.val()){

            $.post("def_coordinador", {ci:usuario.val()}, function(data){
                
                console.log(data);

                if (data==="0") {
                  show_messages("success","El usuario "+usuario.text()+" "+mensajes.success.coordinador+" "+escuela.text());

                }
                else {

                  show_messages("warning",mensajes.warning.coor_principal);
                  
                }
            
            });
            
          }else{

              show_messages("error",mensajes.error.select_user);

          }


});


// Boton para deshabilitar los usarios
$(document).on("click","#listado_usuarios .deshab",function (e) {

      e.preventDefault();

      var usuario= $(this).closest('td').parent().find("td select option:selected");

      console.log(usuario.val());

          if(usuario.val()){

            $.post("deshab_coordinador", {ci:usuario.val()}, function(data){
                
                console.log(data);

                if (data==="0") {
                   show_messages("success","El usuario "+usuario.text()+" "+mensajes.success.usuario_deshab);

                }
                else {

                  show_messages("warning",mensajes.warning.coor_deshabilitado);
                  
                }
            
            });

         

          }else{

              show_messages("error",mensajes.error.select_user);

          }
 

});

$("body").on("keyup","#id_prestador_cedula", function(event){

  var query = $(this).val();
  var option = "";
  console.log($(this).val());

  /*seteo la variable de actualizacion en falso */
  
$("#prestador-tab-content").hide();

$("#data-re-prestador").hide();




  if(query!=""){
    if ($.isNumeric(query)){
      console.log(query+"input was 0-9");
      option = "cedula";
      b_consultar_prestador(query,option,escuela);
    } else{
      console.log(query+"input was a-z");
      option = "nombre";
      b_consultar_prestador(query,option,escuela);
    }
  }

  event.stopPropagation();

});


// listener para buscar usuarios

$("body").on("keyup","#id_usuario", function(event){

  var query = $(this).val();
  var option = "";
  console.log($(this).val());

  if(query!=""){
    
    if ($.isNumeric(query)){
      console.log(query+"input was 0-9");
      option = "cedula";

    } else{
      console.log(query+"input was a-z");
      option = "user";
    }
          b_consultar_usuario(query,option);

  }

  event.stopPropagation();

});



$("body").on("keyup",".q_proyecto", function(event){

  var query = $(this).val();
  var option = "";
  console.log($(this).val());

  if(query!=""){

    $(".results").css("display","block");

      $(".results").css("height","auto");
    
    busqueda("buscar_proyecto",query);


  }

  event.stopPropagation();

});



$('body').on('click','a.key_proyecto', function (ev) {
  
 ev.preventDefault();

 $(".results.proyecto").css("display","none");
 $("div.search_results.proyecto ").empty();

 var key_proyecto = $(this).attr("href");

 $.post("listar_datos_proyecto",{id_proyecto:key_proyecto},function(data){

  var listado = JSON.parse(data);

  

  $.each(datos_de_proyecto, function(i){

   $("#"+datos_de_proyecto[i]).html(listado[0][datos_de_proyecto[i]]);

   $("#n_proyecto").val(listado[0][datos_de_proyecto[0]]);
   $("#f_proyecto").val(listado[0][datos_de_proyecto[1]]);
   $("#e_proyecto").val(listado[0][datos_de_proyecto[2]]);
   $("#c_proyecto").val(listado[0][datos_de_proyecto[3]]);
 });


  
});
        //listar prestadores asociados al pryecto
       listar_prestadores_x_proy(key_proyecto);
       
       ev.stopPropagation();
 
     });


$('body').on('click','a.key_prestador', function (ev) {
  
  ev.preventDefault();



  $("#prestador-tab-content").show();

   act_datos_prestador = 1;

  if (act_datos_prestador) {
    $("#boton_prestador").val("Actualizar datos");
    $("#titulo_registro_prestador").html("Actualizar datos del prestador");
  }

  console.log($(this).attr("href"));

  var cedula=$(this).attr("href");

  $.post("consultar_datos_prestador",{id:$(this).attr("href")},function(data){

    var estado =JSON.parse(data)["estado"];

    var listado=JSON.parse(data)["datos_prestador"];


    console.log(JSON.parse(data));

     //almaceno la cedula del usuario para realizar operaciones sobre el 
      main_datos.prestador.cedula=listado["ci_prestador"];
      main_datos.prestador.nombre=listado["nombre_prestador"];
      main_datos.prestador.apellido=listado["apellido_prestador"];
      main_datos.prestador.expediente=listado["no_exp_prestador"];
      main_datos.prestador.telefono=listado["telefono_prestador"];
      main_datos.prestador.email=listado["email_prestador"];
      main_datos.prestador.celular=listado["celular_prestador"];
      main_datos.prestador.direccion=listado["direccion_prestador"];
      main_datos.prestador.mencion=listado["mencion_prestador"];
      main_datos.prestador.semestre=listado["semestre_prestador"];
      main_datos.prestador.escuela=listado["escuela_prestador"];


      //popular datos del prestador 

        popular_datos_prestador();

    $("#info-nombre_prestador").html(main_datos.prestador.nombre+""+main_datos.prestador.apellido);

      set_photo();
 

    show_messages("success",mensajes.success.prestador_datos_cargados);
    
     $("#data-re-prestador").show();



  });
  
 


//consulto si el prestador tiene proyectos asociados , 
 // si tiene , se esconde la pestana asignar proyetcor

 
    listar_proyecto(cedula,0);
  



    //limpiamos el input y escondemos la busqueda 
    $("#datos_busqueda").empty();

    $("#id_prestador_cedula").val("");

    ev.stopPropagation();


  });


$('body').on('click','a.key_usuario', function (ev) {
  
  ev.preventDefault();

  act_datos_usuario = 1;

  if (act_datos_usuario) {
    $("#boton_usuario").html("Actualizar");
    $("#titulo_registro").html("Actualizar datos de usuarios");
    $("#pass").attr("type","text");
    $("#pass").attr("disabled","disabled");
    $("#conf_pass").attr("type","text");
    $("#conf_pass").attr("disabled","disabled");
  }

//imprime en la consola la cedula 
  var ci = $(this).attr("href");

  var t = $(this).find("span.tipo").text();

  var id_tipo;

    if(t=="CO"){
          id_tipo="_coord";
          $("#carrera").fadeIn(1000);
          $("#escuela").fadeIn(1000);
      
    }else if(t=="DI"){
          id_tipo="_di";
          $("#carrera").fadeIn(1000);
          $("#escuela").fadeIn(1000);
       
    }else if(t=="PR"){
          id_tipo="_pr";
           $("#carrera").fadeOut(1000);
          $("#escuela").fadeOut(1000);
    }


  $.post("get_info_user",{cedula:ci,tipo:t},function(data){

      var datos_usuario = JSON.parse(data)["datos_usuario"];

      var datos_p_usuario = JSON.parse(data)["datos_p_usuario"];

        console.log(datos_usuario);

      $.each(datos_de_usuario, function(i){

                if(datos_de_usuario[i]==="tipo_usuario"){
                    console.log(t);
                    $("#tipo_usuario").val(t);
                }else{
                    
                $("#"+datos_de_usuario[i]).val(datos_p_usuario[datos_de_usuario[i]+id_tipo]);

                }

        });

      $("#user").val(datos_usuario["user"]);
      $("#pass").val(datos_usuario["contrasena"]);
      $("#conf_pass").val(datos_usuario["contrasena"]);

  });

  //habilitamos la nav de registro 
    
    //limpiamos el input y escondemos la busqueda 
    $("#datos_busqueda").empty();

    $("#id_usuario").val("");

    ev.stopPropagation();


  });


/*listener para el boton reportar horas*/


$("body").on("click",".reportar-horas", function(event){
  
    if(!$("#l_proyectos").val()){

        event.preventDefault();

        console.log("seleccione un proyecto");

    }

});
$("body").on("keyup","#b_asesor", function(event){
  var query = $(this).val();
  var option = "";
  console.log($(this).val());

  if(query!=""){

    $(".results").css("display","block");

      $(".results").css("height","auto");

    if ($.isNumeric(query)){
      console.log(query+"input was 0-9");
      option = "cedula";
      b_consultar_asesor(query,option);
    } else{
      console.log(query+"input was a-z");
      option = "nombre";
      b_consultar_asesor(query,option);
    }
  }

  event.stopPropagation();

});

$('body').on('click','a.key_asesor', function (ev) {
  ev.preventDefault();


 $(".results.asesor").css("display","none");
 $("div.search_results.asesor").empty();

  console.log($(this).attr("href"));

  var cedula=$(this).attr("href");
  $.post("consultar_datos_asesor",{q:$(this).attr("href"),o:'cedula'},function(data){
      var estado =JSON.parse(data)["estado"]; 
        console.log(JSON.parse(data));
        if(estado == -1){
          toastr.error("Asesor no encontrado");
        }else{
          toastr.success("Asesor encontrado");
          var datos_personales =JSON.parse(data)[0];
          $("#nombre_asesor_res").val(datos_personales.nombre_asesor);
          $("#apellido_asesor_res").val(datos_personales.apellido_asesor);
          
          //si estamos en la tab de crear proyecto 
          if($(".pestanas li[class='active']").text()==="Crear"){

              $(".listado-asesor").append("<li class='list-group-item'>"+datos_personales.nombre_asesor+" "+datos_personales.apellido_asesor+"</li>");
          }
        }
      });
});

//listener para subir las imagenes

$('body').on('click','.btn-subir-foto', function (ev) {
      console.log("imagen");
});


$('body').on("click","#btn-inscribir_prestador",function(){

        $("#prestador-tab-content").show();

        act_datos_prestador = 0;

        $("#form-prestador")[0].reset();

    $("#boton_prestador").val("Registrar");
    $("#titulo_registro").html("Registrar prestador");
    


  });




//================================================================//
//================================================================//
//================= SERVCOM bootstrap events     =================//
//================================================================//
//================================================================//

   //Cierra los popovers que estan abiertos  y muestra el que seleccione
   $(document).on("show.bs.popover",function(){

     console.log("other popovers out");

     $('button[data-toggle="popover"]').popover('hide');

   });



 });



//================================================================//
//================================================================//
//====================== SERVCOM funciones comunes ===============//
//================================================================//
//================================================================//

//#############buscar asesor############################################################



//funcion popular datos del prestador

function popular_datos_prestador(listado){

    var array = $.map(main_datos.prestador, function(value, index) {
    
    return [value];
    
    });

    $.each(datos_de_prestador, function(i){

     $("#"+datos_de_prestador[i]).val(array[i]);

   });


}

function vaciar_datos_prestador(){

$.each(main_datos.prestador,function(index,value){ 
 
       main_datos.prestador[index]="";  

 });

}
//funcion manejadora de tabs

function handler_tab(container,tab,state){





}


//funcion keyup para asesor
function b_consultar_asesor(query,option){

  var add_asesor="#add-asesor-box";


  $.post("consultar_datos_asesor",{q:query,o:option},function(data){

    console.log(data);  
    
    if(data!="-1"){


      $(add_asesor).hide(); //se esconde el boton para agregar asesor
      
      var array=JSON.parse(data);

      console.log(array.length);
      
      // if (array.length === 1) 
      //   toastr.success(array.length+" "+mensajes.success.asesor_f);
      // else
      //   toastr.success(array.length+" "+mensajes.success.asesores_f);
      
      var content ="";

      $.each(array,function(i){
        content = content +'<li class="list-group-item"><a class="key_asesor" href="'+ array[i]["ci_asesor"] +' "> '+ array[i]["nombre_asesor"]+' '+array[i]["apellido_asesor"]+' '+array[i]["ci_asesor"]+'</a></li>';

      });


      $(".search_results.asesor").html("<ul class='list-group'>"+content+"</ul>");

      
    }else{



      $(add_asesor).show(); //se esconde el boton para agregar asesor

      $(".search_results.asesor").html('<div class="no-results">No se encontraron resultados</div>');
      

    }   

  });
}

//final asesor##################################################################################################



function b_consultar_prestador(query,option,escuela){




  $.post("b_listar_prestadores",{q:query,o:option,esc:escuela},function(data){

    console.log("salida"+data); 
    
    if(data!="-1"){
  
      var array=JSON.parse(data);

      console.log(array.length);
      /*
      if (array.length === 1) 
        show_messages("success",array.length+" "+mensajes.success.prestador_f);
      else
        show_messages("success",array.length+" "+mensajes.success.prestadores_f);
    
      */
      var content ="";

      $.each(array,function(i){
       content = content +'<li class="list-group-item"><a class="key_prestador" href="'+ array[i]["ci_prestador"] +' "> '+'Cedula: '+array[i]["ci_prestador"]+' '+'Alumno: '+array[i]["nombre_prestador"]+' '+array[i]["Apellido_prestador"]+'</a></li>';

      });

      

      $("#datos_busqueda").html("<ul class='list-group'>"+content+"</ul>");

    }else{

      console.log("hola");

      $("#datos_busqueda").html('<div class="no-results">No se encontraron resultados <br><button id="btn-inscribir_prestador" type="button"  class="btn btn-primary">Inscribir prestador</button></div>');
      

    }   

  });
}



function b_consultar_usuario(query,option){


    console.log("");


  $.post("b_listar_usuario",{q:query,o:option},function(data){

    console.log(data); 
    
    if(data!="-1"){


      
      var array=JSON.parse(data);

      console.log(array.length);
      
      if (array.length === 1) 
        show_messages("success",array.length+" "+mensajes.success.prestador_f);
      else
       show_messages("success",array.length+" "+mensajes.success.prestadores_f);
      
      var content ="";

      $.each(array,function(i){
        content = content +'<li class="list-group-item"><a class="key_usuario" href="'+ array[i]["cedula"] +' "><span class="tipo">'+array[i]["tipo"]+'</span>:'+array[i]["user"]+'</a></li>';

      });

      

      $("#datos_busqueda").html("<ul class='list-group'>"+content+"</ul>");

    }else{

      $("#datos_busqueda").html('<div class="no-results">No se encontraron resultados</div>');
      

    }   

  });
}


function resetForm($form) {

  
  $form.find('input:text, input:password, input:file, select, textarea').val('');
  $form.find("input[name='email']").val('');
  $form.find('input:radio, input:checkbox')
  .removeAttr('checked').removeAttr('selected');

}


function show_messages(type,messages){

  toastr.clear($("body").find(".toast"));

      switch (type){

        case "error": 
          toastr.error(messages);
                  
        break;

        case "warning": 
          toastr.warning(messages);
                  
        break;

        case "success": 
          toastr.success(messages);
                  
        break;

        default:

        break;
      }
  

}

function nav_pestanas_principal(id_pestana,url,texto,tab){


  vaciar_datos_prestador();

  var pestana;

  if(url ==="gest-proyecto"){
    pestana = "inscribir_proyecto";

  }else if (url ==="gest-prestador"){

    pestana = "inscribir_prestador";

  }else if(url ==="gest-localidad"){

    pestana = "inscribir_localidad";

  }else if(url==="gest-usuarios"){

    pestana ="registrar_usuario";
  }

  console.log(pestana);
  
  $("#main-panel>li.active").removeClass("active");
  
  $("#"+id_pestana).parent().addClass("active");

  $("#tab-title").text(texto);

  
          // run ajax request
          $.ajax({
           beforeSend: function(){
               // Handle the beforeSend event
               $('#main-panel-body').html('<div id="loading"><img src="./jar-loading.gif"></div>');
               
             },
             type: "GET",
             url: url,
             success: function (data) {
                      // replace div's content with returned data
                      
                     setTimeout(function() {
                      $('#main-panel-body').html(data);

                      if(!tab){
                        $('.pestanas li  a[href="#'+pestana+'"]').parent().addClass("active");
                        
                        $('body .pestanas-content div[id="'+pestana+'"]').addClass("active");

                        $('body .pestanas li[class$="active"] a').click();

                      }else{

                        $('.pestanas li  a[href="#' + tab + '"]').parent().addClass("active");


                        $('.pestanas-content div[id="' + tab + '"]').addClass("active");

                        $('body .pestanas li[class$="active"] a').click();

                        console.log(tab);


                      }

                      
                    },1000);
                   }
                   
                 });

}

function nav_tabs(tab){


 

  var url = tab.attr("data-url");
  var href = tab.attr("href");
  var pane = tab;

    //escondo todas los popover que tenia abiertos

    $('button[data-toggle="popover"]').popover('hide');


    // add loading image to div
    $(href).html('<div id="loading"><img src="./loading.gif"></div>');

    pane.tab('show');
    
    // run ajax request
    $.ajax({
      type: "GET",
      url: url,
      success: function (data) {
                  // replace div's content with returned data
                    $(href).html(data);
                  
                }

              });


  }
/*
* Esta funcion se utiliza para listar localidades
* 
* 
*/


function listar_localidades(){


     //carga via ajax el listado de localidades 
     $.get("listar_loc", function (data) {

      
                  var salida = JSON.parse(data);// update the section with the {categorie's list}

                  var localidades= '<option value ="">Seleccione</option>';

                  $.each(salida,function(index){

                    console.log(salida[index]);

                    localidades = localidades +'<option value ="'+salida[index].id_localidad+'">'+salida[index].nombre_localidad+'</option>'; 

                  });

                  $("#ejecuta,#suscribe").html(localidades);
                  
                  
                });


   }

/*
* Esta funcion se utiliza para listar los prestadores
* asignados a un proyecto
*  params : id   => id del proyecto asociado
*            
*/

function listar_prestadores_x_proy(id){


     //carga via ajax el listado de localidades 
     
     $.post("listar_p_x_proy",{id_proyecto:id},function(data){

      var listado = JSON.parse(data);


      var results = [];

      var content= "div.listado_prestadores";

      $(content).empty();

      if(listado==="-1"){

        show_messages("error",mensajes.error.prestador_pnf);

       $(content).html('<span class="no-results">No se encontraron resultados</span>');

     }else{


       $(content+" .no-results").remove();

       $.each(listado, function(){

        results.push('<li class="list-group-item"> <a  class="key_prestador" href="' + this.ci_prestador + '">' + this.nombre_prestador+" "+this.apellido_prestador + "</a> </li>");


      });

       if(results.length>1)
        show_messages("success",results.length+" "+mensajes.success.prestadores_f);
       else
        show_messages("success",results.length+" "+mensajes.success.prestador_f);

       $( "<ul/>", {
        "class": "list-group",
        html: results
      }).appendTo(content);


     }



   });

   }
/*
* Esta funcion generica se utiliza para el modulo 
* de busquedas 
*  params : url   => define la ruta hacia la funcion en el servidor
*            value => define la query a buscar en la BD
* 
*/

function busqueda(url,value){


  console.log("busqueda: "+value);

 if(value){


   $.post(url,{query:value},function(data){

    var listado = JSON.parse(data);

    console.log(data);

    var results = [];

    $("div.search_results.proyecto ul").remove();

    if(data==="-1"){

      show_messages("error",mensajes.error.proyecto_nf);
     

     $("div.search_results.proyecto").html('<span class="no-results">No se encontraron resultados</span>');

   }else{


     $("div.search_results .no-results").remove();

     $.each(listado, function(){

      results.push('<li class="list-group-item"> <a  class="key_proyecto" href="' + this.id_proyecto + '">' + this.nombre_proyecto + "</a> </li>");


    });

     if(results.length>1){
        show_messages("success",results.length+" "+mensajes.success.proyectos_f);
     }
     else{
        show_messages("success",results.length+" "+mensajes.success.proyecto_f);
      }

     $( "<ul/>", {
      "class": "list-group",
      html: results
    }).appendTo( ".search_results.proyecto" );


   }


 });
   
   
 }else{

  show_messages("warning",mensajes.error.campo_vacio);
  

  $("div#search_results").html('<span class="no-results">No envies campos vacios</span>');

}

}


function ver_usuarios(url){

    var d_users;

   $.get(url,function(data){

        d_users=data;



 });

}

function generar_reporte(url,estado,ci_prestador,id_proyecto){


 $.post(url,{state:estado,ci:ci_prestador,id:id_proyecto},function(data){


  
   var button = $(".button-generar");

   $(button).button('loading');

   $.post("ver_reporte",{reporte:data},function (data){
     
     window.open(data, '_blank', 'fullscreen=yes');
     

     $(button).button('reset');      
   });

 });

}


function listar_proyecto(cedula,op){
    

    $.post("b_proyecto_prestador",{ci:cedula,option:op},function(data){


        if(data!="-1"){


              show_messages("success","Este prestador tiene un proyecto asignado");

              prestador_tiene_proyectos=1;

              if(op){ //si quiero listar sus proyectos


              var array=JSON.parse(data);

              var content ='<option value="">Seleccione </option>';

              $.each(array,function(i){
                content = content +'<option value="'+ array[i]["id_proyecto"] +'"> '+ array[i]["nombre_proyecto"]+'</option>';

              });

              $("#l_proyectos").html(content);
             } 
    
  }else{


     
      show_messages("warning","Este prestador no tiene proyectos asignados");


      prestador_tiene_proyectos=0;

  }

    //defino las pestanas para el prestador



    if(!prestador_tiene_proyectos){

         $("div [href='#asignar_pro']").show();
      
         $("div [href='#consultar_pre']").hide();
      }else{
         $("div [href='#asignar_pro']").hide();

    
          $("div [href='#consultar_pre']").show();

      }
  

   });

    
}



function mostrar_opciones(){

      if(!prestador_tiene_proyectos){

         $("div [href='#asignar_pro']").show();
      }else{
         $("div [href='#asignar_pro']").hide();

      }
}


 function set_photo(){

      $.post('set_photo',{ci:main_datos.prestador.cedula},function(data){

          console.log(data);

          img_name = JSON.parse(data);

            if(img_name['filename']){

              //img_path = $(location).attr('hostname');
              img_path="files/"+img_name['filename'];
           

            }else{

              img_path =  "http://1120.gogiro.com/wp-content/uploads/2012/04/facebook-profile-picture-no-pic-avatar.jpg";
            }

              console.log("hola");

               $(".foto-prestador img").attr("src",img_path);
    });


  }
  
  //##################################################################################################
//############################  Localidades  #######################################################
// funciones localidad ###############################################################################

// funcion keyup para localidades

  $("body").on("keyup","#input_nombre_loc", function(event){

  var query = $(this).val();
  var option = "";
  console.log($(this).val());

  if(query!=""){
    if ($.isNumeric(query)){
      console.log(query+"input was 0-9");
      option = "cedula";
      b_consultar_localidad(query,option);
    } else{
      console.log(query+"input was a-z");
      option = "nombre";
      b_consultar_localidad(query,option);
    }
  }

  event.stopPropagation();

});


// fin key up localidades

// funcion consultar localidad 

function b_consultar_localidad(query,option){

  $.post("b_listar_localidades",{q:query,o:option},function(data){

    console.log(data); 
    
    if(data!="-1"){


      
      var array=JSON.parse(data);

      console.log(array.length);
      
      if (array.length === 1) 
        toastr.success(array.length+" "+mensajes.success.localidad_f);
      else
        toastr.success(array.length+" "+mensajes.success.localidades_f);
      
      var content ="";

      $.each(array,function(i){
        content = content +'<li class="list-group-item"><a class="key_localidad" href="'+ array[i]["id_localidad"] +' "> '+ array[i]["nombre_localidad"]+'</a></li>';

      });

      
      
        


      $("#datos_busqueda_localidad").html("<ul class='list-group'>"+content+"</ul>");


      $("#inscribir_localidad").css("display", "none"); // se oculta todo
       $("#pestana_registrar").css("display", "none"); // se oculta todo

         }else{

      $("#datos_busqueda_localidad").html('<div class="no-results">No se encontraron resultados</div>');

      $("#pestana_registrar").fadeToggle("1000");
      $("#inscribir_localidad").fadeToggle("1000");
      $("#consultar").css("display", "none"); // se oculta todo
       $("#pestana_cosnultar").css("display", "none"); // se oculta todo


    }   

  });
}

$('body').on('click','a.key_localidad', function (ev) {

  
  $("#consultar").fadeToggle("1000");
  $("#pestana_cosnultar").fadeToggle("1000");

  
  
  
  ev.preventDefault();

  console.log($(this).attr("href"));
  var idlocalidad=$(this).attr("href");

  $.post("consutar_datos_busquedad_localidad",{id:$(this).attr("href")},function(data){

    var estado =JSON.parse(data)["estado"];

    var listado=JSON.parse(data)["datos_localidad"];

    //almaceno la cedula del usuario para realizar operaciones sobre el 

     /* main_datos.localidad.nombre=listado["nombre_localidad"];
      main_datos.localidad.responsable=listado["representante_localidad"];
      main_datos.localidad.email=listado["email_representante_localidad"];
      main_datos.localidad.telefono=listado["telefono_representante_localidad"];
      main_datos.localidad.parroquia=listado["parroquia_localidad"];
      main_datos.localidad.direccion=listado["direccion_localidad"];*/
    
     $("#nombre_localidad1").val(listado.nombre_localidad);
     $("#representante_localidad1").val(listado.representante_localidad);
     $("#email_representante_localidad1").val(listado.email_representante_localidad);
     $("#telefono_representante_localidad1").val(listado.telefono_representante_localidad);
     $("#parroquia_localidad1").val(listado.parroquia_localidad);
     $("#direccion_localidad1").val(listado.direccion_localidad);

    

    console.log(JSON.parse(data));

   
    toastr.success(mensajes.success.localidad_datos_cargados);  

  });





    //limpiamos el input y escondemos la busqueda 
    $("#datos_busqueda_localidad").empty();

    $("#input_nombre_loc").val("");

    ev.stopPropagation();


  });



// fin funcion consultar localidad

// Fin funciones localidad #################################################################################3

//##################################################################################################
//############################  Localidades  #######################################################
// funciones localidad ###############################################################################




//fin-archivo

