<?php
require_once('./models/User.php');

class UserController
{
    public $users;

    public function __construct()
    {
        $this->users = new User();
    }

    public function index()
    {
        $users = $this->users->all();
        include './resources/views/admin/check_user.php';
    }

    public function show()
    {
        /* $show = $this->loan->find($this->id); */
    }

    public function create()
    {
        // retorna a view para criar um item da tabela (eg: create_book.php or create_user.php)
    }

    public function store()
    {

    }

    public function edit()
    {
        // retorna a view para editar um item da tabela
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}