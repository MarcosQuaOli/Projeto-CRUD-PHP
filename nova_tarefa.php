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

  <?php if( isset($_GET['success']) && $_GET['success'] == 1 ) { ?>
    <div class="success">
      <h5>Tarefa inserida com sucesso!</h5>
    </div>
	<?php } ?>

  <div class="tarefas container">
    <div>
      <ul>
        <li><a href="index.php" class="first">Todas tarefas</a></li>
        <li><a href="#" class="last active">Nova Tarefa</a></li>
      </ul>
    </div>

    <div class="todas_tarefas">
      <h2>Nova Tarefa</h2>

        <form class="formulario" action="tarefa_controller.php?acao=create" method="post">
          <label for="tarefa">Tarefa: </label>
          <input id="tarefa" type="text" name="tarefa" required>

          <label for="data_target">Qual prazo para cumprir a tarefa</label>
          <input id="data_target" type="datetime-local" name="data_target" min="<?= date('Y-m-d H:i'); ?>" required>
          <button type="submit">Enviar</button>
        </form>
    
    </div>
  </div>
</body>
</html>