<?php 
require_once __DIR__.('/../Model/TodoList.php');
require_once __DIR__.('/../Helper/Input.php');
require_once __DIR__.('/../BusinessLogic/AddTodoList.php');
require_once __DIR__.('/../View/ViewShowTodoList.php');
function viewAddTodoList(){

    echo "Menambah Todo:" . PHP_EOL;
    
    $todo = input("Todo (x untuk mau batal)");

    if($todo == "x"){
        echo "batal menambah data". PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
