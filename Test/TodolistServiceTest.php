<?php 

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;


function testShowTodolist(): void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[] = new Todolist("Belajar PHP");
    $todolistRepository->todolist[] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[] = new Todolist("Belajar PHP Database");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();

}

function testAddTodolist(): void {
    $todolistRepository = new TodolistRepositoryImpl();
    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->showTodolist();

}

function testRemoveTodolist(): void {
    $todolistRepository = new TodolistRepositoryImpl();
    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();
    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
    $todolistService->removeTodolist(5);
    $todolistService->showTodolist();
    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

}

testRemoveTodolist();
// testShowTodolist()
?>