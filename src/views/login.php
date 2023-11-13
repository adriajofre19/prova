<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="shadow-form text-center form-login">
    <a href="index.php?r=index"><img href="index.php?r=index" src="images/logo.png" alt="logo" style="width: 20%;"></a>
  <h1 class="account">Inici Sessió</h1>
  <form class="form-registrar" action="index.php" method="post">
    <input type="hidden" name="r" value="dologin">
    <div class="mb-3">
      <label  class="form-label">Contrasenya</label>
      <input name="pass" type="password" class="form-control">
      <div class="form-text"></div>
    </div>
    <button type="submit" class="btn btn-primary w-100 button_2">Enviar</button>
  </form>
  <a href="index.php?r=register" class="return ">No tens usuari, registra't aqui</a>
</div>
</div>

</body>
</html>

