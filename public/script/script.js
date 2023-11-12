var map;
$(document).ready(function() {

    $(".openModal").on("click", function() {
        var apartamentId = $(this).data("apartament-id");
        console.log(apartamentId);

       
 

        //quan tanqui el modal totes les dades del modal
        $('#exampleModal').on('hidden.bs.modal', function() {
            $(this).find('form').trigger('reset');
        });

        



        $.ajax({

            type: "POST",
            url: "index.php?r=openModal",
            data: { apartament_id: apartamentId },
            dataType: "json", 

            success: function(apartment) {

                if(map){
                    map.remove();
                }

                    console.log(apartment);


                    jQuery("#Titol").html(apartment.Titol);
                    jQuery("#ID").html(apartment.ID);
                    jQuery("#Descripcio").html(apartment.Descripcio);
                    jQuery("#Adreca_Postal").html(apartment.Adreca_Postal);
                    jQuery("#N_Habitacions").html(apartment.N_Habitacions);
                    jQuery("#Metres_Quadrats").html(apartment.Metres_Quadrats);
                    jQuery("#Preu_Alta").html(apartment.Preu_Alta);
                    jQuery("#Preu_Baixa").html(apartment.Preu_Baixa);
                    jQuery("#Temporades").html(apartment.Temporades);
                    jQuery("#persones").val(apartment.N_Habitacions);
                    jQuery("#Serveis").html(apartment.Serveis);

                    var image = $("#apartmentImage");
                    image.attr("src", "images/" + apartment.Titol + ".jpg");

                    $("input[name='ID_Apartament']").val(apartamentId);
                    
                    map = L.map('map').setView([apartment.Latitud, apartment.Longitud], 13);

                    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    }).addTo(map);

                    var marker = L.marker([apartment.Latitud, apartment.Longitud]).addTo(map);

                     setTimeout(function () { map.invalidateSize() }, 300);

                     

                    // Obtén el valor de Preu_Baixa y Preu_Alta desde tu AJAX
                    var Preu_Baixa = apartment.Preu_Baixa;
                    var Preu_Alta = apartment.Preu_Alta;

                    // Obtén los elementos de fecha de entrada y fecha de salida
                    var inputFechaEntrada = document.getElementById('Data_Entrada');
                    var inputFechaSalida = document.getElementById('Data_Sortida');

                    // Agrega un controlador de eventos para ambos campos de fecha
                    inputFechaEntrada.addEventListener('input', calcularPrecioReserva);
                    inputFechaSalida.addEventListener('input', calcularPrecioReserva);

                    function calcularPrecioReserva() {
                        // Obtén las fechas de entrada y salida ingresadas por el usuario
                        var fechaEntrada = new Date(inputFechaEntrada.value);
                        var fechaSalida = new Date(inputFechaSalida.value);

                        // Realiza la lógica para determinar si es temporada baja o alta
                        // Por ejemplo, si la fecha de entrada es del 1 de enero al 30 de junio, considera temporada baja
                        var esTemporadaAlta = fechaEntrada.getMonth() >= 6; 

                        // Calcula el precio de la reserva en función de la temporada
                        var precioReserva = esTemporadaAlta ? Preu_Alta : Preu_Baixa;

                        // Aquí puedes mostrar el precio de la reserva en algún elemento HTML, por ejemplo, en un elemento con ID "Precio_Reserva"
                        document.getElementById('Precio_Reserva').value = precioReserva;
                        document.getElementById('Precio_Reserva').textContent = precioReserva;
                        $("input[ID='Precio_Reserva']").val(precioReserva);

    
                    } 
                
            },
            error: function(xhr, textStatus, errorThrown) {
                console.log("Error en la solicitud AJAX: " + errorThrown);
            }
        });
    });
});



var table = new DataTable('#users', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/ca.json',
    },
});

var table2 = new DataTable('#apartaments', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/ca.json',
    },
});

var table3 = new DataTable('#reserves', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/ca.json',
    },
});
  
  
  
