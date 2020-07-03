<?php

class TarefaService {

  private $conexao;
  private $tarefa;
  private $data_target;

  function __construct(Conexao $conexao, Tarefa $tarefa)
  {
    $this->conexao = $conexao->conectar();
		$this->tarefa = $tarefa;
  }

  //create
  public function create() { 
		$query = 'insert into tb_tarefas(tarefa, data_target)values(:tarefa, :data_target)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
		$stmt->bindValue(':data_target', $this->tarefa->__get('data_target'));
		$stmt->execute();
  }
  
  //read
	public function read() { 
		$query = 'select * from tb_tarefas';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

  //update
	public function update() { 
		$query = "update tb_tarefas set tarefa = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->tarefa->__get('tarefa'));
		$stmt->bindValue(2, $this->tarefa->__get('id'));
		return $stmt->execute(); 
	}

  //update
	public function updateStatus() { 
		$query = "update tb_tarefas set status = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, true);
		$stmt->bindValue(2, $this->tarefa->__get('id'));
		return $stmt->execute(); 
	}

  //delete
	public function delete() { 
		$query = 'delete from tb_tarefas where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->tarefa->__get('id'));
		$stmt->execute();
	}

}

?>