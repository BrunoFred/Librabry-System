<?php

require_once('./models/Loan.php');

class LoanController
{
    public $loans;
    private $data;

    public function __construct()
    {
        $this->loans = new Loan();
        $this->data = array(
            "date_start"=>date_default_timezone_set('America/Sao_Paulo'),
            "date_end"=>date_default_timezone_set('America/Sao_Paulo'),
            "user_id"=>$_SESSION['id'],
            "book_id"=>$_POST['id']
        );
    }

    public function index()
    {
        $loans = $this->loans->all();
        include './resources/views/admin/check_loan.php';
    }

    public function showByUser()
    {
        $loans = $this->loans->all();
        include './resources/views/user/user_loans.php';
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
        $loans = $this->loans->create($this->data);
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