<?php 

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;


class TodolistView {

    private TodoListService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
        $this->todolistService = $todolistService;
    }

    function showTodolist(): void {
        while (true) {
            $this->todolistService->showTodolist();

            echo "MENU" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;

            $pilihan = InputHelper::input("Pilih");

            if ($pilihan == "1") {
                $this->addTodolist();
            } else if ($pilihan == "2") {
                $this->removeTodolist();
            } else if ($pilihan == "x") {
                break;
            } else {
                echo "Pilihan tidak dimengerti" . PHP_EOL;
            }
        }
        echo "terimakasih, sampai jumpa lagi" . PHP_EOL;
    }
    function addTodolist(): void {
        echo "MENAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x unutk batal)");

        if ($todo =="x") {
            echo "Batal mnambah todo" . PHP_EOL;
        } else {
            $this->todolistService->addTodolist($todo);
        }
    }
    function removeTodolist(): void {
        echo "MENGHAPUS TODO" . PHP_EOL;

        $pilihan = InputHelper::input("Nomor (x untuk membatalkan)");

        if ($pilihan == "x") {
            echo "Batal menghapus todo" . PHP_EOL;
        } else {
            $this->todolistService->removeTodolist($pilihan);
        }
    }
}

}

?>