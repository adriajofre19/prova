<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="shadow-form text-center form-dades">
          <a href="index.php?r=index"><img src="images/logo.png" alt="" style="width: 20%;"></a>
          <h1 class="account">Crea un compte</h1>
          <form class="form-registrar" action="index.php" method="post">
              <input type="hidden" name="r" value="doregister">
              <div class="mb-3">
                  <input value="usuari" name="rol" type="hidden" class="form-control" id="input" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                  <label for="exampleInputName1" class="form-label h6">Nom</label>
                  <input name="nom" type="text" class="form-control" id="input" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                  <label for="exampleInputLastName1" class="form-label h6">Cognoms</label>
                  <input name="cognoms" type="text" class="form-control" id="input" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label h6">Email</label>
                  <input name="email" type="email" class="form-control" id="input" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label h6">Telèfon</label>
                  <input name="telefon" type="tel" class="form-control" id="input">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label h6>Nº de Targeta</label>
                  <input name="card" type="text" class="form-control" id="input">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label h6">Usuari</label>
                  <input name="user" type="text" class="form-control" id="input">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label h6">Contrasenya</label>
                  <input name="pass" type="text" class="form-control" id="input">
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
          <a h6ef="index.ph6?r=login" class="return">Ja tens usuari, inicia sessió aqui</a>
      </div>
  </div>
</body>
</html>
