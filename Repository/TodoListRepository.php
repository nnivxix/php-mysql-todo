<?php 

namespace Repository {

	use Entity\todoList;

	interface TodoRepository
	{
		function save(todoList $todoList) :void;

		function remove(int $number) :bool;

		function findAll(): Array;

	}

	//implement the interface
	class todoListRepositoryImpl implements TodoRepository
	{
		public \PDO $connection;
		public array $todoList = array();

		public function __construct (\PDO $connection)
		{
			$this->connection = $connection ;
		}

		function save(todoList $todoList) :void
		{
			// $number = sizeof($this->todoList) + 1;
			// $this->todoList[$number] = $todoList;

			$sql = "INSERT INTO todolist(todo) VALUES (?)";
			$statement = $this->connection->prepare($sql);
			$statement->execute([$todoList->getTodo()]);

		}

		function remove(int $number) :bool
		{
      $sql = "SELECT id FROM todolist WHERE id = ?";
      $statement = $this->connection->prepare($sql);
      $statement->execute([$number]);

      if ($statement->fetch()) {
        $sql = "DELETE FROM todolist WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);
        return true;
      } else {
        // code...
        return false;
      }

		}

		function findAll(): Array
		{
			return $this->todoList;
		}
	}

}
