/*Javascript functions and handlers*/

 // using JQUERY's ready method to know when all dom elements are rendered
    $( document ).ready(function () {


      // funciones para los handlers de las solicitudes via ajax.
		$( document ).ajaxStart(function() {
		  console.log( "Triggered ajaxStart handler." );

		});


		$( document ).ajaxComplete(function() {
		  console.log( "Triggered ajaxComplete handler." );

		});

	//Funcion para el nav bar PANEL DE CONTROL

      $("#main-panel a").click(function (e) {

      		e.preventDefault();
 
        	$("#main-panel>li.active").removeClass("active");
        	
        	$(this).parent().addClass("active");

        	$("#main-title").text($(this).text());

        
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
					
						
			      });

    

 


 });