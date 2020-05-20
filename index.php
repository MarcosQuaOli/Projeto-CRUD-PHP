<?php
  $acao = 'read';

  require_once 'tarefa_controller.php';

?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APP Tarefas</title>
  
  <link rel="stylesheet" href="css/estilo.css">  

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
  <nav>
    <div  class="container">
      <h1><a href="#">App Lista de Tarefas</a></h1>
    </div>
  </nav>

  <div class="tarefas container">
    <div>
      <ul>
        <li><a href="#" class="first active">Todas tarefas</a></li>
        <li><a href="nova_tarefa.php" class="last">Nova Tarefa</a></li>
      </ul>
    </div>

    <div class="todas_tarefas">
      <h2>Todas Tarefas</h2>

      <?php foreach($tarefas as $tarefa) { ?>

        <div class="tarefas_itens">
          <p id="tarefa_<?= $tarefa->id ?>"><?= $tarefa->tarefa; ?></p>

          <div>
            <i class="fas fa-trash-alt fa-lg" onclick="tarefa_delete(<?= $tarefa->id ?>)"></i>
            <i class="fas fa-edit fa-lg" onclick="tarefa_update(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')"></i>
          </div>
        </div>   
      
      <?php } ?>
      
    </div>
  </div>


  <script src="js/delete.js"></script>
  <script src="js/update.js"></script>
</body>
</html>