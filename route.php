<?php

$request = $_SERVER['REQUEST_URI'];
require __DIR__. '/controller/LoginController.php';
require __DIR__. '/controller/BookController.php';
require __DIR__. '/controller/LoanController.php';

switch ($request) {
    case '/' :
        (new LoginController())->index();
        break;
    case '/home' :
        require __DIR__ . '/resources/views/admin/home.php';
        break;
    case '/books' :
        (new BookController())->index();
        break;
    case '/check_loan' :
        (new LoanController())->index();
        break;
    case '/create_user' :
        require __DIR__ . '/resources/views/admin/create_user.php';
        break;
    case '/create_book' :
        require __DIR__ . '/resources/views/admin/create_book.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}