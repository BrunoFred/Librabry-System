<?php

require_once('./models/Loan.php');

class LoanController
{
    public $loans;
    private $data;

    public function __construct()
    {
        $this->loans = new Loan();
        $dateStart = date("Y-m-d H:i:s", time() + 3600*(date("I")));
        $dateEnd = date("Y-m-d H:i:s", strtotime($dateStart. ' + 7 days'));
        $this->data = array(
            "date_start"=>$dateStart,
            "date_end"=>$dateEnd,
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
        $this->loans->create($this->data);
        $dataUpdate = array("status"=>'pending');
        (new Book())->update($_POST['id'], $dataUpdate);
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
        $this->loans->delete($_POST['id']);
        $dataUpdate = array("status"=>'available');
        (new Book())->update($_POST['book_id'], $dataUpdate);
    }
}