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
          <form class="check" action="tarefa_controller.php?acao=done" method="POST">
            <input type="hidden" name="id" value="<?= $tarefa->id ?>">
            <input type="checkbox" name="done" onChange="this.form.submit()" <?php if ($tarefa->status) print 'disabled' ?>>
          </form>

          <p id="tarefa_<?= $tarefa->id ?>" class="<?php if ($tarefa->status) print 'tarefa_feita' ?>">
            <?php print $tarefa->tarefa;  if (!$tarefa->status) print '(pendente)'; ?>
          </p>

          <p class="data <?php if ($tarefa->status) print 'tarefa_feita' ?>"><?= $tarefa->data_target; ?></p>

          <div>
            <i class="fas fa-trash-alt fa-lg" onclick="tarefa_delete(<?= $tarefa->id ?>)"></i>

<?php if(!$tarefa->status) { ?>

            <i class="fas fa-edit fa-lg" onclick="tarefa_update(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')"></i>

<?php } ?>
          </div>
        </div>   
      
      <?php } ?>
      
    </div>
  </div>


  <script src="js/delete.js"></script>
  <script src="js/update.js"></script>
</body>
</html>