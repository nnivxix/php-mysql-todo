<?php
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList() {
	$todolistRepository = new TodoListRepositoryImpl();
	$todolistRepository->todoList[1] = new TodoList("Basic PHP");
	$todolistRepository->todoList[2] = new TodoList("OOP PHP");
	$todolistRepository->todoList[3] = new TodoList("PHP todolist");
	$todolistService = new TodoListServiceImpl($todolistRepository);

	$todolistService->showTodoList();
}

function testAddTodolist(): void
{
	$todolistRepository = new TodoListRepositoryImpl();
	$todolistService = new TodoListServiceImpl($todolistRepository);

	$todolistService->addTodoList("Basic PHP");
	$todolistService->addTodoList("OOP PHP");
	$todolistService->addTodoList("PHP todolist");

	$todolistService->showTodoList();
}

function testRemoveTodolist()
{
	$todolistRepository = new TodoListRepositoryImpl();
	$todolistService = new TodoListServiceImpl($todolistRepository);

	$todolistService->addTodoList("Basic PHP");
	$todolistService->addTodoList("OOP PHP");
	$todolistService->addTodoList("PHP todolist");

	$todolistService->showTodoList();
	$todolistService->removeTodoList(1);

	$todolistService->showTodoList();
	$todolistService->removeTodoList(10);
	$todolistService->showTodoList();
}

testRemoveTodolist();