/*
 * Date of creation: 01/11/2013
 * Developers: Ronald Suez , Oscar Bastardo
 * University: Universidad Catolica Andres Bello - Guayana
 * Course: Desarrollo del Software
 * Application Name: Sistema de gestion del servicio comunitario (Servcom-UCAB)
 * Script purpose: This file is the core javascript, containig
 *				   All the actions, consults, validations and 
 * 				   Data processing for the SERVCOM application.
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
			},
			error:{
				campo_vacio: "No envies campos vacios !",
				proyecto_nf:"No existen proyectos que coincidan con la busqueda !",
				prestador_nf:"Prestador no encontrado !"

			},
			success:{
				prestador_f:"Prestador encontrado !",
				proyecto_f:"Proyecto encontrado !",
				proyectos_f:"Proyectos encontrados !"
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



//================================================================//
//================================================================//
//======================jQuery manejador de eventos===============//
//================================================================//
//================================================================//



 // using JQUERY's ready method to know when all dom elements are rendered
 $( document ).ready(function () {




// configuracion inicial de los mensajes de alerta.

toastr.options = {
  "closeButton": true,
  "debug": false,
  "positionClass": "toast-top-right",
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
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
 
        	$("#main-panel>li.active").removeClass("active");
        	
        	$(this).parent().addClass("active");

        	$("#tab-title").text($(this).text());

        
			    // run ajax request
			    $.ajax({
			    		  beforeSend: function(){
					     // Handle the beforeSend event
					      	$('#main-panel-body').html('<div id="loading"><img src="./jar-loading.gif"></div>');
    
					   },
					        type: "GET",
					        url: $(this).text(),
					        success: function (data) {
					            // replace div's content with returned data
					         
									setTimeout(function() {
								    $('#main-panel-body').html(data);
								},1000);
					        }
			   		
			   		});

			    	//se carga la primera pestana activa 

			     $('.pestanas li[class$="active"] a').click();
					
						
			      });

    

/*
* Esta funcion se utiliza para cargar  
* para cargar el contenido de las  pestanas  del nav principal
* navs => proyecto    :{
*			Inscribir, Consultar/Modificar
*		  }, 
*		  prestador	  :{
*		     Inscribir ,Consultar/Modificar ,Asignar Proyecto
*
*		  }, 
*		  localidades :{
*			 Registrar, Consultar/Modificar	
*		  }
*/

// ajax request 

  $(document).on("click",".pestanas li a",function (e) {


    e.preventDefault();

    var url = $(this).attr("data-url");
    var href = this.hash;
    var pane = $(this);

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

                  setTimeout(function() {
                    $(href).html(data);
                  },1000);
                }

              });

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

						$("div#search_results ul").remove();

						if(data==="-1"){

							    toastr.error(mensajes.error.proyecto_nf);

							$("div#search_results").html('<span class="no-results">No se encontraron resultados</span>');

						}else{


							$("div#search_results .no-results").remove();

							$.each(listado, function(){

								results.push('<li class="list-group-item"> <a  class="key_proyecto" href="' + this.id_proyecto + '">' + this.nombre_proyecto + "</a> </li>");


							});

								if(results.length>1)
									toastr.success(results.length+" "+mensajes.success.proyectos_f);
									else
									toastr.success(results.length+" "+mensajes.success.proyecto_f);	

							   $( "<ul/>", {
						    		"class": "list-group",
						    		html: results
						  		}).appendTo( "#search_results" );


						}


			});
			
				
			}else{

				toastr.warning(mensajes.error.campo_vacio);

				$("div#search_results").html('<span class="no-results">No envies campos vacios</span>');

			}

}


 


//fin-archivo

