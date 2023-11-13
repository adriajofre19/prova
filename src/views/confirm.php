<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Confirmation Page</title>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="shadow-form text-center form-login">
    
    <h5>El registre s'ha completat correctament!</h5>
    <h6>El teu nom:</h6>
    <p><?php echo $taskModel['nom']; ?></p>
    <h6>Els teus cognoms:</h6>
    <p><?php echo $taskModel['cognoms']; ?></p>
    <h6>La teva data de naixament:</h6>
    <p><?php echo $taskModel['data_naix']; ?></p>
    <h6>La teva adreça:</h6>
    <p><?php echo $taskModel['adreca']; ?></p>   

    <h6>El teu codi de registre es: <?php echo $taskModel['id']; ?></h6>

    <a href="index.php?r=index" class="btn btn-primary">Tornar a la pàgina principal</a>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rDuh4e8lT6rEmyI1zNSIq8ZjdsrHL6K7q2JLoHtZu0nnDr8F2UkOH1Ico3JetKZ6" crossorigin="anonymous"></script>
</body>
</html>
