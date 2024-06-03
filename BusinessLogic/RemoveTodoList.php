<?php
/**
 * Menghapus Todo Dilist
 */
function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) { 
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList) - 1]);

    return true;
}
