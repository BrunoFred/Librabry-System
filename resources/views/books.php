<?php
    include("./layout/head.php")
?>
<link rel="icon" href="../../resources/public/imgs/Robinweatherall-Library-Books.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="../../resources/public/css/style.css">
<title>Books</title>
</head>

<body>
    <script src="../../resources/public/js/register.js"></script>
    <section class=navbar>
        <nav class="nav">
            <div class="logo">
                <input type="image" class="book-logo" src="../../resources/public/imgs/navlogo.png" onclick="myFunction()" />
            </div>
        </nav>
        <div id="menu" class="menu-hover">
            <a href="/home">Home</a>
            <a href="/books">Books</a>
            <a href="/create_user">Create User</a>
            <a href="/create_book">Register Book</a>
            <a href="/">Logout</a>
        </div>
    </section>
    <div class="book-container">
        <h3>List of Books</h3>
        <div class="book-search-box">
            <input type="search" placeholder="Search..">
        </div>
    </div>
    <?php foreach ($books as $book){ ?>
        <div class="books">
            <img class="folder" src=<?= $book['book_cover']?>>
            <ul>
                <h1>Nome: <?= $book['name'] ?></h1>
                <h1>Autor: <?= $book['author'] ?></h1>
                <h1>Categoria: <?= $book['category'] ?></h1>
                <h1>Quantidade: <?= $book['quantity'] ?></h1>
                <h1>Status: <?= $book['status'] ?></h1>
            </ul>
            <div class="book-description">
                <h4>Description</h4>
                <h1><?= $book['description'] ?></h1>
            </div>
        </div>
    <?php } ?>
    <section class="footer">
    <div class="about-us">
        <p>About us: </p><br>
        <h1>Our goal is to share knowledge and passion for books throughout the world</h1>
    </div>
    <div class="location">
        <p>Visit us!</p><br>
        <h1>Street XV de Novembro, Guarapuava - PR, Brazil</h1>
    </div>
</section>
</body>
</html>