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
            <a href="../views/admin/home.php">Home</a>
            <a href="books.php">Books</a>
            <a href="../../resources/views/admin/create_user.php">Create User</a>
            <a href="../../resources/views/admin/create_book.php"">Register Book</a>
            <a href=" ../../views/index.php">Logout</a>
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
            <input type="image" class="folder" src=<?= $book['book_cover']?> onclick="makeLoanContent()">
            <ul>
                <h1>Nome: <?= $book['name'] ?></h1>
                <h1>Autor: <?= $book['author'] ?></h1>
                <h1>Categoria: <?= $book['category'] ?></h1>
                <h1>Quantidade: <?= $book['quantity'] ?></h1>
                <h1>Status: <?= $book['status'] ?></h1>
            </ul>
        </div>
        <div id="make-loan" class="book-loan">
            <div class="make-loan-content">
                <span class="close" onclick="makeLoanContent()">&times;</span>
                <h4>Description</h4>
                <h1><?= $book['description'] ?></h1>
                <button type="submit">Get Book</button><br>
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