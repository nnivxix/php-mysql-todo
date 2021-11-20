<?php
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . '/../Config/Database.php';

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList() {
  $connection = \Config\Database::getConnection();
	$todolistRepository = new TodoListRepositoryImpl($connection);
  $todolistService = new TodoListServiceImpl($todolistRepository);
	// $todolistRepository->todoList[1] = new TodoList("Basic PHP");
	// $todolistRepository->todoList[2] = new TodoList("OOP PHP");
	// $todolistRepository->todoList[3] = new TodoList("PHP todolist");
  $todolistService->addTodoList("Basic PHP");
  $todolistService->addTodoList("OOP PHP");
  $todolistService->addTodoList("PHP todolist");
	$todolistService = new TodoListServiceImpl($todolistRepository);

	$todolistService->showTodoList();
}

function testAddTodolist(): void
{
	$connection = \Config\Database::getConnection();

	$todolistRepository = new TodoListRepositoryImpl($connection);
	$todolistService = new TodoListServiceImpl($todolistRepository);



	// $todolistService->showTodoList();
}

function testRemoveTodolist()
{
  $connection = \Config\Database::getConnection();
	$todolistRepository = new TodoListRepositoryImpl($connection);
	$todolistService = new TodoListServiceImpl($todolistRepository);

  $todolistService->removeTodoList(2);
  $todolistService->removeTodoList(5);

}

testShowTodoList();
