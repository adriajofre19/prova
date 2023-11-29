
<!DOCTYPE html>
<html lang="ca">
<html>
<head>
    <title>HOTELS</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<body>
    <header>
        <?php include 'header.php' ?>
    </header>

    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slider2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slider3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
    <p>Un matí radiant va donar inici a una emocionant excursió a través de la frondosa serralada del Montnegre. Amb el seu verd exuberant i la fauna que habitava als seus boscos, la natura es va revelar com una amfitriona majestuosa. L'itinerari va començar al peu de la muntanya, on un riu serpentejava entre les pedres i les flors silvestres. El grup d'aventurers es va endinsar pel camí que s'enfila gradualment, oferint vistes panoràmiques espectaculars de la plana que s'estenia a sota.</p>
    <p>Al cap d'unes hores de caminada, van arribar a una clariana ombrívola, punt culminant de la seva excursió. Allà, van decidir fer un àpat improvisat amb els menjars portats en les seves motxilles. Mentre gaudien d'un pícnic sota la copa dels arbres, van escoltar els cants dels ocells que es barrejaven amb el soroll del riu proper. Després d'un tranquil descans, van reprendre la marxa, explorant senders estrets que conduïen a paratges ocults, com petits racons amb fonts d'aigua cristal·lina i altres sorpreses naturals.</p>
    <p>A mesura que el sol començava a ponir-se, van decidir iniciar el descens cap a la vall. Amb la llum del capvespre, la muntanya es va vestir amb tonalitats càlides i màgiques. Les ombres llargues dels arbres es projectaven sobre el terra, creant una atmosfera encantadora. A la vall, la nit va arribar i amb ella, la llum de les estrelles va il·luminar el camí del retorn. L'excursió va culminar amb un sentiment de connexió amb la natura i amb els companys d'aventura, convertint-se en una jornada inoblidable.</p>
    <a href="index.php?r=register"><button class="btn btn-primary">Apunta't a l'excursió</button></a>
</div>

<!-- Modal de Política de Cookies -->
<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cookieModalLabel">Política de Cookies</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Aquest lloc web utilitza cookies per millorar l'experiència de l'usuari. En navegar per aquest lloc, accepteu l'ús de cookies de conformitat amb la nostra <a href="politica_cookies.html">Política de Cookies</a>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Acceptar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="modalConsulta" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cookieModalLabel">Codi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="codi">Introdueix el codi:</label>
        <input type="text" id="codi">
        </div>
        <div class="modal-footer">
        <button id="validarCodi" type="button" class="btn btn-primary">Validar el codi</button>
      </div>
    </div>
  </div>
</div>


  
  





<script>
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
</script>
<footer>
<?php include 'footer.php' ?>
</footer>

</body>
</html>