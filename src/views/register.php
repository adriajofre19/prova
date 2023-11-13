<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="shadow-form text-center form-dades">
          <a href="index.php?r=index"><img src="images/logo.png" alt="logo" style="width: 20%;"></a>
          <h1 class="account">Apunta't a l'excursió</h1>
          <form class="form-registrar" action="index.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="r" value="doregister">
              <div class="mb-3">
                  <label class="form-label h6">Nom</label>
                  <input name="nom" type="text" class="form-control" >
                  <div class="form-text"></div>
              </div>
              <div class="mb-3">
                  <label class="form-label h6">Cognoms</label>
                  <input name="cognoms" type="text" class="form-control" >
                  <div class="form-text"></div>
              </div>
              <div class="mb-3">
                  <label  class="form-label h6">Data de naixament</label>
                  <input name="data_naix" type="date" class="form-control" >
                  <div class="form-text"></div>
              </div>
              <div class="mb-3">
                  <label  class="form-label h6">Adreça</label>
                  <input name="adreca" type="text" class="form-control" placeholder="Carrer, número, ciutat i codi postal">
              </div>
              <div>
                <label  class="form-label h6">Resguard de pagament</label>
                <input type="file" name="resguard" id="resguard" accept="image/jpeg" class="form-control container-m10" accept=".pdf, .jpg, .jpeg, .png">
              </div>
              <button type="submit" class="btn btn-primary">Apuntar-se</button>
          </form>

      </div>
  </div>
</body>
</html>
