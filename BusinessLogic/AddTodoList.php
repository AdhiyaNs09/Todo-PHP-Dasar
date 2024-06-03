<?php
/**
 * Menambahan Todo DiList
 */
function addTodoList(string $todo){
    global $todoList;

    $number = sizeof($todoList) + 1; //Cek data todo ada berapa, menggunakan sizeOf()
    $todoList[$number] = $todo;
}