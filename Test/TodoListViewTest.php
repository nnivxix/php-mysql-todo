<?php 
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";
require_once __DIR__ . '/../Helper/Input.php';

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
use View\TodoListView;

function showTodoListView() :void 
{
	$todolistRepository = new TodoListRepositoryImpl();
	$todolistService = new TodoListServiceImpl($todolistRepository);
	$todolistView = new TodoListView($todolistService);

	$todolistService->addTodoList("Basic PHP");
	$todolistService->addTodoList("OOP PHP");
	$todolistService->addTodoList("PHP Databasae");

	$todolistView->showTodoList();
}

function addTodoListView() :void 
{
	$todolistRepository = new TodoListRepositoryImpl();
	$todolistService = new TodoListServiceImpl($todolistRepository);
	$todolistView = new TodoListView($todolistService);

	$todolistService->addTodoList("Basic PHP");
	$todolistService->addTodoList("OOP PHP");
	$todolistService->addTodoList("PHP Databasae");

	$todolistView->showTodoList();
}

function removeTodoListView() :void 
{
	$todolistRepository = new TodoListRepositoryImpl();
	$todolistService = new TodoListServiceImpl($todolistRepository);
	$todolistView = new TodoListView($todolistService);

	$todolistService->addTodoList("Basic PHP");
	$todolistService->addTodoList("OOP PHP");
	$todolistService->addTodoList("PHP Databasae");

	$todolistView->showTodoList();
}

removeTodoListView();