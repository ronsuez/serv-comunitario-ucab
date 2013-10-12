
        <script>
                  
    $(document).ready(function() {
    
     $(function () {
            $('#myTab').tab();
        });
        
        $('#myTab a').click(function (e) {
            e.preventDefault();
            
            var url = $(this).attr("data-url");
              var href = this.hash;
              var pane = $(this);
            
            // ajax load from data-url
            $(href).load(url,function(result){      
                pane.tab('show');
            });
          });

          // load first tab content
          $('#inscribir').load($('.active a').attr("data-url"),function(result){
            $('.active a').tab('show');
          });

        
        });
        
        </script>

<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#inscribir" data-url="insertar_prestador" >Inscribir</a></li>
  <li class=""><a href="#consultar" data-url="consultar_prestador">Consultar modificar</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="inscribir"></div>
  <div class="tab-pane" id="consultar"></div>
  
</div>

