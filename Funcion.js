function Guardar(Nombre,Correo,Telefono,Edad,Provincia,genero,Fecha){
    var parametros = {
                "Nombre" : Nombre,
                "Correo" : Correo,
        "Telefono" : Telefono,
        "Edad" : Edad,
        "Provincia" : Provincia,
        "genero" : genero,
        "Fecha" : Fecha
        };
        $.ajax({
                data:  parametros,
                url:   'Guardar.php', 
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { 
                        $("#resultado").html(response);
                }
        });
}



