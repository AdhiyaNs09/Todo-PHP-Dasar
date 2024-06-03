<?php
require_once('../Model/TodoList.php');
require_once('../View/ViewAddTodoList.php');
require_once('../View/ViewShowTodoList.php');
require_once('../BusinessLogic/AddTodoList.php');

addTodoList('Adhiya');
addTodoList('Nur');
addTodoList('Septio');


viewAddTodoList();
showTodoList();