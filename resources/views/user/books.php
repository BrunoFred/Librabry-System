<?php
include "./resources/views/layout/head.php";
?>
<title>Books</title>
</head>
<body>
<script src="../../../resources/public/js/register.js"></script>
<?php
include "./resources/views/layout/nav.php";
?>
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
            <h1>Status: <?= $book['status'] ?></h1>
        </ul>
        <div class="book-description">
            <h4>Description</h4>
            <h1><?= $book['description'] ?></h1>

            <?php if($book['status'] == 'available'){ ?>
                <form method="POST" action="/loans/store">
                    <input type="hidden" name="id" value="<?= $book['id'] ?>">
                    <div class="book-button-outside">
                        <button type="submit" class="book-button">Get Book</button>
                    </div>
                </form>
            <?php } else  {?>
                <h1>Livro não disponível para empréstimo</h1>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<?php
include "./resources/views/layout/footer.php";
?>
</body>
</html>