<?php
require_once 'Matriz_Estados.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <title>Detalhes</title>
</head>

<body>
   <div class="container container border m-4 p-2 w-75 mx-auto">


      <?php
      $regiao = $_POST;
      ?>
      <?php if (in_array("Centro-Oeste", $regiao)) {
         $estados = $centro_oeste;
      }; ?>
      <?php if (in_array("Nordeste", $regiao)) {
         $estados = $nordeste;
      }; ?>
      <?php if (in_array("Norte", $regiao)) {
         $estados = $norte;
      }; ?>
      <?php if (in_array("Sudeste", $regiao)) {
         $estados = $sudeste;
      }; ?>
      <?php if (in_array("Sul", $regiao)) {
         $estados = $sul;
      }; ?>

      <?php echo "<h1 class='p-2 bg-info text-white'>Estados da região {$estados[0][3]}</h1>";   ?>

      <?php foreach ($estados as $estado) : ?>

         <div class="row p-2">

            <div class="col my-auto">
               <h6>Estado: <span class="text-info"><?= $estado[1] ?></span></h6>
               <h6>Sigla: <span class="text-info"><?= $estado[0] ?></span></h6>
               <h6>Capital: <span class="text-info"><?= $estado[2] ?></span></h6>
               <h6>Região: <span class="text-info"><?= $estado[3] ?></span></h6>

               <!--<table class= "table">
                 
                  <tr>
                     <td>Estado:</td>
                     <td><?= $estado[1] ?></td>
                  </tr>
                  <tr>
                     <td>Sigla:</td>
                     <td><?= $estado[0] ?></td>
                  </tr>
                  <tr>
                     <td>Capital:</td>
                     <td><?= $estado[2] ?></td>
                  </tr>
                  <tr>
                     <td>Região:</td>
                     <td><?= $estado[3] ?></td>
                  </tr>
               </table>
			   -->

            </div>

            <div class="col">
               <img class="w-50 border d-block mx-auto" src="Imagens/Imagens/<?= $estado[4] ?>" alt="Badeira de <?= $estado[1] ?>">

            </div>


         </div>

      <?php endforeach; ?>
      <a class="btn bg-info text-white mb-3" href="Index.php">Voltar</a>


   </div>
   <?php //var_dump($estados);
   ?>
</body>

</html>