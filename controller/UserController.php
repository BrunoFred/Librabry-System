<?php
require_once('./models/User.php');

class UserController
{
    public $users, $user;
    public $id, $email, $password, $login;
    protected $data;
    protected $data_update, $self_update;
    protected $data_register;

    public function __construct()
    {
        $this->users = new User();
        $this->data = array(
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
            'phone'=>$_POST['phone'],
            'is_admin'=>(!!$_POST['type_user']),
            "created_at"=>NULL,
            "updated_at"=>NULL,
            "deleted_at"=>NULL
        );

        $this->data_update = array(
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
            'name'=>$_POST['name'],
            'phone'=>$_POST['phone'],
            'is_admin'=>$_POST['is_admin'],
            "created_at"=>NULL,
            "updated_at"=>NULL,
            "deleted_at"=>NULL
        );

        $this->self_update = array(
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
            'name'=>$_POST['name'],
            'phone'=>$_POST['phone'],
            'is_admin'=>false,
            "created_at"=>NULL,
            "updated_at"=>NULL,
            "deleted_at"=>NULL
        );

        $this->data_register = array(
            'email'=>$_POST['email'],
            'password'=>$_POST['password'],
            'name'=>$_POST['name'],
            'phone'=>$_POST['phone'],
            'is_admin'=>false,
            "created_at"=>NULL,
            "updated_at"=>NULL,
            "deleted_at"=>NULL
        );

        $this->id = $_POST['id'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
    }

    public function index()
    {
        $users = $this->users->all();
        include './resources/views/admin/check_user.php';
    }

    public function validation()
    {
        $login = $this->users->authentication($this->email, $this->password);
        if ($login == "t")
            header("Location: /admin/home");
            else if ($login == "f")
                header("Location: /user/home");
                else
                    header("Location: /");
    }

    public function show()
    {
        $this->users->find($this->id);
    }

    public function create()
    {
        include './resources/views/admin/create_user.php';
    }

    public function store()
    {
        $this->users->create($this->data);
    }

    public function registerStore()
    {
        $this->users->create($this->data_register);
    }

    public function edit()
    {
        $id = $_POST['id'];
        $user = (new User())->find($id);
        include './resources/views/admin/update_user.php';
    }

    public function selfEdit()
    {
        include './resources/views/user/update_user.php';
    }

    public function update()
    {
        $this->users->update($this->id, $this->data_update);
    }

    public function selfUpdate()
    {
        $this->users->update($_SESSION['id'], $this->self_update);
    }

    public function delete()
    {
        $this->users->delete($this->id);
    }
}