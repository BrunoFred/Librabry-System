<?php

require '../library/models/Book.php';

class BookController
{
    public $book;
    public $id;
    public $data;

    public function __construct()
    {
        $this->book = new Book();
    }

    public function index()
    {
        $books = $this->book->all();
        include './resources/views/books.php';
    }

    public function show()
    {
        $show = $this->book->find($this->id);
    }

    public function create()
    {
        // retorna a view para criar um item da tabela (eg: create_book.php or create_user.php)
    }

    public function store()
    {
        $store = $this->book->create($this->data);
    }

    public function edit()
    {
        // retorna a view para editar um item da tabela
    }

    public function update()
    {
        $update = $this->book->update($this->id, $this->data);
    }

    public function delete()
    {
        $delete = $this->book->delete($this->id);
    }
}