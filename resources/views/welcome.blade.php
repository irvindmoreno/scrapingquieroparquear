<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <div class="contenido"></div>

    


    </head>
    <body>
        <h1>Aqtaque a Quiero Parquear</h1>
    <h4>Pobrecitos!</h4>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
    //longitud es x
    //latitud es y
    var punto1x=-77.02732460048833;
    var punto1y=-12.094610241427734;
    
    var punto2x=-76.9816626742188;
    var punto2y=-12.094610241427734;
    
    var punto3x=-77.02732460048833;
    var punto3y=-12.135244795340439;
    
    var punto4x=-76.9816626742188;
    var punto4y=-12.135244795340439;
    var listaCocheras = [];
    function Cochera(capacidad, certificado, denuncias,departamento,direccion,distrito,estado,horarioTarifa1Fin,horarioTarifa1Inicio,horarioTarifa2Fin,id,latitud,libres,longitud,nombre,nota,pais,privada,provincia,recomendaciones,referencia,tarifa1,tarifa2,techado,telefonos,valetParking,website)       
    {
        this.capacidad = capacidad;
        this.certificado = certificado;
        this.denuncias = denuncias;
        this.departamento = departamento;
        this.direccion = direccion;
        this.estado = estado;
        this.distrito = distrito;
        this.horarioTarifa1Fin = horarioTarifa1Fin;
        this.horarioTarifa1Inicio = horarioTarifa1Inicio;
        this.horarioTarifa2Fin = horarioTarifa2Fin;
        this.id = id;
        this.latitud = latitud;
        this.libres = libres;
        this.longitud = longitud;
        this.nombre = nombre;
        this.nota = nota;
        this.pais = pais;
        this.privada = privada;
        this.provincia = provincia;
        this.recomendaciones = recomendaciones;
        this.referencia = referencia;
        this.tarifa1 = tarifa1;
        this.tarifa2 = tarifa2;
        this.techado = techado;
        this.telefonos = telefonos;
        this.valetParking = valetParking;
        this.website = website;
    }//http://www.quieroparkear.pe/busquedas/cercanos?latitud="+latitud+"&longitud="+longitud
    function robarCocheras(latitud,longitud)
    {
             
       var flickerAPI = "http://www.quieroparkear.pe/busquedas/cercanos?latitud=-12.051257324505121&longitud=-77.03130375214846";
      $.getJSON( flickerAPI, {
        tags: "mount rainier",
        tagmode: "any",
        format: "json"
      })
        .done(function( data ) {

            //console.log(data);
            
            for(var cochera=0;cochera<data.length;cochera++)
            {
                
                var cocheraNr = new Cochera(
                        data[cochera].capacidad,
                        data[cochera].certificado,
                        data[cochera].denuncias,
                        data[cochera].departamento,
                        data[cochera].direccion,
                        data[cochera].distrito,
                        data[cochera].estado,
                        data[cochera].horarioTarifa1Fin,
                        data[cochera].horarioTarifa1Inicio,
                        data[cochera].horarioTarifa2Fin,
                        data[cochera].id,
                        data[cochera].latitud,
                        data[cochera].libres,
                        data[cochera].longitud,
                        data[cochera].nombre,
                        data[cochera].nota,
                        data[cochera].pais,
                        data[cochera].privada,
                        data[cochera].provincia,
                        data[cochera].recomendaciones,
                        data[cochera].referencia,
                        data[cochera].tarifa1,
                        data[cochera].tarifa2,
                        data[cochera].techado,
                        data[cochera].telefonos,
                        data[cochera].valetParking,
                        data[cochera].website);               
                        //console.log(cocheraNr);
                        $.get("{{ url('/registro') }}?cochera="+JSON.stringify(cocheraNr),
                            function(respuesta) {
                               // $(".contenido").append(respuesta);
                        }).error(
                            function(){
                                //console.log('Error al ejecutar la petición');
                            }
                        );
                        //listaCocheras.push(cocheraNr);
            }
            /*
             var cocherasJson = JSON.stringify(listaCocheras);
             console.log(listaCocheras);
             console.log(cocherasJson);*/
             



                /*
             $.ajax({
                        url: "{{ url('/registro') }}?cochera="+cocherasJson,
                        method: 'get',
                        dataType: 'json'
                    }).done(function (response) {
                        console.log(response['response']);
                        $(".contenido").append("mi respuesta: "+response['response']);
                      // .... do something with your returned data, if needed;
                    }).fail(function(e){
                        console.log(e); // gives your something to debug.
                    });*/
          
        }); 
    }
    //var i= longitud2
    var contador=0;
    console.log(punto1y)
    console.log(punto3y)
   //robarCocheras(y,x);
    for(var y=punto3y;y<=punto1y;y=y+0.01)
    {

        for(var x= punto1x;x<=punto2x;x=x+0.01)
        {
            contador++;
            robarCocheras(y,x);
        }
    }
        //alert("total de consultas: "+contador)
  
    </script>
    </body>
</html>
