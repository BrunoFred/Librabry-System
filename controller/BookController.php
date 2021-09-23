<?php

require '../library/models/Book.php';

class BookController
{
    public $book;
    public $id;
    protected $data;
    protected $data_update;
    public $book_cover_link = "/resources/public/imgs/";
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
            "book_cover"=>$_POST["book_cover"],
            "created_at"=>NULL,
            "updated_at"=>NULL,
            "deleted_at"=>NULL
        );
        $this->id = $_POST['id'];
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
        $id = $_POST['id'];
        $book = (new Book())->find($id);
        include './resources/views/admin/update_book.php';
    }

    public function update()
    {
        $this->book->update($this->id, $this->data);
    }

    public function delete()
    {
        $this->book->delete($this->id);
    }
}