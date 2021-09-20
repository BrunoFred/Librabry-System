<?php

require './models/Loan.php';

class LoanController
{
    public $loan;

    public function __construct()
    {
        $this->loan = new Loan();
    }

    public function index()
    {
        $loans = $this->loan->all();
        include './resources/views/admin/check_loan.php';
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