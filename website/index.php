<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo Api - Mysql - Docker</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
    $result = file_get_contents("http://node-container:9001/produtos");
    $produtos = json_decode($result);
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $produto){ ?>
                <tr>
                    <td> <?= $produto->name ?> </td>
                    <td> <?= $produto->price ?> </td>
                </tr>    
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>