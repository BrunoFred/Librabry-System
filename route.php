<?php

$request = $_SERVER['REQUEST_URI'];
require __DIR__. '/controller/LoginController.php';
require __DIR__. '/controller/BookController.php';
require __DIR__. '/controller/LoanController.php';
require __DIR__. '/controller/UserController.php';

switch ($request) {
    case '/' :
        (new LoginController())->index();
        break;
    case '/logout' :
        require __DIR__ .'/resources/views/logout.php';
        break;
    case '/admin/home' :
        require __DIR__ . '/resources/views/admin/home.php';
        break;
    case '/user/home' :
        require __DIR__ . '/resources/views/user/home.php';
        break;
    case '/login' :
        (new UserController())->validation();
        break;
    case '/books' :
        (new BookController())->index();
        break;
    case '/loans' :
        (new LoanController())->index();
        break;
    case  '/users' :
        (new UserController())->index();
        break;
    case '/users/loans' :
        (new LoanController())->showByUser();
        break;
    case '/users/create' :
        (new UserController())->create();
        break;
    case '/users/store' :
        (new UserController())->store();
        header("Location: /home");
        break;
    case '/register' :
        (new UserController())->registerStore();
        header("Location: /index");
        break;
    case '/users/edit' :
        (new UserController())->edit();
        break;
    case '/users/selfEdit' :
        (new UserController())->selfEdit();
        break;
    case '/users/update' :
        (new UserController())->update();
        header("Location: /users");
        break;
    case '/users/selfUpdate' :
        (new UserController())->selfUpdate();
        header("Location: /logout");
        break;
    case '/users/delete' :
        (new UserController())->delete();
        header("Location: /users");
        break;
    case '/books/create' :
        (new BookController())->create();
        break;
    case '/books/loan' :
        (new BookController())->indexForUsers();
        break;
    case '/books/store' :
        (new BookController())->store();
        header("Location: /books/create");
        break;
    case '/books/edit' :
        (new BookController())->edit();
        break;
    case '/books/update' :
        (new BookController())->update();
        header("Location: /books");
        break;
    case '/books/delete' :
        (new BookController())->delete();
        header("Location: /books");
        break;
    case '/loans/store' :
        (new LoanController())->store();
        header("Location: /books/loan");
        break;
    case '/loans/devolve' :
        (new LoanController())->delete();
        header("Location: /users/loans");
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}