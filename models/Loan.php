<?php

require_once('Model.php');

class Loan extends Model
{
    private $model;
    private $table = 'loans';

    public function __construct()
    {
        $this->model = Model::class;
        $this->setTable($this->table);
    }

    public function users()
    {
        return $this->oneToMany('users', 'id', 'user_id' );
    }

    public function books()
    {
        return $this->oneToOne('books', 'id' ,'book_id');
    }
}
