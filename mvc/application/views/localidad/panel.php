

  <script>

                  
    $(document).ready(function() {
  
        
// run ajax request
  $('.pestanas li[class$="active"] a').click();
  

 });
  
    </script>

<style>

    .tab-content{

      margin-top: 30px;
    }
</style>

   <div class="header">
        <h1>Gestión de Organizaciones</h1>
       <ul class="pestanas nav nav-tabs" id="myTab">
          <li class="active"><a href="#inscribir" data-url="insertar_localidad" >Registrar</a></li>
          <li class=""><a href="#consultar" data-url="consultar_localidad">Consultar/Modificar</a></li>

        </ul>
      </div>

<div class="tab-content">
  <div class="tab-pane active" id="inscribir">

  </div>
  <div class="tab-pane" id="consultar"></div>
</div>

