<?php
    require 'Models/User.php';
    if (isset($_POST['submit'])){
        $data = [
            'email' => $_POST["email"],
            'password' => $_POST["password"],
            'name' => $_POST["name"],
            'phone' => $_POST["phone"],
            'is_admin' => $_POST["is_admin"]
        ];
    }
    /*     $data = [
            'name' => 'Harry Potter',
            'description' => 'Hogwarts',
            'author' => 'Esqueci',
            'category' => 'Magic',
            'status' => 'available',
            'quantity' => '1'
        ]; */

    /*    $data = [
            'date_start' => '2021-08-01 00:00:01',
            'date_end' => '2021-12-30 00:00:01',
            'user_id' => '2',
            'book_id' => ''
        ]; */

        $user = new User();
        $user = $user->find(1);
        
        echo $user;