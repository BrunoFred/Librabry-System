<?php

require '../library/models/Book.php';

class BookController
{
    public $book;
    public $id;
    protected $data;
    public function __construct()
    {
        $this->book = new Book();
        $this->data = array(
            "name"=>$_POST["name"],
            "description"=>$_POST["description"],
            "author"=>$_POST["author"],
            "category"=>$_POST["category"],
            "status"=>"available",
            "quantity"=>$_POST["quantity"],
            "book_cover"=>"/resources/public/imgs/prisoner_of_azkaban.jpg",
            "created_at"=>NULL,
            "updated_at"=>NULL,
            "deleted_at"=>NULL
        );
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
        include './resources/views/admin/create_book.php';
    }

    public function store()
    {
        $this->book->create($this->data);
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