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
            <a href="../views/index.php">Home</a>
            <a href="../books.php">Books</a>
            <a href="#">Pendant</a>
            <a href="#">Historic</a>
            <a href="#">Check Loans</a>
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
    <div class="books">
        <input type="image" class="folder" src="../../resources/public/imgs/ohobbit.jpg" onclick="makeLoanContent()">
        <ul class="book-atribute">
            <li class="atribute-style">Book Name</li>
            <p class="data-style">O Hobbit</p>
            <li class="atribute-style">Description</li>
            <p class="data-style">Destroy the one ring</p>
            <li class="atribute-style">Author</li>
            <p class="data-style">Tolkien</p>
            <li class="atribute-style">Category</li>
            <p class="data-style">Adventure</p>
        </ul>
    </div>
    <section>
        <div id="make-loan" class="book-loan">
            <div class="make-loan-content">
                <p>test</p>
            </div>
        </div>
    </section>
    <?php
        include("../../resources/views/layout/footer.php")
    ?>
</body>
</html>