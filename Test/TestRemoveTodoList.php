<?php 
require_once('../Model/TodoList.php');
require_once('../BusinessLogic/AddTodoList.php');
require_once('../BusinessLogic/ShowTodoList.php');
require_once('../BusinessLogic/RemoveTodoList.php');

addTodoList("Adhiya");
addTodoList("Nur");
addTodoList("Septio");
addTodoList("Surat");
addTodoList("Cz");

showTodoList();
removeTodoList(3);
showTodoList();
