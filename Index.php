<?php
require 'Matriz_Estados.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Estados</title>
</head>

<body>
    <div class="container border m-4 p-2 w-75 mx-auto">
        <h1 class='p-2 bg-info text-white'>Estados Brasileiros</h1>
        <form action="Detalhes.php" method="post">
		<label for="selRegiao">Selecione uma região:</label>
            <select name="regioes" id="" class="required">
                <option value=""></option>
                <option value="Centro-Oeste">Centro-Oeste</option>
                <option value="Nordeste">Nordeste</option>
                <option value="Norte">Norte</option>
                <option value="Sudeste">Sudeste</option>
                <option value="Sul">Sul</option>
            </select>
			<div>
			<a class="btn bg-info text-white mt-3" href="Detalhes.php">Detalhes</a>
			<div>
        </form>
		
    </div>
</body>

</html>