<?php
namespace Service {
	use Entity\TodoList;
	use Repository\TodoRepository;

	interface TodoListService
	{
		function showTodoList() :void;
		function addTodoList(string $todo) :void;
		function removeTodoList(int $number) :void;
	}

	class TodoListServiceImpl implements TodoListService 
	{
		private TodoRepository $todoRepository;

		public function __construct(TodoRepository $todoRepository)
		{
			$this->todoRepository = $todoRepository;
		}


		//ngambil dari business logic
		function showTodoList() :void
		{
			echo "Todo List". PHP_EOL;
			$todolist = $this->todoRepository->findAll();
			foreach ($todolist as $number => $value) {
				echo $value->getId(). ".". $value->getTodo() .PHP_EOL;
			}
		}
		function addTodoList(string $todo) :void
		{
			$todolist = new TodoList($todo);
			$this->todoRepository->save($todolist);
			echo "Sukses menambah TodoList" .PHP_EOL;

		}
		function removeTodoList(int $number) :void
		{
			if ($this->todoRepository->remove($number)) {
				echo "Sukses Menghapus Todo" . PHP_EOL;
		} else {
				echo "Gagal Menghapus Todo". PHP_EOL;
		}
	}
}
}
