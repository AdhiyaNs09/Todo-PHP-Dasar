<?php 
require_once __DIR__. ('/../Helper/Input.php');
require_once __DIR__. ('/../BusinessLogic/RemoveTodoList.php');

function viewRemoveTodoList(){

    echo "Mengapus todo list";
    $pilihan = input("nomor (x untuk menghapus)");
    

    if($pilihan == "x"){
        echo "batal menambah pilihan" . PHP_EOL;
    } else {
        $success = removeTodoList( $pilihan );
        if($success){
            echo "berhasil menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "gagal menghapus todo $pilihan" . PHP_EOL;
        }
    }
    
    
}

