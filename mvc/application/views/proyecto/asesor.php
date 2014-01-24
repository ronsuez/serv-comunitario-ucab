<!--modal-inscribir asesor-->

<div class="panel panel-default" id="asesores">
    <div class="panel-heading">Asesores</div>
    <div class="panel-body">

        <form  id="inscribir-asesor" action="#" method="POST"> 

           <div class="form-group">

            <label>Nombre</label>
            <input type="text" id="nombre_asesor" name="nombre_asesor" class="form-control" placeholder="Introduzca Nombre del Asesor">
        </div>

        <div class="form-group">

            <label>Apellido</label>
            <input type="text" id="apellido_asesor" name="apellido_asesor" class="form-control" placeholder="Introduzca Apellido del Asesor">
        </div>

        <div class="form-group">

            <label>Cédula</label>
            <input type="text" id="cedula_asesor" name="cedula_asesor" class="form-control" placeholder="Introduzca Cédula del Asesor">
        </div>

        <div class="form-group">

            <label>Dirección</label>
            <input type="text" id="direccion_asesor" name="direccion_asesor" class="form-control" placeholder="Introduzca Dirección de habitación del Asesor">

        </div>  

        <div class="form-group">

            <label>Celular</label>
            <input type="text" id="celular_asesor" name="celular_asesor" class="form-control" placeholder="Introduzca Celular del asesor">
        </div>  

        <div class="form-group">

            <label>Teléfono</label>
            <input type="text" id="telefono_asesor" name="telefono_asesor" class="form-control" placeholder="Introduzca Teléfono del Asesor">
        </div>  

        <div class="form-group">

            <label>Email</label>
            <input type="text" id="email_asesor" name="email_asesor" class="form-control" placeholder="Introduzca Email del Asesor">
        </div>  


        <button type="submit" class="btn btn-success"> Inscribir Asesor </button>

    </form>


</div>



</div>

<script>
    //Inicializdor y handler para el validador del form insertar-asesor

    $("#inscribir-asesor").validate({

      rules:{
        nombre_asesor: {
          required: true,
          alpha:true
      },apellido_asesor :{
          required: true,
          alpha:true
      },email_asesor :{
          required: true,
          email: true
      },telefono_asesor:{
          required: true,
          number: true,
          maxlength:11,
          minlength:11
      },direccion_asesor:{
          required:true
      },celular_asesor:{
          required: true,
          number: true,
          maxlength:11,
          minlength:11
      },cedula_asesor: {
          required: true,
          number: true
      }
  },
  messages:{
    nombre_asesor : {
      required: mensajes.reglas.requerido
  },apellido_asesor :{
      required: mensajes.reglas.requerido
  },email_asesor : {
      required: mensajes.reglas.requerido,
      email: mensajes.reglas.email
  },telefono_asesor :{
      required : mensajes.reglas.requerido,
      number : mensajes.reglas.numerico,
      minlength: mensajes.reglas.minimo,
      maxlength: mensajes.reglas.maximo
  },celular_asesor :{
      required : mensajes.reglas.requerido,
      number : mensajes.reglas.numerico,
      minlength: mensajes.reglas.minimo_tlf,
      maxlength: mensajes.reglas.maximo_tlf
  },direccion_asesor:{
      required: mensajes.reglas.requerido
  },cedula_asesor: {
      required: mensajes.reglas.requerido,
      number: mensajes.reglas.numerico
  }
}
});

     //comienzo del script de insertar asesor

     $("#inscribir-asesor").bind("submit",function (e){

      e.preventDefault();

      if($(this).valid()){

        var nombre = $("#nombre_asesor").val();
        var apellido = $("#apellido_asesor").val();
        var email = $("#email_asesor").val();
        var cedula = $("#cedula_asesor").val();
        var telefono = $("#telefono_asesor").val();
        var direccion = $("#direccion_asesor").val();
        var celular = $("#celular_asesor").val();
    //----------------------------------------
    $.post("insertar_asesor",{
        cedula_ase:cedula,
        nombre_ase:nombre,
        apellido_ase:apellido,
        email_ase:email,
        telefono_ase:telefono,
        direccion_ase:direccion,
        celular_ase:celular,
    },
    function(data){
      console.log(data);
  });

    resetForm($("#inscribir-asesor"));

} else {  
    console.log('NO VALIDO');
}
});

 </script>

