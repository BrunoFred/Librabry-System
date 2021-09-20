<?php

require_once('Model.php');

class User extends Model
{
    private $model;
    private $table = 'users';

    public function __construct()
    {
        $this->model = Model::class;
        $this->setTable($this->table);
    }

    public function loans()
    {
        return $this->oneToMany('loans', 'user_id', 'id' );
    }
}
