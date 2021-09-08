<?php
    require 'Models/Book.php';

   /*   $data = [
         'email' => '1234@email.com',
         'password' => '1234',
         'name' => 'lets',
         'phone' => '(42) 99999-9999',
         'is_admin' => false
     ]; */
    
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

    $book = new Book();
    echo $book->loans();