<?php 
require_once('../Model/TodoList.php');
require_once('../BusinessLogic/AddTodoList.php');

addTodoList("Adhiya");
addTodoList("Nur");
addTodoList("Septio");

var_dump($todoList);

