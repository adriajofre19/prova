
<!DOCTYPE html>
<html>
<head>
    <title>HOTELS</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>
    <header>
        <?php include 'header.php' ?>
    </header>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/hotel1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/hotel2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/hotel3.jpg" class="d-block w-100" alt="...">
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

<div class="container container-m10">
    <a class="none" href="index.php?r=rooms">
  <div class="d-flex flex-wrap justify-content-center">
    <?php
    $contador = 0; // Inicializamos un contador
    foreach ($apps as $app):
      if ($contador < 8): // Verificamos si el contador es menor que 6
    ?>
    <div class="card card-margin" style="width: 18rem;">
      <img src="images/<?= $app['Titol']; ?>.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $app['Titol']; ?></h5>
        <h6 class="card-title">Preu per dia</h6>
        <p class="card-text"><?= $app['Preu_Baixa'] . " / " . $app['Preu_Alta']; ?></p>
        <h6 class="card-title">Adreça</h6>
        <p class="card-text"><?= $app['Adreca_Postal']; ?></p>
        <h6 class="card-title">Numero d'habitacions</h6>
        <p class="card-text"><?= $app['N_Habitacions']; ?></p>
      </div>
    </div>
    <?php
        $contador++; 
      endif;
    endforeach;
    ?>
  </div>
  </a>
</div>
  
  <script src="script/script.js"></script>
<footer>
<?php include 'footer.php' ?>
</footer>

</body>
</html>