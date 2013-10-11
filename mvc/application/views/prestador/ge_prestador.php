
        <script>
                  
                  $(document).ready(function() {
                  
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
          $('#home').load($('.active a').attr("data-url"),function(result){
            $('.active a').tab('show');
          });

        
        });
        
        </script>

<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#home">Inscribir</a></li>
  <li><a href="#profile" data-url="insertar_prestador">Consultar modificar</a></li>
  <li><a href="#messages">Reportes</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home">home</div>
  <div class="tab-pane" id="profile">profile</div>
  <div class="tab-pane" id="messages">messages</div>
</div>

<script>
  $(function () {
    $('#myTab').tab();
  });
</script>