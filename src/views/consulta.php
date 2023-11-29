<!DOCTYPE html>
<html lang="ca">
<html>
<head>
    <title>HOTELS</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>



<body>
    <header>
        <?php include 'header.php' ?>
    </header>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Data de Naixament</th>
                <th>Adreça</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                        <td><?php echo $user['nom'] ?></td>
                        <td><?php echo $user['cognoms'] ?></td>
                        <td><?php echo $user['data_naix'] ?></td>
                        <td><?php echo $user['adreca'] ?></td>
                        
            </tr>
            <?php endforeach; ?> 
        </tbody>
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Data de Naixament</th>
                <th>Adreça</th>
            </tr>
        </tfoot>
    </table>


  
  <script src="script/script.js"></script>
<footer>
<?php include 'footer.php' ?>
</footer>

</body>
</html>