<?php

require_once 'tarefa.model.php';
require_once 'tarefa.service.php';
require_once 'conexao.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if($acao == 'create' ) {

  $tarefa = new Tarefa();
  $tarefa->__set('tarefa', $_POST['tarefa']);

  $conexao = new Conexao();

  $tarefaService = new TarefaService($conexao, $tarefa);
  $tarefaService->create();

  header('Location: nova_tarefa.php?success=1');

} else if($acao == 'read') {

  $tarefa = new Tarefa();
  $conexao = new Conexao();

  $tarefaService = new TarefaService($conexao, $tarefa);
  $tarefas = $tarefaService->read();

} else if($acao == 'update') {

  $tarefa = new Tarefa();
  $conexao = new Conexao();

  $tarefa->__set('id', $_POST['id'])
          ->__set('tarefa', $_POST['tarefa']);

  $tarefaService = new TarefaService($conexao, $tarefa);
  $tarefaService->update();

  header('location: index.php');	

} else if($acao == 'delete') {

  $tarefa = new Tarefa();
  $conexao = new Conexao();

  $tarefa->__set('id', $_GET['id']);

  $tarefaService = new TarefaService($conexao, $tarefa);
  $tarefaService->delete();

  header('location: index.php');	

}

?>