<?php

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

require_once __DIR__ . "/Entity/todolist.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";


echo "Aplikasi Todolist" . PHP_EOL;

$todoListRepository = new TodolistRepositoryImpl();
$todoListService = new TodolistServiceImpl($todoListRepository);
$todoListView = new TodolistView($todoListService);

$todoListView->showTodolist()


?>