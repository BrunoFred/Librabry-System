<?php

require 'Models/Model.php';

class Book extends Model
{
    private $model;
    private $table = 'books';

    public function __construct()
    {
        $this->model = Model::class;
        $this->setTable($this->table);
    }

    public function loans()
    {
        return $this->oneToOne('loans', 'book_id', 'id');
    }
}
