<?php

$request = $_SERVER['REQUEST_URI'];
require __DIR__. '/controller/BookController.php';

switch ($request) {
    case '/' :
        (new BookController())->index();
        break;
    case '/home.php' :
        require __DIR__ . '/resources/views/admin/home.php';
        break;
    case '/books' :
        (new BookController())->index();
        break;
    case '/check_loan.php' :
        require __DIR__ . '/resources/views/admin/check_loan.php';
        break;
    case '/create_user.php' :
        require __DIR__ . '/resources/views/admin/create_user.php';
        break;
    case '/create_book.php' :
        require __DIR__ . '/resources/views/admin/create_book.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}