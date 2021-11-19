<?php
namespace View{
	 use Service\TodoListService;
	 use Helper\InputHelper;
	class TodoListView
	{
		private TodoListService $todolistService;

		public function __construct(TodoListService $todolistService)
		{
			$this->todolistService = $todolistService;
		}

		function showTodoList():void 
		{
			while (true) {
			$this->todolistService->showTodoList();

			echo "MENU". PHP_EOL;
			echo "1. Tambah Todo".PHP_EOL;
			echo "2. Hapus Todo".PHP_EOL;
			echo "x. Keluar" .PHP_EOL;

			$pilihan = InputHelper::input("pilih");

			if ($pilihan == "1") {
				$this->addTodoList();
			} else if ($pilihan == "2"){
				$this->removeTodoList();
			} else if ( $pilihan == "x"){
				break;
			}	 else {
				echo "Pilihan tidak diketahui".PHP_EOL;
			}
		}
		echo "Sampai Jumpa Kembali" .PHP_EOL;

		}
		function addTodoList():void 
		{
			echo "Menambah todo" . PHP_EOL;
			$todo = InputHelper::input("todo : (x : batal)");
			if ($todo == "x") {
				echo "Batal Menambah Todo" . PHP_EOL;
			} else {
				$this->todolistService->addTodoList($todo);
			}
		}
		function removeTodoList() :void 
		{
			echo "Menghapus Todo".PHP_EOL ;
			$pilihan = InputHelper::input("Nomor (x) untuk batal");
			if ($pilihan == x) {
				echo "Batal Menghapus Todo" .PHP_EOL;
			} else {
				$this->todolistService->removeTodoList($pilihan);
			}
		}
		
	}
}
