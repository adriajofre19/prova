
new DataTable('#example');

document.addEventListener('DOMContentLoaded', function () {
    var cookieModal = new bootstrap.Modal(document.getElementById('cookieModal'));
    cookieModal.show();
  });

$(document).ready(function(){
    $("#obrir").click(function(){
        console.log("hola");
      $("#modalConsulta").show();
    }); 
    $("#validarCodi").click(function() {
        var codiIntroduit = $("#codi").val();
        console.log(codiIntroduit);

        $.ajax({
            type: "POST",
            url: "validar_codi.php", // Estableix la ruta correcta cap al teu script PHP de validació
            data: { codi: codiIntroduit },
            success: function(result) {
                if (result === "ok") {
                    // Si la validació és correcta, redirigeix a la pàgina de consulta
                    window.location.href = "index.php?r=consulta";
                } else {
                    // Si la validació no és correcta, mostra un missatge d'error o fes alguna acció
                    alert("Codi incorrecte. Torna-ho a provar.");
                }
            }
        });
    }); 
  });


  
  
  
